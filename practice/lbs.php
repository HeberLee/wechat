<?php
	$url = "http://api.map.baidu.com/geocoder/v2/?location=39.934,116.329&output=json&pois=1&ak=tlO2LzUcEG08dRqzcvddkd69Y4lSLoLC";
	$str = file_get_contents($url);
	$str = json_decode($str);
	print_r($str->result->formatted_address);