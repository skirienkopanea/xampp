<!doctype html>
<html lang="en">
	<?php $page_title = 'View Exercise - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if(!isset($_GET['id'])){header("Location: " . "index.php");}?>
	<?php $id = $_GET['id'] ?? '';?>
	<?php
	$sql = "SELECT * FROM exercises WHERE id ='" . esc($id) ."'";
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
  <h1>Exercise Stats
  <?php	echo htm($record['name']);?>
	</h1>
	<h3><a class="action" href="index.php">Back to exercises list</a></h3>
	<div class="actions">
	<a class="action" href="<?php echo ('edit.php?id=' . url($record['id'])); ?>">Edit</a>
	<a class="action" href="<?php echo ('delete.php?id=' . url($record['id'])); ?>">Delete</a>
	</div>
  	<table class="list">
		<tr><th>last updated</th><td><?php echo htm($record['timestamp']); ?></td></tr>
		<tr><th>id</th><td><?php echo htm($record['id']); //To do: be able to sort by headers and apply search filters?></td></tr>
		<tr><th>name</th><td><?php echo htm($record['name']); ?></td></tr>
		<tr><th>active</th><td><?php echo $record['active'] == 1 ? 'True' : 'False'; ?></td></tr>
		<tr><th>description</th><td><?php echo htm($record['description']); ?></td></tr>
		<tr><th>protraction</th><td><?php echo htm($record['protraction']); ?></td></tr>
		<tr><th>retraction</th><td><?php echo htm($record['retraction']); ?></td></tr>
		<tr><th>uprotation</th><td><?php echo htm($record['uprotation']); ?></td></tr>
		<tr><th>downrotation</th><td><?php echo htm($record['downrotation']); ?></td></tr>
		<tr><th>depression</th><td><?php echo htm($record['depression']); ?></td></tr>
		<tr><th>elevation</th><td><?php echo htm($record['elevation']); ?></td></tr>
		<tr><th>introtation</th><td><?php echo htm($record['introtation']); ?></td></tr>
		<tr><th>extrotation</th><td><?php echo htm($record['extrotation']); ?></td></tr>
		<tr><th>hamdom</th><td><?php echo htm($record['hamdom']); ?></td></tr>
		<tr><th>quadom</th><td><?php echo htm($record['quadom']); ?></td></tr>
		<tr><th>ratioref</th><td><?php echo htm($record['ratioref']); ?></td></tr>
		<tr><th>ratio</th><td><?php echo htm($record['ratio']); ?></td></tr>
		<tr><th>reference</th><td><a class="action" href="<?php echo htm($record['reference']); ?>"><?php echo htm($record['reference']); ?></td></tr>
  	</table>	
  </body>
<?php mysqli_free_result($query); ?> 
<?php db_disconnect($db); ?>
</html>
