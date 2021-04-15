<?php

function protraction_vs_retraction($reps_or_ratio) {
	
	global $record;
	global $query2;
	$protraction = 0;
	$retraction = 0;
	
	foreach($query2 as $exercise) {
		if ($record['exercise1'] == $exercise['id']) {
			$protraction_exercise1 = $exercise['protraction'];
			$protraction += ($record['sets1'] * $record['reps1']) * $protraction_exercise1;
		}
		if ($record['exercise2'] == $exercise['id']) {
			$protraction_exercise2 = $exercise['protraction'];
			$protraction += ($record['sets2'] * $record['reps2']) * $protraction_exercise2;
		}
		if ($record['exercise3'] == $exercise['id']) {
			$protraction_exercise3 = $exercise['protraction'];
			$protraction += ($record['sets3'] * $record['reps3']) * $protraction_exercise3;
		}
		if ($record['exercise4'] == $exercise['id']) {
			$protraction_exercise4 = $exercise['protraction'];
			$protraction += ($record['sets4'] * $record['reps4']) * $protraction_exercise4;
		}
		if ($record['exercise5'] == $exercise['id']) {
			$protraction_exercise5 = $exercise['protraction'];
			$protraction += ($record['sets5'] * $record['reps5']) * $protraction_exercise5;
		}
		if ($record['exercise6'] == $exercise['id']) {
			$protraction_exercise6 = $exercise['protraction'];
			$protraction += ($record['sets6'] * $record['reps6']) * $protraction_exercise6;
		}
		if ($record['exercise7'] == $exercise['id']) {
			$protraction_exercise7 = $exercise['protraction'];
			$protraction += ($record['sets7'] * $record['reps7']) * $protraction_exercise7;
		}
		if ($record['exercise8'] == $exercise['id']) {
			$protraction_exercise8 = $exercise['protraction'];
			$protraction += ($record['sets8'] * $record['reps8']) * $protraction_exercise8;
		}
		if ($record['exercise9'] == $exercise['id']) {
			$protraction_exercise9 = $exercise['protraction'];
			$protraction += ($record['sets9'] * $record['reps9']) * $protraction_exercise9;
		}
		if ($record['exercise10'] == $exercise['id']) {
			$protraction_exercise10 = $exercise['protraction'];
			$protraction += ($record['sets10'] * $record['reps10']) * $protraction_exercise10;
		}
		if ($record['exercise11'] == $exercise['id']) {
			$protraction_exercise11 = $exercise['protraction'];
			$protraction += ($record['sets11'] * $record['reps11']) * $protraction_exercise11;
		}
		if ($record['exercise12'] == $exercise['id']) {
			$protraction_exercise12 = $exercise['protraction'];
			$protraction += ($record['sets12'] * $record['reps12']) * $protraction_exercise12;
		}
		if ($record['exercise13'] == $exercise['id']) {
			$protraction_exercise13 = $exercise['protraction'];
			$protraction += ($record['sets13'] * $record['reps13']) * $protraction_exercise13;
		}
		if ($record['exercise14'] == $exercise['id']) {
			$protraction_exercise14 = $exercise['protraction'];
			$protraction += ($record['sets14'] * $record['reps14']) * $protraction_exercise14;
		}
		if ($record['exercise15'] == $exercise['id']) {
			$protraction_exercise15 = $exercise['protraction'];
			$protraction += ($record['sets15'] * $record['reps15']) * $protraction_exercise15;
		}
		if ($record['exercise16'] == $exercise['id']) {
			$protraction_exercise16 = $exercise['protraction'];
			$protraction += ($record['sets16'] * $record['reps16']) * $protraction_exercise16;
		}
		if ($record['exercise1'] == $exercise['id']) {
			$retraction_exercise1 = $exercise['retraction'];
			$retraction += ($record['sets1'] * $record['reps1']) * $retraction_exercise1;
		}
		if ($record['exercise2'] == $exercise['id']) {
			$retraction_exercise2 = $exercise['retraction'];
			$retraction += ($record['sets2'] * $record['reps2']) * $retraction_exercise2;
		}
		if ($record['exercise3'] == $exercise['id']) {
			$retraction_exercise3 = $exercise['retraction'];
			$retraction += ($record['sets3'] * $record['reps3']) * $retraction_exercise3;
		}
		if ($record['exercise4'] == $exercise['id']) {
			$retraction_exercise4 = $exercise['retraction'];
			$retraction += ($record['sets4'] * $record['reps4']) * $retraction_exercise4;
		}
		if ($record['exercise5'] == $exercise['id']) {
			$retraction_exercise5 = $exercise['retraction'];
			$retraction += ($record['sets5'] * $record['reps5']) * $retraction_exercise5;
		}
		if ($record['exercise6'] == $exercise['id']) {
			$retraction_exercise6 = $exercise['retraction'];
			$retraction += ($record['sets6'] * $record['reps6']) * $retraction_exercise6;
		}
		if ($record['exercise7'] == $exercise['id']) {
			$retraction_exercise7 = $exercise['retraction'];
			$retraction += ($record['sets7'] * $record['reps7']) * $retraction_exercise7;
		}
		if ($record['exercise8'] == $exercise['id']) {
			$retraction_exercise8 = $exercise['retraction'];
			$retraction += ($record['sets8'] * $record['reps8']) * $retraction_exercise8;
		}
		if ($record['exercise9'] == $exercise['id']) {
			$retraction_exercise9 = $exercise['retraction'];
			$retraction += ($record['sets9'] * $record['reps9']) * $retraction_exercise9;
		}
		if ($record['exercise10'] == $exercise['id']) {
			$retraction_exercise10 = $exercise['retraction'];
			$retraction += ($record['sets10'] * $record['reps10']) * $retraction_exercise10;
		}
		if ($record['exercise11'] == $exercise['id']) {
			$retraction_exercise11 = $exercise['retraction'];
			$retraction += ($record['sets11'] * $record['reps11']) * $retraction_exercise11;
		}
		if ($record['exercise12'] == $exercise['id']) {
			$retraction_exercise12 = $exercise['retraction'];
			$retraction += ($record['sets12'] * $record['reps12']) * $retraction_exercise12;
		}
		if ($record['exercise13'] == $exercise['id']) {
			$retraction_exercise13 = $exercise['retraction'];
			$retraction += ($record['sets13'] * $record['reps13']) * $retraction_exercise13;
		}
		if ($record['exercise14'] == $exercise['id']) {
			$retraction_exercise14 = $exercise['retraction'];
			$retraction += ($record['sets14'] * $record['reps14']) * $retraction_exercise14;
		}
		if ($record['exercise15'] == $exercise['id']) {
			$retraction_exercise15 = $exercise['retraction'];
			$retraction += ($record['sets15'] * $record['reps15']) * $retraction_exercise15;
		}
		if ($record['exercise16'] == $exercise['id']) {
			$retraction_exercise16 = $exercise['retraction'];
			$retraction += ($record['sets16'] * $record['reps16']) * $retraction_exercise16;
		}
	
	}
		
	if ($reps_or_ratio == "reps"){
		return $protraction . "/" . $retraction; //$reps
	}
		if ($reps_or_ratio == "ratio"){
			if ($retraction != 0) {
			$ratio = $protraction/$retraction;
			$ratio = number_format((float)$ratio, 2, '.', '');
			return $ratio;
			} else {
			$ratio = NULL;
			}
	
	}
	if ($reps_or_ratio == "thumb"){
		if ($retraction != 0) {
			$ratio = $protraction/$retraction;
		}
			if (isset($ratio)) {
			if ($ratio == 1) {
			} else {
				if ($ratio > 1) {
					echo "👀";
				} else {
					echo "👌";
				}
			}
		} else {
			echo "👀";
		}
	}
	
}

