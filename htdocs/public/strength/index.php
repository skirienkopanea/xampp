<!doctype html>
<html lang="en">
	<?php $page_title = 'Strength stats - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (!isset($_SESSION['user'])){exit ("<h1>User restricted area</h1><h3>You are not logged in</br><a href='javascript:history.back()'>Go back</a></h3>");} ?>
	<?php if ($_SESSION['user'] != $_GET['user']){exit ("<h1>User restricted area</h1><h3>You are not logged in as " . $_GET['user'] . "</br><a href='javascript:history.back()'>Go back</a></h3>");} ?>
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$record = [];
	
	if (empty($_POST['pr1'])) { //
	$record['pr1'] = 0;
	} else {
	$record['pr1'] = $_POST['pr1'];
	}
	if (empty($_POST['pr2'])) {
	$record['pr2'] = 0;
	} else {
	$record['pr2'] = $_POST['pr2'];
	}
	if (empty($_POST['pr3'])) {
	$record['pr3'] = 0;
	} else {
	$record['pr3'] = $_POST['pr3'];
	}
	if (empty($_POST['pr4'])) {
	$record['pr4'] = 0;
	} else {
	$record['pr4'] = $_POST['pr4'];
	}
	if (empty($_POST['pr5'])) {
	$record['pr5'] = 0;
	} else {
	$record['pr5'] = $_POST['pr5'];
	}
	if (empty($_POST['pr6'])) {
	$record['pr6'] = 0;
	} else {
	$record['pr6'] = $_POST['pr6'];
	}
	if (empty($_POST['pr7'])) {
	$record['pr7'] = 0;
	} else {
	$record['pr7'] = $_POST['pr7'];
	}
	if (empty($_POST['pr8'])) {
	$record['pr8'] = 0;
	} else {
	$record['pr8'] = $_POST['pr8'];
	}
	if (empty($_POST['pr9'])) {
	$record['pr9'] = 0;
	} else {
	$record['pr9'] = $_POST['pr9'];
	}
	if (empty($_POST['pr10'])) {
	$record['pr10'] = 0;
	} else {
	$record['pr10'] = $_POST['pr10'];
	}
	if (empty($_POST['pr11'])) {
	$record['pr11'] = 0;
	} else {
	$record['pr11'] = $_POST['pr11'];
	}
	if (empty($_POST['pr12'])) {
	$record['pr12'] = 0;
	} else {
	$record['pr12'] = $_POST['pr12'];
	}
	if (empty($_POST['pr13'])) {
	$record['pr13'] = 0;
	} else {
	$record['pr13'] = $_POST['pr13'];
	}
	if (empty($_POST['pr14'])) {
	$record['pr14'] = 0;
	} else {
	$record['pr14'] = $_POST['pr14'];
	}
	if (empty($_POST['pr15'])) {
	$record['pr15'] = 0;
	} else {
	$record['pr15'] = $_POST['pr15'];
	}
	if (empty($_POST['pr16'])) {
	$record['pr16'] = 0;
	} else {
	$record['pr16'] = $_POST['pr16'];
	}
	
	
	
	validate($record);
	
	$sql = "INSERT INTO strength (user,pr1,pr2,pr3,pr4,pr5,pr6,pr7,pr8,pr9,pr10,pr11,pr12,pr13,pr14,pr15,pr16,timestamp) VALUES ('";
	$sql .= $_GET['user'] . "','";
	$sql .= $record['pr1'] . "','";
	$sql .= $record['pr2'] . "','";
	$sql .= $record['pr3'] . "','";
	$sql .= $record['pr4'] . "','";
	$sql .= $record['pr5'] . "','";
	$sql .= $record['pr6'] . "','";
	$sql .= $record['pr7'] . "','";
	$sql .= $record['pr8'] . "','";
	$sql .= $record['pr9'] . "','";
	$sql .= $record['pr10'] . "','";
	$sql .= $record['pr11'] . "','";
	$sql .= $record['pr12'] . "','";
	$sql .= $record['pr13'] . "','";
	$sql .= $record['pr14'] . "','";
	$sql .= $record['pr15'] . "','";
	$sql .= $record['pr16'] . "',";
	$sql .= "NOW())";

	$query = mysqli_query($db,$sql);
	if($query) {
		header("Location: " . ('redirect.php?user=' . url($_GET['user'])));
	} else {
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
	}

} else {
}
?>
	<?php if(!isset($_GET['user'])){header("Location: " . "../../index.php");}?>
	<?php $user = $_GET['user'] ?? '';?>
	<?php
	$sql_lift1 = "SELECT workouts.user, workouts.timestamp,
	workouts.exercise1, workouts.sets1, workouts.reps1, workouts.weight1, CAST(workouts.weight1 / intensity.pof1rm AS DECIMAL(5,2)) AS hyp1rm
	FROM workouts
	INNER JOIN intensity AS intensity ON CONCAT(intensity.sets,intensity.reps) = CONCAT(workouts.sets1,workouts.reps1)";
	
	$sql_lift1 .= " WHERE user ='" . esc($user) ."' ORDER BY timestamp DESC";
	$query_lift1 = mysqli_query($db,$sql_lift1);
	if (!$query_lift1) {
	exit("Database query failed: " . mysqli_error($db));
}
if (!$user) {
	exit("<h1>Invalid username</h1><h3><a href='javascript:history.back()'>Go back and log in</a></h3>");
}
	?>
	<?php $record = mysqli_fetch_assoc($query_lift1)?>
	
	<?php 
	
	$sql_lift2 = "SELECT workouts.timestamp,
	(workouts.exercise2), (workouts.sets2), (workouts.reps2), (workouts.weight2), CAST((workouts.weight2)/ intensity.pof1rm AS DECIMAL(5,2)) AS hyp1rm
	FROM workouts
	INNER JOIN intensity AS intensity ON CONCAT(intensity.sets,intensity.reps) = CONCAT((workouts.sets2),(workouts.reps2))";
	$sql_lift2 .= " WHERE user ='" . esc($user) ."' ORDER BY timestamp DESC";
	$query_lift2 = mysqli_query($db,$sql_lift2);
	
	$sql_lift3 = "SELECT workouts.timestamp,
	(workouts.exercise3), (workouts.sets3), (workouts.reps3), (workouts.weight3), CAST((workouts.weight3)/ intensity.pof1rm AS DECIMAL(5,2)) AS hyp1rm
	FROM workouts
	INNER JOIN intensity AS intensity ON CONCAT(intensity.sets,intensity.reps) = CONCAT((workouts.sets3),(workouts.reps3))";
	$sql_lift3 .= " WHERE user ='" . esc($user) ."' ORDER BY timestamp DESC";
	$query_lift3 = mysqli_query($db,$sql_lift3);
	
	$sql_lift4 = "SELECT workouts.timestamp,
	(workouts.exercise4), (workouts.sets4), (workouts.reps4), (workouts.weight4), CAST((workouts.weight4)/ intensity.pof1rm AS DECIMAL(5,2)) AS hyp1rm
	FROM workouts
	INNER JOIN intensity AS intensity ON CONCAT(intensity.sets,intensity.reps) = CONCAT((workouts.sets4),(workouts.reps4))";
	$sql_lift4 .= " WHERE user ='" . esc($user) ."' ORDER BY timestamp DESC";
	$query_lift4 = mysqli_query($db,$sql_lift4);
	
	$sql_lift5 = "SELECT workouts.timestamp,
	(workouts.exercise5), (workouts.sets5), (workouts.reps5), (workouts.weight5), CAST((workouts.weight5)/ intensity.pof1rm AS DECIMAL(5,2)) AS hyp1rm
	FROM workouts
	INNER JOIN intensity AS intensity ON CONCAT(intensity.sets,intensity.reps) = CONCAT((workouts.sets5),(workouts.reps5))";
	$sql_lift5 .= " WHERE user ='" . esc($user) ."' ORDER BY timestamp DESC";
	$query_lift5 = mysqli_query($db,$sql_lift5);
	
	$sql_lift6 = "SELECT workouts.timestamp,
	(workouts.exercise6), (workouts.sets6), (workouts.reps6), (workouts.weight6), CAST((workouts.weight6)/ intensity.pof1rm AS DECIMAL(5,2)) AS hyp1rm
	FROM workouts
	INNER JOIN intensity AS intensity ON CONCAT(intensity.sets,intensity.reps) = CONCAT((workouts.sets6),(workouts.reps6))";
	$sql_lift6 .= " WHERE user ='" . esc($user) ."' ORDER BY timestamp DESC";
	$query_lift6 = mysqli_query($db,$sql_lift6);
	
	$sql_lift7 = "SELECT workouts.timestamp,
	(workouts.exercise7), (workouts.sets7), (workouts.reps7), (workouts.weight7), CAST((workouts.weight7)/ intensity.pof1rm AS DECIMAL(5,2)) AS hyp1rm
	FROM workouts
	INNER JOIN intensity AS intensity ON CONCAT(intensity.sets,intensity.reps) = CONCAT((workouts.sets7),(workouts.reps7))";
	$sql_lift7 .= " WHERE user ='" . esc($user) ."' ORDER BY timestamp DESC";
	$query_lift7 = mysqli_query($db,$sql_lift7);
	
	$sql_lift8 = "SELECT workouts.timestamp,
	(workouts.exercise8), (workouts.sets8), (workouts.reps8), (workouts.weight8), CAST((workouts.weight8)/ intensity.pof1rm AS DECIMAL(5,2)) AS hyp1rm
	FROM workouts
	INNER JOIN intensity AS intensity ON CONCAT(intensity.sets,intensity.reps) = CONCAT((workouts.sets8),(workouts.reps8))";
	$sql_lift8 .= " WHERE user ='" . esc($user) ."' ORDER BY timestamp DESC";
	$query_lift8 = mysqli_query($db,$sql_lift8);
	
	$sql_lift9 = "SELECT workouts.timestamp,
	(workouts.exercise9), (workouts.sets9), (workouts.reps9), (workouts.weight9), CAST((workouts.weight9)/ intensity.pof1rm AS DECIMAL(5,2)) AS hyp1rm
	FROM workouts
	INNER JOIN intensity AS intensity ON CONCAT(intensity.sets,intensity.reps) = CONCAT((workouts.sets9),(workouts.reps9))";
	$sql_lift9 .= " WHERE user ='" . esc($user) ."' ORDER BY timestamp DESC";
	$query_lift9 = mysqli_query($db,$sql_lift9);
	
	$sql_lift10 = "SELECT workouts.timestamp,
	(workouts.exercise10), (workouts.sets10), (workouts.reps10), (workouts.weight10), CAST((workouts.weight10)/ intensity.pof1rm AS DECIMAL(5,2)) AS hyp1rm
	FROM workouts
	INNER JOIN intensity AS intensity ON CONCAT(intensity.sets,intensity.reps) = CONCAT((workouts.sets10),(workouts.reps10))";
	$sql_lift10 .= " WHERE user ='" . esc($user) ."' ORDER BY timestamp DESC";
	$query_lift10 = mysqli_query($db,$sql_lift10);
	
	$sql_lift11 = "SELECT workouts.timestamp,
	(workouts.exercise11), (workouts.sets11), (workouts.reps11), (workouts.weight11), CAST((workouts.weight11)/ intensity.pof1rm AS DECIMAL(5,2)) AS hyp1rm
	FROM workouts
	INNER JOIN intensity AS intensity ON CONCAT(intensity.sets,intensity.reps) = CONCAT((workouts.sets11),(workouts.reps11))";
	$sql_lift11 .= " WHERE user ='" . esc($user) ."' ORDER BY timestamp DESC";
	$query_lift11 = mysqli_query($db,$sql_lift11);
	
	$sql_lift12 = "SELECT workouts.timestamp,
	(workouts.exercise12), (workouts.sets12), (workouts.reps12), (workouts.weight12), CAST((workouts.weight12)/ intensity.pof1rm AS DECIMAL(5,2)) AS hyp1rm
	FROM workouts
	INNER JOIN intensity AS intensity ON CONCAT(intensity.sets,intensity.reps) = CONCAT((workouts.sets12),(workouts.reps12))";
	$sql_lift12 .= " WHERE user ='" . esc($user) ."' ORDER BY timestamp DESC";
	$query_lift12 = mysqli_query($db,$sql_lift12);
	
	$sql_lift13 = "SELECT workouts.timestamp,
	(workouts.exercise13), (workouts.sets13), (workouts.reps13), (workouts.weight13), CAST((workouts.weight13)/ intensity.pof1rm AS DECIMAL(5,2)) AS hyp1rm
	FROM workouts
	INNER JOIN intensity AS intensity ON CONCAT(intensity.sets,intensity.reps) = CONCAT((workouts.sets13),(workouts.reps13))";
	$sql_lift13 .= " WHERE user ='" . esc($user) ."' ORDER BY timestamp DESC";
	$query_lift13 = mysqli_query($db,$sql_lift13);
	
	$sql_lift14 = "SELECT workouts.timestamp,
	(workouts.exercise14), (workouts.sets14), (workouts.reps14), (workouts.weight14), CAST((workouts.weight14)/ intensity.pof1rm AS DECIMAL(5,2)) AS hyp1rm
	FROM workouts
	INNER JOIN intensity AS intensity ON CONCAT(intensity.sets,intensity.reps) = CONCAT((workouts.sets14),(workouts.reps14))";
	$sql_lift14 .= " WHERE user ='" . esc($user) ."' ORDER BY timestamp DESC";
	$query_lift14 = mysqli_query($db,$sql_lift14);
	
	$sql_lift15 = "SELECT workouts.timestamp,
	(workouts.exercise15), (workouts.sets15), (workouts.reps15), (workouts.weight15), CAST((workouts.weight15)/ intensity.pof1rm AS DECIMAL(5,2)) AS hyp1rm
	FROM workouts
	INNER JOIN intensity AS intensity ON CONCAT(intensity.sets,intensity.reps) = CONCAT((workouts.sets15),(workouts.reps15))";
	$sql_lift15 .= " WHERE user ='" . esc($user) ."' ORDER BY timestamp DESC";
	$query_lift15 = mysqli_query($db,$sql_lift15);
	
	$sql_lift16 = "SELECT workouts.timestamp,
	(workouts.exercise16), (workouts.sets16), (workouts.reps16), (workouts.weight16), CAST((workouts.weight16)/ intensity.pof1rm AS DECIMAL(5,2)) AS hyp1rm
	FROM workouts
	INNER JOIN intensity AS intensity ON CONCAT(intensity.sets,intensity.reps) = CONCAT((workouts.sets16),(workouts.reps16))";
	$sql_lift16 .= " WHERE user ='" . esc($user) ."' ORDER BY timestamp DESC";
	$query_lift16 = mysqli_query($db,$sql_lift16);
	
	?>
	
	<?php
	$sql_prs = "SELECT * FROM strength WHERE user ='" . esc($user) ."'";
	$query_allprs = mysqli_query($db,$sql_prs);
	?>
	<?php $record2 = mysqli_fetch_assoc($query_allprs)?>
	<?php
	$sql_names = "SELECT id, name, ratioref, ratio FROM exercises";
	$query3_names = mysqli_query($db,$sql_names);
	?>
	<?php require_once('strength_functions.php'); ?>
  <body>
	<h1>Strength stats <?php echo htm($record['user']); ?></h1>
	<h3><a class="action" href="../../index.php">Back to main menu</a></h3>
    <form action="<?php echo ('index.php?user=' . url($user)); ?>" method="post">
	<table class="list">
	<?php
	$hyp1rm_1 = 0; 
	$hyp1rm_2 = 0;
	$hyp1rm_3 = 0;
	$hyp1rm_4 = 0;
	$hyp1rm_5 = 0;
	$hyp1rm_6 = 0;
	$hyp1rm_7 = 0;
	$hyp1rm_8 = 0;
	$hyp1rm_9 = 0; 
	$hyp1rm_10 = 0;
	$hyp1rm_11 = 0;
	$hyp1rm_12 = 0;
	$hyp1rm_13 = 0;
	$hyp1rm_14 = 0;
	$hyp1rm_15 = 0;
	$hyp1rm_16 = 0;
	?>
	<tr>
		<th></th>
		<th>Hyp 1RM</th>
		<th></th>
		<th>Hyp Ratio</th>
		<th>Date</th>
		<th>PR</th>
		<th></th>
		<th>Date</th>
	</tr>
	<tr>
		<td><a class="action" href="../exercises/show.php?id=1"><?php lift_stats_name(1) ?></a></td>
		<td><?php $weight = lift_stats_hyp1rm(1,"weight"); echo $weight; ?></td>
		<td><?php lift_stats_hypratio_check(1) ?></td>
		<td><?php $suggested_weight = lift_stats_hypratio(1); echo $suggested_weight; ?></td>
		<td><?php $date = lift_stats_hyp1rm(1,"date"); echo $date; ?></td>
		<td><input type="number" min="0" step="2.50" name="pr1" value="<?php $weight = lift_stats_pr(1,"weight"); echo $weight; ?>" /></td>
		<td><?php lift_stats_pr_check(1) ?></td>
		<td><?php $date = lift_stats_pr(1,"date"); echo $date; ?></td>
	</tr>
	<tr>
		<td><a class="action" href="../exercises/show.php?id=2"><?php lift_stats_name(2) ?></a></td>
		<td><?php $weight = lift_stats_hyp1rm(2,"weight"); echo $weight; ?></td>
		<td><?php lift_stats_hypratio_check(2) ?></td>
		<td><?php $suggested_weight = lift_stats_hypratio(2); echo $suggested_weight; ?></td>
		<td><?php $date = lift_stats_hyp1rm(2,"date"); echo $date; ?></td>
		<td><input type="number" min="0" step="2.50" name="pr2" value="<?php $weight = lift_stats_pr(2,"weight"); echo $weight; ?>" /></td>
		<td><?php lift_stats_pr_check(2) ?></td>
		<td><?php $date = lift_stats_pr(2,"date"); echo $date; ?></td>
	</tr>
	<tr>
		<td><a class="action" href="../exercises/show.php?id=3"><?php lift_stats_name(3) ?></a></td>
		<td><?php $weight = lift_stats_hyp1rm(3,"weight"); echo $weight; ?></td>
		<td><?php lift_stats_hypratio_check(3) ?></td>
		<td><?php $suggested_weight = lift_stats_hypratio(3); echo $suggested_weight; ?></td>
		<td><?php $date = lift_stats_hyp1rm(3,"date"); echo $date; ?></td>
		<td><input type="number" min="0" step="2.50" name="pr3" value="<?php $weight = lift_stats_pr(3,"weight"); echo $weight; ?>" /></td>
		<td><?php lift_stats_pr_check(3) ?></td>
		<td><?php $date = lift_stats_pr(3,"date"); echo $date; ?></td>
	</tr>
	<tr>
		<td><a class="action" href="../exercises/show.php?id=4"><?php lift_stats_name(4) ?></a></td>
		<td><?php $weight = lift_stats_hyp1rm(4,"weight"); echo $weight; ?></td>
		<td><?php lift_stats_hypratio_check(4) ?></td>
		<td><?php $suggested_weight = lift_stats_hypratio(4); echo $suggested_weight; ?></td>
		<td><?php $date = lift_stats_hyp1rm(4,"date"); echo $date; ?></td>
		<td><input type="number" min="0" step="2.50" name="pr4" value="<?php $weight = lift_stats_pr(4,"weight"); echo $weight; ?>" /></td>
		<td><?php lift_stats_pr_check(4) ?></td>
		<td><?php $date = lift_stats_pr(4,"date"); echo $date; ?></td>
	</tr>
	<tr>
		<td><a class="action" href="../exercises/show.php?id=5"><?php lift_stats_name(5) ?></a></td>
		<td><?php $weight = lift_stats_hyp1rm(5,"weight"); echo $weight; ?></td>
		<td><?php lift_stats_hypratio_check(5) ?></td>
		<td><?php $suggested_weight = lift_stats_hypratio(5); echo $suggested_weight; ?></td>
		<td><?php $date = lift_stats_hyp1rm(5,"date"); echo $date; ?></td>
		<td><input type="number" min="0" step="2.50" name="pr5" value="<?php $weight = lift_stats_pr(5,"weight"); echo $weight; ?>" /></td>
		<td><?php lift_stats_pr_check(5) ?></td>
		<td><?php $date = lift_stats_pr(5,"date"); echo $date; ?></td>
	</tr>
	<tr>
		<td><a class="action" href="../exercises/show.php?id=6"><?php lift_stats_name(6) ?></a></td>
		<td><?php $weight = lift_stats_hyp1rm(6,"weight"); echo $weight; ?></td>
		<td><?php lift_stats_hypratio_check(6) ?></td>
		<td><?php $suggested_weight = lift_stats_hypratio(6); echo $suggested_weight; ?></td>
		<td><?php $date = lift_stats_hyp1rm(6,"date"); echo $date; ?></td>
		<td><input type="number" min="0" step="2.50" name="pr6" value="<?php $weight = lift_stats_pr(6,"weight"); echo $weight; ?>" /></td>
		<td><?php lift_stats_pr_check(6) ?></td>
		<td><?php $date = lift_stats_pr(6,"date"); echo $date; ?></td>
	</tr>
	<tr>
		<td><a class="action" href="../exercises/show.php?id=7"><?php lift_stats_name(7) ?></a></td>
		<td><?php $weight = lift_stats_hyp1rm(7,"weight"); echo $weight; ?></td>
		<td><?php lift_stats_hypratio_check(7) ?></td>
		<td><?php $suggested_weight = lift_stats_hypratio(7); echo $suggested_weight; ?></td>
		<td><?php $date = lift_stats_hyp1rm(7,"date"); echo $date; ?></td>
		<td><input type="number" min="0" step="2.50" name="pr7" value="<?php $weight = lift_stats_pr(7,"weight"); echo $weight; ?>" /></td>
		<td><?php lift_stats_pr_check(7) ?></td>
		<td><?php $date = lift_stats_pr(7,"date"); echo $date; ?></td>
	</tr>
	<tr>
		<td><a class="action" href="../exercises/show.php?id=8"><?php lift_stats_name(8) ?></a></td>
		<td><?php $weight = lift_stats_hyp1rm(8,"weight"); echo $weight; ?></td>
		<td><?php lift_stats_hypratio_check(8) ?></td>
		<td><?php $suggested_weight = lift_stats_hypratio(8); echo $suggested_weight; ?></td>
		<td><?php $date = lift_stats_hyp1rm(8,"date"); echo $date; ?></td>
		<td><input type="number" min="0" step="2.50" name="pr8" value="<?php $weight = lift_stats_pr(8,"weight"); echo $weight; ?>" /></td>
		<td><?php lift_stats_pr_check(8) ?></td>
		<td><?php $date = lift_stats_pr(8,"date"); echo $date; ?></td>
	</tr>
	<tr>
		<td><a class="action" href="../exercises/show.php?id=9"><?php lift_stats_name(9) ?></a></td>
		<td><?php $weight = lift_stats_hyp1rm(9,"weight"); echo $weight; ?></td>
		<td><?php lift_stats_hypratio_check(9) ?></td>
		<td><?php $suggested_weight = lift_stats_hypratio(9); echo $suggested_weight; ?></td>
		<td><?php $date = lift_stats_hyp1rm(9,"date"); echo $date; ?></td>
		<td><input type="number" min="0" step="2.50" name="pr9" value="<?php $weight = lift_stats_pr(9,"weight"); echo $weight; ?>" /></td>
		<td><?php lift_stats_pr_check(9) ?></td>
		<td><?php $date = lift_stats_pr(9,"date"); echo $date; ?></td>
	</tr>
	<tr>
		<td><a class="action" href="../exercises/show.php?id=10"><?php lift_stats_name(10) ?></a></td>
		<td><?php $weight = lift_stats_hyp1rm(10,"weight"); echo $weight; ?></td>
		<td><?php lift_stats_hypratio_check(10) ?></td>
		<td><?php $suggested_weight = lift_stats_hypratio(10); echo $suggested_weight; ?></td>
		<td><?php $date = lift_stats_hyp1rm(10,"date"); echo $date; ?></td>
		<td><input type="number" min="0" step="2.50" name="pr10" value="<?php $weight = lift_stats_pr(10,"weight"); echo $weight; ?>" /></td>
		<td><?php lift_stats_pr_check(10) ?></td>
		<td><?php $date = lift_stats_pr(10,"date"); echo $date; ?></td>
	</tr>
	<tr>
		<td><a class="action" href="../exercises/show.php?id=11"><?php lift_stats_name(11) ?></a></td>
		<td><?php $weight = lift_stats_hyp1rm(11,"weight"); echo $weight; ?></td>
		<td><?php lift_stats_hypratio_check(11) ?></td>
		<td><?php $suggested_weight = lift_stats_hypratio(11); echo $suggested_weight; ?></td>
		<td><?php $date = lift_stats_hyp1rm(11,"date"); echo $date; ?></td>
		<td><input type="number" min="0" step="2.50" name="pr11" value="<?php $weight = lift_stats_pr(11,"weight"); echo $weight; ?>" /></td>
		<td><?php lift_stats_pr_check(11) ?></td>
		<td><?php $date = lift_stats_pr(11,"date"); echo $date; ?></td>
	</tr>
	<tr>
		<td><a class="action" href="../exercises/show.php?id=12"><?php lift_stats_name(12) ?></a></td>
		<td><?php $weight = lift_stats_hyp1rm(12,"weight"); echo $weight; ?></td>
		<td><?php lift_stats_hypratio_check(12) ?></td>
		<td><?php $suggested_weight = lift_stats_hypratio(12); echo $suggested_weight; ?></td>
		<td><?php $date = lift_stats_hyp1rm(12,"date"); echo $date; ?></td>
		<td><input type="number" min="0" step="2.50" name="pr12" value="<?php $weight = lift_stats_pr(12,"weight"); echo $weight; ?>" /></td>
		<td><?php lift_stats_pr_check(12) ?></td>
		<td><?php $date = lift_stats_pr(12,"date"); echo $date; ?></td>
	</tr>
	<tr>
		<td><a class="action" href="../exercises/show.php?id=13"><?php lift_stats_name(13) ?></a></td>
		<td><?php $weight = lift_stats_hyp1rm(13,"weight"); echo $weight; ?></td>
		<td><?php lift_stats_hypratio_check(13) ?></td>
		<td><?php $suggested_weight = lift_stats_hypratio(13); echo $suggested_weight; ?></td>
		<td><?php $date = lift_stats_hyp1rm(13,"date"); echo $date; ?></td>
		<td><input type="number" min="0" step="2.50" name="pr13" value="<?php $weight = lift_stats_pr(13,"weight"); echo $weight; ?>" /></td>
		<td><?php lift_stats_pr_check(13) ?></td>
		<td><?php $date = lift_stats_pr(13,"date"); echo $date; ?></td>
	</tr>
	<tr>
		<td><a class="action" href="../exercises/show.php?id=14"><?php lift_stats_name(14) ?></a></td>
		<td><?php $weight = lift_stats_hyp1rm(14,"weight"); echo $weight; ?></td>
		<td><?php lift_stats_hypratio_check(14) ?></td>
		<td><?php $suggested_weight = lift_stats_hypratio(14); echo $suggested_weight; ?></td>
		<td><?php $date = lift_stats_hyp1rm(14,"date"); echo $date; ?></td>
		<td><input type="number" min="0" step="2.50" name="pr14" value="<?php $weight = lift_stats_pr(14,"weight"); echo $weight; ?>" /></td>
		<td><?php lift_stats_pr_check(14) ?></td>
		<td><?php $date = lift_stats_pr(14,"date"); echo $date; ?></td>
	</tr>
	<tr>
		<td><a class="action" href="../exercises/show.php?id=15"><?php lift_stats_name(15) ?></a></td>
		<td><?php $weight = lift_stats_hyp1rm(15,"weight"); echo $weight; ?></td>
		<td><?php lift_stats_hypratio_check(15) ?></td>
		<td><?php $suggested_weight = lift_stats_hypratio(15); echo $suggested_weight; ?></td>
		<td><?php $date = lift_stats_hyp1rm(15,"date"); echo $date; ?></td>
		<td><input type="number" min="0" step="2.50" name="pr15" value="<?php $weight = lift_stats_pr(15,"weight"); echo $weight; ?>" /></td>
		<td><?php lift_stats_pr_check(15) ?></td>
		<td><?php $date = lift_stats_pr(15,"date"); echo $date; ?></td>
	</tr>
	<tr>
		<td><a class="action" href="../exercises/show.php?id=16"><?php lift_stats_name(16) ?></a></td>
		<td><?php $weight = lift_stats_hyp1rm(16,"weight"); echo $weight; ?></td>
		<td><?php lift_stats_hypratio_check(16) ?></td>
		<td><?php $suggested_weight = lift_stats_hypratio(16); echo $suggested_weight; ?></td>
		<td><?php $date = lift_stats_hyp1rm(16,"date"); echo $date; ?></td>
		<td><input type="number" min="0" step="2.50" name="pr16" value="<?php $weight = lift_stats_pr(16,"weight"); echo $weight; ?>" /></td>
		<td><?php lift_stats_pr_check(16) ?></td>
		<td><?php $date = lift_stats_pr(16,"date"); echo $date; ?></td>
	</tr>
	
	
	

	
	</table>
	<strong>last updated </strong><?php echo htm($record['timestamp']); ?>
      <div id="operations">
        <input type="submit" value="Update Strength" />
      </div>
    </form>
	Sources:</br>
	http://www.olylifts.co</br>
	http://symmetricstrength.com</br>
  </body>
<?php db_disconnect($db); ?>
</html>