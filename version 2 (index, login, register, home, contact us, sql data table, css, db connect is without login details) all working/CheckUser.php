<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/CampCampersStyle.css">
</head>
<body>
<?php
  include("DbConnect.php");              // Add in the database connection details

  // Now get the information from the Form
  $Email = $_POST['Email'];
  $Password = $_POST['Password'];
  
//echo $Email;
//echo $Password;
  

  
  $Query = "SELECT Email,Password FROM CampyCampersUsers
  WHERE  Email = '$Email'
  AND Password='$Password'";
  
//   Now run the query - i.e. Query the data in the table
  
  $Result = mysqli_query($DB,$Query);	 // $Result gives us a numeric value to check if the query found a match ok. 
				 	 
									   
  $NumResults = mysqli_num_rows($Result);	
								   
// echo $NumResults;

  if ($NumResults==1)
	  
	//echo '<h2>'.'Found user with matching password'.'</h2>';
  echo '<script> window.location.href="home.php" </script>';
 

	   
  else
	echo '<h2>'.'User not found OR wrong password OR both OR multiple matches found'.'</h2';


?>

</body>
</html>


