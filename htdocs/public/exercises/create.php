<!doctype html>
<html lang="en">
	<?php $page_title = 'Add Exercise - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (empty($_SESSION['admin'])) {exit ("<h1>Admin area only</h1><h3><a href='javascript:history.back()'>Go back</a></h3>");} ?>
	<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$record = [];

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
	
	//execute sql
	$sql = "INSERT INTO exercises (name,active,description,protraction,retraction,uprotation,downrotation,depression,elevation,introtation,extrotation,hamdom,quadom,ratioref,ratio,reference,timestamp) VALUES ('";
	
	$sql .= esc($record['name']) . "','";
	$sql .= esc($record['active']) . "','";
	$sql .= esc($record['description']) . "','";
	$sql .= $record['protraction'] . "','";
	$sql .= $record['retraction'] . "','";
	$sql .= $record['uprotation'] . "','";
	$sql .= $record['downrotation'] . "','";
	$sql .= $record['depression'] . "','";
	$sql .= $record['elevation'] . "','";
	$sql .= $record['introtation'] . "','";
	$sql .= $record['extrotation'] . "','";
	$sql .= $record['hamdom'] . "','";
	$sql .= $record['quadom'] . "','";
	$sql .= $record['ratioref'] . "','";
	$sql .= $record['ratio'] . "','";
	$sql .= esc($record['reference']) . "',";
	$sql .= "NOW())";
	
	$query = mysqli_query($db,$sql);
	
	//validate sql
	if (!$query) {//notify if there is an error
	exit("Database query failed: " . mysqli_error($db));
	//then stop everything else
} else {//success brings you back
	header("Location: " . "show.php?id=" . url(mysqli_insert_id($db)));
}

} else { // if not a post go back
	header("Location: " . "new.php");
}

?>
  <body>
  </body>
<?php db_disconnect($db);?>
</html>