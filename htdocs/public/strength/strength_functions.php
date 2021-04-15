<?php

function lift_stats_name($id) {
	global $query3_names;
	foreach($query3_names as $name) {
		if ($name['id'] == $id) {//change me here
			echo $name['name'];
		}
	}
}

function lift_stats_hyp1rm($id,$type) {
	$hyp1rm = [];
	global $query_lift1;
	global $query_lift2;
	global $query_lift3;
	global $query_lift4;
	global $query_lift5;
	global $query_lift6;
	global $query_lift7;
	global $query_lift8;
	global $query_lift9;
	global $query_lift10;
	global $query_lift11;
	global $query_lift12;
	global $query_lift13;
	global $query_lift14;
	global $query_lift15;
	global $query_lift16;
			foreach($query_lift1 as $weight) {
				if ($weight['exercise1'] == $id) {//change me here
					$hyp1rm [] = array('timestamp' => $weight['timestamp'],
					'hyp1rm' => $weight['hyp1rm']);
				}
			}
			foreach($query_lift2 as $weight) {
				if ($weight['exercise2'] == $id) { //change me here
					$hyp1rm [] = array('timestamp' => $weight['timestamp'],
					'hyp1rm' => $weight['hyp1rm']);
				}
			}
			foreach($query_lift3 as $weight) {	
				if ($weight['exercise3'] == $id) { //change me here					
					$hyp1rm [] = array('timestamp' => $weight['timestamp'],
					'hyp1rm' => $weight['hyp1rm']);
				}
			}
			foreach($query_lift4 as $weight) {	
				if ($weight['exercise4'] == $id) { //change me here					
					$hyp1rm [] = array('timestamp' => $weight['timestamp'],
					'hyp1rm' => $weight['hyp1rm']);
				}
			}
			foreach($query_lift5 as $weight) {	
				if ($weight['exercise5'] == $id) { //change me here				
					$hyp1rm [] = array('timestamp' => $weight['timestamp'],
					'hyp1rm' => $weight['hyp1rm']);
				}
			}
			foreach($query_lift6 as $weight) {	
				if ($weight['exercise6'] == $id) { //change me here				
					$hyp1rm [] = array('timestamp' => $weight['timestamp'],
					'hyp1rm' => $weight['hyp1rm']);
				}
			}
			foreach($query_lift7 as $weight) {	
				if ($weight['exercise7'] == $id) { //change me here				
					$hyp1rm [] = array('timestamp' => $weight['timestamp'],
					'hyp1rm' => $weight['hyp1rm']);
				}
			}
			foreach($query_lift8 as $weight) {	
				if ($weight['exercise8'] == $id) { //change me here				
					$hyp1rm [] = array('timestamp' => $weight['timestamp'],
					'hyp1rm' => $weight['hyp1rm']);
				}
			}
			foreach($query_lift9 as $weight) {	
				if ($weight['exercise9'] == $id) { //change me here				
					$hyp1rm [] = array('timestamp' => $weight['timestamp'],
					'hyp1rm' => $weight['hyp1rm']);
				}
			}
			foreach($query_lift10 as $weight) {	
				if ($weight['exercise10'] == $id) { //change me here				
					$hyp1rm [] = array('timestamp' => $weight['timestamp'],
					'hyp1rm' => $weight['hyp1rm']);
				}
			}
			foreach($query_lift11 as $weight) {	
				if ($weight['exercise11'] == $id) { //change me here				
					$hyp1rm [] = array('timestamp' => $weight['timestamp'],
					'hyp1rm' => $weight['hyp1rm']);
				}
			}
			foreach($query_lift12 as $weight) {	
				if ($weight['exercise12'] == $id) { //change me here				
					$hyp1rm [] = array('timestamp' => $weight['timestamp'],
					'hyp1rm' => $weight['hyp1rm']);
				}
			}
			foreach($query_lift13 as $weight) {	
				if ($weight['exercise13'] == $id) { //change me here				
					$hyp1rm [] = array('timestamp' => $weight['timestamp'],
					'hyp1rm' => $weight['hyp1rm']);
				}
			}
			foreach($query_lift14 as $weight) {	
				if ($weight['exercise14'] == $id) { //change me here				
					$hyp1rm [] = array('timestamp' => $weight['timestamp'],
					'hyp1rm' => $weight['hyp1rm']);
				}
			}
			foreach($query_lift15 as $weight) {	
				if ($weight['exercise15'] == $id) { //change me here				
					$hyp1rm [] = array('timestamp' => $weight['timestamp'],
					'hyp1rm' => $weight['hyp1rm']);
				}
			}
			foreach($query_lift16 as $weight) {	
				if ($weight['exercise16'] == $id) { //change me here				
					$hyp1rm [] = array('timestamp' => $weight['timestamp'],
					'hyp1rm' => $weight['hyp1rm']);
				}
			}
			
			$hyp1rm_sametime = [];
			foreach ($hyp1rm as $hyp1rm_last) {
				if ($hyp1rm_last['timestamp'] == max(array_column($hyp1rm, 'timestamp'))) { 
					$hyp1rm_sametime  [] = $hyp1rm_last['hyp1rm'];					
				}
			}
			if (empty($hyp1rm_sametime)) {
				
			} else {
				if ($type == "weight") {
				$weight = max($hyp1rm_sametime);
				return $weight;
				}
				if ($type == "date") {
				$date = max(array_column($hyp1rm, 'timestamp'));
				return $date;
				}
			}
			
			


	
}

