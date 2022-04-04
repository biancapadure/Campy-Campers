<!DOCTYPE html>
<!-- John Farrelly, 06/03/22-->
<!-- campy campers -->
<!-- version number 1-->
<!-- index page-->

<html>

<head>
    <title>Campy Campers</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!--link for the css page-->
    <meta charset="utf-8">

</head>

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
            
            <button><a href="login.php">Login</a></button>
            <button><a href="register.php">Register</a></button>
            
        </div>
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
