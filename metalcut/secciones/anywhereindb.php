<?php include("head.php"); ?>
<?php include("header-int.php"); ?>
<?php
/***********************************************************************
* @name  AnyWhereInDB
* @author Nafis Ahmad 
* @abstract This project is to find out a part of string from anywhere in database
* @version 0.22  
* @package anywhereindb
*
*
*
*
*************************************************************************/

//include("include/config.php");

/*if(empty($_SESSION['server'])&& 
   empty($_SESSION['dbuser'])&& 
   empty($_SESSION['pass'])&& 
   empty($_SESSION['dbname']) 
   )
// @abstract this is to check the  session is not avilaable 
{
	if(empty($_POST['server']) && empty($_POST['dbuser']) && empty($_POST['pass']) && empty($_POST['dbname']))
	// @abstract this is to check the  session information else it will show the login prompt
	{
		$_SESSION['server'] = 'localhost';
		$_SESSION['dbuser']= 'root';
		$_SESSION['pass']= 'camachitos';
		$_SESSION['dbname']= 'img_metalcut';
		header("Refresh:0;url=http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
	}
	else
	// @abstract  it will show the login prompt
	{
			//  @link  html_head will printed here!! 
			html_header(); 
			
			if(!empty($_REQUEST['error_message']))
			// @uses Error in DB connection  
			{
				echo '<span style="color:red;">'.$_REQUEST['error_message'].'</span>';
			} 
			?>
			
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">  
			</form>
					   
<?php
	}// @endof Else  !empty($_POST )

} // @endof Else  !!empty($_SESSION )
else
// @abstract  the session has the login information 
{*/
	if(!empty($_REQUEST['logout']))
	// @name  Logout module   
	// @abstract    distroy session and page reload. 
	{
		session_destroy();
		header("Refresh:0;url=http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
	}
	
	$server = DB_SERVER;//$_SESSION['server'];
	$dbuser = DB_USERNAME;//$_SESSION['dbuser'];
	$dbpass = DB_PASSWORD;//$_SESSION['pass'];
	$dbname = DB_DATABASE;//$_SESSION['dbname'];
	
	// @name Databse Connection 
	// @abstract  connected with database. and without showing any error ... 
	$link = @mysql_connect($server, $dbuser, $dbpass);
	if (!$link) {  session_destroy(); header("Refresh:0;url=http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?error_message=Username OR password Missmatch');}
	if(!@mysql_select_db($dbname, $link)){ session_destroy(); header("Refresh:0;url=http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?error_message=Database Not found');};
	///@endof Databse Connection  
	
	html_header();	 //  @link  html_head will printed here!! 
	
	// @abstract  Show the html search Form !!
	?>
		
	<!--<div style="position:absolute; right:100px; width:100px;"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?logout=out">Disconnect/Change Database</a></div>-->
	<div>
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">  
			<?php $_POST['search_text']=$_REQUEST['texto']; ?>
                        <!--<input type="text" name="search_text" <?php if(!empty($_POST['search_text'])) echo 'value="'.$_POST['search_text'].'"';  ?> />
			<input type="submit" value="Search" />-->
		</form>
	</div>
         <section>
            <div class="con-section">
              <div class="mg-section clearfix">
                <h1>Resultados de su busqueda</h1>
                <div class="sep-line"></div>
                <div class="con-resultados">
                    <div class="scroll-wrap list-results">
                        <h1><?php echo $_POST['search_text'] ?></h1>
                         <ul>
                             
	<?php 
	//endof html search form

	
	if(!empty($_POST['search_text']))
	 // @abstract for each Search Text we seach in the database
	{	

		$search_text = mysql_real_escape_string($_POST['search_text']);
		$result_in_tables = 0;
		
		/*echo '<a href="javascript:hide_all()">Collapse All Result</a> 
			 <a href="javascript:show_all()">Expand All Result</a>';
		echo "<h4>Results for: <i>". $search_text.'</i></h4>';*/
		
		// @abstract  table count in the database
		$sql= 'show tables';
		$res = mysql_query($sql);
		//@abstract  get all table information in row tables
		$tables = fetch_array($res);
                
             
                //$tables = array(array('album'));
		//endof table count
		
		
		
	   for($i=0;$i<sizeof($tables);$i++)
	   // @abstract  for each table of the db seaching text
	   {
			//@abstract querry bliding of each table
			$sql = 'select count(*) from '.$tables[$i]['Tables_in_'.$dbname];
			$res = mysql_query($sql);
			
			if(mysql_num_rows($res)>0)
			//@abstract Buliding search Querry, search
			{
				//@abstract taking the table data type information
				$sql = 'desc '.$tables[$i]['Tables_in_'.$dbname]; 
				$res = mysql_query($sql);
				$collum = fetch_array($res);
				
				$search_sql = 'select * from '.$tables[$i]['Tables_in_'.$dbname].' where ';
				$no_varchar_field = 0;
				
				for($j=0;$j<sizeof($collum);$j++)
				// @abstract only finding each row information
				{
						## we are searching all the fields in this table
						
						//if(substr($collum[$j]['Type'],0,7)=='varchar'|| substr($collum[$j]['Type'],0,7)=='text')
						// @abstractonly type selection part of query buliding
						// @todo seach all field in the data base put a 1 in if(1)
						// @example if(1) 
						//{
							//echo $collum[$j]->Field .'<br />';
							if($no_varchar_field!=0){$search_sql .= ' or ' ;}
							$search_sql .= '`'.$collum[$j]['Field'] .'` like \'%'.$search_text.'%\' ';			
							$no_varchar_field++;
						//} // endof type selection part of query bulidingtype selection part
						
				}//@endof for |buliding search query
				
				
				if($no_varchar_field>0)
				// @abstract only main searching part showing the data
				{
					$res = mysql_query($search_sql);
					$search_result = fetch_array($res);
					if(sizeof($search_result))
					// @abstract found search data showing it! 
					{
						$result_in_tables++;
						$tabla=$tables[$i]['Tables_in_'.$dbname];
						if (!empty($tabla) and $tabla!='compras' and $tabla!='banner' and $tabla!='destacados' and stristr($tabla, 'img') == FALSE){
							echo	'<li>
									 <h1>'.$_POST['search_text'].'</h1>
									 <p>'.table_arrange($search_result,$tabla).'</p>
									 <!--<div class="link_wrapper"><a href="javascript:toggle(\''.$tables[$i]['Tables_in_'.$dbname].'_sql'.'\')">SQL</a></div>-->
									 <!--<div id="'.$tables[$i]['Tables_in_'.$dbname].'_sql" class="sql keys"><i>'.$search_sql.'</i	></div>-->
									 <!--<div class="link_wrapper"><a href="javascript:toggle(\''.$tables[$i]['Tables_in_'.$dbname].'_wrapper'.'\')">Result</a></div>-->
									 <script language="JavaScript">
									 	table_id.push("'.$tables[$i]['Tables_in_'.$dbname].'_wrapper");
									</script>
									<div class="wrapper" id="'.$tables[$i]['Tables_in_'.$dbname].'_wrapper"></div>';
                                                }
						
						
					}// @endof showing found search  
					
				}//@endof  main searching 
			}//@endof  querry building and searching 

				
	   }
	   
	   if(!$result_in_tables)
	   // @abstract if result is not found
	   {
			/*echo '<p style="color:red;">Sorry, <i>'.
					$search_text.
					'</i> is not found in this Database ('.$dbname.') !</p>';*/
                      echo '  <li>
                        <h1>No encontrado</h1>
                        <p>Lo sentimos, no hemos encontrado lo que busca, por favor intente de nuevo.</p>
                      </li>';
	   }

	mysql_close($link); 
	}
//}// @endof Else  

// @abstract common  footter
?>
                         </ul>
           </div>
        </div>
      </div>
    </div>
  </section>
  <div class="section-sep"></div>
					
<?php include("footer.php"); ?>
<!--<br/>
<br/>
<span  class="me">"AnyWhereInDB" is a Open Source Project, developed by <a href="http://twitter.com/happy56">Nafis Ahmad</a>. 
<br /> 
<a href="http://code.google.com/p/anywhereindb">http://code.google.com/p/anywhereindb </a>
</span>-->
</body>
</html>
<?php
//@endof common fotter

//*********************
//* PHP functions 
//*********************
function fetch_array($res)
// @method    fetch_array
// @abstract taking the mySQL $resource id and fetch and return the result array
// @param   string| MySQL resouser 
// @return  array  
{
	   $data = array();	
	while ($row = mysql_fetch_assoc($res)) 
	{
		$data[] = $row;
	}
	return $data;
} //@endof  function fetch_array


function table_arrange($array,$tabla)
// @method  table_arrange
// @abstract taking the mySQL the result array and return html Table in a string. showing the search content in a diffrent css class.
// @param  array 
// @post_data  search_text
// @return  string | html table 
{
	
	$table_data = ''; // @abstract  returning table
	
	$max =0; // @abstract  max lenth of a row
	
	$max_i =0; // @abstract  number of the row which is maximum max lenth of a row
	
	$search_text = $_POST["search_text"];
	//$table_data .='<li>';
	for($i=0;$i<sizeof($array);$i++)
	{
		//@abstract table row 
              
              if (!empty($tabla) and $tabla!='compras' and $tabla!='banner' and $tabla!='destacados' and stristr($tabla, 'img') == FALSE){
                 //print_r($array);
                 // echo'-->'.$tabla;
		$table_data .= '<tr class='.(($i&1)?'"odd_row"':'"even_row"') .' >';
              }
		//
		$j=0;
		
		foreach($array[$i] as $key => $data) 
		{
			if($key == 'idportafolio') $id = $data;
			//@abstract a class around the search text
                       // $resultado = stristr($key, 'id');
                        if(stristr($key, 'id') == FALSE and stristr($key, 'imagen') == FALSE and stristr($key, 'titulo') == FALSE and stristr($key, 'productos') == FALSE and stristr($key, 'opciones') == FALSE and stristr($key, 'portafolio') == FALSE and !empty($data)){
                            if ($tabla!='compras' and $tabla!='banner' and $tabla!='destacados' and stristr($tabla, 'img') == FALSE){
                                $data = preg_replace("|($search_text)|Ui" , '<pre class="search_text"><b>$1</b></pre>' , htmlspecialchars($data));
                            //$table_data .= $data ;
                                if (!empty($data)){
                                     if ($tabla == 'accesorio'){
                                         $hre='index.php?base&seccion=servicio-4';
                                     }else if ($tabla == 'alesado'){
                                         $hre='index.php?base&seccion=servicio-1';
                                     }else if ($tabla == 'bienvenida '){
                                         $hre='index.php?base&seccion=empresa';
                                     }else if ($tabla == 'cilindrado'){
                                         $hre='index.php?base&seccion=servicio-1';
                                     }else if ($tabla == 'conos'){
                                         $hre='index.php?base&seccion=servicio-4';
                                     }else if ($tabla == 'copiado'){
                                         $hre='index.php?base&seccion=servicio-3';
                                     }else if ($tabla == 'escuadrado'){
                                         $hre='index.php?base&seccion=servicio-3';
                                     }else if ($tabla == 'historia'){
                                         $hre='index.php?base&seccion=empresa';
                                     }else if ($tabla == 'materiales'){
                                         $hre='index.php?base&seccion=servicio-1';
                                     }else if ($tabla == 'mision'){
                                         $hre='index.php?base&seccion=empresa';
                                     }else if ($tabla == 'roscado'){
                                         $hre='index.php?base&seccion=servicio-1';
                                     }else if ($tabla == 'sujecion'){
                                         $hre='index.php?base&seccion=servicio-4';
                                     }else if ($tabla == 'planchado'){
                                        $hre='index.php?base&seccion=servicio-3';
                                     }else if ($tabla == 'planeado'){
                                        $hre='index.php?base&seccion=servicio-3';
                                     }else if ($tabla == 'carburo'){
                                        $hre='index.php?base&seccion=servicio-3';
                                     }else if ($tabla == 'taladrado'){
                                        $hre='index.php?base&seccion=servicio-2';
									 }else if ($tabla == 'portafolio') {
										$hre='index.php?base&seccion=accesorios-per&idportfolio='.$id;
                                     }else{
                                        $hre='#'; 
                                     }
                                    $table_data .= '<td>'. $data .'<br>
                                                    <div class="con-bts-results">
                                                        <a href="'.$hre.'"><div class="mas-bt"></div></a>
                                                    </div></td>';
                                }
                            }
                        }
			$j++;
		}
		
		if($max<$j)
		{
			$max = $j;
			$max_i = $i;
		}
		$table_data .= '</tr>'."\n";
	}
	$table_data .= '</table>';
	unset($data);
	// @endof html table
	
	//@abstract populating the table head
	
	// @varname $data_a
	//@abstract  taking the highest sized array and printing the key name.
	$data_a = $array[$max_i];
	
	
	$table_head =  '<tr>';
		foreach($data_a as $key => $value) 
		{
			$table_head .= '<td class="keys">'. $key.'</td>';
		}
			
	$table_head .= '</tr>'."\n";
	//@endof populating the table head
	
	// @abstract printing the table data
	//echo '<div class="table_bor">
	//echo '<table cellspacing="0" cellpadding="3" border="1" class="data_table">'.$table_head.$table_data;
        echo '<table cellspacing="0" cellpadding="3" border="1" class="data_table" width="100%">'.$table_data;
}//@endof  function table_arrange




function html_header()
// @method  html_header
// @abstract showing the html header of the instance. 
// @result prints the html header
{

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html>
<head>
<!--
//----------------------------------------------------------------------------------------------------------------------//
* @name  AnyWhereInDB
* @author Nafis Ahmad happy56[at]gmail.com // http://twitter.com/happy56
* @abstract This project is to find out a part of string from anywhere in database
* @version 0.22
* @package anywhereindb
//----------------------------------------------------------------------------------------------------------------------//
-->
<title>Any where In DB || AnyWhereInDB.php</title>
<script language="JavaScript">
	//@var array| initilazed 
	var table_id =new Array();

	function hide_all()
	// @method  hide_all
	// @abstract hideing all the result tables
	
	{
		for(i=0;i<table_id.length;i++){
			document.getElementById(table_id[i]).style.display = 'none';
		}
	} //@endof function hide_all
	
	function show_all()
	// @method  show_all
	// @abstract showing all the result tables
	
	{
		for(i=0;i<table_id.length;i++){
			document.getElementById(table_id[i]).style.display = 'block';
		}
	}//@endof function show_all
	
	function toggle(id)
	// @method  toggle
	// @abstract hide/showing a html contianer 
	
	{
		
		if(get_style(id,'display') =='block')
		{
			document.getElementById(id).style.display = 'none';
		}else {

			document.getElementById(id).style.display = 'block';
		
		}
		
	}//@endof function show_all
	
	function get_style(el,styleProp)
	// @method  get_style
	// @abstract making life easier to Get CSS properties from that table.  
	{
		var x = document.getElementById(el);
		if (x.currentStyle)
			var y = x.currentStyle[styleProp];
		else if (window.getComputedStyle)
			var y = document.defaultView.getComputedStyle(x,null).getPropertyValue(styleProp);
		return y;
	}// @endof function get_style

</script>
</head>
<body>
<?php

}//@endof  function html_head
