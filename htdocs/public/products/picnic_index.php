<!doctype html>
<html lang="en">
	<?php $page_title = 'Manage Picnic - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (empty($_SESSION['admin'])) {exit ("<h1>Admin area only</h1><h3><a href='javascript:history.back()'>Go back</a></h3>");} ?>
	<?php	
	$sql = "SELECT * FROM main_categories";
	$query = mysqli_query($db,$sql);	
	if (!$query) {
	exit("Database query failed: " . mysqli_error($db));
	}
	
		$page = $_GET['page'] ?? 1;
		$_SESSION['page'] = $page;
		if($_GET['page'] < 1) {header ("Location: picnic_index.php?page=1&page_p=" . $page_p);}
		
	$sql2 = "SELECT * FROM sub_categories LIMIT 15 OFFSET " . ($page-1) * 15;
	$query2 = mysqli_query($db,$sql2);
	
		$sqlx = "SELECT id FROM sub_categories";
		$queryx = mysqli_query($db,$sqlx);
		
		$last_page = ceil(mysqli_num_rows($queryx)/15);
		if($last_page != 0){
		if(mysqli_num_rows($query2) == 0 && $_GET['page'] > 0) {header ("Location: picnic_index.php?page=" . $last_page . "&page_p=" . $page_p);}
		} else {
			$last_page = 1;
		}
		
	if (!$query2) {
	exit("Database query failed: " . mysqli_error($db));
	}
	
		$page_p = $_GET['page_p'] ?? 1;
		$_SESSION['page_p'] = $page_p;
		if($_GET['page_p'] < 1) {header ("Location: picnic_index.php?page_p=1&page=" . $page);}
	
	$sql3 = "SELECT * FROM scrap_products LIMIT 7 OFFSET " . ($page_p-1) * 7;
	$query3 = mysqli_query($db,$sql3);
	
		$sqlxx = "SELECT id FROM scrap_products";
		$queryxx = mysqli_query($db,$sqlxx);
		
		$last_page_p = ceil(mysqli_num_rows($queryxx)/7);
		if($last_page_p != 0){
			if(mysqli_num_rows($query3) == 0 && $_GET['page_p'] > 0) {header ("Location: picnic_index.php?page_p=" . $last_page_p . "&page=" . $page);}
		} else {
			$last_page_p = 1;
		}
	
	if (!$query3) {
	exit("Database query failed: " . mysqli_error($db));
	}?>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['csv'])) {
	//error_reporting(0);
	$filename = $_FILES['file']['name'];
	
	if (substr($filename,strpos($filename,"."),4) != '.csv') {
		echo '<script language="javascript">';
		echo 'alert("Please choose a valid csv file")';
		echo '</script>';
	} else {
	
	$sql = "TRUNCATE scrap_products";
	$query = mysqli_query($db,$sql);
		
	$csv = fopen($_FILES['file']['tmp_name'], "r");
	
	$i = 0;
	$time_start = microtime(true);
	while($record = fgetcsv($csv)) {
		if($i != 0) {
		$record['id']				= $record[0];
		$record['sub_category'] 	= $record[1];
		$record['name']				= $record[2];
		$record['active']			= $record[3];
		$record['ingridients']		= $record[4];
		$record['translation']		= $record[5];
		$record['usda_id']			= $record[6];
		$record['usda_name']		= $record[7];
		$record['price']			= $record[8];
		$record['weight_g_net']		= $record[9];
		$record['price_per_kg']		= $record[10];
		$record['fresh_days']		= $record[11];
		$record['origin']			= $record[12];
		$record['image']			= $record[13];
		
		$sql2 = "INSERT IGNORE INTO scrap_products (
		id
		,sub_category
		,name
		,active
		,ingridients
		,translation
		,usda_id
		,usda_name
		,price
		,weight_g_net
		,price_per_kg
		,fresh_days
		,origin
		,image
		) VALUES ('"
		. $record['id'] . "','"
		. $record['sub_category'] . "','"
		. $record['name'] . "','"			
		. $record['active'] . "','"		
		. $record['ingridients'] . "','"	
		. $record['translation'] . "','"	
		. $record['usda_id'] . "','"
		. $record['usda_name'] . "','"		
		. $record['price'] . "','"		
		. $record['weight_g_net'] . "','"
		. $record['price_per_kg'] . "','"
		. $record['fresh_days'] . "','"	
		. $record['origin'] . "','"		
		. $record['image'] . "')"	;
		
		$query2 = mysqli_query($db,$sql2);
		}
		$i++;
		
	}
	fclose($csv);
	header("Location: " . "picnic_index.php#scrap");
	$time_end = microtime(true);
	$execution_time = ($time_end - $time_start)/60;
	$_SESSION['message'] = '<b>CSV Import Execution Time:</b> '.$execution_time.' Mins';
	}
	
}



