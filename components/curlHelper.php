<?php
function make_post($url,$fields){
// Get cURL resource
	$curl = curl_init();
	$query = http_build_query($fields);
	//return print_r($query);
	$query = "TIP_Consulta=2&irAccionAtPublico=Consultaee&COD_Tribunal=0&RUT_Consulta=7446877&RUT_DvConsulta=2";
// Set some options - we are passing in a useragent too here
	curl_setopt_array($curl, array(
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL => $url,
		CURLOPT_POST => 1,
		CURLOPT_POSTFIELDS => $query,
		CURLOPT_HTTPHEADER => array('Content-Type: application/x-www-form-urlencoded'),
		CURLOPT_COOKIEFILE => 'C:\Users\mario\AppData\local\temp\cookie', // set cookie file to given file
		CURLOPT_COOKIEJAR => 'C:\Users\mario\AppData\local\temp\cookie' // set same file as cookie jar
	));
// Send the request & save response to $resp
	$resp = curl_exec($curl);
// Close request to clear up some resources
	curl_close($curl);
	return $resp;
}

function make_get($url,$fields){
	// Get cURL resource
	$query = "";
	if($fields != null)
		$query = http_build_query($fields);
	$curl = curl_init();
	// Set some options - we are passing in a useragent too here
	curl_setopt_array($curl, array(
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL => $url."&".$query, //FIXME encontrar otra manera de pasar los gets
		CURLOPT_COOKIEFILE => '/tmp/cookies.txt', // set cookie file to given file
		CURLOPT_COOKIEJAR => '/tmp/cookies.txt' // set same file as cookie jar
	));
	// Send the request & save response to $resp
	$resp = curl_exec($curl);
	// Close request to clear up some resources
	curl_close($curl);
	return $resp;
}