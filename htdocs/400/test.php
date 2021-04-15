<?php

include('simple_html_dom.php');
require_once('../private/functions.php');
ini_set('max_execution_time',0);

$url = "https://www.museumkaart.nl/Services/SchatkamerService.svc/GetSearchResult?&start=0&count=1000&keyword=%27%27&city=%27%27&longitude=%27%27&lattitude=%27%27&distance=%2710%27&provinceFilter=%27%27&startdate=%27%27&enddate=%27%27&lastChance=0&filters=%27%27&lFacilities=%27%27&mFacilities=%27%27&type=1&card=1&cityName=%27%27&theme=&allMembers=&kidsProof=0";
$xml = simplexml_load_file($url);

foreach ($xml as $element){
	$link = $element->DetailUrl;
	$name = $element->SubTitle;
	$image = $element->ImageUrl;
	if(!empty($link)){
	//execute sql
		$sql0 = "INSERT INTO museums (
			link,
			name,
			image
			) VALUES ('" .esc($link). "','" .esc($name). "','" .esc($image). "')";
		$query0 = mysqli_query($db,$sql0);
		//validate sql
		if (!$query0) {//notify if there is an error
		exit("sql:<br>" . $sql0 . "<br>Database query failed: " . mysqli_error($db));
		//then stop everything else
		}
	}
}


// zaans museum 52.4735261,4.8224244
// kuperij 52.472500, 4.818639

$sql20 = "SELECT link,name FROM museums";
$query20 = mysqli_query($db,$sql20);

foreach ($query20 as $record20){
	$html = file_get_html('https://www.museumkaart.nl' . esc($record20['link']));

	$element = $html->find('a[class="important-link important-link--with-icon-left important-link--location"]',0);
	$coordinates_raw = $element->href;

	$lat_start = strpos($coordinates_raw, "%40")+3;
	$lat_length = strpos($coordinates_raw, ",")+0 - $lat_start;
	$lat = substr($coordinates_raw,$lat_start,$lat_length);

	$lng_start = strpos($coordinates_raw, ",")+1;
	$lng_length = strpos(substr($coordinates_raw,$lng_start), "&")+0;
	$lng = substr($coordinates_raw,$lng_start,$lng_length);
	
	$sql30 = "UPDATE museums SET lat = '" .$lat. "', lng ='" .$lng. "'
	WHERE link LIKE '" . esc($record20['link']) . "'";
	$query30 = mysqli_query($db,$sql30);
	//validate sql
	if (!$query30) {//notify if there is an error
	exit("sql:<br>" . $sql30 . "<br>Database query failed: " . mysqli_error($db));
	//then stop everything else
	}
}


?>

<!--

Javascript|https://maps.googleapis.com/maps/api/js?key=AIzaSyADmcdWm3xOObjqO9XehH3Hfe6rq37s7Ys&cdv=272|DnnBodyProvider|106)

Let mein1

-->