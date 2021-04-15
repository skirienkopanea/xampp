<!doctype html>
<html lang="en">
	<?php $page_title = 'Products - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (!isset($_SESSION['user'])){exit ("<h1>User restricted area</h1><h3>You are not logged in</br><a href='javascript:history.back()'>Go back</a></h3>");}?>
	<?php
	$page = $_GET['page'] ?? 1;
	if($_GET['page'] < 1) {header ("Location: index.php?page=1");}
	
	$sql = "SELECT
		user
		,id
		,name
		,active
		,description
		,usda_id
		,price
		,weight_g_net
		,price_per_kg
		,origin
		,fresh_days
		,image
		,feedback
		,timestamp FROM products
		WHERE user ='" . $_SESSION['user'] . "' ORDER BY timestamp DESC LIMIT 100 OFFSET " . ($page-1) * 100;
	$query = mysqli_query($db,$sql);

	$sql2 = "SELECT id FROM products WHERE user ='" . $_SESSION['user'] . "'";
	$query2 = mysqli_query($db,$sql2);
	
	$last_page = ceil(mysqli_num_rows($query2)/100);
	
	if($last_page != 0){
		if(mysqli_num_rows($query) == 0 && $_GET['page'] > 0) {header ("Location: index.php?page=" . $last_page);}
	} else {
		$last_page = 1;
	}
	
	if (!$query) {
	exit("Database query failed: " . mysqli_error($db)); }?>
  <body>
    <?php if(isset($_SESSION['message'])){
    echo $_SESSION['message'];
    }?>
    <h1>Page <?php echo esc($_GET['page'])?> (<?php echo mysqli_num_rows($query2);?> prod)</h1>
	<h3><a class="action" href="../../index.php">Back to main menu</a></h3>
	<table class="nav">
	  <tr>
        <th><?php if($_GET['page'] != 1) {
		echo '<a class "action" href="?page=1">First</a> <a class "action" href="?page='. ($page-1) . '"><<</a>';
	}?></th>
		<th>...</th>
        <th><?php if($_GET['page'] != $last_page) {
		echo '<a class "action" href="?page='. ($page+1) . '">>></a> <a class "action" href="?page='. ($last_page) . '">Last</a>';
	}?></th>
	   <th>
	  <div class="actions">
      <a class="action" href="new.php">Add new product</a>
	  <a class="action" href="update.php">Update prices</a><a class="action" href=""></a>
	  <a class="action" href="picnic_index.php">Manage Picnic fetching</a><a class="action" href=""></a>
    </div>
	  </th>
	</tr>
	</table>
  	<table class="list">
  	  <tr>
  	    <th></th>
        <!--<th>Picnic ID</th>-->
		<th>Name</th>
        <th>Active</th>
  	    <th>Description</th>
		<!--<th>Last updated</th>-->
		<th>USDA ID</th>
		<th>Price</th>
		<!--<th>Weight</th>-->
		<!--<th>Price per kg</th>-->
		<!--<th>Origin</th>-->
		<!--<th>Fresh days</th>-->
		<th>Fix</th>
  	  </tr>
      <?php foreach($query as $record) {?>
        <tr> 
          <td><a class="action" href="<?php echo ('show.php?id=' . url($record['id'])); ?>" style="text-decoration: none"><font size =5>👁️</font></a><br>
          <a class="action" href="<?php echo ('edit.php?id=' . url($record['id'])); ?>" style="text-decoration: none"><font size =5>✏️</font></a><br>
          <a class="action" href="<?php echo ('delete.php?id=' . url($record['id'])); ?>" style="text-decoration: none"><font size =5>🗑️</font></a></td>
          <!--<td><?php echo htm($record['id']); ?></td>-->
		  <td><?php echo truncate(htm($record['name']),25); ?></td>
          <td><?php echo htm($record['active']) == 1 ? '✔' : '✖'; ?></td>
    	  <td><?php echo truncate(htm($record['description']),50); ?></td>
		   <!--<td><?php echo htm($record['timestamp']); ?></td>-->
		   <td><?php echo truncate(htm($record['usda_id']),25); ?></td>
		   <td><?php echo htm($record['price']); ?></td>
		   <!--<td><?php echo htm($record['weight_g_net']); ?></td>
		   <td><?php echo htm($record['price_per_kg']); ?></td>
		   <td><?php echo htm($record['origin']); ?></td>
		   <td><?php echo htm($record['fresh_days']) == 0 ? '' : htm($record['fresh_days']); ?></td>-->
		   <td><?php echo htm($record['feedback']) == 1 ? '🚩' : ''; ?></td>
    	  </tr>
      <?php } ?>
  	</table>  
  </body>
<?php mysqli_free_result($query); mysqli_free_result($query2);?>  
<?php db_disconnect($db); ?>
</html>