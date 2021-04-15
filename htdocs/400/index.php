<html lang="en">
<head>
<?php session_start();?>
<?php
function db_connect(){
	$connection = mysqli_connect("localhost","web","webpassword","coolwork_db");
	return $connection;
}

function db_disconnect($connection){
	if(isset($connection)){
		mysqli_close($connection);
	}
}
$db = db_connect();
if(mysqli_connect_errno()) {
  $msg = "Database connection failed: ";
  $msg .= mysqli_connect_error();
  $msg .= " (" . mysqli_connect_errno() . ")";
  exit($msg);
}
function url($string=""){
	return htmlspecialchars(urlencode($string)); //echoing a url; check 'href', 'form action' and 'header' -- because of this nest no need to use htm for urls again
}
function htm($string=""){
	return htmlspecialchars($string); //check all echo as plain text (spaces are respected instead of replaced by + or 20%
}

function esc($string){
	return mysqli_real_escape_string(db_connect(), $string); //check sql scripts
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<?php if(!isset($page_title)) { $page_title = '400NL'; } ?>
<title><?php echo $page_title;?></title>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
 <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
   integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
   crossorigin=""></script>
   <style type="text/css">
body {
	padding: 0;
	margin: 0;
}
html, body, #mapid {
	height: 100%;
	width: 100vw;
}
</style>
 </head>
<?php
//                         RUN THESE ONCE A YEAR                      //
//web-scrap stations
//	$opts = array(
// 'http'=>array(
//   'method'=>"GET",
//   'header'=>array("Ocp-Apim-Subscription-Key: 8db7682d96e44daf866c89e00d8fcd44")));
//	$context = stream_context_create($opts); 
//	$json = file_get_contents('https://gateway.apiportal.ns.nl/public-reisinformatie/api/v2/stations',false,$context);
//	$data = json_decode($json,true);
//	$stations = $data['payload'];
//	foreach($stations as $record){
//	//execute sql
//	$sql = "INSERT INTO ns (
//		code
//		,UICCode
//		,land
//		,name
//		,type
//		,lat
//		,lng
//		) VALUES ('"
//		. $record['code'] . "','"
//		. $record['UICCode'] . "','"
//		. $record['land'] . "','"
//		. esc($record['namen']['lang']) . "','"
//		. $record['stationType'] . "','"
//		. $record['lat'] . "','"
//		. $record['lng'] . "')";
//	$query = mysqli_query($db,$sql);
//	//validate sql
//	if (!$query) {//notify if there is an error
//	continue;
//	//then stop everything else
//	}
//}

//include('simple_html_dom.php');
//ini_set('max_execution_time', '0');
//
//$url = "https://www.museumkaart.nl/Services/SchatkamerService.svc/GetSearchResult?&start=0&count=1000&keyword=%27%27&city=%27%27&longitude=%27%27&lattitude=%27%27&distance=%2710%27&provinceFilter=%27%27&startdate=%27%27&enddate=%27%27&lastChance=0&filters=%27%27&lFacilities=%27%27&mFacilities=%27%27&type=1&card=1&cityName=%27%27&theme=&allMembers=&kidsProof=0";
//$xml = simplexml_load_file($url);
//
//foreach ($xml as $element){
//	$link = $element->DetailUrl;
//	$name = $element->SubTitle;
//	if(!empty($link)){
//	//execute sql
//		$sql0 = "INSERT INTO museums (
//			link,
//			name
//			) VALUES ('" .esc($link). "','" .esc($name). "')";
//		$query0 = mysqli_query($db,$sql0);
//		//validate sql
//		if (!$query0) {//notify if there is an error
//		exit("sql:<br>" . $sql0 . "<br>Database query failed: " . mysqli_error($db));
//		//then stop everything else
//		}
//	}
//}
//
//
//// zaans museum 52.4735261,4.8224244
//// kuperij 52.472500, 4.818639
//
//$sql20 = "SELECT link,name FROM museums";
//$query20 = mysqli_query($db,$sql20);
//
//foreach ($query20 as $record20){
//	$html = file_get_html('https://www.museumkaart.nl' . esc($record20['link']));
//
//	$element = $html->find('a[class="important-link important-link--with-icon-left important-link--location"]',0);
//	$coordinates_raw = $element->href;
//
//	$lat_start = strpos($coordinates_raw, "%40")+3;
//	$lat_length = strpos($coordinates_raw, ",")+0 - $lat_start;
//	$lat = substr($coordinates_raw,$lat_start,$lat_length);
//
//	$lng_start = strpos($coordinates_raw, ",")+1;
//	$lng_length = strpos(substr($coordinates_raw,$lng_start), "&")+0;
//	$lng = substr($coordinates_raw,$lng_start,$lng_length);
//	
//	$sql30 = "UPDATE museums SET lat = '" .$lat. "', lng ='" .$lng. "'
//	WHERE link LIKE '" . esc($record20['link']) . "'";
//	$query30 = mysqli_query($db,$sql30);
//	//validate sql
//	if (!$query30) {//notify if there is an error
//	exit("sql:<br>" . $sql30 . "<br>Database query failed: " . mysqli_error($db));
//	//then stop everything else
//	}
//}
?>

