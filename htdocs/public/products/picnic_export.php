<!doctype html>
<html lang="en">
	<?php $page_title = 'Edit Product - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (!isset($_SESSION['user'])){exit ("<h1>User restricted area</h1><h3>You are not logged in</br><a href='javascript:history.back()'>Go back</a></h3>");}?>
	
	<?php
	$sql = "
	INSERT IGNORE INTO products (user,id,name,active,description,usda_id,price,weight_g_net,price_per_kg,fresh_days,origin,image,feedback)
	SELECT '" . $_SESSION['user'] . "',id,name,active,translation,usda_id,price,weight_g_net,price_per_kg,fresh_days,origin,image,0 FROM scrap_products";
	//WHERE id NOT IN (SELECT id FROM products)

	$query = mysqli_query($db,$sql);
	if($query) {
		echo $feedback . '<br>' . $product_id;
		header("Location: index.php");
	} else {
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
	}
	
db_disconnect($db); ?>