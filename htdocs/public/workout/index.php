<!doctype html>
<html lang="en">
	<?php $page_title = 'Workout - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (!isset($_SESSION['user'])){exit ("<h1>User restricted area</h1><h3>You are not logged in</br><a href='javascript:history.back()'>Go back</a></h3>");} ?>
	<?php if ($_SESSION['user'] != $_GET['user']){exit ("<h1>User restricted area</h1><h3>You are not logged in as " . $_GET['user'] . "</br><a href='javascript:history.back()'>Go back</a></h3>");} ?>
<?php
//By default create a workout whith each of the 16 lifts, with date 0, then create one with all lifts -1, date current
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$record = [];

	$record['comments'] = $_POST['comments'] ?? NULL;
	$record['exercise1'] = $_POST['exercise1'] ?? -1; //-1 = blank exercise of value list
	$record['exercise2'] = $_POST['exercise2'] ?? -1;
	$record['exercise3'] = $_POST['exercise3'] ?? -1;
	$record['exercise4'] = $_POST['exercise4'] ?? -1;
	$record['exercise5'] = $_POST['exercise5'] ?? -1;
	$record['exercise6'] = $_POST['exercise6'] ?? -1;
	$record['exercise7'] = $_POST['exercise7'] ?? -1;
	$record['exercise8'] = $_POST['exercise8'] ?? -1;
	$record['exercise9'] = $_POST['exercise9'] ?? -1;
	$record['exercise10'] = $_POST['exercise10'] ?? -1;
	$record['exercise11'] = $_POST['exercise11'] ?? -1;
	$record['exercise12'] = $_POST['exercise12'] ?? -1;
	$record['exercise13'] = $_POST['exercise13'] ?? -1;
	$record['exercise14'] = $_POST['exercise14'] ?? -1;
	$record['exercise15'] = $_POST['exercise15'] ?? -1;
	$record['exercise16'] = $_POST['exercise16'] ?? -1;
	if (empty($_POST['sets1'])) {
	$record['sets1'] = 0;
	} else {
	$record['sets1'] = $_POST['sets1'];
	}
	if (empty($_POST['sets2'])) {
	$record['sets2'] = 0;
	} else {
	$record['sets2'] = $_POST['sets2'];
	}
	if (empty($_POST['sets3'])) {
	$record['sets3'] = 0;
	} else {
	$record['sets3'] = $_POST['sets3'];
	}
	if (empty($_POST['sets4'])) {
	$record['sets4'] = 0;
	} else {
	$record['sets4'] = $_POST['sets4'];
	}
	if (empty($_POST['sets5'])) {
	$record['sets5'] = 0;
	} else {
	$record['sets5'] = $_POST['sets5'];
	}
	if (empty($_POST['sets6'])) {
	$record['sets6'] = 0;
	} else {
	$record['sets6'] = $_POST['sets6'];
	}
	if (empty($_POST['sets7'])) {
	$record['sets7'] = 0;
	} else {
	$record['sets7'] = $_POST['sets7'];
	}
	if (empty($_POST['sets8'])) {
	$record['sets8'] = 0;
	} else {
	$record['sets8'] = $_POST['sets8'];
	}
	if (empty($_POST['sets9'])) {
	$record['sets9'] = 0;
	} else {
	$record['sets9'] = $_POST['sets9'];
	}
	if (empty($_POST['sets10'])) {
	$record['sets10'] = 0;
	} else {
	$record['sets10'] = $_POST['sets10'];
	}
	if (empty($_POST['sets11'])) {
	$record['sets11'] = 0;
	} else {
	$record['sets11'] = $_POST['sets11'];
	}
	if (empty($_POST['sets12'])) {
	$record['sets12'] = 0;
	} else {
	$record['sets12'] = $_POST['sets12'];
	}
	if (empty($_POST['sets13'])) {
	$record['sets13'] = 0;
	} else {
	$record['sets13'] = $_POST['sets13'];
	}
	if (empty($_POST['sets14'])) {
	$record['sets14'] = 0;
	} else {
	$record['sets14'] = $_POST['sets14'];
	}
	if (empty($_POST['sets15'])) {
	$record['sets15'] = 0;
	} else {
	$record['sets15'] = $_POST['sets15'];
	}
	if (empty($_POST['sets16'])) {
	$record['sets16'] = 0;
	} else {
	$record['sets16'] = $_POST['sets16'];
	}
	if (empty($_POST['reps1'])) {
	$record['reps1'] = 0;
	} else {
	$record['reps1'] = $_POST['reps1'];
	}
	if (empty($_POST['reps2'])) {
	$record['reps2'] = 0;
	} else {
	$record['reps2'] = $_POST['reps2'];
	}
	if (empty($_POST['reps3'])) {
	$record['reps3'] = 0;
	} else {
	$record['reps3'] = $_POST['reps3'];
	}
	if (empty($_POST['reps4'])) {
	$record['reps4'] = 0;
	} else {
	$record['reps4'] = $_POST['reps4'];
	}
	if (empty($_POST['reps5'])) {
	$record['reps5'] = 0;
	} else {
	$record['reps5'] = $_POST['reps5'];
	}
	if (empty($_POST['reps6'])) {
	$record['reps6'] = 0;
	} else {
	$record['reps6'] = $_POST['reps6'];
	}
	if (empty($_POST['reps7'])) {
	$record['reps7'] = 0;
	} else {
	$record['reps7'] = $_POST['reps7'];
	}
	if (empty($_POST['reps8'])) {
	$record['reps8'] = 0;
	} else {
	$record['reps8'] = $_POST['reps8'];
	}
	if (empty($_POST['reps9'])) {
	$record['reps9'] = 0;
	} else {
	$record['reps9'] = $_POST['reps9'];
	}
	if (empty($_POST['reps10'])) {
	$record['reps10'] = 0;
	} else {
	$record['reps10'] = $_POST['reps10'];
	}
	if (empty($_POST['reps11'])) {
	$record['reps11'] = 0;
	} else {
	$record['reps11'] = $_POST['reps11'];
	}
	if (empty($_POST['reps12'])) {
	$record['reps12'] = 0;
	} else {
	$record['reps12'] = $_POST['reps12'];
	}
	if (empty($_POST['reps13'])) {
	$record['reps13'] = 0;
	} else {
	$record['reps13'] = $_POST['reps13'];
	}
	if (empty($_POST['reps14'])) {
	$record['reps14'] = 0;
	} else {
	$record['reps14'] = $_POST['reps14'];
	}
	if (empty($_POST['reps15'])) {
	$record['reps15'] = 0;
	} else {
	$record['reps15'] = $_POST['reps15'];
	}
	if (empty($_POST['reps16'])) {
	$record['reps16'] = 0;
	} else {
	$record['reps16'] = $_POST['reps16'];
	}
	if (empty($_POST['weight1'])) {
	$record['weight1'] = 0;
	} else {
	$record['weight1'] = $_POST['weight1'];
	}
	if (empty($_POST['weight2'])) {
	$record['weight2'] = 0;
	} else {
	$record['weight2'] = $_POST['weight2'];
	}
	if (empty($_POST['weight3'])) {
	$record['weight3'] = 0;
	} else {
	$record['weight3'] = $_POST['weight3'];
	}
	if (empty($_POST['weight4'])) {
	$record['weight4'] = 0;
	} else {
	$record['weight4'] = $_POST['weight4'];
	}
	if (empty($_POST['weight5'])) {
	$record['weight5'] = 0;
	} else {
	$record['weight5'] = $_POST['weight5'];
	}
	if (empty($_POST['weight6'])) {
	$record['weight6'] = 0;
	} else {
	$record['weight6'] = $_POST['weight6'];
	}
	if (empty($_POST['weight7'])) {
	$record['weight7'] = 0;
	} else {
	$record['weight7'] = $_POST['weight7'];
	}
	if (empty($_POST['weight8'])) {
	$record['weight8'] = 0;
	} else {
	$record['weight8'] = $_POST['weight8'];
	}
	if (empty($_POST['weight9'])) {
	$record['weight9'] = 0;
	} else {
	$record['weight9'] = $_POST['weight9'];
	}
	if (empty($_POST['weight10'])) {
	$record['weight10'] = 0;
	} else {
	$record['weight10'] = $_POST['weight10'];
	}
	if (empty($_POST['weight11'])) {
	$record['weight11'] = 0;
	} else {
	$record['weight11'] = $_POST['weight11'];
	}
	if (empty($_POST['weight12'])) {
	$record['weight12'] = 0;
	} else {
	$record['weight12'] = $_POST['weight12'];
	}
	if (empty($_POST['weight13'])) {
	$record['weight13'] = 0;
	} else {
	$record['weight13'] = $_POST['weight13'];
	}
	if (empty($_POST['weight14'])) {
	$record['weight14'] = 0;
	} else {
	$record['weight14'] = $_POST['weight14'];
	}
	if (empty($_POST['weight15'])) {
	$record['weight15'] = 0;
	} else {
	$record['weight15'] = $_POST['weight15'];
	}
	if (empty($_POST['weight16'])) {
	$record['weight16'] = 0;
	} else {
	$record['weight16'] = $_POST['weight16'];
	}

	validate($record);
	
	$sql = "INSERT INTO workouts (user,comments,exercise1,exercise2,exercise3,exercise4,exercise5,exercise6,exercise7,exercise8,exercise9,exercise10,exercise11,exercise12,exercise13,exercise14,exercise15,exercise16,sets1,sets2,sets3,sets4,sets5,sets6,sets7,sets8,sets9,sets10,sets11,sets12,sets13,sets14,sets15,sets16,reps1,reps2,reps3,reps4,reps5,reps6,reps7,reps8,reps9,reps10,reps11,reps12,reps13,reps14,reps15,reps16,weight1,weight2,weight3,weight4,weight5,weight6,weight7,weight8,weight9,weight10,weight11,weight12,weight13,weight14,weight15,weight16,timestamp) VALUES ('"; //I used in excel =TEXTJOIN(",",TRUE,A1:A64) to pull it off with comma seperator
	
	$sql .= $_GET['user'] . "','";
	$sql .= esc($record['comments']) . "','";
	$sql .= $record['exercise1'] . "','";
	$sql .= $record['exercise2'] . "','";
	$sql .= $record['exercise3'] . "','";
	$sql .= $record['exercise4'] . "','";
	$sql .= $record['exercise5'] . "','";
	$sql .= $record['exercise6'] . "','";
	$sql .= $record['exercise7'] . "','";
	$sql .= $record['exercise8'] . "','";
	$sql .= $record['exercise9'] . "','";
	$sql .= $record['exercise10'] . "','";
	$sql .= $record['exercise11'] . "','";
	$sql .= $record['exercise12'] . "','";
	$sql .= $record['exercise13'] . "','";
	$sql .= $record['exercise14'] . "','";
	$sql .= $record['exercise15'] . "','";
	$sql .= $record['exercise16'] . "','";
	$sql .= $record['sets1'] . "','";
	$sql .= $record['sets2'] . "','";
	$sql .= $record['sets3'] . "','";
	$sql .= $record['sets4'] . "','";
	$sql .= $record['sets5'] . "','";
	$sql .= $record['sets6'] . "','";
	$sql .= $record['sets7'] . "','";
	$sql .= $record['sets8'] . "','";
	$sql .= $record['sets9'] . "','";
	$sql .= $record['sets10'] . "','";
	$sql .= $record['sets11'] . "','";
	$sql .= $record['sets12'] . "','";
	$sql .= $record['sets13'] . "','";
	$sql .= $record['sets14'] . "','";
	$sql .= $record['sets15'] . "','";
	$sql .= $record['sets16'] . "','";
	$sql .= $record['reps1'] . "','";
	$sql .= $record['reps2'] . "','";
	$sql .= $record['reps3'] . "','";
	$sql .= $record['reps4'] . "','";
	$sql .= $record['reps5'] . "','";
	$sql .= $record['reps6'] . "','";
	$sql .= $record['reps7'] . "','";
	$sql .= $record['reps8'] . "','";
	$sql .= $record['reps9'] . "','";
	$sql .= $record['reps10'] . "','";
	$sql .= $record['reps11'] . "','";
	$sql .= $record['reps12'] . "','";
	$sql .= $record['reps13'] . "','";
	$sql .= $record['reps14'] . "','";
	$sql .= $record['reps15'] . "','";
	$sql .= $record['reps16'] . "','";
	$sql .= $record['weight1'] . "','";
	$sql .= $record['weight2'] . "','";
	$sql .= $record['weight3'] . "','";
	$sql .= $record['weight4'] . "','";
	$sql .= $record['weight5'] . "','";
	$sql .= $record['weight6'] . "','";
	$sql .= $record['weight7'] . "','";
	$sql .= $record['weight8'] . "','";
	$sql .= $record['weight9'] . "','";
	$sql .= $record['weight10'] . "','";
	$sql .= $record['weight11'] . "','";
	$sql .= $record['weight12'] . "','";
	$sql .= $record['weight13'] . "','";
	$sql .= $record['weight14'] . "','";
	$sql .= $record['weight15'] . "','";
	$sql .= $record['weight16'] . "',";

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
	$sql = "SELECT * FROM workouts WHERE user ='" . esc($user) ."' ORDER BY timestamp DESC LIMIT 1";
	$query = mysqli_query($db,$sql);
	if (!$query) {
	exit("Database query failed: " . mysqli_error($db));
}
if (!$user) {
	exit("<h1>Invalid username</h1><h3><a href='javascript:history.back()'>Go back and log in</a></h3>");
}
	?>
	<?php $record = mysqli_fetch_assoc($query)?>
	<?php
	$sql2 = "SELECT id,name,protraction,retraction,uprotation,downrotation,depression,elevation,introtation,extrotation,hamdom,quadom
 FROM exercises ORDER BY name";
	$query2 = mysqli_query($db,$sql2);
	?>
	<?php require_once('workout_functions.php'); ?>
  <body>
	<h1>Workout plan <?php echo htm($record['user']); ?></h1>
	<h3><a class="action" href="../../index.php">Back to main menu</a></h3>
    <form action="<?php echo ('index.php?user=' . url($user)); ?>" method="post">
	<strong>Comments</strong></br>
	<input type="text" name="comments" value="<?php echo htm($record['comments']); ?>" /></br>
	<table class="list">
	  <tr>
	    <th></th>
        <th>Exercise</th>
        <th>Sets</th>
        <th>Reps</th>
  	    <th>Weight</th>
	  </tr>
	  <tr>
		<td>1</td>
		<td><select name="exercise1">
		<?php
			foreach($query2 as $option) {
				echo "<option value=\"{$option['id']}\"";
				if ($record['exercise1'] == $option['id']) {
					echo " selected";
				}
				echo ">{$option['name']}</option>";
			}
			?>
			</select>			
		</select></td>
		<td><input type="number" min="0" name="sets1" value="<?php if ((htm($record['sets1']))==0) {echo "";} else {echo htm($record['sets1']);}?>" /></td>
		<td><input type="number" min="0" name="reps1" value="<?php if ((htm($record['reps1']))==0) {echo "";} else {echo htm($record['reps1']);}?>" /></td>
		<td><input type="number" min="0" step="2.50" name="weight1" value="<?php if ((htm($record['weight1']))==0) {echo "";} else {echo htm($record['weight1']);}?>" /></td>
	  </tr>
	  <tr>
		<td>2</td>
				<td><select name="exercise2">
		<?php
			foreach($query2 as $option) {
				echo "<option value=\"{$option['id']}\"";
				if ($record['exercise2'] == $option['id']) {
					echo " selected";
				}
				echo ">{$option['name']}</option>";
			}
			?>
			</select>			
		</select></td>
		<td><input type="number" min="0" name="sets2" value="<?php if ((htm($record['sets2']))==0) {echo "";} else {echo htm($record['sets2']);}?>" /></td>
		<td><input type="number" min="0" name="reps2" value="<?php if ((htm($record['reps2']))==0) {echo "";} else {echo htm($record['reps2']);}?>" /></td>
		<td><input type="number" min="0" step="2.50" name="weight2" value="<?php if ((htm($record['weight2']))==0) {echo "";} else {echo htm($record['weight2']);}?>" /></td>
	  </tr>
	  <tr>
	    <td>3</td>
				<td><select name="exercise3">
		<?php
			foreach($query2 as $option) {
				echo "<option value=\"{$option['id']}\"";
				if ($record['exercise3'] == $option['id']) {
					echo " selected";
				}
				echo ">{$option['name']}</option>";
			}
			?>
			</select>			
		</select></td>
		<td><input type="number" min="0" name="sets3" value="<?php if ((htm($record['sets3']))==0) {echo "";} else {echo htm($record['sets3']);}?>" /></td>
		<td><input type="number" min="0" name="reps3" value="<?php if ((htm($record['reps3']))==0) {echo "";} else {echo htm($record['reps3']);}?>" /></td>
		<td><input type="number" min="0" step="2.50" name="weight3" value="<?php if ((htm($record['weight3']))==0) {echo "";} else {echo htm($record['weight3']);}?>" /></td>
	  </tr>
	  <tr>
	    <td>4</td>
				<td><select name="exercise4">
		<?php
			foreach($query2 as $option) {
				echo "<option value=\"{$option['id']}\"";
				if ($record['exercise4'] == $option['id']) {
					echo " selected";
				}
				echo ">{$option['name']}</option>";
			}
			?>
			</select>			
		</select></td>
		<td><input type="number" min="0" name="sets4" value="<?php if ((htm($record['sets4']))==0) {echo "";} else {echo htm($record['sets4']);}?>" /></td>
		<td><input type="number" min="0" name="reps4" value="<?php if ((htm($record['reps4']))==0) {echo "";} else {echo htm($record['reps4']);}?>" /></td>
		<td><input type="number" min="0" step="2.50" name="weight4" value="<?php if ((htm($record['weight4']))==0) {echo "";} else {echo htm($record['weight4']);}?>" /></td>
	  </tr>
	  <tr>
	  	<td>5</td>
				<td><select name="exercise5">
		<?php
			foreach($query2 as $option) {
				echo "<option value=\"{$option['id']}\"";
				if ($record['exercise5'] == $option['id']) {
					echo " selected";
				}
				echo ">{$option['name']}</option>";
			}
			?>
			</select>			
		</select></td>
		<td><input type="number" min="0" name="sets5" value="<?php if ((htm($record['sets5']))==0) {echo "";} else {echo htm($record['sets5']);}?>" /></td>
		<td><input type="number" min="0" name="reps5" value="<?php if ((htm($record['reps5']))==0) {echo "";} else {echo htm($record['reps5']);}?>" /></td>
		<td><input type="number" min="0" step="2.50" name="weight5" value="<?php if ((htm($record['weight5']))==0) {echo "";} else {echo htm($record['weight5']);}?>" /></td>
	  </tr>
	  <tr>
	  	<td>6</td>
				<td><select name="exercise6">
		<?php
			foreach($query2 as $option) {
				echo "<option value=\"{$option['id']}\"";
				if ($record['exercise6'] == $option['id']) {
					echo " selected";
				}
				echo ">{$option['name']}</option>";
			}
			?>
			</select>			
		</select></td>
		<td><input type="number" min="0" name="sets6" value="<?php if ((htm($record['sets6']))==0) {echo "";} else {echo htm($record['sets6']);}?>" /></td>
		<td><input type="number" min="0" name="reps6" value="<?php if ((htm($record['reps6']))==0) {echo "";} else {echo htm($record['reps6']);}?>" /></td>
		<td><input type="number" min="0" step="2.50" name="weight6" value="<?php if ((htm($record['weight6']))==0) {echo "";} else {echo htm($record['weight6']);}?>" /></td>
	  </tr>
	  <tr>
	  	<td>7</td>
				<td><select name="exercise7">
		<?php
			foreach($query2 as $option) {
				echo "<option value=\"{$option['id']}\"";
				if ($record['exercise7'] == $option['id']) {
					echo " selected";
				}
				echo ">{$option['name']}</option>";
			}
			?>
			</select>			
		</select></td>
		<td><input type="number" min="0" name="sets7" value="<?php if ((htm($record['sets7']))==0) {echo "";} else {echo htm($record['sets7']);}?>" /></td>
		<td><input type="number" min="0" name="reps7" value="<?php if ((htm($record['reps7']))==0) {echo "";} else {echo htm($record['reps7']);}?>" /></td>
		<td><input type="number" min="0" step="2.50" name="weight7" value="<?php if ((htm($record['weight7']))==0) {echo "";} else {echo htm($record['weight7']);}?>" /></td>
	  </tr>
	  <tr>
	  	<td>8</td>
				<td><select name="exercise8">
		<?php
			foreach($query2 as $option) {
				echo "<option value=\"{$option['id']}\"";
				if ($record['exercise8'] == $option['id']) {
					echo " selected";
				}
				echo ">{$option['name']}</option>";
			}
			?>
			</select>			
		</select></td>
		<td><input type="number" min="0" name="sets8" value="<?php if ((htm($record['sets8']))==0) {echo "";} else {echo htm($record['sets8']);}?>" /></td>
		<td><input type="number" min="0" name="reps8" value="<?php if ((htm($record['reps8']))==0) {echo "";} else {echo htm($record['reps8']);}?>" /></td>
		<td><input type="number" min="0" step="2.50" name="weight8" value="<?php if ((htm($record['weight8']))==0) {echo "";} else {echo htm($record['weight8']);}?>" /></td>
	  </tr>
	  <tr>
	  	<td>9</td>
				<td><select name="exercise9">
		<?php
			foreach($query2 as $option) {
				echo "<option value=\"{$option['id']}\"";
				if ($record['exercise9'] == $option['id']) {
					echo " selected";
				}
				echo ">{$option['name']}</option>";
			}
			?>
			</select>			
		</select></td>
		<td><input type="number" min="0" name="sets9" value="<?php if ((htm($record['sets9']))==0) {echo "";} else {echo htm($record['sets9']);}?>" /></td>
		<td><input type="number" min="0" name="reps9" value="<?php if ((htm($record['reps9']))==0) {echo "";} else {echo htm($record['reps9']);}?>" /></td>
		<td><input type="number" min="0" step="2.50" name="weight9" value="<?php if ((htm($record['weight9']))==0) {echo "";} else {echo htm($record['weight9']);}?>" /></td>
	  </tr>
	  <tr>
	  	<td>10</td>
				<td><select name="exercise10">
		<?php
			foreach($query2 as $option) {
				echo "<option value=\"{$option['id']}\"";
				if ($record['exercise10'] == $option['id']) {
					echo " selected";
				}
				echo ">{$option['name']}</option>";
			}
			?>
			</select>			
		</select></td>
		<td><input type="number" min="0" name="sets10" value="<?php if ((htm($record['sets10']))==0) {echo "";} else {echo htm($record['sets10']);}?>" /></td>
		<td><input type="number" min="0" name="reps10" value="<?php if ((htm($record['reps10']))==0) {echo "";} else {echo htm($record['reps10']);}?>" /></td>
		<td><input type="number" min="0" step="2.50" name="weight10" value="<?php if ((htm($record['weight10']))==0) {echo "";} else {echo htm($record['weight10']);}?>" /></td>
	  </tr>
	  <tr>
	  	<td>11</td>
				<td><select name="exercise11">
		<?php
			foreach($query2 as $option) {
				echo "<option value=\"{$option['id']}\"";
				if ($record['exercise11'] == $option['id']) {
					echo " selected";
				}
				echo ">{$option['name']}</option>";
			}
			?>
			</select>			
		</select></td>
		<td><input type="number" min="0" name="sets11" value="<?php if ((htm($record['sets11']))==0) {echo "";} else {echo htm($record['sets11']);}?>" /></td>
		<td><input type="number" min="0" name="reps11" value="<?php if ((htm($record['reps11']))==0) {echo "";} else {echo htm($record['reps11']);}?>" /></td>
		<td><input type="number" min="0" step="2.50" name="weight11" value="<?php if ((htm($record['weight11']))==0) {echo "";} else {echo htm($record['weight11']);}?>" /></td>
	  </tr>
	  <tr>
	  	<td>12</td>
				<td><select name="exercise12">
		<?php
			foreach($query2 as $option) {
				echo "<option value=\"{$option['id']}\"";
				if ($record['exercise12'] == $option['id']) {
					echo " selected";
				}
				echo ">{$option['name']}</option>";
			}
			?>
			</select>			
		</select></td>
		<td><input type="number" min="0" name="sets12" value="<?php if ((htm($record['sets12']))==0) {echo "";} else {echo htm($record['sets12']);}?>" /></td>
		<td><input type="number" min="0" name="reps12" value="<?php if ((htm($record['reps12']))==0) {echo "";} else {echo htm($record['reps12']);}?>" /></td>
		<td><input type="number" min="0" step="2.50" name="weight12" value="<?php if ((htm($record['weight12']))==0) {echo "";} else {echo htm($record['weight12']);}?>" /></td>
	  </tr>
	  <tr>
	  	<td>13</td>
				<td><select name="exercise13">
		<?php
			foreach($query2 as $option) {
				echo "<option value=\"{$option['id']}\"";
				if ($record['exercise13'] == $option['id']) {
					echo " selected";
				}
				echo ">{$option['name']}</option>";
			}
			?>
			</select>			
		</select></td>
		<td><input type="number" min="0" name="sets13" value="<?php if ((htm($record['sets13']))==0) {echo "";} else {echo htm($record['sets13']);}?>" /></td>
		<td><input type="number" min="0" name="reps13" value="<?php if ((htm($record['reps13']))==0) {echo "";} else {echo htm($record['reps13']);}?>" /></td>
		<td><input type="number" min="0" step="2.50" name="weight13" value="<?php if ((htm($record['weight13']))==0) {echo "";} else {echo htm($record['weight13']);}?>" /></td>
	  </tr>
	  <tr>
	  	<td>14</td>
				<td><select name="exercise14">
		<?php
			foreach($query2 as $option) {
				echo "<option value=\"{$option['id']}\"";
				if ($record['exercise14'] == $option['id']) {
					echo " selected";
				}
				echo ">{$option['name']}</option>";
			}
			?>
			</select>			
		</select></td>
		<td><input type="number" min="0" name="sets14" value="<?php if ((htm($record['sets14']))==0) {echo "";} else {echo htm($record['sets14']);}?>" /></td>
		<td><input type="number" min="0" name="reps14" value="<?php if ((htm($record['reps14']))==0) {echo "";} else {echo htm($record['reps14']);}?>" /></td>
		<td><input type="number" min="0" step="2.50" name="weight14" value="<?php if ((htm($record['weight14']))==0) {echo "";} else {echo htm($record['weight14']);}?>" /></td>
	  </tr>
	  <tr>
	  	<td>15</td>
				<td><select name="exercise15">
		<?php
			foreach($query2 as $option) {
				echo "<option value=\"{$option['id']}\"";
				if ($record['exercise15'] == $option['id']) {
					echo " selected";
				}
				echo ">{$option['name']}</option>";
			}
			?>
			</select>			
		</select></td>
		<td><input type="number" min="0" name="sets15" value="<?php if ((htm($record['sets15']))==0) {echo "";} else {echo htm($record['sets15']);}?>" /></td>
		<td><input type="number" min="0" name="reps15" value="<?php if ((htm($record['reps15']))==0) {echo "";} else {echo htm($record['reps15']);}?>" /></td>
		<td><input type="number" min="0" step="2.50" name="weight15" value="<?php if ((htm($record['weight15']))==0) {echo "";} else {echo htm($record['weight15']);}?>" /></td>
	  </tr>
	  <tr>
	  	<td>16</td>
				<td><select name="exercise16">
		<?php
			foreach($query2 as $option) {
				echo "<option value=\"{$option['id']}\"";
				if ($record['exercise16'] == $option['id']) {
					echo " selected";
				}
				echo ">{$option['name']}</option>";
			}
			?>
			</select>			
		</select></td>
		<td><input type="number" min="0" name="sets16" value="<?php if ((htm($record['sets16']))==0) {echo "";} else {echo htm($record['sets16']);}?>" /></td>
		<td><input type="number" min="0" name="reps16" value="<?php if ((htm($record['reps16']))==0) {echo "";} else {echo htm($record['reps16']);}?>" /></td>
		<td><input type="number" min="0" step="2.50" name="weight16" value="<?php if ((htm($record['weight16']))==0) {echo "";} else {echo htm($record['weight16']);}?>" /></td>
	  </tr>
	  
	</table>
	<strong>last updated </strong><?php echo htm($record['timestamp']); ?>
      <div id="operations">
        <input type="submit" value="Update Workout" />
      </div>
    </form>
	</br>
