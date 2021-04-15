<!doctype html>
<html lang="en">
	<?php $page_title = 'Delete Product - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (empty($_SESSION['admin'])) {exit ("<h1>Admin area only</h1><h3><a href='javascript:history.back()'>Go back</a></h3>");} ?>
<?php
	if(isset($_GET['id']) && $_GET['table'] == 'main_categories'){
	$sql = "DELETE FROM main_categories WHERE id='" . esc($_GET['id']) . "'";
	$query = mysqli_query($db,$sql);
	if($query) {
	    $_SESSION['message'] = "Category with id: \"" . esc($_GET['id']) . "\" has been deleted";
		header("Location: picnic_index.php");
	} else {
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
	}
}

	if($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['table'] == 'main_categories'){
	$sql = "TRUNCATE main_categories";
	$query = mysqli_query($db,$sql);
	if($query) {
	    $_SESSION['message'] = "All Categories have been removed";
		header("Location: picnic_index.php");
	} else {
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
	}
}

	if(isset($_GET['id']) && $_GET['table'] == 'sub_categories'){
	$sql = "DELETE FROM sub_categories WHERE id='" . esc($_GET['id']) . "'";
	$query = mysqli_query($db,$sql);
	if($query) {
	    $_SESSION['message'] = "Sub Category with id: \"" . esc($_GET['id']) . "\" has been deleted";
		header("Location: picnic_index.php");
	} else {
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
	}
}

	if($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['table'] == 'sub_categories'){
	$sql = "TRUNCATE sub_categories";
	$query = mysqli_query($db,$sql);
	if($query) {
	    $_SESSION['message'] = "All Sub Categories have been removed";
		header("Location: picnic_index.php" . "?page_p=" . $_SESSION['page_p'] . "&page=" . $_SESSION['page'] . "#scrap");
	} else {
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
	}
}

	if(isset($_GET['id']) && $_GET['table'] == 'scrap_products'){
	$sql = "DELETE FROM scrap_products WHERE id='" . esc($_GET['id']) . "'";
	$query = mysqli_query($db,$sql);
	if($query) {
	    $_SESSION['message'] = "Product with id: \"" . esc($_GET['id']) . "\" has been deleted";
		header("Location: picnic_index.php" . "?page_p=" . $_SESSION['page_p'] . "&page=" . $_SESSION['page'] . "#scrap");
	} else {
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
	}
}

	if($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['table'] == 'scrap_products'){
	$sql = "TRUNCATE scrap_products";
	$query = mysqli_query($db,$sql);
	if($query) {
	    $_SESSION['message'] = "All products have been removed";
		header("Location: picnic_index.php" . "?page_p=" . $_SESSION['page_p'] . "&page=" . $_SESSION['page'] . "#scrap");
	} else {
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
	}
}
db_disconnect($db);?>
</html>