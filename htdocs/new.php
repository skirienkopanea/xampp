<!doctype html>
<html lang="en">
	<?php $page_title = 'Create Account - Minimalist Diet & Workout'; ?>
	<?php require_once('private/functions.php'); ?>
  <body>
    <h1>Create Account</h1>
	<h3><a class="action" href="index.php">Back to main menu</a></h3>
    <form action="create.php" method="post">
    <table class="list">
        <tr><th>choose a username</th><td><input type="text" maxlength="10" name="user" value="" /></td></tr>
		<tr><th>choose a password</th><td><input type="password" name="password" value="" /></td></tr>
		<tr><th>repeat password</th><td><input type="password" name="password_repeat" value="" /></td></tr>
    </table>
	<input type="submit" value="Create Account" />
	</form>
  </body>
<?php db_disconnect($db);?>
</html>