function uprotation_vs_downrotation($reps_or_ratio) {
	
	global $record;
	global $query2;
	$uprotation = 0;
	$downrotation = 0;
	
	foreach($query2 as $exercise) {
		if ($record['exercise1'] == $exercise['id']) {
			$uprotation_exercise1 = $exercise['uprotation'];
			$uprotation += ($record['sets1'] * $record['reps1']) * $uprotation_exercise1;
		}
		if ($record['exercise2'] == $exercise['id']) {
			$uprotation_exercise2 = $exercise['uprotation'];
			$uprotation += ($record['sets2'] * $record['reps2']) * $uprotation_exercise2;
		}
		if ($record['exercise3'] == $exercise['id']) {
			$uprotation_exercise3 = $exercise['uprotation'];
			$uprotation += ($record['sets3'] * $record['reps3']) * $uprotation_exercise3;
		}
		if ($record['exercise4'] == $exercise['id']) {
			$uprotation_exercise4 = $exercise['uprotation'];
			$uprotation += ($record['sets4'] * $record['reps4']) * $uprotation_exercise4;
		}
		if ($record['exercise5'] == $exercise['id']) {
			$uprotation_exercise5 = $exercise['uprotation'];
			$uprotation += ($record['sets5'] * $record['reps5']) * $uprotation_exercise5;
		}
		if ($record['exercise6'] == $exercise['id']) {
			$uprotation_exercise6 = $exercise['uprotation'];
			$uprotation += ($record['sets6'] * $record['reps6']) * $uprotation_exercise6;
		}
		if ($record['exercise7'] == $exercise['id']) {
			$uprotation_exercise7 = $exercise['uprotation'];
			$uprotation += ($record['sets7'] * $record['reps7']) * $uprotation_exercise7;
		}
		if ($record['exercise8'] == $exercise['id']) {
			$uprotation_exercise8 = $exercise['uprotation'];
			$uprotation += ($record['sets8'] * $record['reps8']) * $uprotation_exercise8;
		}
		if ($record['exercise9'] == $exercise['id']) {
			$uprotation_exercise9 = $exercise['uprotation'];
			$uprotation += ($record['sets9'] * $record['reps9']) * $uprotation_exercise9;
		}
		if ($record['exercise10'] == $exercise['id']) {
			$uprotation_exercise10 = $exercise['uprotation'];
			$uprotation += ($record['sets10'] * $record['reps10']) * $uprotation_exercise10;
		}
		if ($record['exercise11'] == $exercise['id']) {
			$uprotation_exercise11 = $exercise['uprotation'];
			$uprotation += ($record['sets11'] * $record['reps11']) * $uprotation_exercise11;
		}
		if ($record['exercise12'] == $exercise['id']) {
			$uprotation_exercise12 = $exercise['uprotation'];
			$uprotation += ($record['sets12'] * $record['reps12']) * $uprotation_exercise12;
		}
		if ($record['exercise13'] == $exercise['id']) {
			$uprotation_exercise13 = $exercise['uprotation'];
			$uprotation += ($record['sets13'] * $record['reps13']) * $uprotation_exercise13;
		}
		if ($record['exercise14'] == $exercise['id']) {
			$uprotation_exercise14 = $exercise['uprotation'];
			$uprotation += ($record['sets14'] * $record['reps14']) * $uprotation_exercise14;
		}
		if ($record['exercise15'] == $exercise['id']) {
			$uprotation_exercise15 = $exercise['uprotation'];
			$uprotation += ($record['sets15'] * $record['reps15']) * $uprotation_exercise15;
		}
		if ($record['exercise16'] == $exercise['id']) {
			$uprotation_exercise16 = $exercise['uprotation'];
			$uprotation += ($record['sets16'] * $record['reps16']) * $uprotation_exercise16;
		}
		if ($record['exercise1'] == $exercise['id']) {
			$downrotation_exercise1 = $exercise['downrotation'];
			$downrotation += ($record['sets1'] * $record['reps1']) * $downrotation_exercise1;
		}
		if ($record['exercise2'] == $exercise['id']) {
			$downrotation_exercise2 = $exercise['downrotation'];
			$downrotation += ($record['sets2'] * $record['reps2']) * $downrotation_exercise2;
		}
		if ($record['exercise3'] == $exercise['id']) {
			$downrotation_exercise3 = $exercise['downrotation'];
			$downrotation += ($record['sets3'] * $record['reps3']) * $downrotation_exercise3;
		}
		if ($record['exercise4'] == $exercise['id']) {
			$downrotation_exercise4 = $exercise['downrotation'];
			$downrotation += ($record['sets4'] * $record['reps4']) * $downrotation_exercise4;
		}
		if ($record['exercise5'] == $exercise['id']) {
			$downrotation_exercise5 = $exercise['downrotation'];
			$downrotation += ($record['sets5'] * $record['reps5']) * $downrotation_exercise5;
		}
		if ($record['exercise6'] == $exercise['id']) {
			$downrotation_exercise6 = $exercise['downrotation'];
			$downrotation += ($record['sets6'] * $record['reps6']) * $downrotation_exercise6;
		}
		if ($record['exercise7'] == $exercise['id']) {
			$downrotation_exercise7 = $exercise['downrotation'];
			$downrotation += ($record['sets7'] * $record['reps7']) * $downrotation_exercise7;
		}
		if ($record['exercise8'] == $exercise['id']) {
			$downrotation_exercise8 = $exercise['downrotation'];
			$downrotation += ($record['sets8'] * $record['reps8']) * $downrotation_exercise8;
		}
		if ($record['exercise9'] == $exercise['id']) {
			$downrotation_exercise9 = $exercise['downrotation'];
			$downrotation += ($record['sets9'] * $record['reps9']) * $downrotation_exercise9;
		}
		if ($record['exercise10'] == $exercise['id']) {
			$downrotation_exercise10 = $exercise['downrotation'];
			$downrotation += ($record['sets10'] * $record['reps10']) * $downrotation_exercise10;
		}
		if ($record['exercise11'] == $exercise['id']) {
			$downrotation_exercise11 = $exercise['downrotation'];
			$downrotation += ($record['sets11'] * $record['reps11']) * $downrotation_exercise11;
		}
		if ($record['exercise12'] == $exercise['id']) {
			$downrotation_exercise12 = $exercise['downrotation'];
			$downrotation += ($record['sets12'] * $record['reps12']) * $downrotation_exercise12;
		}
		if ($record['exercise13'] == $exercise['id']) {
			$downrotation_exercise13 = $exercise['downrotation'];
			$downrotation += ($record['sets13'] * $record['reps13']) * $downrotation_exercise13;
		}
		if ($record['exercise14'] == $exercise['id']) {
			$downrotation_exercise14 = $exercise['downrotation'];
			$downrotation += ($record['sets14'] * $record['reps14']) * $downrotation_exercise14;
		}
		if ($record['exercise15'] == $exercise['id']) {
			$downrotation_exercise15 = $exercise['downrotation'];
			$downrotation += ($record['sets15'] * $record['reps15']) * $downrotation_exercise15;
		}
		if ($record['exercise16'] == $exercise['id']) {
			$downrotation_exercise16 = $exercise['downrotation'];
			$downrotation += ($record['sets16'] * $record['reps16']) * $downrotation_exercise16;
		}
	
	}
		
	if ($reps_or_ratio == "reps"){
		return $uprotation . "/" . $downrotation; //$reps
	}
		if ($reps_or_ratio == "ratio"){
			if ($downrotation != 0) {
			$ratio = $uprotation/$downrotation;
			$ratio = number_format((float)$ratio, 2, '.', '');
			return $ratio;
			} else {
			$ratio = NULL;
			}
	
	}
	if ($reps_or_ratio == "thumb"){
		if ($downrotation != 0) {
			$ratio = $uprotation/$downrotation;
		}
			if (isset($ratio)) {
				if ($ratio >= .80 && $ratio <= 1) {
						echo "👌";
					} else {
						echo "👀";
					}
			} else {
				echo "👀";
			}				
		
	}
	
}