<?php
//web-scrap ov only when I login
	
	if ($_SESSION['ov']) {
		$opts = array(
	 'http'=>array(
	   'method'=>"GET",
	   'header'=>array("Authorization: Basic c2VyZ2lvLmtpcmllbmtvQGZyaXNzLmNvbTovRXh5NnNtK0xCb3Z2YUI1dG01VEI4SE9zeVlPbzYxUnNZdFk3dXJ2ZUdVPQ==")));
		$context = stream_context_create($opts); 
		$json = file_get_contents('https://customer.ns-mlab.nl/api/v2/traveltransactions/business/3528010494348424?startDateTime=01-08-2019',false,$context);
		$data = json_decode($json,true);
		$payload = $data['payload'];
		$transactions = $payload['transactions'];
		
		foreach($transactions as $transaction){
			if($transaction['displayName'] == 'Trein') {
				$sql = "INSERT IGNORE INTO ov (
					transactionId
					,ov_name
					,checkout
					,timestamp
					) VALUES
					('"
					. esc($transaction['transactionId']) . "','"
					. esc($transaction['startStation']) . "',"
					. "0,'"
					. esc(substr(str_replace('T', ' ',$transaction['fromDate']),0,strpos($transaction['fromDate'], "+"))) . "'
					),('"
					. esc($transaction['transactionId']) . "','"
					. esc($transaction['endStation']) . "',"
					. "1,'"
					. esc(substr(str_replace('T', ' ',$transaction['toDate']),0,strpos($transaction['toDate'], "+"))) . "');";
				$query = mysqli_query($db,$sql);
				//validate sql
				if (!$query) {//notify if there is an error
				echo "Fout met " . $sql . "<br> reden:" . mysqli_error($db) . "<br>";
				//then stop everything else
				}
			}
		}
		
		$opts = array(
	 'http'=>array(
	   'method'=>"GET"));
		$context = stream_context_create($opts);
		$json = file_get_contents('https://api.instagram.com/v1/users/20933645598/media/recent/?access_token=20933645598.a1c17bd.4cc15c4c9a1d4560a759d4e39eea309d',false,$context);
		$text = json_decode($json,true);
		$posts = $text['data'];
		
$sql3 = "SELECT * FROM ns";
$query3 = mysqli_query($db,$sql3);

foreach ($query3 as $record3) {
	foreach($posts as $post){
			if($post['caption']['text'] == $record3['name']) {
				$sql = "UPDATE ns SET ig = '" . esc($post['link']) . "'	WHERE code = '" . $record3['code'] . "';";
				$query = mysqli_query($db,$sql);
				//validate sql
				if (!$query) {//notify if there is an error
				echo "Fout met " . $sql . "<br> reden:" . mysqli_error($db) . "<br>";
			}
		}
	}
}
		
		
		
	}
	$_SESSION['ov'] = 0;
?>

<?php
$sql = "SELECT * FROM ns_check";
$query = mysqli_query($db,$sql);
$total = mysqli_num_rows($query);

$sql2 = "SELECT * FROM ns_check WHERE timestamp IS NOT NULL";
$query2 = mysqli_query($db,$sql2);
$visited = mysqli_num_rows($query2);
?> 

  <body>
   <div id="mapid">
       <script>
	   //start map
        var mymap = L.map('mapid').setView([52, 5.3], 7);
		

