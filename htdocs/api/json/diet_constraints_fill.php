<?php
header('Content-type: application/json');
function db_connect(){
	$connection = mysqli_connect("localhost","coolwork_db",".t66yKQ1B8@Nce","coolwork_db");
	return $connection;
}

function db_disconnect($connection){
	if(isset($connection)){
		mysqli_close($connection);
	}
}
$db = db_connect();
if(mysqli_connect_errno()) {
  $msg = "Database connection failed: ";
  $msg .= mysqli_connect_error();
  $msg .= " (" . mysqli_connect_errno() . ")";
  exit($msg);
}
function url($string=""){
	return htmlspecialchars(urlencode($string)); //echoing a url; check 'href', 'form action' and 'header' -- because of this nest no need to use htm for urls again
}
function htm($string=""){
	return htmlspecialchars($string); //check all echo as plain text (spaces are respected instead of replaced by + or 20%
}

function esc($string){
	return mysqli_real_escape_string(db_connect(), $string); //check sql scripts
}

$empty = "[{\"user\":\"\",\"kcals_min\":\"0.000\",\"carb_min\":\"0.000\",\"fiber_min\":\"0.000\",\"protein_min\":\"0.000\",\"fat_min\":\"0.000\",\"ala183und_min\":\"0.000\",\"la182und_min\":\"0.000\",\"water_min\":\"0.000\",\"vitamina_min\":\"0.000\",\"vitaminc_min\":\"0.000\",\"vitamind_min\":\"0.000\",\"vitaminb6_min\":\"0.000\",\"vitamine_min\":\"0.000\",\"vitamink_min\":\"0.000\",\"thiamin_min\":\"0.000\",\"vitaminb12_min\":\"0.000\",\"riboflavin_min\":\"0.000\",\"folate_min\":\"0.000\",\"niacin_min\":\"0.000\",\"choline_min\":\"0.000\",\"pantothenicacid_min\":\"0.000\",\"calcium_min\":\"0.000\",\"copper_min\":\"0.000\",\"fluoride_min\":\"0.000\",\"iron_min\":\"0.000\",\"magnesium_min\":\"0.000\",\"manganese_min\":\"0.000\",\"phosphorus_min\":\"0.000\",\"potassium_min\":\"0.000\",\"selenium_min\":\"0.000\",\"sodium_min\":\"0.000\",\"zinc_min\":\"0.000\",\"phenylalanine_min\":\"0.000\",\"valine_min\":\"0.000\",\"threonine_min\":\"0.000\",\"tryptophan_min\":\"0.000\",\"methionine_min\":\"0.000\",\"leucine_min\":\"0.000\",\"isoleucine_min\":\"0.000\",\"lysine_min\":\"0.000\",\"histidine_min\":\"0.000\",\"kcals_max\":\"0.000\",\"carb_max\":\"0.000\",\"fiber_max\":\"0.000\",\"protein_max\":\"0.000\",\"fat_max\":\"0.000\",\"ala183und_max\":\"0.000\",\"la182und_max\":\"0.000\",\"water_max\":\"0.000\",\"vitamina_max\":\"0.000\",\"vitaminc_max\":\"0.000\",\"vitamind_max\":\"0.000\",\"vitaminb6_max\":\"0.000\",\"vitamine_max\":\"0.000\",\"vitamink_max\":\"0.000\",\"thiamin_max\":\"0.000\",\"vitaminb12_max\":\"0.000\",\"riboflavin_max\":\"0.000\",\"folate_max\":\"0.000\",\"niacin_max\":\"0.000\",\"choline_max\":\"0.000\",\"pantothenicacid_max\":\"0.000\",\"calcium_max\":\"0.000\",\"copper_max\":\"0.000\",\"fluoride_max\":\"0.000\",\"iron_max\":\"0.000\",\"magnesium_max\":\"0.000\",\"manganese_max\":\"0.000\",\"phosphorus_max\":\"0.000\",\"potassium_max\":\"0.000\",\"selenium_max\":\"0.000\",\"sodium_max\":\"0.000\",\"zinc_max\":\"0.000\",\"phenylalanine_max\":\"0.000\",\"valine_max\":\"0.000\",\"threonine_max\":\"0.000\",\"tryptophan_max\":\"0.000\",\"methionine_max\":\"0.000\",\"leucine_max\":\"0.000\",\"isoleucine_max\":\"0.000\",\"lysine_max\":\"0.000\",\"histidine_max\":\"0.000\"}]";
if (empty($_GET['user'])){exit($empty);} else { $user = $_GET['user'];}