function depression_vs_elevation($reps_or_ratio) {
	
	global $record;
	global $query2;
	$depression = 0;
	$elevation = 0;
	
	foreach($query2 as $exercise) {
		if ($record['exercise1'] == $exercise['id']) {
			$depression_exercise1 = $exercise['depression'];
			$depression += ($record['sets1'] * $record['reps1']) * $depression_exercise1;
		}
		if ($record['exercise2'] == $exercise['id']) {
			$depression_exercise2 = $exercise['depression'];
			$depression += ($record['sets2'] * $record['reps2']) * $depression_exercise2;
		}
		if ($record['exercise3'] == $exercise['id']) {
			$depression_exercise3 = $exercise['depression'];
			$depression += ($record['sets3'] * $record['reps3']) * $depression_exercise3;
		}
		if ($record['exercise4'] == $exercise['id']) {
			$depression_exercise4 = $exercise['depression'];
			$depression += ($record['sets4'] * $record['reps4']) * $depression_exercise4;
		}
		if ($record['exercise5'] == $exercise['id']) {
			$depression_exercise5 = $exercise['depression'];
			$depression += ($record['sets5'] * $record['reps5']) * $depression_exercise5;
		}
		if ($record['exercise6'] == $exercise['id']) {
			$depression_exercise6 = $exercise['depression'];
			$depression += ($record['sets6'] * $record['reps6']) * $depression_exercise6;
		}
		if ($record['exercise7'] == $exercise['id']) {
			$depression_exercise7 = $exercise['depression'];
			$depression += ($record['sets7'] * $record['reps7']) * $depression_exercise7;
		}
		if ($record['exercise8'] == $exercise['id']) {
			$depression_exercise8 = $exercise['depression'];
			$depression += ($record['sets8'] * $record['reps8']) * $depression_exercise8;
		}
		if ($record['exercise9'] == $exercise['id']) {
			$depression_exercise9 = $exercise['depression'];
			$depression += ($record['sets9'] * $record['reps9']) * $depression_exercise9;
		}
		if ($record['exercise10'] == $exercise['id']) {
			$depression_exercise10 = $exercise['depression'];
			$depression += ($record['sets10'] * $record['reps10']) * $depression_exercise10;
		}
		if ($record['exercise11'] == $exercise['id']) {
			$depression_exercise11 = $exercise['depression'];
			$depression += ($record['sets11'] * $record['reps11']) * $depression_exercise11;
		}
		if ($record['exercise12'] == $exercise['id']) {
			$depression_exercise12 = $exercise['depression'];
			$depression += ($record['sets12'] * $record['reps12']) * $depression_exercise12;
		}
		if ($record['exercise13'] == $exercise['id']) {
			$depression_exercise13 = $exercise['depression'];
			$depression += ($record['sets13'] * $record['reps13']) * $depression_exercise13;
		}
		if ($record['exercise14'] == $exercise['id']) {
			$depression_exercise14 = $exercise['depression'];
			$depression += ($record['sets14'] * $record['reps14']) * $depression_exercise14;
		}
		if ($record['exercise15'] == $exercise['id']) {
			$depression_exercise15 = $exercise['depression'];
			$depression += ($record['sets15'] * $record['reps15']) * $depression_exercise15;
		}
		if ($record['exercise16'] == $exercise['id']) {
			$depression_exercise16 = $exercise['depression'];
			$depression += ($record['sets16'] * $record['reps16']) * $depression_exercise16;
		}
		if ($record['exercise1'] == $exercise['id']) {
			$elevation_exercise1 = $exercise['elevation'];
			$elevation += ($record['sets1'] * $record['reps1']) * $elevation_exercise1;
		}
		if ($record['exercise2'] == $exercise['id']) {
			$elevation_exercise2 = $exercise['elevation'];
			$elevation += ($record['sets2'] * $record['reps2']) * $elevation_exercise2;
		}
		if ($record['exercise3'] == $exercise['id']) {
			$elevation_exercise3 = $exercise['elevation'];
			$elevation += ($record['sets3'] * $record['reps3']) * $elevation_exercise3;
		}
		if ($record['exercise4'] == $exercise['id']) {
			$elevation_exercise4 = $exercise['elevation'];
			$elevation += ($record['sets4'] * $record['reps4']) * $elevation_exercise4;
		}
		if ($record['exercise5'] == $exercise['id']) {
			$elevation_exercise5 = $exercise['elevation'];
			$elevation += ($record['sets5'] * $record['reps5']) * $elevation_exercise5;
		}
		if ($record['exercise6'] == $exercise['id']) {
			$elevation_exercise6 = $exercise['elevation'];
			$elevation += ($record['sets6'] * $record['reps6']) * $elevation_exercise6;
		}
		if ($record['exercise7'] == $exercise['id']) {
			$elevation_exercise7 = $exercise['elevation'];
			$elevation += ($record['sets7'] * $record['reps7']) * $elevation_exercise7;
		}
		if ($record['exercise8'] == $exercise['id']) {
			$elevation_exercise8 = $exercise['elevation'];
			$elevation += ($record['sets8'] * $record['reps8']) * $elevation_exercise8;
		}
		if ($record['exercise9'] == $exercise['id']) {
			$elevation_exercise9 = $exercise['elevation'];
			$elevation += ($record['sets9'] * $record['reps9']) * $elevation_exercise9;
		}
		if ($record['exercise10'] == $exercise['id']) {
			$elevation_exercise10 = $exercise['elevation'];
			$elevation += ($record['sets10'] * $record['reps10']) * $elevation_exercise10;
		}
		if ($record['exercise11'] == $exercise['id']) {
			$elevation_exercise11 = $exercise['elevation'];
			$elevation += ($record['sets11'] * $record['reps11']) * $elevation_exercise11;
		}
		if ($record['exercise12'] == $exercise['id']) {
			$elevation_exercise12 = $exercise['elevation'];
			$elevation += ($record['sets12'] * $record['reps12']) * $elevation_exercise12;
		}
		if ($record['exercise13'] == $exercise['id']) {
			$elevation_exercise13 = $exercise['elevation'];
			$elevation += ($record['sets13'] * $record['reps13']) * $elevation_exercise13;
		}
		if ($record['exercise14'] == $exercise['id']) {
			$elevation_exercise14 = $exercise['elevation'];
			$elevation += ($record['sets14'] * $record['reps14']) * $elevation_exercise14;
		}
		if ($record['exercise15'] == $exercise['id']) {
			$elevation_exercise15 = $exercise['elevation'];
			$elevation += ($record['sets15'] * $record['reps15']) * $elevation_exercise15;
		}
		if ($record['exercise16'] == $exercise['id']) {
			$elevation_exercise16 = $exercise['elevation'];
			$elevation += ($record['sets16'] * $record['reps16']) * $elevation_exercise16;
		}
	
	}
		
	if ($reps_or_ratio == "reps"){
		return $depression . "/" . $elevation; //$reps
	}
		if ($reps_or_ratio == "ratio"){
			if ($elevation != 0) {
			$ratio = $depression/$elevation;
			$ratio = number_format((float)$ratio, 2, '.', '');
			return $ratio;
			} else {
			$ratio = NULL;
			}
	
	}
//	if ($reps_or_ratio == "thumb"){
//		if ($elevation != 0) {
//			$ratio = $depression/$elevation;
//		}
//			if (isset($ratio)) {
//			if ($ratio == 1) {
//			} else {
//				if ($ratio > 1) {
//					echo "👀";
//				} else {
//					echo "👌";
//				}
//			}
//		} else {
//			echo "👀";
//		}
//	}
	
}

