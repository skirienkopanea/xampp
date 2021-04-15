<!doctype html>
<html lang="en">
	<?php $page_title = 'Edit Product - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (!isset($_SESSION['user'])){exit ("<h1>User restricted area</h1><h3>You are not logged in</br><a href='javascript:history.back()'>Go back</a></h3>");}?>
	
	<?php
	$product_id = $_GET['product_id'];
	
	$sql = "SELECT feedback FROM products WHERE id ='" . esc($product_id) ."' AND user ='" . esc($_SESSION['user']) ."'";
	$query = mysqli_query($db,$sql);
	if (!$query) {
	exit("Database query failed: " . mysqli_error($db));
	}
	$query = mysqli_query($db,$sql);
	if (!$query) {
	exit("Database query failed: " . mysqli_error($db));
	}
	$record = mysqli_fetch_assoc($query);
	
	$feedback = $record['feedback'];
	

	if ($feedback == 1) {
	$sql2 = "UPDATE products SET ";
	$sql2 .="feedback=0, ";
	$sql2 .="timestamp = NOW() ";
	$sql2 .="WHERE id='" . $product_id . "' AND user ='" . $_SESSION['user'] . "'";
	
	} else if (empty($feedback)) {
	$sql2 = "UPDATE products SET ";
	$sql2 .="feedback=1, ";
	$sql2 .="timestamp = NOW() ";
	$sql2 .="WHERE id='" . $product_id . "' AND user ='" . $_SESSION['user'] . "'";
	}
	
	$query2 = mysqli_query($db,$sql2);
	if($query2) {
		echo $feedback . '<br>' . $product_id;
		header("Location: index.php?user=" . $_SESSION['user'] . "#products");
	} else {
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
	}
	
db_disconnect($db); ?>