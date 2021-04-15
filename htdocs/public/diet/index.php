<!doctype html>
<html lang="en">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
	<?php $page_title ='Diet - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php
	if(empty($_GET['user'])){
		$_GET['user'] = $_SESSION['user'];
	}
	if($_SERVER['REQUEST_METHOD'] =='POST' && $_GET['action']='Refresh'){
		$sql="DELETE FROM dietplan WHERE user='".$_SESSION['user']."'";
		mysqli_query($db,$sql);
		//header("redirect.php?user=".esc($_SESSION['user']));
	}
	?>
	<?php if (!isset($_SESSION['user'])){exit ("<h1>User restricted area</h1><h3>You are not logged in</br><a href='javascript:history.back()'>Go back</a></h3>");} ?>
	<?php if ($_SESSION['user'] != $_GET['user']){exit ("<h1>User restricted area</h1><h3>You are not logged in as" . $_GET['user'] ."</br><a href='javascript:history.back()'>Go back</a></h3>");} ?>
<?php
//By default create a diet plan whith 16 empty products, with date 0, then create one with all lifts -1, date current
	if($_SERVER['REQUEST_METHOD'] =='POST'){
	$record = [];

	$record['product1'] = $_POST['product1'] ?? '';
	$record['product2'] = $_POST['product2'] ?? '';
	$record['product3'] = $_POST['product3'] ?? '';
	$record['product4'] = $_POST['product4'] ?? '';
	$record['product5'] = $_POST['product5'] ?? '';
	$record['product6'] = $_POST['product6'] ?? '';
	$record['product7'] = $_POST['product7'] ?? '';
	$record['product8'] = $_POST['product8'] ?? '';
	$record['product9'] = $_POST['product9'] ?? '';
	$record['product10'] = $_POST['product10'] ?? '';
	$record['product11'] = $_POST['product11'] ?? '';
	$record['product12'] = $_POST['product12'] ?? '';
	$record['product13'] = $_POST['product13'] ?? '';
	$record['product14'] = $_POST['product14'] ?? '';
	$record['product15'] = $_POST['product15'] ?? '';
	$record['product16'] = $_POST['product16'] ?? '';
	$record['grams1'] = $_POST['grams1'] ?? 0;
	$record['grams2'] = $_POST['grams2'] ?? 0;
	$record['grams3'] = $_POST['grams3'] ?? 0;
	$record['grams4'] = $_POST['grams4'] ?? 0;
	$record['grams5'] = $_POST['grams5'] ?? 0;
	$record['grams6'] = $_POST['grams6'] ?? 0;
	$record['grams7'] = $_POST['grams7'] ?? 0;
	$record['grams8'] = $_POST['grams8'] ?? 0;
	$record['grams9'] = $_POST['grams9'] ?? 0;
	$record['grams10'] = $_POST['grams10'] ?? 0;
	$record['grams11'] = $_POST['grams11'] ?? 0;
	$record['grams12'] = $_POST['grams12'] ?? 0;
	$record['grams13'] = $_POST['grams13'] ?? 0;
	$record['grams14'] = $_POST['grams14'] ?? 0;
	$record['grams15'] = $_POST['grams15'] ?? 0;
	$record['grams16'] = $_POST['grams16'] ?? 0;
	

	//validate($record); //I havent valided this values yet
	
	
	$sql ="UPDATE IGNORE diet_plan SET ";
	$sql .="product1='" . $record['product1'] ."',";
	$sql .="product2='" . $record['product2'] ."',";
	$sql .="product3='" . $record['product3'] ."',";
	$sql .="product4='" . $record['product4'] ."',";
	$sql .="product5='" . $record['product5'] ."',";
	$sql .="product6='" . $record['product6'] ."',";
	$sql .="product7='" . $record['product7'] ."',";
	$sql .="product8='" . $record['product8'] ."',";
	$sql .="product9='" . $record['product9'] ."',";
	$sql .="product10='" . $record['product10'] ."',";
	$sql .="product11='" . $record['product11'] ."',";
	$sql .="product12='" . $record['product12'] ."',";
	$sql .="product13='" . $record['product13'] ."',";
	$sql .="product14='" . $record['product14'] ."',";
	$sql .="product15='" . $record['product15'] ."',";
	$sql .="product16='" . $record['product16'] ."',";
	$sql .="grams1='" . $record['grams1'] ."',";
	$sql .="grams2='" . $record['grams2'] ."',";
	$sql .="grams3='" . $record['grams3'] ."',";
	$sql .="grams4='" . $record['grams4'] ."',";
	$sql .="grams5='" . $record['grams5'] ."',";
	$sql .="grams6='" . $record['grams6'] ."',";
	$sql .="grams7='" . $record['grams7'] ."',";
	$sql .="grams8='" . $record['grams8'] ."',";
	$sql .="grams9='" . $record['grams9'] ."',";
	$sql .="grams10='" . $record['grams10'] ."',";
	$sql .="grams11='" . $record['grams11'] ."',";
	$sql .="grams12='" . $record['grams12'] ."',";
	$sql .="grams13='" . $record['grams13'] ."',";
	$sql .="grams14='" . $record['grams14'] ."',";
	$sql .="grams15='" . $record['grams15'] ."',";
	$sql .="grams16='" . $record['grams16'] ."'";
	
	$sql .="WHERE user='" . $_GET['user'] ."'";


	$query = mysqli_query($db,$sql);
	if($query) {
		header("Location:" . ('redirect.php?user=' . url($_GET['user'])));
	} else {
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
	}

} else {
}
?>
	<?php if(!isset($_GET['user'])){header("Location:" ."../../index.php");}?>
	<?php $user = $_GET['user'] ??'';?>
	<?php
	$sql ="SELECT * FROM diet_plan WHERE user ='" . esc($user) ."'";
	$query = mysqli_query($db,$sql);
	if (!$query) {
	exit("Database query failed:" . mysqli_error($db));
}
if (!$user) {
	exit("<h1>Invalid username</h1><h3><a href='javascript:history.back()'>Go back and log in</a></h3>");
}
	?>
	<?php $record = mysqli_fetch_assoc($query)?>
	
	<?php
	$sql2 ="SELECT * FROM map WHERE product_id IN ('";
	$sql2 .= $record['product1'] ."','";
	$sql2 .= $record['product2'] ."','";
	$sql2 .= $record['product3'] ."','";
	$sql2 .= $record['product4'] ."','";
	$sql2 .= $record['product5'] ."','";
	$sql2 .= $record['product6'] ."','";
	$sql2 .= $record['product7'] ."','";
	$sql2 .= $record['product8'] ."','";
	$sql2 .= $record['product9'] ."','";
	$sql2 .= $record['product10'] ."','";
	$sql2 .= $record['product11'] ."','";
	$sql2 .= $record['product12'] ."','";
	$sql2 .= $record['product13'] ."','";
	$sql2 .= $record['product14'] ."','";
	$sql2 .= $record['product15'] ."','";
	$sql2 .= $record['product16'] ."') AND user ='" . esc($user) ."'";
	$query2 = mysqli_query($db,$sql2);
	
	$sql3 ="SELECT * FROM body WHERE user ='" . esc($user) ."'";
	$query3 = mysqli_query($db,$sql3);
	$body = mysqli_fetch_assoc($query3);
	
	$sql4 ="SELECT * FROM diet_constraints WHERE user ='" . esc($user) ."'";
	$query4 = mysqli_query($db,$sql4);
	$constraints = mysqli_fetch_assoc($query4);
	
	?>
	
	<?php require_once('diet_functions.php');?> <!-- to actually get the id name, and nutrition facts + totals -->
  <body>
	<table class="div">
	<tr>
	<td valign="top">
	<h1>Diet plan <?php echo htm($record['user']); ?></h1>
	</td>
	<td valign="middle">
		<table id="demo">
		<input type="text" name="country" id="country" class="form-control" placeholder="Enter Food Name" />  
		</table>
		<form action="" method="post">
		<input type="submit" value="Refresh" name="action">
		</form>
		<a class="action" href="<?php echo ('https://coolworkshop.shinyapps.io/fillin/?user=' . $_SESSION['user']);?>">Fill in the rest</a>
	</td>
	<td valign="top" height="100">
	<div id="countryList"></div>
	<script>  
 $(document).ready(function(){  
      $('#country').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"search.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#countryList').fadeIn();  
                          $('#countryList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#country').val($(this).text());  
           $('#countryList').fadeOut();  
      });  
 });  
 </script>
	</td>
	</tr>
	</table>
	
	<h3><a class="action" href="../../index.php">Back to main menu</a></h3>
	<strong><a class="action" href="<?php echo ('../body/index.php?user=' . url($user)); ?>">Edit body stats</a></strong> <strong><a class="action" href="<?php echo ('get_constraints.php?user=' . url($user)); ?>">Fetch diet constraints</a></strong> <strong> <a class="action" href="<?php echo ('edit_constraints.php?user=' . url($user)); ?>">Edit diet constraints</a></strong> <strong><a class="action" href="<?php echo ('https://coolworkshop.shinyapps.io/dietsolver/?user=' . $_SESSION['user']);?>">Optimize diet</a></strong><!-- this dietsolver should run on a separate local php site with curl, a loading gif, and then back to diet index to make sure that the people cant hack the urls of other users. also make sure that the url of the shiny app is unknown to the public so people can't hack the user get easily-->
    <form action="<?php echo ('index.php?user=' . url($user)); ?>" method="post">
	<table class="list">
	  <tr>
		<th></th>
		<th>Weight goal</th>
		<th>Weight training</th>
		<th>Activity level</th>
		<th></th>
		<th>kcals</th>
		<th>carb</th>
		<th>fiber</th>
		<th>protein</th>
		<th>fat</th>
		<th>&alpha;-LA</th>
		<th>LA</th>
		<th>water</th>
		<th>vitamina</th>
		<th>vitaminc</th>
		<th>vitamind</th>
		<th>vitaminb6</th>
		<th>vitamine</th>
		<th>vitamink</th>
		<th>thiamin</th>
		<th>vitaminb12</th>
		<th>riboflavin</th>
		<th>folate</th>
		<th>niacin</th>
		<th>choline</th>
		<th>pantothenicacid</th>
		<th>calcium</th>
		<th>copper</th>
		<th>fluoride</th>
		<th>iron</th>
		<th>magnesium</th>
		<th>manganese</th>
		<th>phosphorus</th>
		<th>potassium</th>
		<th>selenium</th>
		<th>sodium</th>
		<th>zinc</th>
		<th>phenylalanine</th>
		<th>valine</th>
		<th>threonine</th>
		<th>tryptophan</th>
		<th>methionine</th>
		<th>leucine</th>
		<th>isoleucine</th>
		<th>lysine</th>
		<th>histidine</th>
	  </tr>
	  <tr>
		<td></td>
		<td><?php echo $body['GOAL'];?></td>
		<td><?php echo $body['STRENGTH'];?></td>
		<td><?php echo $body['ACTIVITY'];?></td>
		<th>Tolerable UL intakes</th>
		<td><?php echo round($constraints['kcals_max'],0,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['carb_max'],0,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['fiber_max'],0,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['protein_max'],0,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['fat_max'],0,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['ala183und_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['la182und_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['water_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['vitamina_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['vitaminc_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['vitamind_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['vitaminb6_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['vitamine_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['vitamink_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['thiamin_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['vitaminb12_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['riboflavin_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['folate_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['niacin_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['choline_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['pantothenicacid_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['calcium_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['copper_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['fluoride_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['iron_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['magnesium_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['manganese_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['phosphorus_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['potassium_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['selenium_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['sodium_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['zinc_max'],3,PHP_ROUND_HALF_UP);?></td>	
		<td><?php echo round($constraints['phenylalanine_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['valine_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['threonine_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['tryptophan_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['methionine_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['leucine_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['isoleucine_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['lysine_max'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['histidine_max'],3,PHP_ROUND_HALF_UP);?></td>
	  </tr>
	  <tr>
		<th></th>
	  	<th>Gender</th>
		<th>Age</th>
		<th>Weight and height</th>
		<th>Recommended LL intakes</th>
		<td><?php echo round($constraints['kcals_min'],0,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['carb_min'],0,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['fiber_min'],0,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['protein_min'],0,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['fat_min'],0,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['ala183und_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['la182und_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['water_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['vitamina_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['vitaminc_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['vitamind_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['vitaminb6_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['vitamine_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['vitamink_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['thiamin_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['vitaminb12_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['riboflavin_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['folate_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['niacin_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['choline_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['pantothenicacid_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['calcium_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['copper_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['fluoride_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['iron_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['magnesium_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['manganese_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['phosphorus_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['potassium_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['selenium_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['sodium_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['zinc_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['phenylalanine_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['valine_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['threonine_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['tryptophan_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['methionine_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['leucine_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['isoleucine_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['lysine_min'],3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($constraints['histidine_min'],3,PHP_ROUND_HALF_UP);?></td>
	  </tr>
	  <tr>
		<td></td>
		<td><?php echo ucfirst(strtolower($body['SEX']));?></td>
		<td><?php echo $body['AGE'];?> yrs</td>
		<td><?php echo $body['WEIGHT'] . " kg at " . $body['height-centimeters'] . " cm";?></td>
		<th>Unit</th>
		<td>kcal</td>
		<td>g</td>
		<td>g</td>
		<td>g</td>
		<td>g</td>
		<td>g</td>
		<td>g</td>
		<td>g</td>
		<td>&micro;g</td>
		<td>mg</td>
		<td>&micro;g</td>
		<td>mg</td>
		<td>mg</td>
		<td>&micro;g</td>
		<td>mg</td>
		<td>&micro;g</td>
		<td>mg</td>
		<td>&micro;g</td>
		<td>mg</td>
		<td>mg</td>
		<td>mg</td>
		<td>mg</td>
		<td>mg</td>
		<td>&micro;g</td>
		<td>mg</td>
		<td>mg</td>
		<td>mg</td>
		<td>mg</td>
		<td>mg</td>
		<td>&micro;g</td>
		<td>mg</td>
		<td>mg</td>
		<td>g</td>
		<td>g</td>
		<td>g</td>
		<td>g</td>
		<td>g</td>
		<td>g</td>
		<td>g</td>
		<td>g</td>
		<td>g</td>
	  </tr>
	  <tr><td></br></td></tr>
	  <tr>
	    <th></th>
        <th><span id = "products">Product/ID</span></th>
        <th>USDA name</th>
		<th>portion size grams</th>
		<th>price</th>
		<th>kcals</th>
		<th>carb</th>
		<th>fiber</th>
		<th>protein</th>
		<th>fat</th>
		<th>&alpha;-LA</th>
		<th>LA</th>
		<th>water</th>
		<th>vitamina</th>
		<th>vitaminc</th>
		<th>vitamind</th>
		<th>vitaminb6</th>
		<th>vitamine</th>
		<th>vitamink</th>
		<th>thiamin</th>
		<th>vitaminb12</th>
		<th>riboflavin</th>
		<th>folate</th>
		<th>niacin</th>
		<th>choline</th>
		<th>pantothenicacid</th>
		<th>calcium</th>
		<th>copper</th>
		<th>fluoride</th>
		<th>iron</th>
		<th>magnesium</th>
		<th>manganese</th>
		<th>phosphorus</th>
		<th>potassium</th>
		<th>selenium</th>
		<th>sodium</th>
		<th>zinc</th>
		<th>phenylalanine</th>
		<th>valine</th>
		<th>threonine</th>
		<th>tryptophan</th>
		<th>methionine</th>
		<th>leucine</th>
		<th>isoleucine</th>
		<th>lysine</th>
		<th>histidine</th>
	  </tr>
	  <?php
	$total_price = 0;
	$total_kcals = 0;
	$total_carb = 0;
	$total_fiber = 0;
	$total_protein = 0;
	$total_fat = 0;
	$total_ala183und = 0;
	$total_la182und = 0;
	$total_water = 0;
	$total_vitamina = 0;
	$total_vitaminc = 0;
	$total_vitamind = 0;
	$total_vitaminb6 = 0;
	$total_vitamine = 0;
	$total_vitamink = 0;
	$total_thiamin = 0;
	$total_vitaminb12 = 0;
	$total_riboflavin = 0;
	$total_folate = 0;
	$total_niacin = 0;
	$total_choline = 0;
	$total_pantothenicacid = 0;
	$total_calcium = 0;
	$total_copper = 0;
	$total_fluoride = 0;
	$total_iron = 0;
	$total_magnesium = 0;
	$total_manganese = 0;
	$total_phosphorus = 0;
	$total_potassium = 0;
	$total_selenium = 0;
	$total_sodium = 0;
	$total_zinc = 0;
	$total_phenylalanine = 0;
	$total_valine = 0;
	$total_threonine = 0;
	$total_tryptophan = 0;
	$total_methionine = 0;
	$total_leucine = 0;
	$total_isoleucine = 0;
	$total_lysine = 0;
	$total_histidine = 0;
	  ?>
	  <?php $w = 1;
	  while($w<17){?>
		<tr>	
	  <?php $product_id = htm($record['product'.$w]) ?? '';?>
		<td><a style="text-decoration: none" href="<?php echo 'feedback.php?product_id=' . $product_id;?>"><?php if(!empty($product_id)){echo get_product_info("feedback") == 1 ? '🚩' : '🏳️';}?></a>
		<td><center><a href="../products/show.php?id=<?php echo $product_id;?>"><?php get_product_info("product_name");?></a><?php if(!empty($product_id)){echo '<br>';}?>
		<a style="text-decoration: none" href="../products/show.php?id=<?php echo $product_id;?>"><img src="https://storefront-prod.nl.picnicinternational.com/static/images/<?php get_product_info("product_image");?>/small.png" onerror="this.style.display='none'"></a><?php if(!empty($product_id)){echo '<br>';}?>
		<input size=8 type="text" name="product<?php echo $w;?>" value="<?php echo $product_id;?>"/></center></td>
		<td valign="top"><center><a href="../usda/show.php?id=<?php get_product_info("usda_id");?>"><?php get_product_info("name");?></a></center></td>
		<td><input type="number" min="0" name="grams<?php echo $w;?>" value="<?php if (($record['grams'.$w])==0) {echo"0"; $grams = 0;} else {echo htm($record['grams'.$w]); $grams = htm($record['grams'.$w]);}?>" /></td>
		<td><?php get_product_info("price");?></td>
		<td><?php get_product_info("kcals");?></td>
		<td><?php get_product_info("carb");?></td>
		<td><?php get_product_info("fiber");?></td>
		<td><?php get_product_info("protein");?></td>
		<td><?php get_product_info("fat");?></td>
		<td><?php get_product_info("ala183und");?></td>
		<td><?php get_product_info("la182und");?></td>
		<td><?php get_product_info("water");?></td>
		<td><?php get_product_info("vitamina");?></td>
		<td><?php get_product_info("vitaminc");?></td>
		<td><?php get_product_info("vitamind");?></td>
		<td><?php get_product_info("vitaminb6");?></td>
		<td><?php get_product_info("vitamine");?></td>
		<td><?php get_product_info("vitamink");?></td>
		<td><?php get_product_info("thiamin");?></td>
		<td><?php get_product_info("vitaminb12");?></td>
		<td><?php get_product_info("riboflavin");?></td>
		<td><?php get_product_info("folate");?></td>
		<td><?php get_product_info("niacin");?></td>
		<td><?php get_product_info("choline");?></td>
		<td><?php get_product_info("pantothenicacid");?></td>
		<td><?php get_product_info("calcium");?></td>
		<td><?php get_product_info("copper");?></td>
		<td><?php get_product_info("fluoride");?></td>
		<td><?php get_product_info("iron");?></td>
		<td><?php get_product_info("magnesium");?></td>
		<td><?php get_product_info("manganese");?></td>
		<td><?php get_product_info("phosphorus");?></td>
		<td><?php get_product_info("potassium");?></td>
		<td><?php get_product_info("selenium");?></td>
		<td><?php get_product_info("sodium");?></td>
		<td><?php get_product_info("zinc");?></td>
		<td><?php get_product_info("phenylalanine");?></td>
		<td><?php get_product_info("valine");?></td>
		<td><?php get_product_info("threonine");?></td>
		<td><?php get_product_info("tryptophan");?></td>
		<td><?php get_product_info("methionine");?></td>
		<td><?php get_product_info("leucine");?></td>
		<td><?php get_product_info("isoleucine");?></td>
		<td><?php get_product_info("lysine");?></td>
		<td><?php get_product_info("histidine");?></td>
		</tr>
	  <?php $w++;} ?>
	  <tr>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th>price</th>
		<th>kcals</th>
		<th>carb</th>
		<th>fiber</th>
		<th>protein</th>
		<th>fat</th>
		<th>&alpha;-LA</th>
		<th>LA</th>
		<th>water</th>
		<th>vitamina</th>
		<th>vitaminc</th>
		<th>vitamind</th>
		<th>vitaminb6</th>
		<th>vitamine</th>
		<th>vitamink</th>
		<th>thiamin</th>
		<th>vitaminb12</th>
		<th>riboflavin</th>
		<th>folate</th>
		<th>niacin</th>
		<th>choline</th>
		<th>pantothenicacid</th>
		<th>calcium</th>
		<th>copper</th>
		<th>fluoridev</th>
		<th>iron</th>
		<th>magnesium</th>
		<th>manganese</th>
		<th>phosphorus</th>
		<th>potassium</th>
		<th>selenium</th>
		<th>sodium</th>
		<th>zinc</th>
		<th>phenylalanine</th>
		<th>valine</th>
		<th>threonine</th>
		<th>tryptophan</th>
		<th>methionine</th>
		<th>leucine</th>
		<th>isoleucine</th>
		<th>lysine</th>
		<th>histidine</th>
	  </tr>
	  <tr>
		<th></th>
	  	<td>from non-rounded #</td>
		<td></td>
		<th>Totals: </th>
		<td><?php echo "\xE2\x82\xAc" . round($total_price,2,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_kcals ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_carb ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_fiber ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_protein ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_fat ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_ala183und ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_la182und ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_water ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_vitamina ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_vitaminc ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_vitamind ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_vitaminb6 ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_vitamine ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_vitamink ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_thiamin ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_vitaminb12 ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_riboflavin ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_folate ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_niacin ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_choline ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_pantothenicacid ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_calcium ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_copper ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_fluoride ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_iron ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_magnesium ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_manganese ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_phosphorus ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_potassium ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_selenium ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_sodium ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_zinc ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_phenylalanine ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_valine ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_threonine ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_tryptophan ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_methionine ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_leucine ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_isoleucine ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_lysine ,3,PHP_ROUND_HALF_UP);?></td>
		<td><?php echo round($total_histidine ,3,PHP_ROUND_HALF_UP);?></td>
	  </tr>
	</table>
	  <div>
        <input type="submit" value="Update Diet" />
      </div>
    </form>
	</br>
  </body>
<?php mysqli_free_result($query); ?>
<?php mysqli_free_result($query2); ?> 
<?php mysqli_free_result($query3); ?> 
<?php mysqli_free_result($query4); ?> 
<?php db_disconnect($db); ?>
</html>