<!doctype html>
<html lang="en">
	<?php $page_title = 'Add Exercise - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (empty($_SESSION['admin'])) {exit ("<h1>Admin area only</h1><h3><a href='javascript:history.back()'>Go back</a></h3>");} ?>
  <body>
    <h1>Add Exercise</h1>
	<h3><a class="action" href="index.php">Back to exercises list</a></h3>
    <form action="create.php" method="post">
    <table class="list">
		<tr><th>name</th><td><input type="text" name="name" value="" /></td></tr>
		<tr><th>Active</th><td><input type="hidden" name="active" value="0" />
          <input type="checkbox" name="active" value="1" checked="checked"/></td></tr>
		  <tr><th>description</th><td><input type="text" name="description" value="" /></td></tr>
		  <tr><th>protraction</th><td><input type="text" name="protraction" value="" /></td></tr>
		  <tr><th>retraction</th><td><input type="text" name="retraction" value="" /></td></tr>
		  <tr><th>uprotation</th><td><input type="text" name="uprotation" value="" /></td></tr>
		  <tr><th>downrotation</th><td><input type="text" name="downrotation" value="" /></td></tr>
		  <tr><th>depression</th><td><input type="text" name="depression" value="" /></td></tr>
		  <tr><th>elevation</th><td><input type="text" name="elevation" value="" /></td></tr>
		  <tr><th>introtation</th><td><input type="text" name="introtation" value="" /></td></tr>
		  <tr><th>extrotation</th><td><input type="text" name="extrotation" value="" /></td></tr>
		  <tr><th>hamdom</th><td><input type="text" name="hamdom" value="" />
		  <tr><th>quadom</th><td><input type="text" name="quadom" value="" />
		  <tr><th>ratioref</th><td><input type="text" name="ratioref" value="" />
		  <tr><th>ratio</th><td><input type="text" name="ratio" value="" />
		  <tr><th>reference</th><td><input type="text" name="reference" value="" />
		  
    </table>
	<input type="submit" value="Add Exercise" />
	</form>
  </body>
<?php db_disconnect($db);?>
</html>