<?php
session_start();
include("../../../security/secure.php");
//Carga conexión e interacción con la base de datos
include("../../../../config/config.php");
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	        
        <title>CMS imaginamos.com - Todos los derechos reservados</title>

        <!-- Link shortcut icon-->
        <link rel="shortcut icon" type="image/ico" href="http://cms.imaginamos.com/favicon/imaginamos.ico"/>

      	<!--External Files-->
        <link href="http://cms.imaginamos.com/css/generalCMS.css" rel="stylesheet" type="text/css" />
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="http://cms.imaginamos.com/components/flot/excanvas.min.js"></script><![endif]-->
        <script type="text/javascript" src="http://cms.imaginamos.com/js/generalCMS.js"></script>
        <!--End External Files--> 
       
        </head>
        <body class="dashborad">
        <div id="alertMessage" class="error"></div>
		<!-- Header -->
        <div id="header">
                <div id="account_info">
                    <?php include("../../../menu/administrator.php"); ?>
                </div>
            </div><!-- End Header -->
			<div id="shadowhead"></div>

              <div id="left_menu">
                    <ul id="main_menu" class="main_menu">
						<?php include("../../../menu/panel.php"); ?>
                    </ul>
              </div>
            
              <div id="content">
                <div class="inner">
					<div class="topcolumn">
						<div class="logo"></div>
                            <ul id="shortcut">
								<?php include("../../../menu/icons.php"); ?>
                            </ul>
					</div>
                    <div class="clear"></div>
                    
					<!-- full width -->
                    <div class="widget">
                        <div class="header"><span><span class="ico gray window"></span>DEFINA UN TITULO PARA ESTE MODULO</span>
					</div><!-- End header -->	
                        <div class="content">

					  
                    <div class="formEl_b">
        
                    <fieldset>
                   
                   
                  			<div class="section" >
                              <label><h2>TABLAS</h2></label>
                              
                              <div class="tableName toolbar">
								<table class="display data_table2" >
									<thead>
										<tr>
								            <th><div class="th_wrapp">Imagen</div></th>	
								            <th><div class="th_wrapp">Título</div></th>	
								            <th><div class="th_wrapp">articulo</div></th>
										</tr>
										</thead>
									<tbody>
								        <tr class="odd gradeX">
								        <td class="center" width="70px">imagen</td>
								        <td class="center" width="200px">titulo</td>
								        <td class="center" width="100px">articulo</td>
								        </tr>
									</tbody>
								</table>
						        </div>
                                
                                
                                <textarea name="" cols="100" rows="10">
                                
                                <div class="tableName toolbar">
								<table class="display data_table2" >
									<thead>
										<tr>
								            <th><div class="th_wrapp">Imagen</div></th>	
								            <th><div class="th_wrapp">Título</div></th>	
								            <th><div class="th_wrapp">articulo</div></th>
										</tr>
										</thead>
									<tbody>
								        <tr class="odd gradeX">
								        <td class="center" width="70px">imagen</td>
								        <td class="center" width="200px">titulo</td>
								        <td class="center" width="100px">articulo</td>
								        </tr>
									</tbody>
								</table>
						        </div>
                                
                                </textarea>
                                
                                </fieldset>
                                
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>                                
                                
                              <fieldset>                                
                                
                              <div class="section" >
                              
                              <label><h2>BOTONES</h2></label>
<p>&nbsp;</p>
<a class="uibutton " >button</a> 
<a class="uibutton special" >button</a>
<a class="uibutton confirm" >button</a>
<a class="uibutton normal" >button</a> 
<a class="uibutton disable" >button</a>
<a class="uibutton large" >button</a> 
<a class="uibutton special large" >button</a>
<a class="uibutton confirm large" >button</a>
<a class="uibutton normal large" >button</a> 
<a class="uibutton disable large" >button</a>
<a class="uibutton icon add " >button</a> 
<a class="uibutton icon edit " >button</a> 
<a class="uibutton icon secure " >button</a> 
<a class="uibutton icon forward " >button</a> 
<a class="uibutton icon answer " >button</a> 
<a class="uibutton icon prev " >button</a> 
<a class="uibutton icon next " >button</a> 
<a class="uibutton icon special add " >button</a> 
<a class="uibutton icon special edit " >button</a> 
<a class="uibutton icon special secure " >button</a> 
<a class="uibutton icon special forward " >button</a> 
<a class="uibutton icon special answer " >button</a> 
<a class="uibutton icon special prev " >button</a> 
<a class="uibutton icon special next " >button</a> 
<a class="uibutton icon confirm add " >button</a> 
<a class="uibutton icon confirm edit " >button</a> 
<a class="uibutton icon confirm secure " >button</a> 
<a class="uibutton icon confirm forward " >button</a> 
<a class="uibutton icon confirm answer " >button</a> 
<a class="uibutton icon confirm prev " >button</a> 
<a class="uibutton icon confirm next " >button</a> 
<a class="uibutton icon normal add " >button</a> 
<a class="uibutton icon normal edit " >button</a> 
<a class="uibutton icon normal secure " >button</a> 
<a class="uibutton icon normal forward " >button</a> 
<a class="uibutton icon normal answer " >button</a> 
<a class="uibutton icon normal prev " >button</a> 
<a class="uibutton icon normal next " >button</a> 
<a class="uibutton icon disable add " >button</a> 
<a class="uibutton icon disable edit " >button</a> 
<a class="uibutton icon disable secure " >button</a> 
<a class="uibutton icon disable forward " >button</a> 
<a class="uibutton icon disable answer " >button</a> 
<a class="uibutton icon disable prev " >button</a> 
<a class="uibutton icon disable next " >button</a> 
                                
                                
                                <textarea name="" cols="100" rows="10">
                                
                                <a class="uibutton " >button</a> 
