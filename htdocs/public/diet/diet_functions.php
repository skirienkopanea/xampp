<?php

function get_product_info($field) {
	
	global $total_price;
	global $total_kcals;
	global $total_carb;
	global $total_fiber;
	global $total_protein;
	global $total_fat;
	global $total_ala183und;
	global $total_la182und;
	global $total_water;
	global $total_vitamina;
	global $total_vitaminc;
	global $total_vitamind;
	global $total_vitaminb6;
	global $total_vitamine;
	global $total_vitamink;
	global $total_thiamin;
	global $total_vitaminb12;
	global $total_riboflavin;
	global $total_folate;
	global $total_niacin;
	global $total_choline;
	global $total_pantothenicacid;
	global $total_calcium;
	global $total_copper;
	global $total_fluoride;
	global $total_iron;
	global $total_magnesium;
	global $total_manganese;
	global $total_phosphorus;
	global $total_potassium;
	global $total_selenium;
	global $total_sodium;
	global $total_zinc;
	global $total_phenylalanine;
	global $total_valine;
	global $total_threonine;
	global $total_tryptophan;
	global $total_methionine;
	global $total_leucine;
	global $total_isoleucine;
	global $total_lysine;
	global $total_histidine;	
	global $product_id;
	global $grams;	
	global $record; //product id and grams in diet plan
	global $query2; //all facts about products (LIMIT 16 matching ids)
	
	if(empty($product_id)) {$name  = "";} else {$name = "invalid id";}
			$price = "";
			$kcals = "";
			$carb = "";
			$fiber = "";
			$protein = "";
			$fat = "";
			$ala183und = "";
			$la182und = "";
			$vitamina = "";
			$vitaminc = "";
			$vitamind = "";
			$vitaminb6 = "";
			$vitamine = "";
			$vitamink = "";
			$thiamin = "";
			$vitaminb12 = "";
			$riboflavin = "";
			$folate  = "";
			$niacin  = "";
			$choline = "";
			$pantothenicacid = "";
			$calcium = "";
			$copper  = "";
			$fluoride = "";
			$iron = "";
			$magnesium = "";
			$manganese = "";
			$phosphorus = "";
			$potassium = "";
			$selenium = "";
			$sodium  = "";
			$zinc = "";
			$phenylalanine = "";
			$valine  = "";
			$threonine = "";
			$tryptophan = "";
			$methionine = "";
			$leucine = "";
			$isoleucine = "";
			$lysine  = "";
			$histidine = "";
	
	foreach($query2 as $product_info) {
		if ($product_id == $product_info['product_id']) {
			$name = $product_info['usda_name'];
			$usda_id = $product_info['usda_id'];
			$product_name = $product_info['product_name'];
			$product_image = $product_info['image'];
			$feedback = $product_info['feedback'];
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
		}
	}
		
	if ($field =="name"){
		if(!empty($name)) {
			echo $name;
		}
	}
	if ($field =="usda_id"){
		if(!empty($usda_id)) {
			echo $usda_id;
		}
	}
	if ($field =="product_name"){
		if(!empty($product_name)) {
			echo $product_name;
		}
	}
	if ($field =="product_image"){
		if(!empty($product_image)) {
			echo $product_image;
		}
	}
	if ($field =="feedback"){
		if(isset($feedback)) {
			return $feedback;
		}
	}
if ($field =="price"){
if(!empty($price)) {
echo "\xE2\x82\xAc" . round($price,2,PHP_ROUND_HALF_UP);
$total_price += $price;
} 
}
if ($field =="kcals"){
if(!empty($kcals)) {
echo round($kcals,3,PHP_ROUND_HALF_UP);
$total_kcals += $kcals;
} 
}
if ($field =="carb"){
if(!empty($carb)) {
echo round($carb,3,PHP_ROUND_HALF_UP);
$total_carb += $carb;
} 
}
if ($field =="fiber"){
if(!empty($fiber)) {
echo round($fiber,3,PHP_ROUND_HALF_UP);
$total_fiber += $fiber;
} 
}
if ($field =="protein"){
if(!empty($protein)) {
echo round($protein,3,PHP_ROUND_HALF_UP);
$total_protein += $protein;
} 
}
if ($field =="fat"){
if(!empty($fat)) {
echo round($fat,3,PHP_ROUND_HALF_UP);
$total_fat += $fat;
} 
}
if ($field =="ala183und"){
if(!empty($ala183und)) {
echo round($ala183und,3,PHP_ROUND_HALF_UP);
$total_ala183und += $ala183und;
} 
}
if ($field =="la182und"){
if(!empty($la182und)) {
echo round($la182und,3,PHP_ROUND_HALF_UP);
$total_la182und += $la182und;
} 
}
if ($field =="water"){
if(!empty($water)) {
echo round($water,3,PHP_ROUND_HALF_UP);
$total_water += $water;
} 
}
if ($field =="vitamina"){
if(!empty($vitamina)) {
echo round($vitamina,3,PHP_ROUND_HALF_UP);
$total_vitamina += $vitamina;
} 
}
if ($field =="vitaminc"){
if(!empty($vitaminc)) {
echo round($vitaminc,3,PHP_ROUND_HALF_UP);
$total_vitaminc += $vitaminc;
} 
}
if ($field =="vitamind"){
if(!empty($vitamind)) {
echo round($vitamind,3,PHP_ROUND_HALF_UP);
$total_vitamind += $vitamind;
} 
}
if ($field =="vitaminb6"){
if(!empty($vitaminb6)) {
echo round($vitaminb6,3,PHP_ROUND_HALF_UP);
$total_vitaminb6 += $vitaminb6;
} 
}
if ($field =="vitamine"){
if(!empty($vitamine)) {
echo round($vitamine,3,PHP_ROUND_HALF_UP);
$total_vitamine += $vitamine;
} 
}
if ($field =="vitamink"){
if(!empty($vitamink)) {
echo round($vitamink,3,PHP_ROUND_HALF_UP);
$total_vitamink += $vitamink;
} 
}
if ($field =="thiamin"){
if(!empty($thiamin)) {
echo round($thiamin,3,PHP_ROUND_HALF_UP);
$total_thiamin += $thiamin;
} 
}
if ($field =="vitaminb12"){
if(!empty($vitaminb12)) {
echo round($vitaminb12,3,PHP_ROUND_HALF_UP);
$total_vitaminb12 += $vitaminb12;
} 
}
if ($field =="riboflavin"){
if(!empty($riboflavin)) {
echo round($riboflavin,3,PHP_ROUND_HALF_UP);
$total_riboflavin += $riboflavin;
} 
}
if ($field =="folate"){
if(!empty($folate)) {
echo round($folate,3,PHP_ROUND_HALF_UP);
$total_folate += $folate;
} 
}
if ($field =="niacin"){
if(!empty($niacin)) {
echo round($niacin,3,PHP_ROUND_HALF_UP);
$total_niacin += $niacin;
} 
}
if ($field =="choline"){
if(!empty($choline)) {
echo round($choline,3,PHP_ROUND_HALF_UP);
$total_choline += $choline;
} 
}
if ($field =="pantothenicacid"){
if(!empty($pantothenicacid)) {
echo round($pantothenicacid,3,PHP_ROUND_HALF_UP);
$total_pantothenicacid += $pantothenicacid;
} 
}
if ($field =="calcium"){
if(!empty($calcium)) {
echo round($calcium,3,PHP_ROUND_HALF_UP);
$total_calcium += $calcium;
} 
}
if ($field =="copper"){
if(!empty($copper)) {
echo round($copper,3,PHP_ROUND_HALF_UP);
$total_copper += $copper;
} 
}
if ($field =="fluoride"){
if(!empty($fluoride)) {
echo round($fluoride,3,PHP_ROUND_HALF_UP);
$total_fluoride += $fluoride;
} 
}
if ($field =="iron"){
if(!empty($iron)) {
echo round($iron,3,PHP_ROUND_HALF_UP);
$total_iron += $iron;
} 
}
if ($field =="magnesium"){
if(!empty($magnesium)) {
echo round($magnesium,3,PHP_ROUND_HALF_UP);
$total_magnesium += $magnesium;
} 
}
if ($field =="manganese"){
if(!empty($manganese)) {
echo round($manganese,3,PHP_ROUND_HALF_UP);
$total_manganese += $manganese;
} 
}
if ($field =="phosphorus"){
if(!empty($phosphorus)) {
echo round($phosphorus,3,PHP_ROUND_HALF_UP);
$total_phosphorus += $phosphorus;
} 
}
if ($field =="potassium"){
if(!empty($potassium)) {
echo round($potassium,3,PHP_ROUND_HALF_UP);
$total_potassium += $potassium;
} 
}
if ($field =="selenium"){
if(!empty($selenium)) {
echo round($selenium,3,PHP_ROUND_HALF_UP);
$total_selenium += $selenium;
} 
}
if ($field =="sodium"){
if(!empty($sodium)) {
echo round($sodium,3,PHP_ROUND_HALF_UP);
$total_sodium += $sodium;
} 
}
if ($field =="zinc"){
if(!empty($zinc)) {
echo round($zinc,3,PHP_ROUND_HALF_UP);
$total_zinc += $zinc;
} 
}
if ($field =="phenylalanine"){
if(!empty($phenylalanine)) {
echo round($phenylalanine,3,PHP_ROUND_HALF_UP);
$total_phenylalanine += $phenylalanine;
} 
}
if ($field =="valine"){
if(!empty($valine)) {
echo round($valine,3,PHP_ROUND_HALF_UP);
$total_valine += $valine;
} 
}
if ($field =="threonine"){
if(!empty($threonine)) {
echo round($threonine,3,PHP_ROUND_HALF_UP);
$total_threonine += $threonine;
} 
}
if ($field =="tryptophan"){
if(!empty($tryptophan)) {
echo round($tryptophan,3,PHP_ROUND_HALF_UP);
$total_tryptophan += $tryptophan;
} 
}
if ($field =="methionine"){
if(!empty($methionine)) {
echo round($methionine,3,PHP_ROUND_HALF_UP);
$total_methionine += $methionine;
} 
}
if ($field =="leucine"){
if(!empty($leucine)) {
echo round($leucine,3,PHP_ROUND_HALF_UP);
$total_leucine += $leucine;
} 
}
if ($field =="isoleucine"){
if(!empty($isoleucine)) {
echo round($isoleucine,3,PHP_ROUND_HALF_UP);
$total_isoleucine += $isoleucine;
} 
}
if ($field =="lysine"){
if(!empty($lysine)) {
echo round($lysine,3,PHP_ROUND_HALF_UP);
$total_lysine += $lysine;
} 
}
if ($field =="histidine"){
if(!empty($histidine)) {
echo round($histidine,3,PHP_ROUND_HALF_UP);
$total_histidine += $histidine;
} 
}

}
?>