function lift_stats_hypratio($id) {
	global $query3_names;
				foreach($query3_names as $ref) {
				if ($ref['id'] == $id) {//change me here
					$ratioref = $ref['ratioref'];
				}
			}		
			foreach($query3_names as $ref) {
				if ($ref['id'] == $id) {//change me here
					$ratio = $ref['ratio'];
				}
			}
		if ($ratioref == 1) {$suggested_weight = lift_stats_hyp1rm(1,"weight") * $ratio;}
		if ($ratioref == 2) {$suggested_weight = lift_stats_hyp1rm(2,"weight") * $ratio;}
		if ($ratioref == 3) {$suggested_weight = lift_stats_hyp1rm(3,"weight") * $ratio;}
		if ($ratioref == 4) {$suggested_weight = lift_stats_hyp1rm(4,"weight") * $ratio;}
		if ($ratioref == 5) {$suggested_weight = lift_stats_hyp1rm(5,"weight") * $ratio;}
		if ($ratioref == 6) {$suggested_weight = lift_stats_hyp1rm(6,"weight") * $ratio;}
		if ($ratioref == 7) {$suggested_weight = lift_stats_hyp1rm(7,"weight") * $ratio;}
		if ($ratioref == 8) {$suggested_weight = lift_stats_hyp1rm(8,"weight") * $ratio;}
		if ($ratioref == 9) {$suggested_weight = lift_stats_hyp1rm(9,"weight") * $ratio;}
		if ($ratioref == 10) {$suggested_weight = lift_stats_hyp1rm(10,"weight") * $ratio;}
		if ($ratioref == 11) {$suggested_weight = lift_stats_hyp1rm(11,"weight") * $ratio;}
		if ($ratioref == 12) {$suggested_weight = lift_stats_hyp1rm(12,"weight") * $ratio;}
		if ($ratioref == 13) {$suggested_weight = lift_stats_hyp1rm(13,"weight") * $ratio;}
		if ($ratioref == 14) {$suggested_weight = lift_stats_hyp1rm(14,"weight") * $ratio;}
		if ($ratioref == 15) {$suggested_weight = lift_stats_hyp1rm(15,"weight") * $ratio;}
		if ($ratioref == 16) {$suggested_weight = lift_stats_hyp1rm(16,"weight") * $ratio;}
		if ($suggested_weight == 0) {
			$suggested_weight = NULL;
		} else {
		return number_format((float)$suggested_weight, 2, '.', '');
		}
}
function lift_stats_hypratio_check($id) {

	if (lift_stats_hyp1rm($id,"weight") == lift_stats_hypratio($id)) {
		} else {
				if (lift_stats_hyp1rm($id,"weight") >= lift_stats_hypratio($id)){
				echo "👌";
				} else {
				echo "🏋️‍♂️";
			}
		}
	
}

