<!doctype html>
<html lang="en">
	<?php $page_title = 'Exercises - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php
	$sql = "SELECT id, name, active, description /*, timestamp*/ FROM exercises WHERE id>0 ORDER BY id ASC";
	$query = mysqli_query($db,$sql);
	if (!$query) {
	exit("Database query failed: " . mysqli_error($db)); }?>
  <body>
    <?php if(isset($_SESSION['message'])){
    echo $_SESSION['message'];
    }
    unset($_SESSION['message']);?>
    <h1><?php echo mysqli_num_rows($query)?> Exercises</h1>
	<h3><a class="action" href="../../index.php">Back to main menu</a></h3>
    <div class="actions">
      <a class="action" href="new.php">Add new exercise</a>
    </div>
  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Active</th>
  	    <th>Description</th>
		<!--<th>Last updated</th>-->
  	  </tr>
      <?php foreach($query as $record) {?>
        <tr>
          <td><?php echo htm($record['id']); ?></td>
          <td><?php echo truncate(htm($record['name']),25); ?></td>
          <td><?php echo htm($record['active']) == 1 ? '✔' : '✖'; ?></td>
    	   <!--<td><?php echo truncate(htm($record['description']),50); ?></td>-->
		   <!--<td><?php echo htm($record['timestamp']); ?></td>-->
          <td><a class="action" href="<?php echo ('show.php?id=' . url($record['id'])); ?>" style="text-decoration: none">👁️</a></td>
          <td><a class="action" href="<?php echo ('edit.php?id=' . url($record['id'])); ?>" style="text-decoration: none">✏️</a></td>
          <td><a class="action" href="<?php echo ('delete.php?id=' . url($record['id'])); ?>" style="text-decoration: none">🗑️</a></td>
    	  </tr>
      <?php } ?>
  	</table>  
  </body>
<?php mysqli_free_result($query); ?>  
<?php db_disconnect($db); ?>
</html>