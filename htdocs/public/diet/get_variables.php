<!doctype html>
<html lang="en">
	<?php $page_title = 'Diet - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php //if (!isset($_SESSION['user'])){exit ("<h1>User restricted area</h1><h3>You are not logged in</br><a href='javascript:history.back()'>Go back</a></h3>");} ?>
	<?php //if ($_SESSION['user'] != $_GET['user']){exit ("<h1>User restricted area</h1><h3>You are not logged in as " . $_GET['user'] . "</br><a href='javascript:history.back()'>Go back</a></h3>");} ?>
<?php
	if($_SERVER['REQUEST_METHOD'] =='POST'){
	$record = [];

	$record['product1'] = $_POST['product1'] ?? '';
	$record['product2'] = $_POST['product2'] ?? '';
	$record['product3'] = $_POST['product3'] ?? '';
	$record['product4'] = $_POST['product4'] ?? '';
	$record['product5'] = $_POST['product5'] ?? '';
	$record['product6'] = $_POST['product6'] ?? '';
	$record['product7'] = $_POST['product7'] ?? '';
	$record['product8'] = $_POST['product8'] ?? '';
	$record['product9'] = $_POST['product9'] ?? '';
	$record['product10'] = $_POST['product10'] ?? '';
	$record['product11'] = $_POST['product11'] ?? '';
	$record['product12'] = $_POST['product12'] ?? '';
	$record['product13'] = $_POST['product13'] ?? '';
	$record['product14'] = $_POST['product14'] ?? '';
	$record['product15'] = $_POST['product15'] ?? '';
	$record['product16'] = $_POST['product16'] ?? '';
	$record['grams1'] = $_POST['grams1'] ?? 0;
	$record['grams2'] = $_POST['grams2'] ?? 0;
	$record['grams3'] = $_POST['grams3'] ?? 0;
	$record['grams4'] = $_POST['grams4'] ?? 0;
	$record['grams5'] = $_POST['grams5'] ?? 0;
	$record['grams6'] = $_POST['grams6'] ?? 0;
	$record['grams7'] = $_POST['grams7'] ?? 0;
	$record['grams8'] = $_POST['grams8'] ?? 0;
	$record['grams9'] = $_POST['grams9'] ?? 0;
	$record['grams10'] = $_POST['grams10'] ?? 0;
	$record['grams11'] = $_POST['grams11'] ?? 0;
	$record['grams12'] = $_POST['grams12'] ?? 0;
	$record['grams13'] = $_POST['grams13'] ?? 0;
	$record['grams14'] = $_POST['grams14'] ?? 0;
	$record['grams15'] = $_POST['grams15'] ?? 0;
	$record['grams16'] = $_POST['grams16'] ?? 0;
	

	//validate($record); //I havent valided this values yet
	
	
	$sql ="UPDATE diet_plan SET ";
	$sql .="product1='" . $record['product1'] ."',";
	$sql .="product2='" . $record['product2'] ."',";
	$sql .="product3='" . $record['product3'] ."',";
	$sql .="product4='" . $record['product4'] ."',";
	$sql .="product5='" . $record['product5'] ."',";
	$sql .="product6='" . $record['product6'] ."',";
	$sql .="product7='" . $record['product7'] ."',";
	$sql .="product8='" . $record['product8'] ."',";
	$sql .="product9='" . $record['product9'] ."',";
	$sql .="product10='" . $record['product10'] ."',";
	$sql .="product11='" . $record['product11'] ."',";
	$sql .="product12='" . $record['product12'] ."',";
	$sql .="product13='" . $record['product13'] ."',";
	$sql .="product14='" . $record['product14'] ."',";
	$sql .="product15='" . $record['product15'] ."',";
	$sql .="product16='" . $record['product16'] ."',";
	$sql .="grams1='" . $record['grams1'] ."',";
	$sql .="grams2='" . $record['grams2'] ."',";
	$sql .="grams3='" . $record['grams3'] ."',";
	$sql .="grams4='" . $record['grams4'] ."',";
	$sql .="grams5='" . $record['grams5'] ."',";
	$sql .="grams6='" . $record['grams6'] ."',";
	$sql .="grams7='" . $record['grams7'] ."',";
	$sql .="grams8='" . $record['grams8'] ."',";
	$sql .="grams9='" . $record['grams9'] ."',";
	$sql .="grams10='" . $record['grams10'] ."',";
	$sql .="grams11='" . $record['grams11'] ."',";
	$sql .="grams12='" . $record['grams12'] ."',";
	$sql .="grams13='" . $record['grams13'] ."',";
	$sql .="grams14='" . $record['grams14'] ."',";
	$sql .="grams15='" . $record['grams15'] ."',";
	$sql .="grams16='" . $record['grams16'] ."'";
	
	$sql .="WHERE user='" . $_POST['user'] ."'";

	$query = mysqli_query($db,$sql);	
	
	if($query) {	
		header("Location: " . ('index.php?user=' . url($_GET['user'])));
	} else {
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
	}

} else {
}
?>