$sql3 = "SELECT

	user,
	kcals_min,
	carb_min,
	fiber_min,
	protein_min,
	fat_min,
	ala183und_min,
	la182und_min,
	water_min,
	vitamina_min,
	vitaminc_min,
	vitamind_min,
	vitaminb6_min,
	vitamine_min,
	vitamink_min,
	thiamin_min,
	vitaminb12_min,
	riboflavin_min,
	folate_min,
	niacin_min,
	choline_min,
	pantothenicacid_min,
	calcium_min,
	copper_min,
	fluoride_min,
	iron_min,
	magnesium_min,
	manganese_min,
	phosphorus_min,
	potassium_min,
	selenium_min,
	sodium_min,
	zinc_min,
	phenylalanine_min,
	valine_min,
	threonine_min,
	tryptophan_min,
	methionine_min,
	leucine_min,
	isoleucine_min,
	lysine_min,
	histidine_min,
	kcals_max,
	carb_max,
	fiber_max,
	protein_max,
	fat_max,
	ala183und_max,
	la182und_max,
	water_max,
	vitamina_max,
	vitaminc_max,
	vitamind_max,
	vitaminb6_max,
	vitamine_max,
	vitamink_max,
	thiamin_max,
	vitaminb12_max,
	riboflavin_max,
	folate_max,
	niacin_max,
	choline_max,
	pantothenicacid_max,
	calcium_max,
	copper_max,
	fluoride_max,
	iron_max,
	magnesium_max,
	manganese_max,
	phosphorus_max,
	potassium_max,
	selenium_max,
	sodium_max,
	zinc_max,
	phenylalanine_max,
	valine_max,
	threonine_max,
	tryptophan_max,
	methionine_max,
	leucine_max,
	isoleucine_max,
	lysine_max,
	histidine_max
	
	FROM diet_constraints
	
	WHERE user='" . $user . "'";

$query3 = mysqli_query($db,$sql3);
if (!$query3) {
exit("Database query failed: " . mysqli_error($db));
}
$num = mysqli_num_rows($query3);

$sql = "SELECT * FROM diet_plan WHERE user='" . $user . "'";
$query = mysqli_query($db,$sql);
$record = mysqli_fetch_assoc($query);


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
	
require_once('../../public/diet/diet_functions.php');
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



