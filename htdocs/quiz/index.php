<!doctype html>
<html lang="en">
	<?php $page_title = 'Quiz'; ?>
	<?php require_once('../private/functions.php');
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if($_SESSION['quiz_result'] != $_POST['answer']){
			if(isset($_POST['category'])){
			header("Location: " . "?id=" . $_POST['id'] . "&category=" . url($_POST['category']) . "&message=Bad");
			} else {
			header("Location: " . "?id=" . $_POST['id'] . "&message=Bad");	
			}	
		} else {
			if(isset($_POST['category'])){
			header("Location: " . "?category=" . url($_POST['category']) . "&message=Good");
			} else {
			header("Location: " . "?message=Good");	
			}
		}
	}

	if(!isset($_POST['answer'])){
	$_SESSION['quiz_message'] = "";
	}

	
	if(isset($_GET['id'])) {
	
		$sql = "SELECT * FROM quiz_math WHERE id =" . $_GET['id'];
		
	} else {
	
		if(isset($_GET['category'])) {
			$category = $_GET['category'];
			$sql = "SELECT * FROM quiz_math WHERE category = '" . esc($category) . "' ORDER BY RAND() LIMIT 1";
		} else {
			$sql = "SELECT * FROM quiz_math ORDER BY RAND() LIMIT 1";
		}
		
	}
		
	
	$query = mysqli_query($db,$sql);
	$record = mysqli_fetch_assoc($query);
	
	?>
	
  <body>
	<h3><a href="index.php?category=addition">Addition</a> | <a href="index.php?category=subtraction">Subtraction</a> | <a href="index.php?category=multiplication">Multiplication</a> | <a href="index.php?category=division">Division</a> | <a href="index.php">All</a></h3>
    <form action="index.php" method="post" style="font-size:25px;">
    <center>
		<?php echo $record['concat'];?><br>
        <input type="number" name="answer" autofocus="autofocus"/><br>
		<?php if(isset($_GET['category'])){ echo '<input type="hidden" min="0" name="category" value= "' . $record['category'] . '"/>';}?>
		<input type="hidden"name="id" value ="<?php echo $record['id'];?>" />
		<?php $_SESSION['quiz_result'] = $record['result'];?>
		<?php if(isset($_GET['message'])){echo $_GET['message'];}?> <input type="submit" name="go" value="Go"  />
		</center>
	</form>
  </body>
<?php db_disconnect($db);?>
</html>