<!doctype html>
<html lang="en">
	<?php $page_title = 'Nutrients - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php');?>
	<?php if (!isset($_SESSION['user'])){exit ("<h1>User restricted area</h1><h3>You are not logged in</br><a href='javascript:history.back()'>Go back</a></h3>");}?>
	<?php
	$page = $_GET['page'] ?? 1;
	if($_GET['page'] < 1) {header ("Location: index.php?page=1");}
	$sql = "SELECT id, name, active, description, category, timestamp FROM nutritionfacts WHERE user ='" . $_SESSION['user'] . "' ORDER BY timestamp DESC LIMIT 100 OFFSET " . ($page-1) * 100;
	$query = mysqli_query($db,$sql);

	$sql2 = "SELECT id FROM nutritionfacts WHERE user ='" . $_SESSION['user'] . "'";
	$query2 = mysqli_query($db,$sql2);
	
	$last_page = ceil(mysqli_num_rows($query2)/100);
	
	if($last_page != 0){
		if(mysqli_num_rows($query) == 0 && $_GET['page'] > 0) {header ("Location: index.php?page=" . $last_page);}
	} else {
		$last_page = 1;
	}
	
	if (!$query2) {
	exit("Database query failed: " . mysqli_error($db)); }?>
  <body>
  <?php if(isset($_SESSION['message'])){
    echo $_SESSION['message'];
    }?>
    <h1>Showing <?php echo mysqli_num_rows($query)?> nutrients in page <?php echo esc($_GET['page'])?> (<?php echo mysqli_num_rows($query2);?> total)</h1>
	<h3><a class="action" href="../../index.php">Back to main menu</a></h3>
    <div class="actions">
      <a class="action" href="new.php">Add new nutrient</a>
	  <a class="action" href="update.php">Update active nutrients</a>
    </div>
	<table class="nav">
	  <tr>
        <th><?php if($_GET['page'] != 1) {
		echo '<a class "action" href="?page='. ($page-1) . '">&lt;&lt;</a>';
	}?></th>
		<th>.....................................................................................</th>
        <th><?php if($_GET['page'] != $last_page) {
		echo '<a class "action" href="?page='. ($page+1) . '">&gt;&gt;</a>';
	}?></th>
	  </tr>
	</table>
  	<table class="list">
  	  <tr>
        <th>USDA ID</th>
        <th>Name</th>
        <th>Active</th>
  	    <th>Description</th>
		<th>Category</th>
		<!--<th>Last updated</th>-->
  	  </tr>
      <?php foreach($query as $record) {?>
        <tr>
          <td><?php echo htm($record['id']); ?></td>
          <td><?php echo truncate(htm($record['name']),25); ?></td>
          <td><?php echo htm($record['active']) == 1 ? '✔' : '✖'; ?></td>
    	   <td><?php echo truncate(htm($record['description']),50); ?></td>
		   <td><?php echo truncate(htm($record['category']),50); ?></td>
		   <!--<td><?php echo htm($record['timestamp']); ?></td>-->
          <td><a class="action" href="<?php echo ('show.php?id=' . url($record['id'])); ?>" style="text-decoration: none">👁️</a></td>
          <td><a class="action" href="<?php echo ('edit.php?id=' . url($record['id'])); ?>" style="text-decoration: none">✏️</a></td>
          <td><a class="action" href="<?php echo ('delete.php?id=' . url($record['id'])); ?>" style="text-decoration: none">🗑️</a></td>
    	  </tr>
      <?php } ?>
  	</table>  
  </body>
<?php mysqli_free_result($query); mysqli_free_result($query2);?>  
<?php db_disconnect($db); ?>
</html>