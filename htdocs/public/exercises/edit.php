<!doctype html>
<html lang="en">
	<?php $page_title = 'Edit Exercise - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (empty($_SESSION['admin'])) {exit ("<h1>Admin area only</h1><h3><a href='javascript:history.back()'>Go back</a></h3>");} ?>
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$record = [];
	$record['id'] = $_GET['id'] ?? ''; //yes, it's done like that on purpose to avoid undefined 'id' in function validation or in the redirection
	$record['name'] = $_POST['name'] ?? '';
	$record['active'] = $_POST['active'] ?? '';
	$record['description'] = $_POST['description'] ?? '';
	$record['protraction'] = $_POST['protraction'] ?? '';
	$record['retraction'] = $_POST['retraction'] ?? '';
	$record['uprotation'] = $_POST['uprotation'] ?? '';
	$record['downrotation'] = $_POST['downrotation'] ?? '';
	$record['depression'] = $_POST['depression'] ?? '';
	$record['elevation'] = $_POST['elevation'] ?? '';
	$record['introtation'] = $_POST['introtation'] ?? '';
	$record['extrotation'] = $_POST['extrotation'] ?? '';
	$record['hamdom'] = $_POST['hamdom'] ?? '';
	$record['quadom'] = $_POST['quadom'] ?? '';
	$record['ratioref'] = $_POST['ratioref'] ?? '';
	$record['ratio'] = $_POST['ratio'] ?? '';	
	$record['reference'] = $_POST['reference'] ?? '';


	validate($record);
	
	$sql = "UPDATE exercises SET ";
	$sql .="name='" . esc($record['name']) . "', ";
	$sql .="active='" . ($record['active']) . "', ";
	$sql .="description='" . esc($record['description']) . "', ";
	$sql .="protraction='" . ($record['protraction']) . "', ";
	$sql .="retraction='" . ($record['retraction']) . "', ";
	$sql .="uprotation='" . ($record['uprotation']) . "', ";
	$sql .="downrotation='" . ($record['downrotation']) . "', ";
	$sql .="depression='" . ($record['depression']) . "', ";
	$sql .="elevation='" . ($record['elevation']) . "', ";
	$sql .="introtation='" . ($record['introtation']) . "', ";
	$sql .="extrotation='" . ($record['extrotation']) . "', ";
	$sql .="hamdom='" . ($record['hamdom']) . "', ";
	$sql .="quadom='" . ($record['quadom']) . "', ";
	$sql .="ratioref='" . ($record['ratioref']) . "', ";
	$sql .="ratio='" . ($record['ratio']) . "', ";
	$sql .="reference='" . esc($record['reference']) . "', "; 
	

	$sql .="`timestamp` = NOW() ";
	$sql .="WHERE id='" . esc($_GET['id']) . "'";

	$query = mysqli_query($db,$sql);
	if($query) {
		header("Location: " . "show.php?id=" . url($record['id']));
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
	<h1>Edit exercise</h1>
	<h3><a class="action" href="index.php">Back to exercises list</a></h3>
    <form action="<?php echo ('edit.php?id=' . url($id)); ?>" method="post">
	<table class="list">
		<tr><th>name</th><td><input type="text" name="name" value="<?php echo htm($record['name']); ?>" /></td></tr>
		<tr><th>Active</th><td><input type="hidden" name="active" value="0" />
          <input type="checkbox" name="active" value="1" <?php echo (htm($record['active'])==1 ? 'checked' : '');?>></td></tr>
		<tr><th>description</th><td><input type="text" name="description" value="<?php echo htm($record['description']); ?>" /></td></tr>
		<tr><th>protraction</th><td><input type="text" name="protraction" value="<?php echo htm($record['protraction']); ?>" /></td></tr>		
		<tr><th>retraction</th><td><input type="text" name="retraction" value="<?php echo htm($record['retraction']); ?>" /></td></tr>		
		<tr><th>uprotation</th><td><input type="text" name="uprotation" value="<?php echo htm($record['uprotation']); ?>" /></td></tr>		
		<tr><th>downrotation</th><td><input type="text" name="downrotation" value="<?php echo htm($record['downrotation']); ?>" /></td></tr>		
		<tr><th>depression</th><td><input type="text" name="depression" value="<?php echo htm($record['depression']); ?>" /></td></tr>		
		<tr><th>elevation</th><td><input type="text" name="elevation" value="<?php echo htm($record['elevation']); ?>" /></td></tr>		
		<tr><th>introtation</th><td><input type="text" name="introtation" value="<?php echo htm($record['introtation']); ?>" /></td></tr>		
		<tr><th>extrotation</th><td><input type="text" name="extrotation" value="<?php echo htm($record['extrotation']); ?>" /></td></tr>		
		<tr><th>hamdom</th><td><input type="text" name="hamdom" value="<?php echo htm($record['hamdom']); ?>" /></td></tr>
		<tr><th>quadom</th><td><input type="text" name="quadom" value="<?php echo htm($record['quadom']); ?>" /></td></tr>
		<tr><th>ratioref</th><td><input type="text" name="ratioref" value="<?php echo htm($record['ratioref']); ?>" /></td></tr>
		<tr><th>ratio</th><td><input type="text" name="ratio" value="<?php echo htm($record['ratio']); ?>" /></td></tr>
		<tr><th>reference</th><td><input type="text" name="reference" value="<?php echo htm($record['reference']); ?>" /></td></tr>
		
		


	</table>
      <div id="operations">
        <input type="submit" value="Update Exercise" />
      </div>
    </form>
  </body>
<?php db_disconnect($db); ?>
</html>
