<!doctype html>
<html lang="en">
	<?php $page_title = 'Body stats - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (!isset($_SESSION['user'])){exit ("<h1>User restricted area</h1><h3>You are not logged in</br><a href='javascript:history.back()'>Go back</a></h3>");} ?>
	<?php if ($_SESSION['user'] != $_GET['user']){exit ("<h1>User restricted area</h1><h3>You are not logged in as " . $_GET['user'] . "</br><a href='javascript:history.back()'>Go back</a></h3>");} ?>
<?php
//By default create a workout whith each of the 16 lifts, with date 0, then create one with all lifts -1, date current
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$record = [];

	$record['SEX'] = $_POST['SEX'] ?? '';
	$record['F_STATUS'] = $_POST['F_STATUS'] ?? ''; //-1 = blank exercise of value list
	$record['AGE'] = $_POST['AGE'] ?? '';
	$record['height-centimeters'] = $_POST['height-centimeters'] ?? '';
	$record['WEIGHT'] = $_POST['WEIGHT'] ?? '';
	$record['ACTIVITY'] = $_POST['ACTIVITY'] ?? '';
	$record['STRENGTH'] = $_POST['STRENGTH'] ?? '';
	$record['GOAL'] = $_POST['GOAL'] ?? '';

	validate($record);
	
	$sql = "UPDATE body SET ";
	$sql .="SEX='" . $record['SEX'] . "', ";
	$sql .="F_STATUS='" . $record['F_STATUS'] . "', ";
	$sql .="AGE='" . $record['AGE'] . "', ";
	$sql .="`height-centimeters`='" . $record['height-centimeters'] . "', ";
	$sql .="WEIGHT='" . $record['WEIGHT'] . "', ";
	$sql .="ACTIVITY='" . $record['ACTIVITY'] . "', ";
	$sql .="STRENGTH='" . $record['STRENGTH'] . "', ";
	$sql .="GOAL='" . $record['GOAL'] . "' ";
	$sql .="WHERE user='" . $_GET['user'] . "'";
	
	

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
	$sql = "SELECT * FROM body WHERE user ='" . esc($user) . "'";
	$query = mysqli_query($db,$sql);
	if (!$query) {
	exit("Database query failed: " . mysqli_error($db));
}
if (!$user) {
	exit("<h1>Invalid username</h1><h3><a href='javascript:history.back()'>Go back and log in</a></h3>");
}
	?>
	<?php $record = mysqli_fetch_assoc($query);?>
  <body>
	<h1>Body stats <?php echo htm($record['user']); ?></h1>
	<h3><a class="action" href="<?php echo ('../diet/index.php?user=' . $_GET['user']); ?>">Back to diet plan</a></h3>
    <form action="<?php echo ('index.php?user=' . url($user)); ?>" method="post">
            <div class="personal-info">
              <div class="columns-2 clearfix">
                <div class="column column-right column-25">
                <div class="column column-left column-75">
                 <fieldset class="personal-info-section"> 
                    <legend class="personal-info-section__heading">Gender</legend>
                    <input type="radio" name="SEX" id="sex-male" value="MALE" required="" <?php echo (htm($record['SEX'])=='MALE' ? 'checked' : '');?>>
                    <label for="sex-male" class="inline" >Male</label>
                    <input type="radio" name="SEX" id="sex-female" value="FEMALE" required="" <?php echo (htm($record['SEX'])=='FEMALE' ? 'checked' : '');?>>
                    <label for="sex-female" class="inline">Female</label>
                 <div id="question-pregnancy-lactation" class="personal-info-section">
                    <label class="">Pregnant or Lactating?</label>
                    <select name="F_STATUS" id="F_STATUS">
                      <option value="" <?php if(empty($record['F_STATUS'])) {echo " selected";}?>>No</option>
                      <option value="pregnant1st" <?php if($record['F_STATUS'] == "pregnant1st") {echo " selected";}?>>Pregnant - 1st Trimester</option>
                      <option value="pregnant2nd_1" <?php if($record['F_STATUS'] == "pregnant2nd_1") {echo " selected";}?>>Pregnant - 2nd Trimester (Less than 20 Weeks)</option>
                      <option value="pregnant2nd_2" <?php if($record['F_STATUS'] == "pregnant2nd_2") {echo " selected";}?>>Pregnant - 2nd Trimester (More than 20 Weeks)</option>
                      <option value="pregnant3rd" <?php if($record['F_STATUS'] == "pregnant3rd") {echo " selected";}?>>Pregnant - 3rd Trimester</option>
                      <option value="lactating1st" <?php if($record['F_STATUS'] == "lactating1st") {echo " selected";}?>>Lactating - 0-6 months</option>
                      <option value="lactating2nd" <?php if($record['F_STATUS'] == "lactating2nd") {echo " selected";}?>>Lactating - Over 7 months</option>
                    </select>
					</fieldset>
                  </div>				  
				  <div class="personal-info-section inline">
				  <fieldset class="personal-info-section"> 
                    <legend class="personal-info-section__heading">Age</legend>
                    <input type="number" name="AGE" id="AGE" min="0" max="120" step="1" required="" aria-describedby="description-age" value="<?php echo htm($record['AGE']); ?>">
                  </fieldset>
				  </div>
				  
                  <fieldset class="personal-info-section">
                    <legend id="legend-height">Height</legend>
                    <div id="height-metric" style="">
                      <label id="label-centimeters" for="height-centimeters" class="inline">in centimeters:</label>
                      <input type="number" name="height-centimeters" id="height-centimeters" min="0" max="270" step="1" required="" aria-describedby="description-height" value="<?php echo htm($record['height-centimeters']); ?>">
                    </div>
                    <div id="description-height" class="description">Height is not required for children under the age of three years.</div>
                  </fieldset>
                  <div class="personal-info-section">
				  <fieldset class="personal-info-section">
                    <legend class="personal-info-section__heading">Weight</legend>
                    <label id="label-weight" for="WEIGHT" class="inline">in kilograms:</label>
                    <input type="number" name="WEIGHT" id="WEIGHT" min="0" max="500" step="any" required="" value="<?php echo htm($record['WEIGHT']); ?>">
					</fieldset>
                  </div>
                  <div class="personal-info-section">
				  <fieldset class="personal-info-section">
                    <legend class="personal-info-section__heading">Activity level*</legend>
                    <select name="ACTIVITY" id="ACTIVITY" required="" aria-describedby="description-activity">
                      <option value="" <?php if(empty($record['ACTIVITY'])) {echo " selected";}?>>- Select -</option>
                      <option value="Sedentary" <?php if($record['ACTIVITY'] == "Sedentary") {echo " selected";}?>>Sedentary</option>
                      <option value="Low Active" <?php if($record['ACTIVITY'] == "Low Active") {echo " selected";}?>>Low Active</option>
                      <option value="Active" <?php if($record['ACTIVITY'] == "Active") {echo " selected";}?>>Active</option>
                      <option value="Very Active" <?php if($record['ACTIVITY'] == "Very Active") {echo " selected";}?>>Very Active</option>
                    </select> Activity level is not required for children under the age of three years.</br>
					<input type="radio" name="STRENGTH" id="strength-yes" value="Yes" required="" <?php echo (htm($record['STRENGTH'])=='Yes' ? 'checked' : '');?>>
                    <label for="strength-yes" class="inline" >I do weight training</label>
                    <input type="radio" name="STRENGTH" id="strength-no" value="No" required="" <?php echo (htm($record['STRENGTH'])=='No' ? 'checked' : '');?>>
                    <label for="strength-no" class="inline">I don't do weight training</label></br>
					<strong>Body goal:</strong>
					<select name="GOAL">					
                      <option value="Mantain" <?php if($record['GOAL'] == "Mantain") {echo " selected";}?>>Mantain</option>
                      <option value="Cut" <?php if($record['GOAL'] == "Cut") {echo " selected";}?>>Cut</option>
                      <option value="Bulk" <?php if($record['GOAL'] == "Bulk") {echo " selected";}?>>Bulk</option>
                    </select>
					</fieldset>
                  </div>
                  <div class="personal-info-section">
                    <button type="submit" name="submit">Update body stats</button>
                  </div>
                </div>
              </div>
            </div>
          </form>

</br><strong>Activity Level*</strong></br>
Sedentary:</br>
Daily activities such as housework or gardening</br>
Low Active:</br>
30 minutes of moderate activity such as walking at 4 mph</br>
Active:</br>
60 minutes of moderate activity such as walking/jogging at 3-4 mph, or 30 minutes vigorous activity such as jogging at 5.5 mph</br>
Very Active:</br>
45-60 minutes of vigorous activity</br>


    </body>  
<?php db_disconnect($db); ?>
</html>