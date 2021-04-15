<?php if(isset($_GET['user'])){
	header("Location: " . "../diet/index.php?user=" . $_GET['user']);
	} else {
	header("Location: " . "../../index.php");
	}
?>