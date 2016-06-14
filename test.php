<?php
	//header('Content-Type: application/json');
   $arr = array('images' => array(array('img_url' => 'http://192.168.43.153/competition/codefest/image/img.jpg'), array('img_url' => 'http://192.168.43.153/competition/codefest/image/img.jpg'), array('img_url' => 'http://192.168.43.153/competition/codefest/image/img.jpg')));
			   echo json_encode($arr);
?>