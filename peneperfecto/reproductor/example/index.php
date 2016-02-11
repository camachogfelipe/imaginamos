<?
    include_once './../../php/dao/daoConnection.php';
    include_once './../../php/entities/video.php';
    include_once './../../php/dao/videoDAO.php';
    
    $videoDAO = new videoDAO();
    $video = $videoDAO->getById(1);
    
?>
	<script type="text/javascript" src="flowplayer-3.2.6.min.js"></script>
	
	

        <body style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px;">
		<a  
			 href="http://pseudo01.hddn.com/vod/demo.flowplayervod/flowplayer-700.flv"
			 style="display:block;width:257px;height:170px"  
			 id="player"> 
		</a>
		<script>
                    flowplayer("player", "./../..<?=$video->getlink() ?>",{clip : { autoPlay: false, autoBuffering: true}} );
		</script>
        </body>