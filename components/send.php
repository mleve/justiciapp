<?php

	include_once 'curlHelper.php';
	
	$data = array();
	foreach($_GET as $key => $value){
		$data[$key] = $value;
	}		
//	echo print_r($data);

	
	$resp = make_post("http://civil.poderjudicial.cl/CIVILPORWEB/AtPublicoDAction.do", $data);
	
	echo $resp;
?>