function lift_stats_pr($id,$type) {
	global $query_allprs;
	if (mysqli_num_rows($query_allprs) == 0) {return;}
	$pr = [];
	
	if ($id == 1) {
	foreach($query_allprs as $pr) {
		if (!empty($pr['pr1'])){ //change me here
			$pr [] = array('timestamp' => $pr['timestamp'],'pr' => $pr['pr1']); //change me here
		}
		if (empty($pr['pr1'])){ //change me here
			$pr [] = array('timestamp' => NULL,'pr' => NULL); //change me here
		}
	}
	if ($pr['timestamp'] == max(array_column($pr, 'timestamp'))){
		if ($pr['pr1'] == 0) { //change me here
			echo "";
			} else {
				$pr_final = $pr['pr1']; //change me here
				
			}
		}
	}
		if ($id == 2) {
	foreach($query_allprs as $pr) {
		if (!empty($pr['pr2'])){ //change me here
			$pr [] = array('timestamp' => $pr['timestamp'],'pr' => $pr['pr2']); //change me here
		}
		if (empty($pr['pr2'])){ //change me here
			$pr [] = array('timestamp' => NULL,'pr' => NULL); //change me here
		}
	}
	if ($pr['timestamp'] == max(array_column($pr, 'timestamp'))){
		if ($pr['pr2'] == 0) { //change me here
			echo "";
			} else {
				$pr_final = $pr['pr2']; //change me here
				
			}
		}
	}
		if ($id == 3) {
	foreach($query_allprs as $pr) {
		if (!empty($pr['pr3'])){ //change me here
			$pr [] = array('timestamp' => $pr['timestamp'],'pr' => $pr['pr3']); //change me here
		}
		if (empty($pr['pr3'])){ //change me here
			$pr [] = array('timestamp' => NULL,'pr' => NULL); //change me here
		}
	}
	if ($pr['timestamp'] == max(array_column($pr, 'timestamp'))){
		if ($pr['pr3'] == 0) { //change me here
			echo "";
			} else {
				$pr_final = $pr['pr3']; //change me here
				
			}
		}
	}
		if ($id == 4) {
	foreach($query_allprs as $pr) {
		if (!empty($pr['pr4'])){ //change me here
			$pr [] = array('timestamp' => $pr['timestamp'],'pr' => $pr['pr4']); //change me here
		}
		if (empty($pr['pr4'])){ //change me here
			$pr [] = array('timestamp' => NULL,'pr' => NULL); //change me here
		}
	}
	if ($pr['timestamp'] == max(array_column($pr, 'timestamp'))){
		if ($pr['pr4'] == 0) { //change me here
			echo "";
			} else {
				$pr_final = $pr['pr4']; //change me here
				
			}
		}
	}
		if ($id == 5) {
	foreach($query_allprs as $pr) {
		if (!empty($pr['pr5'])){ //change me here
			$pr [] = array('timestamp' => $pr['timestamp'],'pr' => $pr['pr5']); //change me here
		}
		if (empty($pr['pr5'])){ //change me here
			$pr [] = array('timestamp' => NULL,'pr' => NULL); //change me here
		}
		
	}
	if ($pr['timestamp'] == max(array_column($pr, 'timestamp'))){
		if ($pr['pr5'] == 0) { //change me here
			echo "";
			} else {
				$pr_final = $pr['pr5']; //change me here
				
			}
		}
	}
		if ($id == 6) {
	foreach($query_allprs as $pr) {
		if (!empty($pr['pr6'])){ //change me here
			$pr [] = array('timestamp' => $pr['timestamp'],'pr' => $pr['pr6']); //change me here
		}
		if (empty($pr['pr6'])){ //change me here
			$pr [] = array('timestamp' => NULL,'pr' => NULL); //change me here
		}
	}
	if ($pr['timestamp'] == max(array_column($pr, 'timestamp'))){
		if ($pr['pr6'] == 0) { //change me here
			echo "";
			} else {
				$pr_final = $pr['pr6']; //change me here
				
			}
		}
	}
		if ($id == 7) {
	foreach($query_allprs as $pr) {
		if (!empty($pr['pr7'])){ //change me here
			$pr [] = array('timestamp' => $pr['timestamp'],'pr' => $pr['pr7']); //change me here
		}
		if (empty($pr['pr7'])){ //change me here
			$pr [] = array('timestamp' => NULL,'pr' => NULL); //change me here
		}
	}
	if ($pr['timestamp'] == max(array_column($pr, 'timestamp'))){
		if ($pr['pr7'] == 0) { //change me here
			echo "";
			} else {
				$pr_final = $pr['pr7']; //change me here
				
			}
		}
	}
		if ($id == 8) {
	foreach($query_allprs as $pr) {
		if (!empty($pr['pr8'])){ //change me here
			$pr [] = array('timestamp' => $pr['timestamp'],'pr' => $pr['pr8']); //change me here
		}
		if (empty($pr['pr8'])){ //change me here
			$pr [] = array('timestamp' => NULL,'pr' => NULL); //change me here
		}
	}
	if ($pr['timestamp'] == max(array_column($pr, 'timestamp'))){
		if ($pr['pr8'] == 0) { //change me here
			echo "";
			} else {
				$pr_final = $pr['pr8']; //change me here
				
			}
		}
	}
		if ($id == 9) {
	foreach($query_allprs as $pr) {
		if (!empty($pr['pr9'])){ //change me here
			$pr [] = array('timestamp' => $pr['timestamp'],'pr' => $pr['pr9']); //change me here
		}
		if (empty($pr['pr9'])){ //change me here
			$pr [] = array('timestamp' => NULL,'pr' => NULL); //change me here
		}
	}
	if ($pr['timestamp'] == max(array_column($pr, 'timestamp'))){
		if ($pr['pr9'] == 0) { //change me here
			echo "";
			} else {
				$pr_final = $pr['pr9']; //change me here
				 
			}
		}
	}
		if ($id == 10) {
	foreach($query_allprs as $pr) {
		if (!empty($pr['pr10'])){ //change me here
			$pr [] = array('timestamp' => $pr['timestamp'],'pr' => $pr['pr10']); //change me here
		}
		if (empty($pr['pr10'])){ //change me here
			$pr [] = array('timestamp' => NULL,'pr' => NULL); //change me here
		}
	}
	if ($pr['timestamp'] == max(array_column($pr, 'timestamp'))){
		if ($pr['pr10'] == 0) { //change me here
			echo "";
			} else {
				$pr_final = $pr['pr10']; //change me here
				 
			}
		}
	}
	if ($id == 11) {
	foreach($query_allprs as $pr) {
		if (!empty($pr['pr11'])){ //change me here
			$pr [] = array('timestamp' => $pr['timestamp'],'pr' => $pr['pr11']); //change me here
		}
		if (empty($pr['pr11'])){ //change me here
			$pr [] = array('timestamp' => NULL,'pr' => NULL); //change me here
		}
	}
	if ($pr['timestamp'] == max(array_column($pr, 'timestamp'))){
		if ($pr['pr11'] == 0) { //change me here
			echo "";
			} else {
				$pr_final = $pr['pr11']; //change me here
				 
			}
		}
	}
	if ($id == 12) {
	foreach($query_allprs as $pr) {
		if (!empty($pr['pr12'])){ //change me here
			$pr [] = array('timestamp' => $pr['timestamp'],'pr' => $pr['pr12']); //change me here
		}
		if (empty($pr['pr12'])){ //change me here
			$pr [] = array('timestamp' => NULL,'pr' => NULL); //change me here
		}
	}
	if ($pr['timestamp'] == max(array_column($pr, 'timestamp'))){
		if ($pr['pr12'] == 0) { //change me here
			echo "";
			} else {
				$pr_final = $pr['pr12']; //change me here
				 
			}
		}
	}
	if ($id == 13) {
	foreach($query_allprs as $pr) {
		if (!empty($pr['pr13'])){ //change me here
			$pr [] = array('timestamp' => $pr['timestamp'],'pr' => $pr['pr13']); //change me here
		}
		if (empty($pr['pr13'])){ //change me here
			$pr [] = array('timestamp' => NULL,'pr' => NULL); //change me here
		}
	}
	if ($pr['timestamp'] == max(array_column($pr, 'timestamp'))){
		if ($pr['pr13'] == 0) { //change me here
			echo "";
			} else {
				$pr_final = $pr['pr13']; //change me here
				 
			}
		}
	}
	if ($id == 14) {
	foreach($query_allprs as $pr) {
		if (!empty($pr['pr14'])){ //change me here
			$pr [] = array('timestamp' => $pr['timestamp'],'pr' => $pr['pr14']); //change me here
		}
		if (empty($pr['pr14'])){ //change me here
			$pr [] = array('timestamp' => NULL,'pr' => NULL); //change me here
		}
	}
	if ($pr['timestamp'] == max(array_column($pr, 'timestamp'))){
		if ($pr['pr14'] == 0) { //change me here
			echo "";
			} else {
				$pr_final = $pr['pr14']; //change me here
				 
			}
		}
	}
	if ($id == 15) {
	foreach($query_allprs as $pr) {
		if (!empty($pr['pr15'])){ //change me here
			$pr [] = array('timestamp' => $pr['timestamp'],'pr' => $pr['pr15']); //change me here
		}
		if (empty($pr['pr15'])){ //change me here
			$pr [] = array('timestamp' => NULL,'pr' => NULL); //change me here
		}
	}
	if ($pr['timestamp'] == max(array_column($pr, 'timestamp'))){
		if ($pr['pr15'] == 0) { //change me here
			echo "";
			} else {
				$pr_final = $pr['pr15']; //change me here
				 
			}
		}
	}
	if ($id == 16) {
	foreach($query_allprs as $pr) {
		if (!empty($pr['pr16'])){ //change me here
			$pr [] = array('timestamp' => $pr['timestamp'],'pr' => $pr['pr16']); //change me here
		}
		if (empty($pr['pr16'])){ //change me here
			$pr [] = array('timestamp' => NULL,'pr' => NULL); //change me here
		}
	}
	if ($pr['timestamp'] == max(array_column($pr, 'timestamp'))){
		if ($pr['pr16'] == 0) { //change me here
			echo "";
			} else {
				$pr_final = $pr['pr16']; //change me here
				 
			}
		}
	}
	if ($type == "weight") {
		if (isset($pr_final)) {
		return $pr_final;
		}

	}
	if ($type == "date") {
		if (!isset($pr_final)) {
		$date = NULL;	
		return NULL;
		} else {
			$date = max(array_column($pr, 'timestamp'));
			return $date;
		}
	}
}

function lift_stats_pr_check($id) {
	
	if (lift_stats_pr($id,"weight") == 0 || lift_stats_hyp1rm($id,"weight") == 0){
			echo "";
		} else {		
			if (lift_stats_pr($id,"weight") == lift_stats_hyp1rm($id,"weight")){
				echo "";
			} else { if (lift_stats_pr($id,"weight") > lift_stats_hyp1rm($id,"weight")){
				echo "🏋️‍♂️";
			} else {
			echo "⏲";
			}
			}
		
	
}
}


?>