if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['table']) && $_GET['table'] == 'main_categories') {
	$i = 0;
	foreach($query as $record) {
		
		$record['id'] = $_POST['id_' . $i] ?? '';
		$record['name'] = $_POST['name_' . $i] ?? '';
		$record['active'] = $_POST['active_' . $i] ?? '';
		//validate($record);
		

		$sql = "UPDATE main_categories SET ";
		//$sql .="id='" . $record['id'] . "', ";
		$sql .="name='" . esc($record['name']) . "', ";
		$sql .="active='" . $record['active'] . "'";
		$sql .="WHERE id = '" . $record['id'] . "'";
		$query = mysqli_query($db,$sql);
		$i = $i + 1;
	}
	
		//validate sql
	if (!$query) {//notify if there is an error
	exit("Database query failed: " . mysqli_error($db));
		//then stop everything else
	} else {//success brings you back
	header("Location: " . "picnic_index.php");
	}

}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['table']) && $_GET['table'] == 'sub_categories') {
	$i = 0;
	foreach($query2 as $record2) {
		
		$record2['id'] = $_POST['id_' . $i] ?? '';
		$record2['name'] = $_POST['name_' . $i] ?? '';
		$record2['main_category'] = $_POST['main_category_' . $i] ?? '';
		$record2['active'] = $_POST['active_' . $i] ?? '';
		//validate($record);
		
		$sql2 = "UPDATE sub_categories SET ";
		//$sql2 .="id='" . $record2['id'] . "', ";
		$sql2 .="main_category='" . esc($record2['main_category']) . "', ";
		$sql2 .="name='" . esc($record2['name']) . "', ";
		$sql2 .="active='" . $record2['active'] . "'";
		$sql2 .="WHERE id = '" . $record2['id'] . "'";
		$query2 = mysqli_query($db,$sql2);
		$i = $i + 1;
	}
	
		//validate sql
	if (!$query2) {//notify if there is an error
	exit("Database query failed: " . mysqli_error($db));
		//then stop everything else
	} else {//success brings you back
	header("Location: " . "picnic_index.php");
	}

}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['table']) && $_GET['table'] == 'scrap_products') {
	$i = 0;
	echo 'hey';
	foreach($query3 as $record3) {
		
		$record3['id'] = $_POST['id_' . $i] ?? '';
		$record3['name'] = $_POST['name_' . $i] ?? '';
		$record3['sub_category'] = $_POST['sub_category_' . $i] ?? '';
		$record3['active'] = $_POST['active_' . $i] ?? '';
		$record3['ingridients'] = $_POST['ingridients_' . $i] ?? '';
		$record3['translation'] = $_POST['translation_' . $i] ?? '';
		$record3['usda_id'] = $_POST['usda_id_' . $i] ?? '';
		$record3['usda_name'] = $_POST['usda_name_' . $i] ?? '';
		$record3['price'] = $_POST['price_' . $i] ?? '';
		$record3['weight_g_net'] = $_POST['weight_g_net_' . $i] ?? '';
		$record3['price_per_kg'] = $_POST['price_per_kg_' . $i] ?? '';
		$record3['fresh_days'] = $_POST['fresh_days_' . $i] ?? '';
		$record3['origin'] = $_POST['origin_' . $i] ?? '';
		$record3['image'] = $_POST['image_' . $i] ?? '';
		//validate($record);
		
		$sql3 = "UPDATE scrap_products SET ";
		//$sql3 .="id='" . $record3['id'] . "', ";
		$sql3 .="sub_category='" . esc($record3['sub_category']) . "', ";
		$sql3 .="name='" . esc($record3['name']) . "', ";
		$sql3 .="active='" . $record3['active'] . "', ";
		$sql3 .="ingridients='" . $record3['ingridients'] . "', ";
		$sql3 .="translation='" . $record3['translation'] . "', ";
		$sql3 .="usda_id='" . $record3['usda_id'] . "', ";
		$sql3 .="usda_name='" . $record3['usda_name'] . "', ";
		$sql3 .="price='" . $record3['price'] . "', ";
		$sql3 .="weight_g_net='" . $record3['weight_g_net'] . "', ";
		$sql3 .="price_per_kg='" . $record3['price_per_kg'] . "', ";
		$sql3 .="fresh_days='" . $record3['fresh_days'] . "', ";
		$sql3 .="origin='" . $record3['origin'] . "', ";
		$sql3 .="image='" . $record3['image'] . "'";	
		$sql3 .="WHERE id = '" . $record3['id'] . "'";
		$query3 = mysqli_query($db,$sql3);
		$i = $i + 1;
	}
	
		//validate sql
	if (!$query3) {//notify if there is an error
	exit("Database query failed: " . mysqli_error($db));
		//then stop everything else
	} else {//success brings you back
	header("Location: " . "picnic_index.php" . "?page_p=" . $_SESSION['page_p'] . "&page=" . $_SESSION['page'] . "#scrap");
	}

}	
?>
  <body>
  <?php if(isset($_SESSION['message'])){
    echo $_SESSION['message'];
    }?>
	<h1>Showing all <?php echo mysqli_num_rows($query)?> categories</a></h1>
	<h3><a class="action" href="index.php">Back to products list</a></h3>
	<table>
	<th>
	<form action="picnic_delete.php?table=main_categories" method="post">
        <input type="submit" value="Empty table" />
    </form>
	</th>
	<th>
	<form action="picnic_get_main.php" method="post">
        <input type="submit" value="Get New Main Categories" />
    </form>
	</th>
	<th>
    <form action="picnic_index.php?table=main_categories" method="post">
        <input type="submit" value="Update Main Categories" />
	</th>
	</table>
	<table class="list">
		<tr>
        <th>Picnic ID</th>
		<th>Name</th>
        <th>Active</th>
		</tr>
	  
	<?php $i = 0; foreach($query as $record) {?>	
		<tr>
		<td><input type="hidden" name="id_<?php echo $i?>" value="<?php echo htm($record['id']); ?>" /><?php echo htm($record['id']); ?></td>
		<td><input type="text" name="name_<?php echo $i?>" value="<?php echo htm($record['name']); ?>" /></td>
		<td><input type="hidden" name="active_<?php echo $i?>" value="0" />
          <input type="checkbox" name="active_<?php echo $i?>" value="1" <?php echo (htm($record['active'])==1 ? 'checked' : '');?>></td>
		<td><a class="action" href="<?php echo ('picnic_delete.php?table=main_categories&id=' . url($record['id'])); ?>" style="text-decoration: none">🗑️</a></td>
		</tr>
      <?php $i = $i + 1;} ?>
	</table>
    <input type="submit" value="Update Main Categories" />
    </form>
	
	<h1>Showing <?php echo mysqli_num_rows($query2)?> sub_categories in page <?php echo esc($_GET['page'])?> (<?php echo mysqli_num_rows($queryx);?> total)</h1>
	<table class="nav">
	  <tr>
        <th><?php if($_GET['page'] != 1) {
		echo '<a class "action" href="?page='. ($page-1) . '&page_p=' . $page_p . '">Prev</a>';
	}?></th>
		<th>.....................................................................................</th>
        <th><?php if($_GET['page'] != $last_page) {
		echo '<a class "action" href="?page='. ($page+1) . '&page_p=' . $page_p . '">Next</a>';
	}?></th>
	  </tr>
	</table>
	<table>
	<th>
	<form action="picnic_delete.php?table=sub_categories" method="post">
        <input type="submit" value="Empty table" />
    </form>
	</th>
	<th>
	<form action="picnic_get_sub.php" method="post">
        <input type="submit" value="Get New Sub Categories (from active Main)" />
    </form>
	</th>
	<th>
    <form action="picnic_index.php?table=sub_categories" method="post">
        <input type="submit" value="Update Sub Categories" />
	</th>
	</table>
	<table class="list">
		<tr>
        <th>Picnic ID</th>
		<th>Parent</th>
		<th>Name</th>
        <th>Active</th>
		</tr>
	  
	<?php $i = 0; foreach($query2 as $record2) {?>	
		<tr>
		<td><input type="hidden" name="id_<?php echo $i?>" value="<?php echo htm($record2['id']); ?>" /><?php echo htm($record2['id']); ?></td>
		<td><input type="text" name="main_category_<?php echo $i?>" value="<?php echo htm($record2['main_category']); ?>" /></td>
		<td><input type="text" name="name_<?php echo $i?>" value="<?php echo htm($record2['name']); ?>" /></td>
		<td><input type="hidden" name="active_<?php echo $i?>" value="0" />
          <input type="checkbox" name="active_<?php echo $i?>" value="1" <?php echo (htm($record2['active'])==1 ? 'checked' : '');?>></td>
		<td><a class="action" href="<?php echo ('picnic_delete.php?table=sub_categories&id=' . url($record2['id'])); ?>" style="text-decoration: none">🗑️</a></td>
		</tr>
      <?php $i = $i + 1;} ?>
	</table>
      <div id="operations">
        <input type="submit" value="Update Sub Categories" />
      </div>
	  
    </form>
	<table>
	<th><span id = "scrap"><h1>Showing <?php echo mysqli_num_rows($query3)?> scrapped products in page <?php echo esc($_GET['page_p'])?> (<?php echo mysqli_num_rows($queryxx);?> total)</h1></th>
	<th>Add active products to product list: () Only new; () New and overwrite existing ones;</span></th>
	</table>
	<table class="nav_p">
	  <tr>
        <th><?php if($_GET['page_p'] != 1) {
		echo '<a class "action" href="?page_p='. ($page_p-1) . '&page=' . $page . '#scrap">Prev</a>';
	}?></th>
		<th>.....................................................................................</th>
        <th><?php if($_GET['page_p'] != $last_page_p) {
		echo '<a class "action" href="?page_p='. ($page_p+1) . '&page=' . $page . '#scrap">Next</a>';
	}?></th>
	  </tr>
	</table>

    <form action="" method="post" enctype="multipart/form-data">
		<input type="button" value="Export CSV" onclick="window.location.href='picnic_csv.php'" />
        <input type="submit" name ="csv" value="Import CSV" />
		<input type="file" name="file"/>
		<input type="button" value="Export to Product List" onclick="window.location.href='picnic_export.php'" />
	</form>
	<table>
	<th>
	<form action="picnic_delete.php?table=scrap_products" method="post">
        <input type="submit" value="Empty table" />
    </form>
	</th>
	<th>
	<form action="picnic_get_scrap.php" method="post">
        <input type="submit" value="Get New Products (from active Sub)" />
    </form>
	</th>
	<th>
	<form action="picnic_fill_scrap.php" method="post">
        <input type="submit" value="Fill" />
    </form>
	</th>	
	<th>
    <form action="<?php echo "picnic_index.php?table=scrap_products" . "&page_p=" . $_SESSION['page_p'] . "&page=" . $_SESSION['page'] . "#scrap"; ?>" method="post">
        <input type="submit" value="Update Products" />
	</th>
	</table>
	<table class="list">
		<tr>
		<th></th>
		<th>Translation</th>
		<th>Picnic Name</th>
		<th></th>
		<th>USDA ID</th>
		<th>USDA Name</th>
        <th>Picnic ID</th>
		<th>Sub</th>

        <th>Active</th>
		<th>Ingridients</th>
		<th>Price</th>
		<th>Weight</th>
		<th>Pricer per kg</th>
		<th>Fresh days</th>
		<th>Origin</th>
		<th>Image</th>
		</tr>
	  
	<?php $i = 0; foreach($query3 as $record3) {?>	
		<tr>
		<td><a class="action" href="<?php echo ('picnic_delete.php?table=scrap_products&id=' . url($record3['id'])); ?>" style="text-decoration: none">🗑️</a></td>
		<td><input type="text" name="translation_<?php echo $i?>" value="<?php echo htm($record3['translation']); ?>" /></td>
		<td><input type="text" name="name_<?php echo $i?>" value="<?php echo htm($record3['name']); ?>" /></td>
		<td><img src="<?php echo 'https://storefront-prod.nl.picnicinternational.com/static/images/' .  htm($record3['image'] . '/small.png'); ?>" height=80 onerror="this.style.display='none'"></td>
		<td><input type="text" size="8" name="usda_id_<?php echo $i?>" value="<?php echo htm($record3['usda_id']); ?>" /></td>
		<td><input type="text" name="usda_name_<?php echo $i?>" value="<?php echo htm($record3['usda_name']); ?>" /></td>
		<td><input type="hidden" name="id_<?php echo $i?>" value="<?php echo htm($record3['id']); ?>" /><?php echo htm($record3['id']); ?></td>
		<td><input type="text" name="sub_category_<?php echo $i?>" value="<?php echo htm($record3['sub_category']); ?>" /></td>
		<td><input type="hidden" name="active_<?php echo $i?>" value="0" />
          <input type="checkbox" name="active_<?php echo $i?>" value="1" <?php echo (htm($record3['active'])==1 ? 'checked' : '');?>></td>
		<td><input type="text" name="ingridients_<?php echo $i?>" value="<?php echo htm($record3['ingridients']); ?>" /></td>
		<td><input type="text" size="5" name="price_<?php echo $i?>" value="<?php echo htm($record3['price']); ?>" /></td>
		<td><input type="text" size="5" name="weight_g_net_<?php echo $i?>" value="<?php echo htm($record3['weight_g_net']); ?>" /></td>
		<td><input type="text" size="10" name="price_per_kg_<?php echo $i?>" value="<?php echo htm($record3['price_per_kg']); ?>" /></td>
		<td><input type="text" size="5" name="fresh_days_<?php echo $i?>" value="<?php echo htm($record3['fresh_days']); ?>" /></td>
		<td><input type="text" size="10" name="origin_<?php echo $i?>" value="<?php echo htm($record3['origin']); ?>" /></td>
		<td><input type="text" size="1" name="image_<?php echo $i?>" value="<?php echo htm($record3['image']); ?>" /></td>
		</tr>
      <?php $i = $i + 1;} ?>
	</table>
      <div id="operations">
        <input type="submit" value="Update Products" />
      </div>
    </form>
	<h1>Then do this: Edit scrap_products</h1>
	Then do text mining (cleaning) in R.</br>
	Then use google translate API + USDA search api and map usda ids</br>
	Then in Diet page, make products name + link to show page available</br>
	ALso in Diet page, allow to directly give feedback: Bad Taste => Make inactive; Bad Mapping => Make inactive, remove usda_id field, update description for "bad mapping"</br>
	Change api key for $_SESSION['picnic_key'] so they don't bother me and everybody is able to scrap prodcuts at their own risk. 
	Product is ready, Improve bad mappings overtime, scrap new products and refresh the prices overtime.
  </body>
<?php db_disconnect($db); ?>
</html>