function introtation_vs_extrotation($reps_or_ratio) {
	
	global $record;
	global $query2;
	$introtation = 0;
	$extrotation = 0;
	
	foreach($query2 as $exercise) {
		if ($record['exercise1'] == $exercise['id']) {
			$introtation_exercise1 = $exercise['introtation'];
			$introtation += ($record['sets1'] * $record['reps1']) * $introtation_exercise1;
		}
		if ($record['exercise2'] == $exercise['id']) {
			$introtation_exercise2 = $exercise['introtation'];
			$introtation += ($record['sets2'] * $record['reps2']) * $introtation_exercise2;
		}
		if ($record['exercise3'] == $exercise['id']) {
			$introtation_exercise3 = $exercise['introtation'];
			$introtation += ($record['sets3'] * $record['reps3']) * $introtation_exercise3;
		}
		if ($record['exercise4'] == $exercise['id']) {
			$introtation_exercise4 = $exercise['introtation'];
			$introtation += ($record['sets4'] * $record['reps4']) * $introtation_exercise4;
		}
		if ($record['exercise5'] == $exercise['id']) {
			$introtation_exercise5 = $exercise['introtation'];
			$introtation += ($record['sets5'] * $record['reps5']) * $introtation_exercise5;
		}
		if ($record['exercise6'] == $exercise['id']) {
			$introtation_exercise6 = $exercise['introtation'];
			$introtation += ($record['sets6'] * $record['reps6']) * $introtation_exercise6;
		}
		if ($record['exercise7'] == $exercise['id']) {
			$introtation_exercise7 = $exercise['introtation'];
			$introtation += ($record['sets7'] * $record['reps7']) * $introtation_exercise7;
		}
		if ($record['exercise8'] == $exercise['id']) {
			$introtation_exercise8 = $exercise['introtation'];
			$introtation += ($record['sets8'] * $record['reps8']) * $introtation_exercise8;
		}
		if ($record['exercise9'] == $exercise['id']) {
			$introtation_exercise9 = $exercise['introtation'];
			$introtation += ($record['sets9'] * $record['reps9']) * $introtation_exercise9;
		}
		if ($record['exercise10'] == $exercise['id']) {
			$introtation_exercise10 = $exercise['introtation'];
			$introtation += ($record['sets10'] * $record['reps10']) * $introtation_exercise10;
		}
		if ($record['exercise11'] == $exercise['id']) {
			$introtation_exercise11 = $exercise['introtation'];
			$introtation += ($record['sets11'] * $record['reps11']) * $introtation_exercise11;
		}
		if ($record['exercise12'] == $exercise['id']) {
			$introtation_exercise12 = $exercise['introtation'];
			$introtation += ($record['sets12'] * $record['reps12']) * $introtation_exercise12;
		}
		if ($record['exercise13'] == $exercise['id']) {
			$introtation_exercise13 = $exercise['introtation'];
			$introtation += ($record['sets13'] * $record['reps13']) * $introtation_exercise13;
		}
		if ($record['exercise14'] == $exercise['id']) {
			$introtation_exercise14 = $exercise['introtation'];
			$introtation += ($record['sets14'] * $record['reps14']) * $introtation_exercise14;
		}
		if ($record['exercise15'] == $exercise['id']) {
			$introtation_exercise15 = $exercise['introtation'];
			$introtation += ($record['sets15'] * $record['reps15']) * $introtation_exercise15;
		}
		if ($record['exercise16'] == $exercise['id']) {
			$introtation_exercise16 = $exercise['introtation'];
			$introtation += ($record['sets16'] * $record['reps16']) * $introtation_exercise16;
		}
		if ($record['exercise1'] == $exercise['id']) {
			$extrotation_exercise1 = $exercise['extrotation'];
			$extrotation += ($record['sets1'] * $record['reps1']) * $extrotation_exercise1;
		}
		if ($record['exercise2'] == $exercise['id']) {
			$extrotation_exercise2 = $exercise['extrotation'];
			$extrotation += ($record['sets2'] * $record['reps2']) * $extrotation_exercise2;
		}
		if ($record['exercise3'] == $exercise['id']) {
			$extrotation_exercise3 = $exercise['extrotation'];
			$extrotation += ($record['sets3'] * $record['reps3']) * $extrotation_exercise3;
		}
		if ($record['exercise4'] == $exercise['id']) {
			$extrotation_exercise4 = $exercise['extrotation'];
			$extrotation += ($record['sets4'] * $record['reps4']) * $extrotation_exercise4;
		}
		if ($record['exercise5'] == $exercise['id']) {
			$extrotation_exercise5 = $exercise['extrotation'];
			$extrotation += ($record['sets5'] * $record['reps5']) * $extrotation_exercise5;
		}
		if ($record['exercise6'] == $exercise['id']) {
			$extrotation_exercise6 = $exercise['extrotation'];
			$extrotation += ($record['sets6'] * $record['reps6']) * $extrotation_exercise6;
		}
		if ($record['exercise7'] == $exercise['id']) {
			$extrotation_exercise7 = $exercise['extrotation'];
			$extrotation += ($record['sets7'] * $record['reps7']) * $extrotation_exercise7;
		}
		if ($record['exercise8'] == $exercise['id']) {
			$extrotation_exercise8 = $exercise['extrotation'];
			$extrotation += ($record['sets8'] * $record['reps8']) * $extrotation_exercise8;
		}
		if ($record['exercise9'] == $exercise['id']) {
			$extrotation_exercise9 = $exercise['extrotation'];
			$extrotation += ($record['sets9'] * $record['reps9']) * $extrotation_exercise9;
		}
		if ($record['exercise10'] == $exercise['id']) {
			$extrotation_exercise10 = $exercise['extrotation'];
			$extrotation += ($record['sets10'] * $record['reps10']) * $extrotation_exercise10;
		}
		if ($record['exercise11'] == $exercise['id']) {
			$extrotation_exercise11 = $exercise['extrotation'];
			$extrotation += ($record['sets11'] * $record['reps11']) * $extrotation_exercise11;
		}
		if ($record['exercise12'] == $exercise['id']) {
			$extrotation_exercise12 = $exercise['extrotation'];
			$extrotation += ($record['sets12'] * $record['reps12']) * $extrotation_exercise12;
		}
		if ($record['exercise13'] == $exercise['id']) {
			$extrotation_exercise13 = $exercise['extrotation'];
			$extrotation += ($record['sets13'] * $record['reps13']) * $extrotation_exercise13;
		}
		if ($record['exercise14'] == $exercise['id']) {
			$extrotation_exercise14 = $exercise['extrotation'];
			$extrotation += ($record['sets14'] * $record['reps14']) * $extrotation_exercise14;
		}
		if ($record['exercise15'] == $exercise['id']) {
			$extrotation_exercise15 = $exercise['extrotation'];
			$extrotation += ($record['sets15'] * $record['reps15']) * $extrotation_exercise15;
		}
		if ($record['exercise16'] == $exercise['id']) {
			$extrotation_exercise16 = $exercise['extrotation'];
			$extrotation += ($record['sets16'] * $record['reps16']) * $extrotation_exercise16;
		}
	
	}
		
	if ($reps_or_ratio == "reps"){
		return $introtation . "/" . $extrotation; //$reps
	}
		if ($reps_or_ratio == "ratio"){
			if ($extrotation != 0) {
			$ratio = $introtation/$extrotation;
			$ratio = number_format((float)$ratio, 2, '.', '');
			return $ratio;
			} else {
			$ratio = NULL;
			}
	
	}
	if ($reps_or_ratio == "thumb"){
		if ($extrotation != 0) {
			$ratio = $introtation/$extrotation;
		}
			if (isset($ratio)) {
			if ($ratio == .8) {
			} else {
				if ($ratio > .8) {
					echo "👀";
				} else {
					echo "👌";
				}
			}
		} else {
			echo "👀";
		}
	}
	
}

