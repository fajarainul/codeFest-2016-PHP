<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$image = $_POST['image'];

			
		$path = "image/test.jpg";
		
		$actualpath = "http://localhost/competition/codefest/$path";
		
		
		if(file_put_contents($path,base64_decode($image))){
			$arr = array('images' => array(array('img_url' => 'http://192.168.43.153/competition/codefest/image/img3.jpg'), array('img_url' => 'http://192.168.43.153/competition/codefest/image/img1.jpg'), array('img_url' => 'http://192.168.43.153/competition/codefest/image/buku2.jpg')));
			
			echo json_encode($arr);
		}else{
			echo "error";
		}
			
		
		
		//echo "Error";
	}
?>