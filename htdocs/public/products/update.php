<!doctype html>
<html lang="en">
	<?php $page_title = 'Update prices - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (!isset($_SESSION['user'])){exit ("<h1>User restricted area</h1><h3>You are not logged in</br><a href='javascript:history.back()'>Go back</a></h3>");}?>
	<?php if (empty($_SESSION['admin'])) {exit ("<h1>Admin area only</h1><h3><a href='javascript:history.back()'>Go back</a></h3>");} ?>
	<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$sql = "SELECT id,user,weight_g_net FROM products WHERE user ='" . esc($_SESSION['user']) ."'";
	$query = mysqli_query($db,$sql);
	if (!$query) {
	exit("Database query failed: " . mysqli_error($db)); }
	foreach($query as $record) {	
	ini_set('max_execution_time', '300');
	//web-scrap nutrients
	$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>array($auth)));
	$context = stream_context_create($opts); 
	$json = file_get_contents('https://storefront-prod.nl.picnicinternational.com/api/15/product/' . $record['id'],false,$context);
	$product = json_decode($json);
	$product_details = $product->product_details;
	$product_price = ($product_details->price)/100;
	
	//execute sql
	$sql = "UPDATE products SET ";
	$sql .="price_per_kg='" . $product_price/($record['weight_g_net']/1000) . "', ";
	$sql .="price='" . $product_price . "', ";
	$sql .="timestamp = NOW() ";
	$sql .="WHERE id='" . esc($record['id']) . "' AND user ='" . $_SESSION['user'] . "'";
	
	$query = mysqli_query($db,$sql);
	if($query) {
	} else {
		return;
	}

}
header("Location: " . "index.php");
}

?>
  <body>
  <h1>Do you want to overwrite all prices with the most recent ones?</h1>
	<h3><a class="action" href="index.php">Back to products list</a></h3>
  <form action="update.php" method="post">
    <table class="list">
    </table>
	<input type="submit" value="Continue" />
	</form>
  </body>
<?php db_disconnect($db);?>
</html>