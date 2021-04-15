 <?php  
  require_once('../../private/functions.php');
 if(isset($_POST["query"]))  
 {
	//$_POST["query"] = implode('%',str_split($_POST["query"]));
	$input = str_replace(" ","%' AND usda_name LIKE '%",esc($_POST["query"]));
	//echo '%'. $input . '%';
	
      $output = '';  
      $query = "SELECT DISTINCT usda_id, usda_name FROM map WHERE user LIKE '".$_SESSION['user']."' AND usda_name LIKE '%". $input ."%' LIMIT 15";  
      $result = mysqli_query($db, $query);  
      $output = '<div>';
	  error_reporting(0);
      if(mysqli_num_rows($result))  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<a href="../usda/show.php?id='.$row["usda_id"]. '">' .$row["usda_name"].'</a></br>';  
           }  
      }  
      else  
      {  
           $output .= 'Food Not Found';  
      }  
      $output .= '</div>';  
      echo $output;  
 }  
 ?>