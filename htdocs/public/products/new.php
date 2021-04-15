<!doctype html>
<html lang="en">
	<?php $page_title = 'Add Product - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (!isset($_SESSION['user'])){exit ("<h1>User restricted area</h1><h3>You are not logged in</br><a href='javascript:history.back()'>Go back</a></h3>");}?>
	<?php if (empty($_SESSION['admin'])) {exit ("<h1>Admin area only</h1><h3><a href='javascript:history.back()'>Go back</a></h3>");} ?>
  <body>
    <h1>Add Product</h1>
	<h3><a class="action" href="index.php">Back to products list</a></h3>
    <form action="create.php" method="post">
    <table class="list">
        <tr><th>Picnic ID</th><td><input type="text" name="id" value="" /></td></tr>
		<tr><th>Active</th><td><input type="hidden" name="active" value="0" />
          <input type="checkbox" name="active" value="1" checked="checked"/></td></tr>
		<tr><th>description</th><td><input type="text" name="description" value="" /></td></tr>
		<tr><th>USDA ID</th><td><input type="text" name="usda_id" value="" /></td></tr>
    </table>
	<input type="submit" value="Add Product" />
	</form>
  </body>
<?php db_disconnect($db);?>
</html>
