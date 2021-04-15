<?php
require_once('private/functions.php');

$user = '';
$password = '';

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $record['user'] = $_POST['user'] ?? '';
  $record['password'] = $_POST['password'] ?? '';
  validate($record);


	$sql = "SELECT user,hash_password,admin FROM users WHERE user ='" . $record['user'] ."'";
	$query = mysqli_query($db,$sql);
	if (!$query) {
	exit("Database query failed: " . mysqli_error($db));
}

  $verify = mysqli_fetch_assoc($query);
  
  
  
  if (password_verify($record['password'],$verify['hash_password'])) {

  session_regenerate_id();
  $_SESSION['user'] = $record['user'];
  $_SESSION['loggedin'] = 1;
  $_SESSION['ov'] = 1;
  $_SESSION['admin'] = ($verify['admin']);

  header("Location: " . "index.php");

	} else {
		exit ("<h1>Wrong credentials</h1><h3><a href='javascript:history.back()'>Go back</a></h3>");
	}
}

?>


<html lang="en">
<?php $page_title = 'Log in'; ?>
<body>
<?php
    if(isset($_SESSION['message'])){
    echo $_SESSION['message'];
    }
    unset($_SESSION['message']);
?>
<div id="content">
  <h1>Log in</h1>
  <h3><a class="action" href="index.php">Back to main menu</a></h3>
  <form action="login.php" method="post">
    user:<br />
    <input type="text" maxlength="10" name="user" value="" /><br />
    password:<br />
    <input type="password" name="password" value="" /><br />
    <input type="submit" name="submit" value="Submit"  />
  </form>
</div>
Don't have an account? Then you can <a href="new.php">create an account</a>.

</body>
</html>