$i=1;
while($i<17){
$product_id = htm($record['product'.$i]);
$grams = htm($record['grams'.$i]);
foreach($query2 as $product_info) {
		if ($product_id == $product_info['product_id']) {
			$price = ($grams / 1000) * $product_info['price_per_kg'];
			$kcals = $grams * ($product_info['kcals'] / 100);
			$carb = $grams * ($product_info['carb'] / 100);
			$fiber = $grams * ($product_info['fiber'] / 100);
			$protein = $grams * ($product_info['protein'] / 100);
			$fat = $grams * ($product_info['fat'] / 100);
			$ala183und = $grams * ($product_info['ala183und'] / 100);
			$la182und = $grams * ($product_info['la182und'] / 100);
			$water = $grams * ($product_info['water'] / 100);
			$vitamina = $grams * ($product_info['vitamina'] / 100);
			$vitaminc = $grams * ($product_info['vitaminc'] / 100);
			$vitamind = $grams * ($product_info['vitamind'] / 100);
			$vitaminb6 = $grams * ($product_info['vitaminb6'] / 100);
			$vitamine = $grams * ($product_info['vitamine'] / 100);
			$vitamink = $grams * ($product_info['vitamink'] / 100);
			$thiamin = $grams * ($product_info['thiamin'] / 100);
			$vitaminb12 = $grams * ($product_info['vitaminb12'] / 100);
			$riboflavin = $grams * ($product_info['riboflavin'] / 100);
			$folate  = $grams * ($product_info['folate'] / 100);
			$niacin  = $grams * ($product_info['niacin'] / 100);
			$choline = $grams * ($product_info['choline'] / 100);
			$pantothenicacid = $grams * ($product_info['pantothenicacid'] / 100);
			$calcium = $grams * ($product_info['calcium'] / 100);
			$copper  = $grams * ($product_info['copper'] / 100);
			$fluoride = $grams * ($product_info['fluoride'] / 100);
			$iron = $grams * ($product_info['iron'] / 100);
			$magnesium = $grams * ($product_info['magnesium'] / 100);
			$manganese = $grams * ($product_info['manganese'] / 100);
			$phosphorus = $grams * ($product_info['phosphorus'] / 100);
			$potassium = $grams * ($product_info['potassium'] / 100);
			$selenium = $grams * ($product_info['selenium'] / 100);
			$sodium  = $grams * ($product_info['sodium'] / 100);
			$zinc = $grams * ($product_info['zinc'] / 100);
			$phenylalanine = $grams * ($product_info['phenylalanine'] / 100);
			$valine  = $grams * ($product_info['valine'] / 100);
			$threonine = $grams * ($product_info['threonine'] / 100);
			$tryptophan = $grams * ($product_info['tryptophan'] / 100);
			$methionine = $grams * ($product_info['methionine'] / 100);
			$leucine = $grams * ($product_info['leucine'] / 100);
			$isoleucine = $grams * ($product_info['isoleucine'] / 100);
			$lysine  = $grams * ($product_info['lysine'] / 100);
			$histidine = $grams * ($product_info['histidine'] / 100);
			
			$total_price              += $price            ;
			$total_kcals              += $kcals            ;
			$total_carb               += $carb             ;
			$total_fiber              += $fiber            ;
			$total_protein            += $protein          ;
			$total_fat                += $fat              ;
			$total_ala183und          += $ala183und        ;
			$total_la182und           += $la182und         ;
			$total_water              += $water            ;
			$total_vitamina           += $vitamina         ;
			$total_vitaminc           += $vitaminc         ;
			$total_vitamind           += $vitamind         ;
			$total_vitaminb6          += $vitaminb6        ;
			$total_vitamine           += $vitamine         ;
			$total_vitamink           += $vitamink         ;
			$total_thiamin            += $thiamin          ;
			$total_vitaminb12         += $vitaminb12       ;
			$total_riboflavin         += $riboflavin       ;
			$total_folate             += $folate           ;
			$total_niacin             += $niacin           ;
			$total_choline            += $choline          ;
			$total_pantothenicacid    += $pantothenicacid  ;
			$total_calcium            += $calcium          ;
			$total_copper             += $copper           ;
			$total_fluoride           += $fluoride         ;
			$total_iron               += $iron             ;
			$total_magnesium          += $magnesium        ;
			$total_manganese          += $manganese        ;
			$total_phosphorus         += $phosphorus       ;
			$total_potassium          += $potassium        ;
			$total_selenium           += $selenium         ;
			$total_sodium             += $sodium           ;
			$total_zinc               += $zinc             ;
			$total_phenylalanine      += $phenylalanine    ;
			$total_valine             += $valine           ;
			$total_threonine          += $threonine        ;
			$total_tryptophan         += $tryptophan       ;
			$total_methionine         += $methionine       ;
			$total_leucine            += $leucine          ;
			$total_isoleucine         += $isoleucine       ;
			$total_lysine             += $lysine           ;
			$total_histidine          += $histidine        ;
		}
	
	}
	$i++;
}

