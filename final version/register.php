<html>
<head>
<title>CampyCampers Register page</title>
<link rel="stylesheet" href="css/style.css">
    <meta name="author" content="Vaida Rubyte ">
    <meta  name="pageInfo" content = "it is Register page for CampyCampers project. version1. 12.03.2022">


</head>
<body>

<?php include ('sideMenu.html'); ?>

<div id="container">

<?php include ('topMenu.html'); ?>

    <header>
    <h1>Register</h1>
    </header>

    <form action="login.php" method="post">
                <input type="text"  name="email" placeholder="Enter Email ......"   >
                <br>
            
                <input type="text"  name="password" placeholder="Enter Password ......">
                <br>

                <input type="text"  name="address" placeholder="Enter Address .......">
                <br>
            
                <input type="text"  name="forename" placeholder="Enter Forename .......">
                <br>
            
                <input type="text"  name="surname" placeholder="Enter Surname .....">
                <br>

                <input type="submit" value="Register">
    </form>

    <form action="login.php" method="post">
        <label for="alreadyHaveAcount">Already have an account?</label>
        <br>
        <input type="submit" value="Login">
    </form>

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