<a class="uibutton special" >button</a>
<a class="uibutton confirm" >button</a>
<a class="uibutton normal" >button</a> 
<a class="uibutton disable" >button</a>
<a class="uibutton large" >button</a> 
<a class="uibutton special large" >button</a>
<a class="uibutton confirm large" >button</a>
<a class="uibutton normal large" >button</a> 
<a class="uibutton disable large" >button</a>
<a class="uibutton icon add " >button</a> 
<a class="uibutton icon edit " >button</a> 
<a class="uibutton icon secure " >button</a> 
<a class="uibutton icon forward " >button</a> 
<a class="uibutton icon answer " >button</a> 
<a class="uibutton icon prev " >button</a> 
<a class="uibutton icon next " >button</a> 
<a class="uibutton icon special add " >button</a> 
<a class="uibutton icon special edit " >button</a> 
<a class="uibutton icon special secure " >button</a> 
<a class="uibutton icon special forward " >button</a> 
<a class="uibutton icon special answer " >button</a> 
<a class="uibutton icon special prev " >button</a> 
<a class="uibutton icon special next " >button</a> 
<a class="uibutton icon confirm add " >button</a> 
<a class="uibutton icon confirm edit " >button</a> 
<a class="uibutton icon confirm secure " >button</a> 
<a class="uibutton icon confirm forward " >button</a> 
<a class="uibutton icon confirm answer " >button</a> 
<a class="uibutton icon confirm prev " >button</a> 
<a class="uibutton icon confirm next " >button</a> 
<a class="uibutton icon normal add " >button</a> 
<a class="uibutton icon normal edit " >button</a> 
<a class="uibutton icon normal secure " >button</a> 
<a class="uibutton icon normal forward " >button</a> 
<a class="uibutton icon normal answer " >button</a> 
<a class="uibutton icon normal prev " >button</a> 
<a class="uibutton icon normal next " >button</a> 
<a class="uibutton icon disable add " >button</a> 
<a class="uibutton icon disable edit " >button</a> 
<a class="uibutton icon disable secure " >button</a> 
<a class="uibutton icon disable forward " >button</a> 
<a class="uibutton icon disable answer " >button</a> 
<a class="uibutton icon disable prev " >button</a> 
<a class="uibutton icon disable next " >button</a> 
                                
</textarea>                               
</fieldset>
                                
<p>&nbsp;</p>
<p>&nbsp;</p>

<fieldset>

<div class="section">
<label><h2>CAJAS</h2></label>
<p>&nbsp;</p>
<div style="overflow:scroll; height:300px">
<div class="widgets">

							<div class="oneTwo">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>  Lorem Ipsum</span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>

							<div class="oneTwo">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>  Lorem Ipsum</span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>

						</div>
						<div class="clear"></div>

						<!-- Third width -->
						<div class="widgets">
							<div class="oneThree">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>  Lorem Ipsum    </span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>
							<div class="oneThree">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>  Lorem Ipsum    </span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>
							<div class="oneThree">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>  Lorem Ipsum    </span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>
							<div class="clear"></div>
						</div>

						<!-- Third / Half -->
						<div class="widgets">
							<div class="twoOne">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>  Lorem Ipsum</span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>
							<div class="oneThree">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>  Lorem Ipsum</span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>
							<div class="clear"></div>
						</div>

						<!-- Third / Half -->
						<div class="widgets">
							<div class="oneThree">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>  Lorem Ipsum</span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>
							<div class="twoOne">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>  Lorem Ipsum</span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>
							<div class="clear"></div>
						</div>

						<!-- Quarter -->
						<div class="widgets">
							<div class="oneFour">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>Lorem Ipsum   </span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>
							<div class="oneFour">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>Lorem Ipsum   </span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>
							<div class="oneFour">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>Lorem Ipsum   </span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>
							<div class="oneFour">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>Lorem Ipsum   </span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>
							
						</div>
                        </div>
<textarea name="" cols="100" rows="10">
<div class="widgets">

							<div class="oneTwo">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>  Lorem Ipsum</span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>

							<div class="oneTwo">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>  Lorem Ipsum</span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>

						</div>
						<div class="clear"></div>

						<!-- Third width -->
						<div class="widgets">
							<div class="oneThree">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>  Lorem Ipsum    </span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>
							<div class="oneThree">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>  Lorem Ipsum    </span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>
							<div class="oneThree">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>  Lorem Ipsum    </span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>
							<div class="clear"></div>
						</div>

						<!-- Third / Half -->
						<div class="widgets">
							<div class="twoOne">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>  Lorem Ipsum</span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>
							<div class="oneThree">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>  Lorem Ipsum</span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>
							<div class="clear"></div>
						</div>

						<!-- Third / Half -->
						<div class="widgets">
							<div class="oneThree">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>  Lorem Ipsum</span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>
							<div class="twoOne">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>  Lorem Ipsum</span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>
							<div class="clear"></div>
						</div>

						<!-- Quarter -->
						<div class="widgets">
							<div class="oneFour">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>Lorem Ipsum   </span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>
							<div class="oneFour">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>Lorem Ipsum   </span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>
							<div class="oneFour">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>Lorem Ipsum   </span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>
							<div class="oneFour">
								<div class="widget">
								 <div class="header"><span><span class="ico gray window"></span>Lorem Ipsum   </span></div>
									<div class="content">
                          

									</div>
								 </div>
							</div>
							
						</div>
</textarea>
</fieldset>

<p>&nbsp;</p>
<p>&nbsp;</p>                                
                                
<fieldset>
<div class="section" >
<label><h2>FILE MANAGER</h2></label>
<div id="finder">finder</div>
<script language="javascript">
$('#finder').elfinder({url : '../../../components/elfinder/connectors/php/connector-fileimport.php', docked:true,dialog:{modal:true,width:700}});
</script>

<textarea name="" cols="100" rows="10">                               
<div id="finder">finder</div>
<script language="javascript">
$('#finder').elfinder({url : '../../../components/elfinder/connectors/php/connector-fileimport.php', docked:true,dialog:{modal:true,width:700}});
</script>                                
</textarea>

</fieldset>