if($num >0){
$record_arr = [];
//$record_arr['data'] = [];

while($record3 = mysqli_fetch_assoc($query3)) { //same as for each query as record...
	extract($record3);
	
	$constraints_record = array(
		'user' => $user,
		'kcals_min'=> $kcals_min -                        $total_kcals          	,
		'carb_min'=> $carb_min -                          $total_carb           	,
		'fiber_min'=> $fiber_min -                        $total_fiber          	,
		'protein_min'=> $protein_min -                    $total_protein        	,
		'fat_min'=> $fat_min -                            $total_fat            	,
		'ala183und_min'=> $ala183und_min -                $total_ala183und      	,
		'la182und_min'=> $la182und_min -                  $total_la182und       	,
		'water_min'=> $water_min -                        $total_water          	,
		'vitamina_min'=> $vitamina_min -                  $total_vitamina       	,
		'vitaminc_min'=> $vitaminc_min -                  $total_vitaminc       	,
		'vitamind_min'=> $vitamind_min -                  $total_vitamind       	,
		'vitaminb6_min'=> $vitaminb6_min -                $total_vitaminb6      	,
		'vitamine_min'=> $vitamine_min -                  $total_vitamine       	,
		'vitamink_min'=> $vitamink_min -                  $total_vitamink       	,
		'thiamin_min'=> $thiamin_min -                    $total_thiamin        	,
		'vitaminb12_min'=> $vitaminb12_min -              $total_vitaminb12     	,
		'riboflavin_min'=> $riboflavin_min -              $total_riboflavin     	,
		'folate_min'=> $folate_min -                      $total_folate         	,
		'niacin_min'=> $niacin_min -                      $total_niacin         	,
		'choline_min'=> $choline_min -                    $total_choline        	,
		'pantothenicacid_min'=> $pantothenicacid_min -    $total_pantothenicacid	,
		'calcium_min'=> $calcium_min -                    $total_calcium        	,
		'copper_min'=> $copper_min -                      $total_copper         	,
		'fluoride_min'=> $fluoride_min -                  $total_fluoride       	,
		'iron_min'=> $iron_min -                          $total_iron           	,
		'magnesium_min'=> $magnesium_min -                $total_magnesium      	,
		'manganese_min'=> $manganese_min -                $total_manganese      	,
		'phosphorus_min'=> $phosphorus_min -              $total_phosphorus     	,
		'potassium_min'=> $potassium_min -                $total_potassium      	,
		'selenium_min'=> $selenium_min -                  $total_selenium       	,
		'sodium_min'=> $sodium_min -                      $total_sodium         	,
		'zinc_min'=> $zinc_min -                          $total_zinc           	,
		'phenylalanine_min'=> $phenylalanine_min -        $total_phenylalanine  	,
		'valine_min'=> $valine_min -                      $total_valine         	,
		'threonine_min'=> $threonine_min -                $total_threonine      	,
		'tryptophan_min'=> $tryptophan_min -              $total_tryptophan     	,
		'methionine_min'=> $methionine_min -              $total_methionine     	,
		'leucine_min'=> $leucine_min -                    $total_leucine        	,
		'isoleucine_min'=> $isoleucine_min -              $total_isoleucine     	,
		'lysine_min'=> $lysine_min -                      $total_lysine         	,
		'histidine_min'=> $histidine_min -                $total_histidine      	,
		'kcals_max'=> $kcals_max -                        $total_kcals          	,
		'carb_max'=> $carb_max -                          $total_carb           	,
		'fiber_max'=> $fiber_max -                        $total_fiber          	,
		'protein_max'=> $protein_max -                    $total_protein        	,
		'fat_max'=> $fat_max -                            $total_fat            	,
		'ala183und_max'=> $ala183und_max -                $total_ala183und      	,
		'la182und_max'=> $la182und_max -                  $total_la182und       	,
		'water_max'=> $water_max -                        $total_water          	,
		'vitamina_max'=> $vitamina_max -                  $total_vitamina       	,
		'vitaminc_max'=> $vitaminc_max -                  $total_vitaminc       	,
		'vitamind_max'=> $vitamind_max -                  $total_vitamind       	,
		'vitaminb6_max'=> $vitaminb6_max -                $total_vitaminb6      	,
		'vitamine_max'=> $vitamine_max -                  $total_vitamine       	,
		'vitamink_max'=> $vitamink_max -                  $total_vitamink       	,
		'thiamin_max'=> $thiamin_max -                    $total_thiamin        	,
		'vitaminb12_max'=> $vitaminb12_max -              $total_vitaminb12     	,
		'riboflavin_max'=> $riboflavin_max -              $total_riboflavin     	,
		'folate_max'=> $folate_max -                      $total_folate         	,
		'niacin_max'=> $niacin_max -                      $total_niacin         	,
		'choline_max'=> $choline_max -                    $total_choline        	,
		'pantothenicacid_max'=> $pantothenicacid_max -    $total_pantothenicacid	,
		'calcium_max'=> $calcium_max -                    $total_calcium        	,
		'copper_max'=> $copper_max -                      $total_copper         	,
		'fluoride_max'=> $fluoride_max -                  $total_fluoride       	,
		'iron_max'=> $iron_max -                          $total_iron           	,
		'magnesium_max'=> $magnesium_max -                $total_magnesium      	,
		'manganese_max'=> $manganese_max -                $total_manganese      	,
		'phosphorus_max'=> $phosphorus_max -              $total_phosphorus     	,
		'potassium_max'=> $potassium_max -                $total_potassium      	,
		'selenium_max'=> $selenium_max -                  $total_selenium       	,
		'sodium_max'=> $sodium_max -                      $total_sodium         	,
		'zinc_max'=> $zinc_max -                          $total_zinc           	,
		'phenylalanine_max'=> $phenylalanine_max -        $total_phenylalanine  	,
		'valine_max'=> $valine_max -                      $total_valine         	,
		'threonine_max'=> $threonine_max -                $total_threonine      	,
		'tryptophan_max'=> $tryptophan_max -              $total_tryptophan     	,
		'methionine_max'=> $methionine_max -              $total_methionine     	,
		'leucine_max'=> $leucine_max -                    $total_leucine        	,
		'isoleucine_max'=> $isoleucine_max -              $total_isoleucine     	,
		'lysine_max'=> $lysine_max -                      $total_lysine         	,
		'histidine_max'=> $histidine_max -                $total_histidine      	,
	);
	//array_push($record_arr['data'],$constraints_record);
	$record_arr[] = $constraints_record;
}
	
	echo json_encode($record_arr);
	
} else {
	exit($empty);
}

mysqli_free_result($query);
mysqli_close($db);
?>