function quadom_vs_hamdom($reps_or_ratio) {
	
	global $record;
	global $query2;
	$quadom = 0;
	$hamdom = 0;
	
	foreach($query2 as $exercise) {
		if ($record['exercise1'] == $exercise['id']) {
			$quadom_exercise1 = $exercise['quadom'];
			$quadom += ($record['sets1'] * $record['reps1']) * $quadom_exercise1;
		}
		if ($record['exercise2'] == $exercise['id']) {
			$quadom_exercise2 = $exercise['quadom'];
			$quadom += ($record['sets2'] * $record['reps2']) * $quadom_exercise2;
		}
		if ($record['exercise3'] == $exercise['id']) {
			$quadom_exercise3 = $exercise['quadom'];
			$quadom += ($record['sets3'] * $record['reps3']) * $quadom_exercise3;
		}
		if ($record['exercise4'] == $exercise['id']) {
			$quadom_exercise4 = $exercise['quadom'];
			$quadom += ($record['sets4'] * $record['reps4']) * $quadom_exercise4;
		}
		if ($record['exercise5'] == $exercise['id']) {
			$quadom_exercise5 = $exercise['quadom'];
			$quadom += ($record['sets5'] * $record['reps5']) * $quadom_exercise5;
		}
		if ($record['exercise6'] == $exercise['id']) {
			$quadom_exercise6 = $exercise['quadom'];
			$quadom += ($record['sets6'] * $record['reps6']) * $quadom_exercise6;
		}
		if ($record['exercise7'] == $exercise['id']) {
			$quadom_exercise7 = $exercise['quadom'];
			$quadom += ($record['sets7'] * $record['reps7']) * $quadom_exercise7;
		}
		if ($record['exercise8'] == $exercise['id']) {
			$quadom_exercise8 = $exercise['quadom'];
			$quadom += ($record['sets8'] * $record['reps8']) * $quadom_exercise8;
		}
		if ($record['exercise9'] == $exercise['id']) {
			$quadom_exercise9 = $exercise['quadom'];
			$quadom += ($record['sets9'] * $record['reps9']) * $quadom_exercise9;
		}
		if ($record['exercise10'] == $exercise['id']) {
			$quadom_exercise10 = $exercise['quadom'];
			$quadom += ($record['sets10'] * $record['reps10']) * $quadom_exercise10;
		}
		if ($record['exercise11'] == $exercise['id']) {
			$quadom_exercise11 = $exercise['quadom'];
			$quadom += ($record['sets11'] * $record['reps11']) * $quadom_exercise11;
		}
		if ($record['exercise12'] == $exercise['id']) {
			$quadom_exercise12 = $exercise['quadom'];
			$quadom += ($record['sets12'] * $record['reps12']) * $quadom_exercise12;
		}
		if ($record['exercise13'] == $exercise['id']) {
			$quadom_exercise13 = $exercise['quadom'];
			$quadom += ($record['sets13'] * $record['reps13']) * $quadom_exercise13;
		}
		if ($record['exercise14'] == $exercise['id']) {
			$quadom_exercise14 = $exercise['quadom'];
			$quadom += ($record['sets14'] * $record['reps14']) * $quadom_exercise14;
		}
		if ($record['exercise15'] == $exercise['id']) {
			$quadom_exercise15 = $exercise['quadom'];
			$quadom += ($record['sets15'] * $record['reps15']) * $quadom_exercise15;
		}
		if ($record['exercise16'] == $exercise['id']) {
			$quadom_exercise16 = $exercise['quadom'];
			$quadom += ($record['sets16'] * $record['reps16']) * $quadom_exercise16;
		}
		if ($record['exercise1'] == $exercise['id']) {
			$hamdom_exercise1 = $exercise['hamdom'];
			$hamdom += ($record['sets1'] * $record['reps1']) * $hamdom_exercise1;
		}
		if ($record['exercise2'] == $exercise['id']) {
			$hamdom_exercise2 = $exercise['hamdom'];
			$hamdom += ($record['sets2'] * $record['reps2']) * $hamdom_exercise2;
		}
		if ($record['exercise3'] == $exercise['id']) {
			$hamdom_exercise3 = $exercise['hamdom'];
			$hamdom += ($record['sets3'] * $record['reps3']) * $hamdom_exercise3;
		}
		if ($record['exercise4'] == $exercise['id']) {
			$hamdom_exercise4 = $exercise['hamdom'];
			$hamdom += ($record['sets4'] * $record['reps4']) * $hamdom_exercise4;
		}
		if ($record['exercise5'] == $exercise['id']) {
			$hamdom_exercise5 = $exercise['hamdom'];
			$hamdom += ($record['sets5'] * $record['reps5']) * $hamdom_exercise5;
		}
		if ($record['exercise6'] == $exercise['id']) {
			$hamdom_exercise6 = $exercise['hamdom'];
			$hamdom += ($record['sets6'] * $record['reps6']) * $hamdom_exercise6;
		}
		if ($record['exercise7'] == $exercise['id']) {
			$hamdom_exercise7 = $exercise['hamdom'];
			$hamdom += ($record['sets7'] * $record['reps7']) * $hamdom_exercise7;
		}
		if ($record['exercise8'] == $exercise['id']) {
			$hamdom_exercise8 = $exercise['hamdom'];
			$hamdom += ($record['sets8'] * $record['reps8']) * $hamdom_exercise8;
		}
		if ($record['exercise9'] == $exercise['id']) {
			$hamdom_exercise9 = $exercise['hamdom'];
			$hamdom += ($record['sets9'] * $record['reps9']) * $hamdom_exercise9;
		}
		if ($record['exercise10'] == $exercise['id']) {
			$hamdom_exercise10 = $exercise['hamdom'];
			$hamdom += ($record['sets10'] * $record['reps10']) * $hamdom_exercise10;
		}
		if ($record['exercise11'] == $exercise['id']) {
			$hamdom_exercise11 = $exercise['hamdom'];
			$hamdom += ($record['sets11'] * $record['reps11']) * $hamdom_exercise11;
		}
		if ($record['exercise12'] == $exercise['id']) {
			$hamdom_exercise12 = $exercise['hamdom'];
			$hamdom += ($record['sets12'] * $record['reps12']) * $hamdom_exercise12;
		}
		if ($record['exercise13'] == $exercise['id']) {
			$hamdom_exercise13 = $exercise['hamdom'];
			$hamdom += ($record['sets13'] * $record['reps13']) * $hamdom_exercise13;
		}
		if ($record['exercise14'] == $exercise['id']) {
			$hamdom_exercise14 = $exercise['hamdom'];
			$hamdom += ($record['sets14'] * $record['reps14']) * $hamdom_exercise14;
		}
		if ($record['exercise15'] == $exercise['id']) {
			$hamdom_exercise15 = $exercise['hamdom'];
			$hamdom += ($record['sets15'] * $record['reps15']) * $hamdom_exercise15;
		}
		if ($record['exercise16'] == $exercise['id']) {
			$hamdom_exercise16 = $exercise['hamdom'];
			$hamdom += ($record['sets16'] * $record['reps16']) * $hamdom_exercise16;
		}
	
	}
		
	if ($reps_or_ratio == "reps"){
		return $quadom . "/" . $hamdom; //$reps
	}
		if ($reps_or_ratio == "ratio"){
			if ($hamdom != 0) {
			$ratio = $quadom/$hamdom;
			$ratio = number_format((float)$ratio, 2, '.', '');
			return $ratio;
			} else {
			$ratio = NULL;
			}
	
	}
	if ($reps_or_ratio == "thumb"){
		if ($hamdom != 0) {
			$ratio = $quadom/$hamdom;
		}
			if (isset($ratio)) {
				if ($ratio >= .80 && $ratio <= 1.2) {
						echo "👌";
					} else {
						echo "👀";
					}
			} else {
				echo "👀";
			}				
		
	}
	
}

?>