<strong>Volume</strong>
	<table>
		<tr>
			<th></th>
			<th>Reps</th>
			<th>Rule of thumb</th>
			<th>Ratio</th>
			<th></th>
		</tr>
			<tr><th>protraction vs retraction</th>
			<td><?php $reps = protraction_vs_retraction("reps"); echo $reps; ?></td>
			<td>Pro/Ret &lt;= 1</td>
			<td><?php $ratio = protraction_vs_retraction("ratio"); echo $ratio; ?></td>
			<td><?php $thumb = protraction_vs_retraction("thumb"); echo $thumb; ?></td>
		</tr>
		</tr>
			<tr><th>uprotation vs downrotation</th>
			<td><?php $reps = uprotation_vs_downrotation("reps"); echo $reps; ?></td>
			<td>.8 &lt; Up/Down &lt;= 1</td>
			<td><?php $ratio = uprotation_vs_downrotation("ratio"); echo $ratio; ?></td>
			<td><?php $thumb = uprotation_vs_downrotation("thumb"); echo $thumb; ?></td>
		</tr>
		</tr>
			<tr><th>depression vs elevation</th>
			<td><?php $reps = depression_vs_elevation("reps"); echo $reps; ?></td>
			<td>🤔</td>
			<td><?php $ratio = depression_vs_elevation("ratio"); echo $ratio; ?></td>
			<td><?php $thumb = depression_vs_elevation("thumb"); echo $thumb; ?></td>
		</tr>
		</tr>
			<tr><th>introtation vs extrotation</th>
			<td><?php $reps = introtation_vs_extrotation("reps"); echo $reps; ?></td>
			<td>Int/Ext &lt; .8</td>
			<td><?php $ratio = introtation_vs_extrotation("ratio"); echo $ratio; ?></td>
			<td><?php $thumb = introtation_vs_extrotation("thumb"); echo $thumb; ?></td>
		</tr>
		</tr>
			<tr><th>quadom vs hamdom</th>
			<td><?php $reps = quadom_vs_hamdom("reps"); echo $reps; ?></td>
			<td>Quad/Ham ≈ 1</td>
			<td><?php $ratio = quadom_vs_hamdom("ratio"); echo $ratio; ?></td>
			<td><?php $thumb = quadom_vs_hamdom("thumb"); echo $thumb; ?></td>
		</tr>
	</table>
	References:</br>
	http://www.exrx.net/Articulations/Scapula.htm</br>
	https://www.t-nation.com/training/shoulder-savers-1
  </body>
<?php db_disconnect($db); ?>
</html>