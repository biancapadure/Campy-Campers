<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div id="alignSideAndTopMenu">

    <?php //include ('sideMenu.html'); ?>
      <!--logo-->
      <div id="sideMenu">
    <img id="logo" src="img/logo3Green.svg" alt="CampyCampers logo" height="100px" width="110px" >
     </div>

    <div id="contentContainer">
        
        <?php include ('topMenu2.html'); ?>
        
        <body>
            <header>
                <h1>Campy Campers</h1>
            </header>
     
            
        </div>
</div>


<?php
  include("dbConnect.php");              // Add in the database connection details

  // Now get the information from the Form
  $Email = $_POST['email'];
  $Password = $_POST['password'];
  
//echo $Email;
//echo $Password;
  

  
  $Query = "SELECT Email,Password FROM CampyCampersUsers
  WHERE Email = '$Email'
  AND Password='$Password'";
  
//   Now run the query - i.e. Query the data in the table
  
  $Result = mysqli_query($DB,$Query);	 // $Result gives us a numeric value to check if the query found a match ok. 
				 	 
									   
  $NumResults = mysqli_num_rows($Result);	
								   
 //echo $NumResults;

  if ($NumResults==1)
	  
	//echo '<h2>'.'Found user with matching password'.'</h2>';
  echo '<script> window.location.href="home.php" </script>';
 

	   
  else
	echo '<h2>'.'User not found OR wrong password OR both OR multiple matches found'.'</h2';


?>
<footer>
        <div class="footer">
            <div class="inner_footer">
                <div class="logo_container">
                    <img src="img/logo3White.svg">

                </div>
                <div class="footer_third">
                    <h1>Need Help?</h1>
                    <a href="#">Terms &amp; Conditions</a>
                    <a href="#">Privacy Policy</a>
                </div>

                <div class="footer_third">
                    <h1>More</h1>
                    <a href="#">About Us</a>
                    <a href="#">Other Sites</a>
                </div>

                <div class="footer_third">
                    <h1></h1>
                    <a href="#">CampyCampers©</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>


