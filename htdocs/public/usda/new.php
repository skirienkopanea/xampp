<!doctype html>
<html lang="en">
	<?php $page_title = 'Add Nutrient - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (!isset($_SESSION['user'])){exit ("<h1>User restricted area</h1><h3>You are not logged in</br><a href='javascript:history.back()'>Go back</a></h3>");}?>
  <body>
    <h1>Add Nutrient</h1>
	<h3><a class="action" href="index.php">Back to nutrients list</a></h3>
    <form action="create.php" method="post">
    <table class="list">
        <tr><th>FDC ID</th><td><input type="text" name="id" value="" /></td></tr>
		<tr><th>name</th><td><input type="text" name="name" value="" /></td></tr>
		<tr><th>Active</th><td><input type="hidden" name="active" value="0" />
          <input type="checkbox" name="active" value="1" checked="checked"/></td></tr>
    </table>
	<input type="submit" value="Add Nutrient" />
	</form>
  </body>
<?php db_disconnect($db);?>
</html>
