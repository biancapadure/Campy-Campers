<!DOCTYPE html>
<!-- 
       Student Name:Jean Aristide Ndjomo Etoundi
     Student Number: 19014614
          Unit Name:Team Working
          Unit Code: H178 34
       Project Name: Campy Camper
            Version: V1
               Date: 11/03/2022
-->
<html lang="en">
<head>
	<!--The meta help -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>	
<body>
	
<?php //include ('sideMenu.html'); ?>
  <!--logo-->
  <div id="sideMenu">
    <img id="logo" src="img/logo3Green.svg" alt="CampyCampers logo" height="100px" width="110px" >
     </div>
<div id="container">

<?php include ('topMenu2.html'); ?>
<center>
    <h2 >Login Page</h2> <!--here is the page name-->
		 	
    	<fieldset style="padding: 20px; width: 300px;"> <!--form container-->
    		<!--   <form action="home.php" method="post" >  -->
            <form method="post" action="CheckUser.php">  <!--start of the form-->
		    	<label for="email">Email</label><br>
		    	<input type="text " name="email" size="40"><br>

		    	<label for="password" >Password</label><br>
		    	<input type="password" name="password"  size="40">
				<br>
		    	<input style="margin-top:5px;" type="submit" value="Login"> 
            </form> <!--End of the form-->
			
			<br>
            
				<label for="register">Don't have an account?</label>
				<br>
				<input type="submit" value="Register">
			</form>
    	</fieldset>
</center>      
</div>
	
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
