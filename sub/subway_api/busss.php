<?php
	$ch = curl_init();
	$code=$_GET['code'];//역이름
	$url = 'http://swopenAPI.seoul.go.kr/api/subway'; /*URL*/
	$queryParams = '/'. '6d7852724779616d313137664b526c55';
	$queryParams .= '/'. urlencode('xml');
	$queryParams .= '/'. urlencode("firstLastTimetable");
	$queryParams .= '/'. urlencode('1');
	$queryParams .= '/'. urlencode('7');
	$queryParams .= '/'. urlencode($code);


	curl_setopt($ch, CURLOPT_URL,$url.$queryParams);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	$response = $ch;
//	print_r($response["timeTableList"]);
	$response = curl_exec($ch);
	
	curl_close($ch);


?>