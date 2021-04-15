<!doctype html>
<html lang="en">
	<?php $page_title = 'Minimalist Diet & Workout'; ?>
	<?php require_once('private/functions.php'); ?>
	<?php
	//cookies will be sent everywhere, better keep them small. max 4kb and can be edited by the user locally, so it's better to use it for local preferences
	$name = "Browser";
	$device = "mobile";
	$expire = time() + 60*60*24*365; //one year
	$path = '/'; // for the entire website
	$domain = 'coolworkshop.nl'; //(for the entire site, i.e. not for a subdomain instead
	$secure = false; //true = only works if https; false = works for both https and http;
	$httponly = true; //true = javascfript cant access this cookie
	
	setcookie(
	$name,
	$device,
	$expire,
	$path,
	$domain,
	$secure,
	$httponly
	);

	$user = '';
	?>
  <body>
<?php if(isset($_SESSION['user'])){
    echo "Welcome: " . $_SESSION['user'];
	$user = $_SESSION['user'];
	}
    
    if(isset($_SESSION['message'])){
    echo $_SESSION['message'];
    }
    unset($_SESSION['message']);
	
	if(!isset($_SESSION['loggedin'])){
		$_SESSION['loggedin'] = 0;
	}
    
    ?>
	<h1>I want to check...</h1>
	<?php if ($_SESSION['loggedin'] == 1){
		echo "<a href='logout.php'>Log out</a>";
		} else {
			echo "<a href='login.php'>Log in</a>";
		}
	?>
		
	<ul>
    <li><a href=<?php echo "\"public/workout/index.php?user=" . $user . "\""; ?>>My workout plan</a></li>
	<li><a href=<?php echo "\"public/diet/index.php?user=" . $user . "\""; ?>>My diet plan</a></li>	
	<li><a href=<?php echo "\"public/strength/index.php?user=" . $user . "\""; ?>>My strength stats</a></li>
	</ul>
	<ol>
	<!-- Make it admin only link --><li><a href="public/exercises/index.php">Exercises list</a></li>
	<!-- Make it admin only link --><li><a href="public/usda/index.php">Nutrients list</a></li>
	<!-- Make it admin only link --><li><a href="public/products/index.php">Products list</a></li>
	<li><a href="https://www.youtube.com/watch?v=D1aVu47F-Io">Final concept food app (image learning + usda mapping)</a></li>
	<li><a href="quiz/index.php">Quiz</a></li>
	<li><a href="400/index.php">400 NL</a></li>
	</ol>
  </body>
</html>