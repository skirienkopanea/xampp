<head>
<?php session_start(); ?>
<?php if(!isset($page_title)) { $page_title = 'Minimalist Diet & Workout'; } ?>
<title><?php echo $page_title;?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"><style type="text/css">body { font-family: 'Open Sans', sans-serif;text-align:left;}

</style>
</head>
<?php
function db_connect(){
	$connection = mysqli_connect("localhost","web","webpassword","coolwork_db");
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

$auth = "x-picnic-auth: eyJhbGciOiJSUzI1NiJ9.eyJzdWIiOiI4MDAtNTUwLTA3NjIiLCJwYzpjbGlkIjozMDEwMCwicGM6cHY6ZW5hYmxlZCI6ZmFsc2UsInBjOmxvZ2ludHMiOjE1NjY1NTMxODQ3MDYsInBjOmRpZCI6IkZEQ0ZDMzc3NUY4NjE1NkQiLCJpc3MiOiJwaWNuaWMtZGV2IiwicGM6cHY6dmVyaWZpZWQiOmZhbHNlLCJleHAiOjE1Njk2OTk0NTIsImlhdCI6MTU2OTYxMzA1MiwicGM6cm9sZSI6IlNUQU5EQVJEX1VTRVIifQ.J9lHqwBSPSSOD1Atyj-gFmkqnxpZse7gUXSsf3niZlAdJq79g0xw6F6UHe59kqZ0lp4danZW8dxsXmYIC4_a5134rejK0S2TxPLVpzwcxBbELc-KTyn48FblegTZGaePm-lAnMXmWY3QrS7aGNu38wcMUzvQhTen49ug1vKknt8";


//To do:
//set up the FTP program to drag files easily
//at home: do the same for products
//at work: set a low version online and do PHP web scrapping for usa idate
//at home: do other tables like combination of usa id and products
//at work: check PHP optimization calc


  // is_blank('abcd') --- These return true or false
  // * validate data presence
  // * uses trim() so empty spaces don't count
  // * uses === to avoid false positives
  // * better than empty() which considers "0" to be empty
  function isblank($value) {
    return !isset($value) || trim($value) === '';
  }

  // has_length_greater_than('abcd', 3)
  // * validate string length
  // * spaces count towards length
  // * use trim() if spaces should not count
  function charlongerthan($value, $min) {
    $length = strlen($value);
    return $length > $min;
  }

  // has_length_less_than('abcd', 5)
  // * validate string length
  // * spaces count towards length
  // * use trim() if spaces should not count
  function charshorterthan($value, $max) {
    $length = strlen($value);
    return $length < $max;
  }

  // has_length_exactly('abcd', 4)
  // * validate string length
  // * spaces count towards length
  // * use trim() if spaces should not count
  function charequalto($value, $exact) {
    $length = strlen($value);
    return $length == $exact;
  }

 // has_inclusion_of( 5, [1,3,5,7,9] )
  // * validate inclusion in a set
  function contains($value, $set) {
  	return in_array($value, $set);
  }
  
  // has_string('nobody@nowhere.com', '.com')
  // * validate inclusion of character(s)
  // * strpos returns string start position or false
  // * uses !== to prevent position 0 from being considered false
  // * strpos is faster than preg_match()
  function like($value, $required_string) {
    return strpos($value, $required_string) !== false;
  }

  // has_valid_email_format('nobody@nowhere.com')
  // * validate correct format for email addresses
  // * format: [chars]@[chars].[2+ letters]
  // * preg_match is helpful, uses a regular expression
  //    returns 1 for a match, 0 for no match
  //    http://php.net/manual/en/function.preg-match.php
  function emailformat($value) {
    $email_regex = '/\A[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\Z/i';
    return preg_match($email_regex, $value) === 1;
  }
  
  function checkerrors($record) {
    $errors = [];
if(isset($record['id'])) {
    // id
    if(isblank($record['id'])) {
      $errors[] = "ID cannot be blank.";
    } elseif (!ctype_alnum($record['id'])){
		$errors[] = "ID can only contain alphanumeric characters.";
	}
	elseif(empty($record['id'])){
		$errors[]= "ID cannot be '0'.";
	}
	elseif(charlongerthan($record['id'], 15)) {
      $errors[] = "ID cannot exced 15 characters.";
    }
}

if(isset($record['name'])) {
	// name
	if(isblank($record['name'])) {
      $errors[] = "Name cannot be blank.";
    } elseif(charlongerthan($record['name'], 50)) {
      $errors[] = "Name cannot exced 50 characters.";
    }
}
if(isset($record['kcals'])) {
	//kcals
	if(!is_numeric($record['kcals']) || $record['kcals'] < 0 ) {
      $errors[] = "kcals must be a positive number.";
    } 
	//protein, etc.
	if(!is_numeric($record['protein']) || $record['protein'] < 0 ) {
      $errors[] = "protein must be a positive number.";
    }	
	if(!is_numeric($record['fat']) || $record['fat'] < 0 ) {
      $errors[] = "fat must be a positive number.";
    }
	if(!is_numeric($record['carb']) || $record['carb'] < 0 ) {
      $errors[] = "carb must be a positive number.";
    }
	if(!is_numeric($record['fiber']) || $record['fiber'] < 0 ) {
      $errors[] = "fiber must be a positive number.";
    }
	if(!is_numeric($record['water']) || $record['water'] < 0 ) {
      $errors[] = "water must be a positive number.";
    }
	if(!is_numeric($record['calcium']) || $record['calcium'] < 0 ) {
      $errors[] = "calcium must be a positive number.";
    }
	if(!is_numeric($record['iron']) || $record['iron'] < 0 ) {
      $errors[] = "iron must be a positive number.";
    }
	if(!is_numeric($record['magnesium']) || $record['magnesium'] < 0 ) {
      $errors[] = "magnesium must be a positive number.";
    }
	if(!is_numeric($record['phosphorus']) || $record['phosphorus'] < 0 ) {
      $errors[] = "phosphorus must be a positive number.";
    }
	if(!is_numeric($record['potassium']) || $record['potassium'] < 0 ) {
      $errors[] = "potassium must be a positive number.";
    }
	if(!is_numeric($record['sodium']) || $record['sodium'] < 0 ) {
      $errors[] = "sodium must be a positive number.";
    }
	if(!is_numeric($record['zinc']) || $record['zinc'] < 0 ) {
      $errors[] = "zinc must be a positive number.";
    }
	if(!is_numeric($record['copper']) || $record['copper'] < 0 ) {
      $errors[] = "copper must be a positive number.";
    }
	if(!is_numeric($record['fluoride']) || $record['fluoride'] < 0 ) {
      $errors[] = "fluoride must be a positive number.";
    }
	if(!is_numeric($record['manganese']) || $record['manganese'] < 0 ) {
      $errors[] = "manganese must be a positive number.";
    }
	if(!is_numeric($record['selenium']) || $record['selenium'] < 0 ) {
      $errors[] = "selenium must be a positive number.";
    }
	if(!is_numeric($record['vitaminc']) || $record['vitaminc'] < 0 ) {
      $errors[] = "vitaminc must be a positive number.";
    }
	if(!is_numeric($record['thiamin']) || $record['thiamin'] < 0 ) {
      $errors[] = "thiamin must be a positive number.";
    }
	if(!is_numeric($record['riboflavin']) || $record['riboflavin'] < 0 ) {
      $errors[] = "riboflavin must be a positive number.";
    }
	if(!is_numeric($record['niacin']) || $record['niacin'] < 0 ) {
      $errors[] = "niacin must be a positive number.";
    }
	if(!is_numeric($record['pantothenicacid']) || $record['pantothenicacid'] < 0 ) {
      $errors[] = "pantothenicacid must be a positive number.";
    }
	if(!is_numeric($record['vitaminb6']) || $record['vitaminb6'] < 0 ) {
      $errors[] = "vitaminb6 must be a positive number.";
    }
	if(!is_numeric($record['folate']) || $record['folate'] < 0 ) {
      $errors[] = "folate must be a positive number.";
    }
	if(!is_numeric($record['choline']) || $record['choline'] < 0 ) {
      $errors[] = "choline must be a positive number.";
    }
	if(!is_numeric($record['vitaminb12']) || $record['vitaminb12'] < 0 ) {
      $errors[] = "vitaminb12 must be a positive number.";
    }
	if(!is_numeric($record['vitamina']) || $record['vitamina'] < 0 ) {
      $errors[] = "vitamina must be a positive number.";
    }
	if(!is_numeric($record['vitamine']) || $record['vitamine'] < 0 ) {
      $errors[] = "vitamine must be a positive number.";
    }
	if(!is_numeric($record['vitamind']) || $record['vitamind'] < 0 ) {
      $errors[] = "vitamind must be a positive number.";
    }
	if(!is_numeric($record['vitamink']) || $record['vitamink'] < 0 ) {
      $errors[] = "vitamink must be a positive number.";
    }
	if(!is_numeric($record['ala183und']) || $record['ala183und'] < 0 ) {
      $errors[] = "ala183und must be a positive number.";
    }
	if(!is_numeric($record['la182und']) || $record['la182und'] < 0 ) {
      $errors[] = "la182und must be a positive number.";
    }
	if(!is_numeric($record['monofat']) || $record['monofat'] < 0 ) {
      $errors[] = "monofat must be a positive number.";
    }
	if(!is_numeric($record['polyfat']) || $record['polyfat'] < 0 ) {
      $errors[] = "polyfat must be a positive number.";
    }
	if(!is_numeric($record['satfat']) || $record['satfat'] < 0 ) {
      $errors[] = "satfat must be a positive number.";
    }
	if(!is_numeric($record['transfat']) || $record['transfat'] < 0 ) {
      $errors[] = "transfat must be a positive number.";
    }
	if(!is_numeric($record['phenylalanine']) || $record['phenylalanine'] < 0 ) {
      $errors[] = "phenylalanine must be a positive number.";
    }
	if(!is_numeric($record['valine']) || $record['valine'] < 0 ) {
      $errors[] = "valine must be a positive number.";
    }
	if(!is_numeric($record['threonine']) || $record['threonine'] < 0 ) {
      $errors[] = "threonine must be a positive number.";
    }
	if(!is_numeric($record['tryptophan']) || $record['tryptophan'] < 0 ) {
      $errors[] = "tryptophan must be a positive number.";
    }
	if(!is_numeric($record['methionine']) || $record['methionine'] < 0 ) {
      $errors[] = "methionine must be a positive number.";
    }
	if(!is_numeric($record['leucine']) || $record['leucine'] < 0 ) {
      $errors[] = "leucine must be a positive number.";
    }
	if(!is_numeric($record['isoleucine']) || $record['isoleucine'] < 0 ) {
      $errors[] = "isoleucine must be a positive number.";
    }
	if(!is_numeric($record['lysine']) || $record['lysine'] < 0 ) {
      $errors[] = "lysine must be a positive number.";
    }
	if(!is_numeric($record['histidine']) || $record['histidine'] < 0 ) {
      $errors[] = "histidine must be a positive number.";
    }
}

if(isset($record['protraction'])) {
	//protraction
	if(!is_numeric($record['protraction']) || $record['protraction'] < 0 ) {
      $errors[] = "protraction must be a positive number.";
    }
	//retraction
	if(!is_numeric($record['retraction']) || $record['retraction'] < 0 ) {
      $errors[] = "retraction must be a positive number.";
    }
	//uprotation
	if(!is_numeric($record['uprotation']) || $record['uprotation'] < 0 ) {
      $errors[] = "uprotation must be a positive number.";
    }
	//downrotation
	if(!is_numeric($record['downrotation']) || $record['downrotation'] < 0 ) {
      $errors[] = "downrotation must be a positive number.";
    }
	//depression
	if(!is_numeric($record['depression']) || $record['depression'] < 0 ) {
      $errors[] = "depression must be a positive number.";
    }
	//elevation
	if(!is_numeric($record['elevation']) || $record['elevation'] < 0 ) {
      $errors[] = "elevation must be a positive number.";
    }
	//introtation
	if(!is_numeric($record['introtation']) || $record['introtation'] < 0 ) {
      $errors[] = "introtation must be a positive number.";
    }
	//extrotation
	if(!is_numeric($record['extrotation']) || $record['extrotation'] < 0 ) {
      $errors[] = "extrotation must be a positive number.";
    }
	//hamdom
	if(!is_numeric($record['hamdom']) || $record['hamdom'] < 0 ) {
      $errors[] = "hamdom must be a positive number.";
    }
	//quadom
	if(!is_numeric($record['quadom']) || $record['quadom'] < 0 ) {
      $errors[] = "quadom must be a positive number.";
    }
	//ratioref
	if(!is_numeric($record['ratioref']) || $record['ratioref'] < 0 ) {
      $errors[] = "ratioref must be a positive number.";
    }
	//ratio
	if(!is_numeric($record['ratio']) || $record['ratio'] < 0 ) {
      $errors[] = "ratio must be a positive number.";
    }
	
}
if(isset($record['exercise1'])) {
	
	//sets1
	if(!is_numeric($record['sets1']) || $record['sets1'] < 0 ) {
      $errors[] = "sets1 must be a positive number.";
    }
	//sets2
	if(!is_numeric($record['sets2']) || $record['sets2'] < 0 ) {
      $errors[] = "sets2 must be a positive number.";
    }
	//sets3
	if(!is_numeric($record['sets3']) || $record['sets3'] < 0 ) {
      $errors[] = "sets3 must be a positive number.";
    }
	//sets4
	if(!is_numeric($record['sets4']) || $record['sets4'] < 0 ) {
      $errors[] = "sets4 must be a positive number.";
    }
	//sets5
	if(!is_numeric($record['sets5']) || $record['sets5'] < 0 ) {
      $errors[] = "sets5 must be a positive number.";
    }
	//sets6
	if(!is_numeric($record['sets6']) || $record['sets6'] < 0 ) {
	  $errors[] = "sets6 must be a positive number.";
	}
	//sets7
	if(!is_numeric($record['sets7']) || $record['sets7'] < 0 ) {
	  $errors[] = "sets7 must be a positive number.";
	}
	//sets8
	if(!is_numeric($record['sets8']) || $record['sets8'] < 0 ) {
	  $errors[] = "sets8 must be a positive number.";
	}
	//sets9
	if(!is_numeric($record['sets9']) || $record['sets9'] < 0 ) {
	  $errors[] = "sets9 must be a positive number.";
	}
	//sets10
	if(!is_numeric($record['sets10']) || $record['sets10'] < 0 ) {
	  $errors[] = "sets10 must be a positive number.";
	}
	//sets11
	if(!is_numeric($record['sets11']) || $record['sets11'] < 0 ) {
	  $errors[] = "sets11 must be a positive number.";
	}
	//sets12
	if(!is_numeric($record['sets12']) || $record['sets12'] < 0 ) {
		$errors[] = "sets12 must be a positive number.";
	}
	//sets13
	if(!is_numeric($record['sets13']) || $record['sets13'] < 0 ) {
		$errors[] = "sets13 must be a positive number.";
	}
	//sets14
	if(!is_numeric($record['sets14']) || $record['sets14'] < 0 ) {
		$errors[] = "sets14 must be a positive number.";
	}
	//sets15
	if(!is_numeric($record['sets15']) || $record['sets15'] < 0 ) {
		$errors[] = "sets15 must be a positive number.";
	}
	//sets16
	if(!is_numeric($record['sets16']) || $record['sets16'] < 0 ) {
		$errors[] = "sets16 must be a positive number.";
	}


	
	
	//reps1
	if(!is_numeric($record['reps1']) || $record['reps1'] < 0 ) {
      $errors[] = "reps1 must be a positive number.";
    }
	//reps2
	if(!is_numeric($record['reps2']) || $record['reps2'] < 0 ) {
      $errors[] = "reps2 must be a positive number.";
    }
	//reps3
	if(!is_numeric($record['reps3']) || $record['reps3'] < 0 ) {
      $errors[] = "reps3 must be a positive number.";
    }
	//reps4
	if(!is_numeric($record['reps4']) || $record['reps4'] < 0 ) {
      $errors[] = "reps4 must be a positive number.";
    }
	//reps5
	if(!is_numeric($record['reps5']) || $record['reps5'] < 0 ) {
      $errors[] = "reps5 must be a positive number.";
    }
	//reps6
	if(!is_numeric($record['reps6']) || $record['reps6'] < 0 ) {
	  $errors[] = "reps6 must be a positive number.";
	}
	//reps7
	if(!is_numeric($record['reps7']) || $record['reps7'] < 0 ) {
	  $errors[] = "reps7 must be a positive number.";
	}
	//reps8
	if(!is_numeric($record['reps8']) || $record['reps8'] < 0 ) {
	  $errors[] = "reps8 must be a positive number.";
	}
	//reps9
	if(!is_numeric($record['reps9']) || $record['reps9'] < 0 ) {
	  $errors[] = "reps9 must be a positive number.";
	}
	//reps10
	if(!is_numeric($record['reps10']) || $record['reps10'] < 0 ) {
	  $errors[] = "reps10 must be a positive number.";
	}
	//reps11
	if(!is_numeric($record['reps11']) || $record['reps11'] < 0 ) {
	  $errors[] = "reps11 must be a positive number.";
	}
	//reps12
	if(!is_numeric($record['reps12']) || $record['reps12'] < 0 ) {
	  $errors[] = "reps12 must be a positive number.";
	}
	//reps13
	if(!is_numeric($record['reps13']) || $record['reps13'] < 0 ) {
	  $errors[] = "reps13 must be a positive number.";
	}
	//reps14
	if(!is_numeric($record['reps14']) || $record['reps14'] < 0 ) {
	  $errors[] = "reps14 must be a positive number.";
	}
	//reps15
	if(!is_numeric($record['reps15']) || $record['reps15'] < 0 ) {
	  $errors[] = "reps15 must be a positive number.";
	}
	//reps16
	if(!is_numeric($record['reps16']) || $record['reps16'] < 0 ) {
	  $errors[] = "reps16 must be a positive number.";
	}


	
	
	//weight1
	if(!is_numeric($record['weight1']) || $record['weight1'] < 0 ) {
      $errors[] = "weight1 must be a positive number.";
    }
	//weight2
	if(!is_numeric($record['weight2']) || $record['weight2'] < 0 ) {
      $errors[] = "weight2 must be a positive number.";
    }
	//weight3
	if(!is_numeric($record['weight3']) || $record['weight3'] < 0 ) {
      $errors[] = "weight3 must be a positive number.";
    }
	//weight4
	if(!is_numeric($record['weight4']) || $record['weight4'] < 0 ) {
      $errors[] = "weight4 must be a positive number.";
    }
	//weight5
	if(!is_numeric($record['weight5']) || $record['weight5'] < 0 ) {
      $errors[] = "weight5 must be a positive number.";
    }
	//weight6
	if(!is_numeric($record['weight6']) || $record['weight6'] < 0 ) {
	  $errors[] = "weight6 must be a positive number.";
	}
	//reps7
	if(!is_numeric($record['reps7']) || $record['reps7'] < 0 ) {
	  $errors[] = "reps7 must be a positive number.";
	}
	//reps8
	if(!is_numeric($record['reps8']) || $record['reps8'] < 0 ) {
	  $errors[] = "reps8 must be a positive number.";
	}
	//reps9
	if(!is_numeric($record['reps9']) || $record['reps9'] < 0 ) {
	  $errors[] = "reps9 must be a positive number.";
	}
	//reps10
	if(!is_numeric($record['reps10']) || $record['reps10'] < 0 ) {
	  $errors[] = "reps10 must be a positive number.";
	}
	//reps11
	if(!is_numeric($record['reps11']) || $record['reps11'] < 0 ) {
	  $errors[] = "reps11 must be a positive number.";
	}
	//reps12
	if(!is_numeric($record['reps12']) || $record['reps12'] < 0 ) {
	  $errors[] = "reps12 must be a positive number.";
	}
	//reps13
	if(!is_numeric($record['reps13']) || $record['reps13'] < 0 ) {
	  $errors[] = "reps13 must be a positive number.";
	}
	//reps14
	if(!is_numeric($record['reps14']) || $record['reps14'] < 0 ) {
	  $errors[] = "reps14 must be a positive number.";
	}
	//reps15
	if(!is_numeric($record['reps15']) || $record['reps15'] < 0 ) {
	  $errors[] = "reps15 must be a positive number.";
	}
	//reps16
	if(!is_numeric($record['reps16']) || $record['reps16'] < 0 ) {
	  $errors[] = "reps16 must be a positive number.";
	}



	
}

if(isset($record['pr1'])) {
	//pr1
	if(!is_numeric($record['pr1']) || $record['pr1'] < 0) {
      $errors[] = "pr1 must be a positive number.";
    }
	//pr2
	if(!is_numeric($record['pr2']) || $record['pr2'] < 0) {
      $errors[] = "pr2 must be a positive number.";
    }
	//pr3 add for the rest down
	if(!is_numeric($record['pr3']) || $record['pr3'] < 0 ) {
      $errors[] = "pr3 must be a positive number.";
    }
	//pr4
	if(!is_numeric($record['pr4']) || $record['pr4'] < 0 ) {
      $errors[] = "pr4 must be a positive number.";
    }
	//pr5
	if(!is_numeric($record['pr5']) || $record['pr5'] < 0 ) {
      $errors[] = "pr5 must be a positive number.";
    }
	//pr6
	if(!is_numeric($record['pr6']) || $record['pr6'] < 0 ) {
      $errors[] = "pr6 must be a positive number.";
    }
	//pr7
	if(!is_numeric($record['pr7']) || $record['pr7'] < 0 ) {
      $errors[] = "pr7 must be a positive number.";
    }
	//pr8
	if(!is_numeric($record['pr8']) || $record['pr8'] < 0 ) {
      $errors[] = "pr8 must be a positive number.";
    }
	//pr9
	if(!is_numeric($record['pr9']) || $record['pr9'] < 0 ) {
      $errors[] = "pr9 must be a positive number.";
    }
	//pr10
	if(!is_numeric($record['pr10']) || $record['pr10'] < 0 ) {
      $errors[] = "pr10 must be a positive number.";
    }
	//pr11
	if(!is_numeric($record['pr11']) || $record['pr11'] < 0 ) {
      $errors[] = "pr11 must be a positive number.";
    }
	//pr12
	if(!is_numeric($record['pr12']) || $record['pr12'] < 0 ) {
      $errors[] = "pr12 must be a positive number.";
    }
	//pr13
	if(!is_numeric($record['pr13']) || $record['pr13'] < 0 ) {
      $errors[] = "pr13 must be a positive number.";
    }
	//pr14
	if(!is_numeric($record['pr14']) || $record['pr14'] < 0 ) {
      $errors[] = "pr14 must be a positive number.";
    }
	//pr15
	if(!is_numeric($record['pr15']) || $record['pr15'] < 0 ) {
      $errors[] = "pr15 must be a positive number.";
    }
	//pr16
	if(!is_numeric($record['pr16']) || $record['pr16'] < 0 ) {
      $errors[] = "pr16 must be a positive number.";
    }
}
   
   
if(isset($record['price_per_kg'])) {
	
	if(!is_numeric($record['price_per_kg']) || $record['price_per_kg'] < 0) {
      $errors[] = "price per kg must be a positive number.";
    }
	if(!is_numeric($record['price_per_unit']) || $record['price_per_unit'] < 0) {
      $errors[] = "price per unit must be a positive number.";
    }
	if(!is_numeric($record['usda_weight_unit_g']) || $record['usda_weight_unit_g'] < 0) {
      $errors[] = "usda weight unit g must be a positive number.";
    }
	if(!is_numeric($record['weight_net_g']) || $record['weight_net_g'] < 0) {
      $errors[] = "usda weight unit g must be a positive number.";
    }
	if(!is_numeric($record['price_total']) || $record['price_total'] < 0) {
      $errors[] = "price total must be a positive number.";
    }

}

if(isset($record['user'])) {	

    if(isblank($record['user'])) {
      $errors[] = "username cannot be blank.";
    } elseif (!ctype_alnum($record['user'])){
		$errors[] = "username can only contain alphanumeric characters.";
	}
	elseif(empty($record['user'])){
		$errors[]= "username cannot be '0'.";
	}
	
	if(isblank($record['password'])) {
      $errors[] = "password cannot be blank.";
    }
}
if(isset($record['password_repeat'])) {
	if($record['password'] != $record['password_repeat']) {
      $errors[] = "passwords must match.";
    }
}

if(isset($record['F_STATUS'])) {
	if(!empty($record['F_STATUS']) && $record['SEX'] == "MALE") {
      $errors[] = "Males can't be pregnant";
    }
}
	
	return $errors;
  }

  	
	//name
		//must be present, must escape sql, length <= than 50
	//description
		//does not need to be filled in, so okay for both create and edit pages, it just needs to escape sql (so exclude special chars)

function validate($record) {
	
		//validate record
	$errors = checkerrors($record);
		//stop submission if there is an error
	if(!empty($errors)){
		echo ("<h1>Form submission failed</h1><h3><a href='javascript:history.back()'>Go Back</a></h3>");
		foreach ($errors as $error) {
			echo ($error . "<br>");
		}
		//then stop everything else
		exit();
	}
	
}

function truncate($string,$length=100,$append="…") {
  $string = trim($string);

  if(strlen($string) > $length) {
    $string = wordwrap($string, $length);
    $string = explode("\n", $string, 2);
    $string = $string[0] . $append;
  }

  return $string;
}

?>