//set tile	
L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager_labels_under/{z}/{x}/{y}{r}.png', {
	attribution: '<?php echo $visited . ' out of ' . $total . ' stations visited (' . round($visited/$total*100 ,2,PHP_ROUND_HALF_UP) . '%)'?><br>&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a> &copy; <a href="https://ns.nl">NS</a>',
	subdomains: 'abcd',
	maxZoom: 19
}).addTo(mymap);

//import marker colors
var inactive = L.icon({
	iconUrl: 'inactive.png',
	iconSize:     [14, 14], // size of the icon
	iconAnchor:   [7, 7], // point of the icon which will correspond to marker's location
	//shadowAnchor: [4, 62],  // the same for the shadow
	popupAnchor:  [0, -15] // point from which the popup should open relative to the iconAnchor
});

var active = L.icon({
	iconUrl: 'active.png',
	iconSize:     [14, 14], // size of the icon
	iconAnchor:   [7, 7], // point of the icon which will correspond to marker's location
	//shadowAnchor: [4, 62],  // the same for the shadow
	popupAnchor:  [0, -15] // point from which the popup should open relative to the iconAnchor
});

var museum = L.icon({
	iconUrl: 'museum.png',
	iconSize:     [14, 14], // size of the icon
	iconAnchor:   [7, 7], // point of the icon which will correspond to marker's location
	//shadowAnchor: [4, 62],  // the same for the shadow
	popupAnchor:  [0, -14] // point from which the popup should open relative to the iconAnchor
});




//markers

<?php
foreach($query as $marker) {?>


var <?php echo $marker['code'];?> = L.marker([<?php echo $marker['lat'];?>, <?php echo $marker['lng'];?>],{icon:<?php if ($marker['timestamp']){echo 'active';} else {echo 'inactive';}?>}).addTo(mymap);

<?php echo $marker['code'];?>.bindPopup("<b><center><a href='https://en.wikipedia.org/wiki/<?php echo $marker['name'];?>_railway_station'><?php echo $marker['name'];?></a></b><?php if ($marker['timestamp']) {echo '<br>First visited on ' . $marker['timestamp'];}?><br><a href='<?php echo $marker['ig'];?>' style='text-decoration: none'><img width=250 src='<?php echo $marker['ig'] . 'media/?size=m';?>' onerror=\"this.style.display='none'\"><img></a></center>");

<?php } ?>

<?php
$sql_m = "SELECT * FROM museums";
$query_m = mysqli_query($db,$sql_m);

$museumid = 'a';
?>
<?php
foreach($query_m as $museum) {
	if($museum['lat']){
	?>

var <?php echo $museumid;?> = L.marker([<?php echo $museum['lat'];?>, <?php echo $museum['lng'];?>],{icon:<?php echo 'museum';?>}).addTo(mymap);

<?php echo $museumid;?>.bindPopup("<b><center><a href='https://www.museumkaart.nl<?php echo esc($museum['link']);?>'><?php echo esc($museum['name']);?></b><br><img width=250 src='<?php echo 'https:' . str_replace('\\', '/',$museum['image']);?>' onerror=\"this.style.display='none'\"><img></a></center>");

<?php
$museumid .= 'a';
	}
} ?>



//var circle = L.circle([52.3791, 4.9003], {
//	color: 'red',
//	fillColor: '#f03',
//	fillOpacity: .5,
//	radius: 20000
//}).addTo(mymap);

//var polygon = L.polygon([
//	[52.0907, 5.1214],
//	[52.0811, 4.3242],
//	[52.3791, 4.9003]
//]).addTo(mymap);

//var latlngs = [
//    [52.0907, 5.1214],
//	[52.0811, 4.3242],
//	[52.3791, 4.9003],
//	[51.9245, 4.4695]
//];
//var polyline = L.polyline(latlngs, {color: 'red'}).addTo(mymap);

//details

//circle.bindPopup("I am a circle.");
//polyline.bindPopup("I am a polyline.");

//popup2 = L.popup()
//	.setLatLng([51.9245, 4.4695])
//	.setContent("I am a standalone popup.")
//	.openOn(mymap);
	
//functions

//var popup = L.popup();
//
//function onMapClick(e) {
//	popup
//		.setLatLng(e.latlng)
//		.setContent("You clicked the map at " + e.latlng.toString())
//		.openOn(mymap);
//}
//
//mymap.on('click', onMapClick);

    </script>
   
   </div>
  </body>
</html>