<p>&nbsp;</p>
<p>&nbsp;</p>                                
                                
<fieldset>
<div class="section" >
<label><h2>CALENDARIO</h2></label>
<div id='calendar' ></div>

<textarea name="" cols="100" rows="10">                               
<div id='calendar' ></div>                              
</textarea>

</fieldset>


<p>&nbsp;</p>
<p>&nbsp;</p>                                
                                
<fieldset>
<div class="section" >
<label><h2>ELEMENTOS DEL FORMULARIO</h2></label>

<form id="demo"> 
                              <div class="section" >
                                  <label> full <small>Text custom</small></label>   
                                  <div> <input type="text" name="text[]" class=" full"  /><span class="f_help">Text custom help</span></div>
                             </div>
                              <div class="section">
                                  <label> large <small>Text custom</small></label>   
                                  <div> <input type="text"  class=" large" /><span class="f_help">Text custom help</span></div>
                             </div>
                              <div class="section">
                                  <label> medium <small>Text custom</small></label>   
                                  <div> <input type="text"  class=" medium" /><span class="f_help">Text custom help</span></div>
                                  <div> <input type="text"  class=" medium" /><span class="f_help">Text custom help</span></div>
                             </div>
                              <div class="section">
                                  <label> small <small>Text custom</small></label>   
                                  <div> <input type="text"  class=" small" /></div>
                             </div>
                              <div class="section">
                                  <label> xsmall <small>Text custom</small></label>   
                                  <div> <input type="text"  class=" xsmall" /></div>
                             </div>
                              <div class="section">
                                  <label> xxsmall <small>Text custom</small></label>   
                                  <div> <input type="text" class=" xxsmall" /></div>
                             </div>
                              <div class="section">
                                  <label>Iphone checkbox<small>Text custom</small></label>
                                  <div>
                                           <input type="checkbox"  class="on_off_checkbox"  value="1"  checked="checked"  />
                                 </div>
                                  <div>
                                           <input type="checkbox"  class="on_off_checkbox"  value="1"   />
                                          <span class="f_help">ON / OFF  </span> 
                                 </div>
                                  <div>
                                           <input type="checkbox" class="on_off_checkbox"  disabled="disabled"  />
                                          <span class="f_help">Disabled</span> 
                                 </div>
                             </div>
                              <div class="section">
                                  <label> checkbox custom<small>Text custom</small></label>   
                                  <div> 
                                            <input type="checkbox" id="preOrder" name="preOrder"   class="preOrder" value="1"   />
                                            <span class="f_help">Ex. checkbox custom  </span> 
                                 </div>
                                 </div>
                              <div class="section">
                                  <label> checkbox custom<small>Text custom</small></label>   
                                 <div>
                                       <div>
                                              <input type="checkbox" name="genre" id="checkNormal"  value="comedy" class="ck"/>
                                              <label for="checkNormal">Normal</label>
                                              
                                              <input type="checkbox" name="genre" id="checked" value="comedy" class="ck" checked="checked" />
                                              <label  for="checked">Checked</label>
                                      </div>
                                       <div>
                                              <input type="checkbox" name="genre" id="checkDisabled"  value="action"  class="ck" disabled="disabled"/>
                                              <label  for="checkDisabled">Disabled </label>
                                      </div>
                                       <div>
                                              <input type="checkbox" name="genre" id="checkedDisabled"  value="action"  class="ck" disabled="disabled" checked="checked"/>
                                              <label  for="checkedDisabled">Checked Disabled </label>
                                       </div>
                                 </div>
                              </div>
                              <div class="section">
                                  <label>Radio buttons<small>Text custom</small></label>   
                                 <div>
                                      <div>
                                          <input type="radio" name="opinions" id="radio-1" value="1"  class="ck"/>
                                          <label for="radio-1">Totally</label>
                                      </div>
                                      <div>
                                          <input type="radio" name="opinions" id="radio-2" value="1"  class="ck"  checked="checked"/>
                                          <label for="radio-2" >You must be kidding</label>
                                      </div>
                                      <div>
                                          <input type="radio" name="opinions" id="radio-3" value="1"  class="ck"  disabled="disabled"/>
                                          <label for="radio-3" >Radio Disabled</label>
                                      </div>
                                  </div>
                              </div>

							    
                              <div class="section">
                                  <label> checkbox Limit<small>Max 3 Selected</small></label>   
                                 <div class="limit3m">
                                 <div>
                                        <input type="checkbox" name="genre" id="check-1" value="action"  class="ck" checked="checked"/>
                                        <label  for="check-1">Action / Adventure</label>
                                    </div>
                                    <div>    
                                        <input type="checkbox" name="genre" id="check-2" value="comedy" class="ck" checked="checked"/>
                                        <label for="check-2">Comedy</label>
                                      </div>
                                      <div>  
                                        <input type="checkbox" name="genre" id="check-3" value="epic" class="ck"/>
                                        <label  for="check-3">Epic / Historical</label>
                                       </div>
                                       <div> 
                                        <input type="checkbox" name="genre" id="check-4" value="science" class="ck" />
                                        <label for="check-4">Science Fiction</label>
                                        </div>
                                        <div>
                                        <input type="checkbox" name="genre" id="check-5" value="romance" class="ck"/>
                                        <label for="check-5">Romance</label>
                                        </div>
                                    <span class="f_help"><span>**</span> Your  Can Selected Max 3 item</span> 
                                 </div>
                             </div>
							  <div class="section">
								<label> rating star </label> 
									<div>
										<input name="my_input" value="5" id="rating_star" type="hidden">
									</div>
							  </div>

                            <div class="section ">
                            <label> Avartar <small>Fileupload</small></label>   
                            <div> 
                                <input type="file" class="fileupload" />
                            </div>
                            </div>
                            <div class="section">
                              <label>select normal <small>Fix width</small></label>   
                              <div>
                              	  <select class="small">
                                     <option value="1"  >One</option>
                                     <option value="2"  >Two</option>
                                     <option value="3"  >Three</option>
                                     <option value="4"  >Four</option>
                                     <option value="5"  >five</option>
                                </select>       
                        </div>
                        </div>
                            <div class="section">
                              <label>select With search<small>Fix width</small></label>   
                              <div>
                              	  <select data-placeholder="Choose a Country..." class="chzn-select" tabindex="2" >
                                  <option value=""></option> 
                                  <option value="United States">United States</option> 
                                  <option value="United Kingdom">United Kingdom</option> 
                                  <option value="Afghanistan">Afghanistan</option> 
                                  <option value="Albania">Albania</option> 
                                  <option value="Algeria">Algeria</option> 
                                  <option value="American Samoa">American Samoa</option> 
                                  <option value="Andorra">Andorra</option> 
                                  <option value="Angola">Angola</option> 
                                  <option value="Anguilla">Anguilla</option> 
                                  <option value="Antarctica">Antarctica</option> 
                                  <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
                                  <option value="Argentina">Argentina</option> 
                                  <option value="Armenia">Armenia</option> 
                                  <option value="Aruba">Aruba</option> 
                                  <option value="Australia">Australia</option> 
                                  <option value="Austria">Austria</option> 
                                  <option value="Azerbaijan">Azerbaijan</option> 
                                  <option value="Bahamas">Bahamas</option> 
                                  <option value="Bahrain">Bahrain</option> 
                                  <option value="Bangladesh">Bangladesh</option> 
                                  <option value="Barbados">Barbados</option> 
                                  <option value="Belarus">Belarus</option> 
                                  <option value="Belgium">Belgium</option> 
                                  <option value="Belize">Belize</option> 
                                  <option value="Benin">Benin</option> 
                                  <option value="Bermuda">Bermuda</option> 
                                  <option value="Bhutan">Bhutan</option> 
                                  <option value="Bolivia">Bolivia</option> 
                                  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                                  <option value="Botswana">Botswana</option> 
                                  <option value="Bouvet Island">Bouvet Island</option> 
                                  <option value="Brazil">Brazil</option> 
                                  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                                  <option value="Brunei Darussalam">Brunei Darussalam</option> 
                                  <option value="Bulgaria">Bulgaria</option> 
                                  <option value="Burkina Faso">Burkina Faso</option> 
                                  <option value="Burundi">Burundi</option> 
                                  <option value="Cambodia">Cambodia</option> 
                                  <option value="Cameroon">Cameroon</option> 
                                  <option value="Canada">Canada</option> 
                                  <option value="Cape Verde">Cape Verde</option> 
                                  <option value="Cayman Islands">Cayman Islands</option> 
                                  <option value="Central African Republic">Central African Republic</option> 
                                  <option value="Chad">Chad</option> 
                                  <option value="Chile">Chile</option> 
                                  <option value="China">China</option> 
                                  <option value="Christmas Island">Christmas Island</option> 
                                  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                                  <option value="Colombia">Colombia</option> 
                                  <option value="Comoros">Comoros</option> 
                                  <option value="Congo">Congo</option> 
                                  <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                                  <option value="Cook Islands">Cook Islands</option> 
                                  <option value="Costa Rica">Costa Rica</option> 
                                  <option value="Cote D'ivoire">Cote D'ivoire</option> 
                                  <option value="Croatia">Croatia</option> 
                                  <option value="Cuba">Cuba</option> 
                                  <option value="Cyprus">Cyprus</option> 
                                  <option value="Czech Republic">Czech Republic</option> 
                                  <option value="Denmark">Denmark</option> 
                                  <option value="Djibouti">Djibouti</option> 
                                  <option value="Dominica">Dominica</option> 
                                  <option value="Dominican Republic">Dominican Republic</option> 
                                  <option value="Ecuador">Ecuador</option> 
                                  <option value="Egypt">Egypt</option> 
                                  <option value="El Salvador">El Salvador</option> 
                                  <option value="Equatorial Guinea">Equatorial Guinea</option> 
                                  <option value="Eritrea">Eritrea</option> 
                                  <option value="Estonia">Estonia</option> 
                                  <option value="Ethiopia">Ethiopia</option> 
                                  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                                  <option value="Faroe Islands">Faroe Islands</option> 
                                  <option value="Fiji">Fiji</option> 
                                  <option value="Finland">Finland</option> 
                                  <option value="France">France</option> 
                                  <option value="French Guiana">French Guiana</option> 
                                  <option value="French Polynesia">French Polynesia</option> 
                                  <option value="French Southern Territories">French Southern Territories</option> 
                                  <option value="Gabon">Gabon</option> 
                                  <option value="Gambia">Gambia</option> 
                                  <option value="Georgia">Georgia</option> 
                                  <option value="Germany">Germany</option> 
                                  <option value="Ghana">Ghana</option> 
                                  <option value="Gibraltar">Gibraltar</option> 
                                  <option value="Greece">Greece</option> 
                                  <option value="Greenland">Greenland</option> 
                                  <option value="Grenada">Grenada</option> 
                                  <option value="Guadeloupe">Guadeloupe</option> 
                                  <option value="Guam">Guam</option> 
                                  <option value="Guatemala">Guatemala</option> 
                                  <option value="Guinea">Guinea</option> 
                                  <option value="Guinea-bissau">Guinea-bissau</option> 
                                  <option value="Guyana">Guyana</option> 
                                  <option value="Haiti">Haiti</option> 
                                  <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                                  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                                  <option value="Honduras">Honduras</option> 
                                  <option value="Hong Kong">Hong Kong</option> 
                                  <option value="Hungary">Hungary</option> 
                                  <option value="Iceland">Iceland</option> 
                                  <option value="India">India</option> 
                                  <option value="Indonesia">Indonesia</option> 
                                  <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                                  <option value="Iraq">Iraq</option> 
                                  <option value="Ireland">Ireland</option> 
                                  <option value="Israel">Israel</option> 
                                  <option value="Italy">Italy</option> 
                                  <option value="Jamaica">Jamaica</option> 
                                  <option value="Japan">Japan</option> 
                                  <option value="Jordan">Jordan</option> 
                                  <option value="Kazakhstan">Kazakhstan</option> 
                                  <option value="Kenya">Kenya</option> 
                                  <option value="Kiribati">Kiribati</option> 
                                  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                                  <option value="Korea, Republic of">Korea, Republic of</option> 
                                  <option value="Kuwait">Kuwait</option> 
                                  <option value="Kyrgyzstan">Kyrgyzstan</option> 
                                  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                                  <option value="Latvia">Latvia</option> 
                                  <option value="Lebanon">Lebanon</option> 
                                  <option value="Lesotho">Lesotho</option> 
                                  <option value="Liberia">Liberia</option> 
                                  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                                  <option value="Liechtenstein">Liechtenstein</option> 
                                  <option value="Lithuania">Lithuania</option> 
                                  <option value="Luxembourg">Luxembourg</option> 
                                  <option value="Macao">Macao</option> 
                                  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
                                  <option value="Madagascar">Madagascar</option> 
                                  <option value="Malawi">Malawi</option> 
                                  <option value="Malaysia">Malaysia</option> 
                                  <option value="Maldives">Maldives</option> 
                                  <option value="Mali">Mali</option> 
                                  <option value="Malta">Malta</option> 
                                  <option value="Marshall Islands">Marshall Islands</option> 
                                  <option value="Martinique">Martinique</option> 
                                  <option value="Mauritania">Mauritania</option> 
                                  <option value="Mauritius">Mauritius</option> 
                                  <option value="Mayotte">Mayotte</option> 
                                  <option value="Mexico">Mexico</option> 
                                  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                                  <option value="Moldova, Republic of">Moldova, Republic of</option> 
                                  <option value="Monaco">Monaco</option> 
                                  <option value="Mongolia">Mongolia</option> 
                                  <option value="Montenegro">Montenegro</option>
                                  <option value="Montserrat">Montserrat</option> 
                                  <option value="Morocco">Morocco</option> 
                                  <option value="Mozambique">Mozambique</option> 
                                  <option value="Myanmar">Myanmar</option> 
                                  <option value="Namibia">Namibia</option> 
                                  <option value="Nauru">Nauru</option> 
                                  <option value="Nepal">Nepal</option> 
                                  <option value="Netherlands">Netherlands</option> 
                                  <option value="Netherlands Antilles">Netherlands Antilles</option> 
                                  <option value="New Caledonia">New Caledonia</option> 
                                  <option value="New Zealand">New Zealand</option> 
                                  <option value="Nicaragua">Nicaragua</option> 
                                  <option value="Niger">Niger</option> 
                                  <option value="Nigeria">Nigeria</option> 
                                  <option value="Niue">Niue</option> 
                                  <option value="Norfolk Island">Norfolk Island</option> 
                                  <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                                  <option value="Norway">Norway</option> 
                                  <option value="Oman">Oman</option> 
                                  <option value="Pakistan">Pakistan</option> 
                                  <option value="Palau">Palau</option> 
                                  <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                                  <option value="Panama">Panama</option> 
                                  <option value="Papua New Guinea">Papua New Guinea</option> 
                                  <option value="Paraguay">Paraguay</option> 
                                  <option value="Peru">Peru</option> 
                                  <option value="Philippines">Philippines</option> 
                                  <option value="Pitcairn">Pitcairn</option> 
                                  <option value="Poland">Poland</option> 
                                  <option value="Portugal">Portugal</option> 
                                  <option value="Puerto Rico">Puerto Rico</option> 
                                  <option value="Qatar">Qatar</option> 
                                  <option value="Reunion">Reunion</option> 
                                  <option value="Romania">Romania</option> 
                                  <option value="Russian Federation">Russian Federation</option> 
                                  <option value="Rwanda">Rwanda</option> 
                                  <option value="Saint Helena">Saint Helena</option> 
                                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                  <option value="Saint Lucia">Saint Lucia</option> 
                                  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                                  <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                                  <option value="Samoa">Samoa</option> 
                                  <option value="San Marino">San Marino</option> 
                                  <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                  <option value="Saudi Arabia">Saudi Arabia</option> 
                                  <option value="Senegal">Senegal</option> 
                                  <option value="Serbia">Serbia</option> 
                                  <option value="Seychelles">Seychelles</option> 
                                  <option value="Sierra Leone">Sierra Leone</option> 
                                  <option value="Singapore">Singapore</option> 
                                  <option value="Slovakia">Slovakia</option> 
                                  <option value="Slovenia">Slovenia</option> 
                                  <option value="Solomon Islands">Solomon Islands</option> 
                                  <option value="Somalia">Somalia</option> 
                                  <option value="South Africa">South Africa</option> 
                                  <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                                  <option value="South Sudan">South Sudan</option> 
                                  <option value="Spain">Spain</option> 
                                  <option value="Sri Lanka">Sri Lanka</option> 
                                  <option value="Sudan">Sudan</option> 
                                  <option value="Suriname">Suriname</option> 
                                  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                                  <option value="Swaziland">Swaziland</option> 
                                  <option value="Sweden">Sweden</option> 
                                  <option value="Switzerland">Switzerland</option> 
                                  <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                                  <option value="Taiwan, Republic of China">Taiwan, Republic of China</option> 
                                  <option value="Tajikistan">Tajikistan</option> 
                                  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                                  <option value="Thailand">Thailand</option> 
                                  <option value="Timor-leste">Timor-leste</option> 
                                  <option value="Togo">Togo</option> 
                                  <option value="Tokelau">Tokelau</option> 
                                  <option value="Tonga">Tonga</option> 
                                  <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                                  <option value="Tunisia">Tunisia</option> 
                                  <option value="Turkey">Turkey</option> 
                                  <option value="Turkmenistan">Turkmenistan</option> 
                                  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                                  <option value="Tuvalu">Tuvalu</option> 
                                  <option value="Uganda">Uganda</option> 
                                  <option value="Ukraine">Ukraine</option> 
                                  <option value="United Arab Emirates">United Arab Emirates</option> 
                                  <option value="United Kingdom">United Kingdom</option> 
                                  <option value="United States">United States</option> 
                                  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                                  <option value="Uruguay">Uruguay</option> 
                                  <option value="Uzbekistan">Uzbekistan</option> 
                                  <option value="Vanuatu">Vanuatu</option> 
                                  <option value="Venezuela">Venezuela</option> 
                                  <option value="Viet Nam">Viet Nam</option> 
                                  <option value="Virgin Islands, British">Virgin Islands, British</option> 
                                  <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                                  <option value="Wallis and Futuna">Wallis and Futuna</option> 
                                  <option value="Western Sahara">Western Sahara</option> 
                                  <option value="Yemen">Yemen</option> 
                                  <option value="Zambia">Zambia</option> 
                                  <option value="Zimbabwe">Zimbabwe</option>
                                </select>       
                        </div>
                        </div>
                        
                              <div class="section">
                              <label> Mullti select <small>Text custom</small></label>   
                              <div> 
                                <select  class="chzn-select " multiple tabindex="4">
                                  <option value=""></option> 
                                  <option value="United States" >United States</option> 
                                  <option value="United Kingdom">United Kingdom</option> 
                                  <option value="Afghanistan">Afghanistan</option> 
                                  <option value="Albania">Albania</option> 
                                  <option value="Algeria">Algeria</option> 
                                  <option value="American Samoa">American Samoa</option> 
                                  <option value="Andorra">Andorra</option> 
                                  <option value="Angola" selected="selected">Angola</option> 
                                  <option value="Anguilla" selected="selected">Anguilla</option> 
                                  <option value="Antarctica">Antarctica</option> 
                                  <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
                                  <option value="Argentina">Argentina</option> 
                                  <option value="Armenia">Armenia</option> 
                                  <option value="Aruba">Aruba</option> 
                                  <option value="Australia">Australia</option> 
                                  <option value="Austria">Austria</option> 
                                  <option value="Azerbaijan">Azerbaijan</option> 
                                  <option value="Bahamas">Bahamas</option> 
                                  <option value="Bahrain">Bahrain</option> 
                                  <option value="Bangladesh">Bangladesh</option> 
                                  <option value="Barbados">Barbados</option> 
                                  <option value="Belarus">Belarus</option> 
                                  <option value="Belgium">Belgium</option> 
                                  <option value="Belize">Belize</option> 
                                  <option value="Benin">Benin</option> 
                                  <option value="Bermuda">Bermuda</option> 
                                  <option value="Bhutan">Bhutan</option> 
                                  <option value="Bolivia">Bolivia</option> 
                                  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                  <option value="Botswana">Botswana</option> 
                                  <option value="Bouvet Island">Bouvet Island</option> 
                                  <option value="Brazil">Brazil</option> 
                                  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                                  <option value="Brunei Darussalam">Brunei Darussalam</option> 
                                  <option value="Bulgaria">Bulgaria</option> 
                                  <option value="Burkina Faso">Burkina Faso</option> 
                                  <option value="Burundi">Burundi</option> 
                                  <option value="Cambodia">Cambodia</option> 
                                  <option value="Cameroon">Cameroon</option> 
                                  <option value="Canada">Canada</option> 
                                  <option value="Cape Verde">Cape Verde</option> 
                                  <option value="Cayman Islands">Cayman Islands</option> 
                                  <option value="Central African Republic">Central African Republic</option> 
                                  <option value="Chad">Chad</option> 
                                  <option value="Chile">Chile</option> 
                                  <option value="China">China</option> 
                                  <option value="Christmas Island">Christmas Island</option> 
                                  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                                  <option value="Colombia">Colombia</option> 
                                  <option value="Comoros">Comoros</option> 
                                  <option value="Congo">Congo</option> 
                                  <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                                  <option value="Cook Islands">Cook Islands</option> 
                                  <option value="Costa Rica">Costa Rica</option> 
                                  <option value="Cote D'ivoire">Cote D'ivoire</option> 
                                  <option value="Croatia">Croatia</option> 
                                  <option value="Cuba">Cuba</option> 
                                  <option value="Cyprus">Cyprus</option> 
                                  <option value="Czech Republic">Czech Republic</option> 
                                  <option value="Denmark">Denmark</option> 
                                  <option value="Djibouti">Djibouti</option> 
                                  <option value="Dominica">Dominica</option> 
                                  <option value="Dominican Republic">Dominican Republic</option> 
                                  <option value="Ecuador">Ecuador</option> 
                                  <option value="Egypt">Egypt</option> 
                                  <option value="El Salvador">El Salvador</option> 
                                  <option value="Equatorial Guinea">Equatorial Guinea</option> 
                                  <option value="Eritrea">Eritrea</option> 
                                  <option value="Estonia">Estonia</option> 
                                  <option value="Ethiopia">Ethiopia</option> 
                                  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                                  <option value="Faroe Islands">Faroe Islands</option> 
                                  <option value="Fiji">Fiji</option> 
                                  <option value="Finland">Finland</option> 
                                  <option value="France">France</option> 
                                  <option value="French Guiana">French Guiana</option> 
                                  <option value="French Polynesia">French Polynesia</option> 
                                  <option value="French Southern Territories">French Southern Territories</option> 
                                  <option value="Gabon">Gabon</option> 
                                  <option value="Gambia">Gambia</option> 
                                  <option value="Georgia">Georgia</option> 
                                  <option value="Germany">Germany</option> 
                                  <option value="Ghana">Ghana</option> 
                                  <option value="Gibraltar">Gibraltar</option> 
                                  <option value="Greece">Greece</option> 
                                  <option value="Greenland">Greenland</option> 
                                  <option value="Grenada">Grenada</option> 
                                  <option value="Guadeloupe">Guadeloupe</option> 
                                  <option value="Guam">Guam</option> 
                                  <option value="Guatemala">Guatemala</option> 
                                  <option value="Guinea">Guinea</option> 
                                  <option value="Guinea-bissau">Guinea-bissau</option> 
                                  <option value="Guyana">Guyana</option> 
                                  <option value="Haiti">Haiti</option> 
                                  <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                                  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                                  <option value="Honduras">Honduras</option> 
                                  <option value="Hong Kong">Hong Kong</option> 
                                  <option value="Hungary">Hungary</option> 
                                  <option value="Iceland">Iceland</option> 
                                  <option value="India">India</option> 
                                  <option value="Indonesia">Indonesia</option> 
                                  <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                                  <option value="Iraq">Iraq</option> 
                                  <option value="Ireland">Ireland</option> 
                                  <option value="Israel">Israel</option> 
                                  <option value="Italy">Italy</option> 
                                  <option value="Jamaica">Jamaica</option> 
                                  <option value="Japan">Japan</option> 
                                  <option value="Jordan">Jordan</option> 
                                  <option value="Kazakhstan">Kazakhstan</option> 
                                  <option value="Kenya">Kenya</option> 
                                  <option value="Kiribati">Kiribati</option> 
                                  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                                  <option value="Korea, Republic of">Korea, Republic of</option> 
                                  <option value="Kuwait">Kuwait</option> 
                                  <option value="Kyrgyzstan">Kyrgyzstan</option> 
                                  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                                  <option value="Latvia">Latvia</option> 
                                  <option value="Lebanon">Lebanon</option> 
                                  <option value="Lesotho">Lesotho</option> 
                                  <option value="Liberia">Liberia</option> 
                                  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                                  <option value="Liechtenstein">Liechtenstein</option> 
                                  <option value="Lithuania">Lithuania</option> 
                                  <option value="Luxembourg">Luxembourg</option> 
                                  <option value="Macao">Macao</option> 
                                  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
                                  <option value="Madagascar">Madagascar</option> 
                                  <option value="Malawi">Malawi</option> 
                                  <option value="Malaysia">Malaysia</option> 
                                  <option value="Maldives">Maldives</option> 
                                  <option value="Mali">Mali</option> 
                                  <option value="Malta">Malta</option> 
                                  <option value="Marshall Islands">Marshall Islands</option> 
                                  <option value="Martinique">Martinique</option> 
                                  <option value="Mauritania">Mauritania</option> 
                                  <option value="Mauritius">Mauritius</option> 
                                  <option value="Mayotte">Mayotte</option> 
                                  <option value="Mexico">Mexico</option> 
                                  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                                  <option value="Moldova, Republic of">Moldova, Republic of</option> 
                                  <option value="Monaco">Monaco</option> 
                                  <option value="Mongolia">Mongolia</option> 
                                  <option value="Montenegro">Montenegro</option>
                                  <option value="Montserrat">Montserrat</option> 
                                  <option value="Morocco">Morocco</option> 
                                  <option value="Mozambique">Mozambique</option> 
                                  <option value="Myanmar">Myanmar</option> 
                                  <option value="Namibia">Namibia</option> 
                                  <option value="Nauru">Nauru</option> 
                                  <option value="Nepal">Nepal</option> 
                                  <option value="Netherlands">Netherlands</option> 
                                  <option value="Netherlands Antilles">Netherlands Antilles</option> 
                                  <option value="New Caledonia">New Caledonia</option> 
                                  <option value="New Zealand">New Zealand</option> 
                                  <option value="Nicaragua">Nicaragua</option> 
                                  <option value="Niger">Niger</option> 
                                  <option value="Nigeria">Nigeria</option> 
                                  <option value="Niue">Niue</option> 
                                  <option value="Norfolk Island">Norfolk Island</option> 
                                  <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                                  <option value="Norway">Norway</option> 
                                  <option value="Oman">Oman</option> 
                                  <option value="Pakistan">Pakistan</option> 
                                  <option value="Palau">Palau</option> 
                                  <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                                  <option value="Panama">Panama</option> 
                                  <option value="Papua New Guinea">Papua New Guinea</option> 
                                  <option value="Paraguay">Paraguay</option> 
                                  <option value="Peru">Peru</option> 
                                  <option value="Philippines">Philippines</option> 
                                  <option value="Pitcairn">Pitcairn</option> 
                                  <option value="Poland">Poland</option> 
                                  <option value="Portugal">Portugal</option> 
                                  <option value="Puerto Rico">Puerto Rico</option> 
                                  <option value="Qatar">Qatar</option> 
                                  <option value="Reunion">Reunion</option> 
                                  <option value="Romania">Romania</option> 
                                  <option value="Russian Federation">Russian Federation</option> 
                                  <option value="Rwanda">Rwanda</option> 
                                  <option value="Saint Helena">Saint Helena</option> 
                                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                  <option value="Saint Lucia">Saint Lucia</option> 
                                  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                                  <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                                  <option value="Samoa">Samoa</option> 
                                  <option value="San Marino">San Marino</option> 
                                  <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                  <option value="Saudi Arabia">Saudi Arabia</option> 
                                  <option value="Senegal">Senegal</option> 
                                  <option value="Serbia">Serbia</option> 
                                  <option value="Seychelles">Seychelles</option> 
                                  <option value="Sierra Leone">Sierra Leone</option> 
                                  <option value="Singapore">Singapore</option> 
                                  <option value="Slovakia">Slovakia</option> 
                                  <option value="Slovenia">Slovenia</option> 
                                  <option value="Solomon Islands">Solomon Islands</option> 
                                  <option value="Somalia">Somalia</option> 
                                  <option value="South Africa">South Africa</option> 
                                  <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                                  <option value="South Sudan">South Sudan</option> 
                                  <option value="Spain">Spain</option> 
                                  <option value="Sri Lanka">Sri Lanka</option> 
                                  <option value="Sudan">Sudan</option> 
                                  <option value="Suriname">Suriname</option> 
                                  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                                  <option value="Swaziland">Swaziland</option> 
                                  <option value="Sweden">Sweden</option> 
                                  <option value="Switzerland">Switzerland</option> 
                                  <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                                  <option value="Taiwan, Republic of China">Taiwan, Republic of China</option> 
                                  <option value="Tajikistan">Tajikistan</option> 
                                  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                                  <option value="Thailand">Thailand</option> 
                                  <option value="Timor-leste">Timor-leste</option> 
                                  <option value="Togo">Togo</option> 
                                  <option value="Tokelau">Tokelau</option> 
                                  <option value="Tonga">Tonga</option> 
                                  <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                                  <option value="Tunisia">Tunisia</option> 
                                  <option value="Turkey">Turkey</option> 
                                  <option value="Turkmenistan">Turkmenistan</option> 
                                  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                                  <option value="Tuvalu">Tuvalu</option> 
                                  <option value="Uganda">Uganda</option> 
                                  <option value="Ukraine">Ukraine</option> 
                                  <option value="United Arab Emirates">United Arab Emirates</option> 
                                  <option value="United Kingdom">United Kingdom</option> 
                                  <option value="United States">United States</option> 
                                  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                                  <option value="Uruguay">Uruguay</option> 
                                  <option value="Uzbekistan">Uzbekistan</option> 
                                  <option value="Vanuatu">Vanuatu</option> 
                                  <option value="Venezuela">Venezuela</option> 
                                  <option value="Viet Nam">Viet Nam</option> 
                                  <option value="Virgin Islands, British">Virgin Islands, British</option> 
                                  <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                                  <option value="Wallis and Futuna">Wallis and Futuna</option> 
                                  <option value="Western Sahara">Western Sahara</option> 
                                  <option value="Yemen">Yemen</option> 
                                  <option value="Zambia">Zambia</option> 
                                  <option value="Zimbabwe">Zimbabwe</option>
                                </select></div>
                             </div>
                               <div class="section">
                                   <label> textarea  <small>Elastic</small></label>   
                                  <div > <textarea name="Textareaelastic" id="Textareaelastic"  class="large"  cols="" rows=""></textarea></div>   
								  
                               </div>
                               <div class="section">
                                   <label> textarea  <small>Limit chars</small></label>   
                                  <div>
								  <textarea name="Textarealimit" id="Textarealimit"  class="large"  cols="" rows=""></textarea>
								  <span class="f_help"> Limit chars <span class="limitchars"></span></span>
								  </div>   
								  
                               </div>
                              <div class="section last">
                                  <div><a class="uibutton loading" title="Saving" rel="1" >submit</a> <a class="uibutton special"  >clear form</a> <a class="uibutton loading confirm" title="Checking" rel="0" >Check</a> </div>
                             </div>
                          </form>
							
                        
					

					
							<form>

							<div class="section">
								<label>Date Masked <small> mm/dd/yyyy</small></label>
								<div>
									<input id="date" value="1231" type="text" tabindex="1" />
									<span class="f_help"></span>
								</div>
							</div>
							<div class="section">
								<label>Datepicker Masked <small> mm-dd-yyyy</small></label>
								<div>
									<input id="datepicker"  type="text" tabindex="1" />
									<span class="f_help"></span>
								</div>
							</div>
							<div class="section">
								<label>Phone <small>(999) 999-9999 </small></label>
								<div>
									<input id="phone" type="text" tabindex="2"/>
									<span class="f_help"></span>
								</div>
							</div>
							<div class="section">
								<label>Phone + Ext <small>(999) 999-9999? x99999</small></label>
								<div>
									<input id="phoneExt" type="text" tabindex="2"/>
									<span class="f_help"></span>
								</div>
							</div>
							<div class="section">
								<label>Int'l Phone<small>+44 (999) 999-9999</small></label>
								<div>
									<input id="iphone" type="text" tabindex="2"/>
									<span class="f_help"></span>
								</div>
							</div>
							<div class="section">
								<label>Tax ID<small>99-9999999</small></label>
								<div>
									<input id="tin" type="text" tabindex="3"/>
									<span class="f_help"></span>
								</div>
							</div>
							<div class="section">
								<label>SSN<small>999-99-9999</small></label>
								<div>
									<input id="ssn" type="text" tabindex="4"/>
									<span class="f_help"></span>
								</div>
							</div>
							<div class="section">
								<label>Product Key <small>a*-999-a999</small></label>
								<div>
									<input id="product" type="text" tabindex="5"/>
									<span class="f_help"></span>
								</div>
							</div>
							<div class="section">
								<label>Eye Script<small>~9.99 ~9.99 999</small></label>
								<div>
									<input id="eyescript" type="text" tabindex="6"/>
									<span class="f_help"></span>
								</div>
							</div>
							<div class="section">
								<label>Purchase Order<small>aaa-999-***</small></label>
								<div>
									<input id="po" type="text" tabindex="6"/>
									<span class="f_help"></span>
								</div>
							</div>
							<div class="section last">
								<label>Percent Process <small>99%</small></label>
								<div>
									<input id="pct" type="text" tabindex="6"/>
									<span class="f_help">Percent ProcessBar</span>
		<div class="bar">
			<div class="percent">
				<span style="width: 100%;"></span>
			</div>
			<div class="circle">
				<span>0%</span>
			</div>
		</div>
		<div class="clear"></div>
							</form>

<textarea name="" cols="100" rows="10">                               


</textarea>

</fieldset>







</div>
	</fieldset>
                       
                    </div>
							
                        </div><!-- End content -->
                    </div><!-- End full width -->
                        
					
                                           
					<!-- clear fix -->
					<div class="clear"></div>

                    <div id="footer"> &copy; Copyright 2012 <span class="tip"><a  href="#" title="Todos los derechos reservados" >imaginamos.com</a> </span> </div>

                </div> <!--// End inner -->
              </div> <!--// End content -->
              
             
              
</body>
</html>