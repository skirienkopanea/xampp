<!doctype html>
<html lang="en">
	<?php $page_title = 'Delete Product - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (!isset($_SESSION['user'])){exit ("<h1>User restricted area</h1><h3>You are not logged in</br><a href='javascript:history.back()'>Go back</a></h3>");}?>
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$sql = "DELETE FROM products WHERE id='" . esc($_GET['id']) . "' AND user ='" . $_SESSION['user'] . "'";
	$query = mysqli_query($db,$sql);
	if($query) {
	    $_SESSION['message'] = "Product with id: \"" . esc($_GET['id']) . "\" has been deleted";
		header("Location: index.php");
	} else {
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
	}
} else {
}
?>
	<?php if(!isset($_GET['id'])){header("Location: " . "index.php");}?>
	<?php $id = $_GET['id'] ?? '';?>
	<?php
	$sql = "SELECT id,name,image FROM products WHERE id='" . esc($_GET['id']) . "' AND user ='" . $_SESSION['user'] . "'";
	$query = mysqli_query($db,$sql);
	if (!$query) {
	exit("Database query failed: " . mysqli_error($db));
}
if (!$id) {
	exit("Please provide an id");
}
	?>
	<?php $record = mysqli_fetch_assoc($query)?>
  <body>
    <h1>Delete
<?php echo htm($record['name']);?> ID: <?php echo htm($id); ?></h1>
	<h3><a class="action" href="index.php">Back to products list</a></h3>
	<table class="div">
	<tr><td>
	<h4>Are you sure you want to delete <?php echo htm($record['name'])?>?</h4>
    <form action="<?php echo ('delete.php?id=' . url($id)); ?>" method="post">
    <input type="submit" name="commit" value="Delete Product" />
	</td>
	<td>
	<img src="<?php echo 'https://storefront-prod.nl.picnicinternational.com/static/images/' . htm($record['image'] . '/small.png'); ?>" onerror="this.style.display='none'">
	</td></tr>
    </form>
  </body>
<?php db_disconnect($db);?>
</html>