<?php session_start(); ?>
<?php if (empty($_SESSION['admin'])) {exit ("<h1>Admin area only</h1><h3><a href='javascript:history.back()'>Go back</a></h3>");} ?>
<?php

$db = mysqli_connect("localhost","coolwork_db",".t66yKQ1B8@Nce","coolwork_db");
if(mysqli_connect_errno()) {
  $msg = "Database connection failed: ";
  $msg .= mysqli_connect_error();
  $msg .= " (" . mysqli_connect_errno() . ")";
  exit($msg);
}

$sql = "SELECT * FROM scrap_products";
	$query = mysqli_query($db,$sql);
	if (!$query) {
	exit("Database query failed: " . mysqli_error($db));
	}
	
	$filename = 'products.csv';
	
	
	header("Content-type: text/csv");
	
	header("Content-Disposition: attachment; filename=$filename");
	
	$output = fopen("php://output", "w");
	
	$record = mysqli_fetch_assoc($query);
	$header = array_keys($record);
	
	fputcsv($output, $header);
	
	foreach($query as $record) {
		fputcsv($output,$record);
	}
	
	fclose($output);
?>