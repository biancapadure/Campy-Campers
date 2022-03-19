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
	<link rel="stylesheet" type="text/css" href="css/aboutusStyle.css">
</head>
    <!--logo-->
	
<body>
	
    <div id="loginPageHeaderContent"> <!--The content on the top of the login page is hold here-->
    	<logo><img src="image/logo 3.png" alt="mylogo" height="100px" width="100px"></logo>
    	<btn class="loginRegisterButton">  <!--Login and Register buttons container-->
    		 <input type="submit" name="login" value="Login">  <!--Login and Register buttons container-->
    		 <input type="submit" name="register" value="Register">
    	</btn>
    	
    </div>
    <h2 >Login Page</h2> <!--here is the page name-->
		
    <div style="padding-left: 500px; padding-left: 500px;"> <!--Login form container-->
    	
    	<fieldset style="padding: 20px; width: 300px;"> <!--form container-->
    		<form action="home.php" method="post" > <!--start of the form-->
		    	<label for="Email">Email</label><br>
		    	<input type="Email " name="Email" size="40"><br>
		    	<label for="Password" >Password</label><br>
		    	<input type="password" name="Password"  size="40"><br><br>
		    	<input type="submit" name="Enter" value="Enter"> 
            </form> <!--End of the form-->
    	</fieldset>
    </div>	
   
</body>
</html>
</htm>