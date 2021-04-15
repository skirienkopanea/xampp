<!doctype html>
<html lang="en">
	<?php $page_title = 'Diet - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php //if (!isset($_SESSION['user'])){exit ("<h1>User restricted area</h1><h3>You are not logged in</br><a href='javascript:history.back()'>Go back</a></h3>");} ?>
	<?php //if ($_SESSION['user'] != $_GET['user']){exit ("<h1>User restricted area</h1><h3>You are not logged in as " . $_GET['user'] . "</br><a href='javascript:history.back()'>Go back</a></h3>");} ?>
<?php
	if($_SERVER['REQUEST_METHOD'] =='POST'){
	$record = [];

	$sql0 = "SELECT * FROM diet_plan WHERE user='" . $_POST['user'] ."'";
	$query0 = mysqli_query($db,$sql0);
	$record0 = mysqli_fetch_assoc($query0);
	
	
	$record['product'][0] = $_POST['product1'] ?? '';
	$record['product'][1] = $_POST['product2'] ?? '';
	$record['product'][2] = $_POST['product3'] ?? '';
	$record['product'][3] = $_POST['product4'] ?? '';
	$record['product'][4] = $_POST['product5'] ?? '';
	$record['product'][5] = $_POST['product6'] ?? '';
	$record['product'][6] = $_POST['product7'] ?? '';
	$record['product'][7] = $_POST['product8'] ?? '';
	$record['product'][8] = $_POST['product9'] ?? '';
	$record['product'][9] = $_POST['product10'] ?? '';
	$record['product'][10] = $_POST['product11'] ?? '';
	$record['product'][11] = $_POST['product12'] ?? '';
	$record['product'][12] = $_POST['product13'] ?? '';
	$record['product'][13] = $_POST['product14'] ?? '';
	$record['product'][14] = $_POST['product15'] ?? '';
	$record['product'][15] = $_POST['product16'] ?? '';
	$record['grams'][0] = $_POST['grams1'] ?? 0;
	$record['grams'][1] = $_POST['grams2'] ?? 0;
	$record['grams'][2] = $_POST['grams3'] ?? 0;
	$record['grams'][3] = $_POST['grams4'] ?? 0;
	$record['grams'][4] = $_POST['grams5'] ?? 0;
	$record['grams'][5] = $_POST['grams6'] ?? 0;
	$record['grams'][6] = $_POST['grams7'] ?? 0;
	$record['grams'][7] = $_POST['grams8'] ?? 0;
	$record['grams'][8] = $_POST['grams9'] ?? 0;
	$record['grams'][9] = $_POST['grams10'] ?? 0;
	$record['grams'][10] = $_POST['grams11'] ?? 0;
	$record['grams'][11] = $_POST['grams12'] ?? 0;
	$record['grams'][12] = $_POST['grams13'] ?? 0;
	$record['grams'][13] = $_POST['grams14'] ?? 0;
	$record['grams'][14] = $_POST['grams15'] ?? 0;
	$record['grams'][15] = $_POST['grams16'] ?? 0;
	
	$i=1;
	$y=0;
	while($i<17){	
		if(empty($record0['grams'.$i]) || empty($record0['product'.$i])){			
			$record0['product'.$i] = $record['product'][$y];
			$record0['grams'.$i] = $record['grams'][$y];
			$y++;
		}
		$i++;
	}
	

	//validate($record); //I havent valided this values yet
	
	
	$sql ="UPDATE diet_plan SET ";
	$sql .="product1='"  . $record0['product1']   .  "',";
	$sql .="product2='"  . $record0['product2']   .  "',";
	$sql .="product3='"  . $record0['product3']   .  "',";
	$sql .="product4='"  . $record0['product4']   .  "',";
	$sql .="product5='"  . $record0['product5']   .  "',";
	$sql .="product6='"  . $record0['product6']   .  "',";
	$sql .="product7='"  . $record0['product7']   .  "',";
	$sql .="product8='"  . $record0['product8']   .  "',";
	$sql .="product9='"  . $record0['product9']   .  "',";
	$sql .="product10='" . $record0['product10']  .  "',";
	$sql .="product11='" . $record0['product11']  .  "',";
	$sql .="product12='" . $record0['product12']  .  "',";
	$sql .="product13='" . $record0['product13']  .  "',";
	$sql .="product14='" . $record0['product14']  .  "',";
	$sql .="product15='" . $record0['product15']  .  "',";
	$sql .="product16='" . $record0['product16']  .  "',";
	$sql .="grams1='"    . $record0['grams1']     .  "',";
	$sql .="grams2='"    . $record0['grams2']     .  "',";
	$sql .="grams3='"    . $record0['grams3']     .  "',";
	$sql .="grams4='"    . $record0['grams4']     .  "',";
	$sql .="grams5='"    . $record0['grams5']     .  "',";
	$sql .="grams6='"    . $record0['grams6']     .  "',";
	$sql .="grams7='"    . $record0['grams7']     .  "',";
	$sql .="grams8='"    . $record0['grams8']     .  "',";
	$sql .="grams9='"    . $record0['grams9']     .  "',";
	$sql .="grams10='"   . $record0['grams10']    .  "',";
	$sql .="grams11='"   . $record0['grams11']    .  "',";
	$sql .="grams12='"   . $record0['grams12']    .  "',";
	$sql .="grams13='"   . $record0['grams13']    .  "',";
	$sql .="grams14='"   . $record0['grams14']    .  "',";
	$sql .="grams15='"   . $record0['grams15']    .  "',";
	$sql .="grams16='"   . $record0['grams16']    .  "'";
	$sql .="WHERE user='" . $_POST['user'] ."'";

	$query = mysqli_query($db,$sql);
	
	if($query) {	
		header("Location: " . ('index.php?user=' . url($_GET['user'])));
	} else {
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
	}

} else {
	$sql0 = "SELECT * FROM diet_plan WHERE user='" . $_GET['user'] ."'";
	$query0 = mysqli_query($db,$sql0);
	$record0 = mysqli_fetch_assoc($query0);
	$i=1;
	while($i<17){	
		if(empty($record0['grams'.$i]) || empty($record0['product'.$i])){
			echo $record0['product'.$i] . ' - ' . $record0['grams'.$i] . $record0['product'][0];
		}
		$i++;
	}
	
}
?>