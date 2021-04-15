<!doctype html>
<html lang="en">
	<?php $page_title = 'Delete Exercise - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (empty($_SESSION['admin'])) {exit ("<h1>Admin area only</h1><h3><a href='javascript:history.back()'>Go back</a></h3>");} ?>
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$sql = "DELETE FROM exercises WHERE id ='" . esc($_GET['id']) . "'";
	$query = mysqli_query($db,$sql);
	if($query) {
	     $_SESSION['message'] = "Exercise with id: \"" . esc($_GET['id']) . "\" has been deleted";
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
	$sql = "SELECT name, description FROM exercises WHERE id ='" . esc($id) ."'";
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
	<h3><a class="action" href="index.php">Back to exercises list</a></h3>
	<h4>Are you sure you want to delete <?php echo htm($record['name']);?>?</h4>
    <form action="<?php echo ('delete.php?id=' . url($id)); ?>" method="post">
    <input type="submit" name="commit" value="Delete Exercise" />
    </form>
  </body>
<?php db_disconnect($db);?>
</html>