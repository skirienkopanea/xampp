<!doctype html>
<html lang="en">
	<?php $page_title = 'Edit Product - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (!isset($_SESSION['user'])){exit ("<h1>User restricted area</h1><h3>You are not logged in</br><a href='javascript:history.back()'>Go back</a></h3>");}?>
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$record = [];
	$record['id'] = $_POST['id'] ?? '';
	$record['name'] = $_POST['name'] ?? '';
	$record['active'] = $_POST['active'] ?? '';
	$record['description'] = $_POST['description'] ?? '';
	$record['usda_id'] = $_POST['usda_id'] ?? '';
	$record['price'] = $_POST['price'] ?? '';
	$record['weight_g_net'] = $_POST['weight_g_net'] ?? '';
	$record['fresh_days'] = $_POST['fresh_days'] ?? '';
	$record['origin'] = $_POST['origin'] ?? '';
	$record['image'] = $_POST['image'] ?? '';
	$record['feedback'] = $_POST['feedback'] ?? '';
	
	//validate($record);
	
	$sql = "UPDATE products SET ";
	$sql .="id='" . $record['id'] . "', ";
	$sql .="name='" . esc($record['name']) . "', ";
	$sql .="active='" . $record['active'] . "', ";
	$sql .="description='" . esc($record['description']) . "', ";
	$sql .="usda_id='" . esc(str_replace(array("\n", " "), "", $record['usda_id'])) . "', ";
	$sql .="price='" . esc($record['price']) . "', ";
	$sql .="weight_g_net='" . esc($record['weight_g_net']) . "', ";
	$sql .="price_per_kg='" . $record['price']/($record['weight_g_net']/1000) . "', ";
	$sql .="fresh_days='" . esc($record['fresh_days']) . "', ";
	$sql .="origin='" . esc($record['origin']) . "', ";
	$sql .="image='" . esc($record['image']) . "', ";
	$sql .="feedback='" . esc($record['feedback']) . "', ";
	$sql .="timestamp = NOW() ";
	$sql .="WHERE id='" . $_GET['id'] . "' AND user ='" . $_SESSION['user'] . "'";

	$query = mysqli_query($db,$sql);
	if($query) {
		header("Location: " . "show.php?id=" . url($record['id']));
	} else {
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
	}

} else if($_SERVER['REQUEST_METHOD'] == 'GET'){
	if (isset($_GET['js_usda'])){
		$sql = "UPDATE products SET usda_id ='" . $_GET['js_usda'] . "',timestamp = NOW() WHERE id='" . $_GET['id'] . "' AND user ='" . $_SESSION['user'] . "'";
		$query = mysqli_query($db,$sql);
		if($query) {
			header("Location: " . "show.php?id=" . url($_GET['id']));
		} else {
			db_disconnect($db);
			exit("Database query failed from: " . $sql . "<br>due to: " . mysqli_error($db));
		}
}
}
?>

	<?php if(!isset($_GET['id'])){header("Location: " . "index.php");}?>
	<?php $id = $_GET['id'] ?? '';?>
	<?php
	$sql = "SELECT * FROM products WHERE id ='" . $_GET['id'] . "' AND user ='" . $_SESSION['user'] . "'";
	$query = mysqli_query($db,$sql);
	if (!$query) {
	exit("Database query failed from: " . $sql . "<br>due to: " . mysqli_error($db));
}
if (!$id) {
	exit("Please provide an id");
}
	?>
	<?php $record = mysqli_fetch_assoc($query)?>
  <body>
	<table class="div">
	<tr>
	<td valign="top">
	<h1>Edit product</h1>
	<h3><a class="action" href="index.php">Back to products list</a></h3>
    <form action="<?php echo ('edit.php?id=' . url($id)); ?>" method="post">
      <div id="operations">
        <input type="submit" value="Update product" />
      </div>
	<table class="list">
        <tr><th>Picnic ID</th><td><input type="text" name="id" value="<?php echo htm($record['id']); ?>" /></td></tr>
		<tr><th>Name</th><td><input type="text" name="name" value="<?php echo htm($record['name']); ?>" /></td></tr>
		<tr><th>Active</th><td><input type="hidden" name="active" value="0" />
          <input type="checkbox" name="active" value="1" <?php echo (htm($record['active'])==1 ? 'checked' : '');?>></td></tr>
		<tr><th>Description</th><td><input type="text" name="description" value="<?php echo htm($record['description']); ?>" /></td></tr>
		<tr><th>USDA ID</th><td><input type="text" name="usda_id" value="<?php echo htm($record['usda_id']); ?>" /></td></tr>
		<tr><th>Price</th><td><input type="text" name="price" value="<?php echo htm($record['price']); ?>" /></td></tr>
		<tr><th>Weight</th><td><input type="text" name="weight_g_net" value="<?php echo htm($record['weight_g_net']); ?>" /></td></tr>
		<tr><th>Price per kg</th><td><?php echo htm($record['price_per_kg']); ?></td></tr>
		<tr><th>Fresh days</th><td><input type="text" name="fresh_days" value="<?php echo htm($record['fresh_days']); ?>" /></td></tr>
		<tr><th>Origin</th><td><input type="text" name="origin" value="<?php echo htm($record['origin']); ?>" /></td></tr>
		<tr><th>Image</th><td><input type="text" name="image" value="<?php echo htm($record['image']); ?>" /></td></tr>
		<tr><th>Review</th><td><input type="hidden" name="feedback" value="0" />
          <input type="checkbox" name="feedback" value="1" <?php echo (htm($record['feedback'])==1 ? 'checked' : '');?>></td></tr>
        <tr><th><input type="submit" value="Update Product" /></th><td></tr>
	</table>
	</td>
		<td valign="top">
 </form>		
          Food:<input type="text" name="search" id="search">
          <input type="button" value="click me" onclick="js()">
          <br>
<table id="demo">
</table>

<script>
function js(){
	document.getElementById("demo").innerHTML = "";
	
	var input = document.getElementById('search').value;
	
    var Httpreq = new XMLHttpRequest(); // a new request
    Httpreq.open("POST","https://api.nal.usda.gov/fdc/v1/search?api_key=v73sWJouvAivvY4g6cbvp3PktGPdNRUJrNIMlRmm",false);
	Httpreq.setRequestHeader("Content-Type", "application/json");
    Httpreq.send('{"generalSearchInput":"' + input + '","includeDataTypes":{"SR Legacy":true}}');
	var obj = JSON.parse(Httpreq.responseText);
	

	
for (var i = 0; i < obj.foods.length; i++) {
  var row = document.createElement("tr");
	  var node = document.createElement("a");
	  node.setAttribute('href', "edit.php?id=<?php echo htm($record['id']); ?>&js_usda="+JSON.stringify(obj.foods[i].fdcId));
	  var textnode = document.createTextNode(JSON.stringify(obj.foods[i].description));
	  node.appendChild(textnode);
      row.appendChild(node);
	document.getElementById("demo").appendChild(row);
}
}
</script>

		</td>
	</tr>
  	</table>

  </body>
<?php db_disconnect($db); ?>
</html>