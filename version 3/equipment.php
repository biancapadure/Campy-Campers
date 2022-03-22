<!DOCTYPE html>
<!-- John Farrelly, 06/03/22-->
<!-- campy campers equipment page-->
<!-- version number 1-->

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/style.css" type="text/css" /> <!-- css link for html page-->
    <script src="javascript.js" async></script> <!-- javascript link for html pages -->

</head>

<body>
    <?php
	include ('sideMenu.html');
	?>

	<div id="container">

	<?php
	include ('topMenu.html');
	?>


    <nav>
        <div class="wrapper">
            <a href="WelcomePage.php"></a>
            <ul>
                <li><a href="AboutUs.php">About us</a></li> <!-- navigates to about page -->
                <li><a href="ContactUs.php">Contact us</a></li> <!-- link at the top of the page for contact us page -->
                <li><a href="Home.php">Home</a></li> <!-- link to the home-->
                <li><a href="Basket.php">Basket</a></li> <!-- nav to Basket -->
            </ul>
        </div>
    </nav>

    <h1>Campy Campers Shop</h1>
    <section class="container content-section">
        <h2 class="section-header"></h2>
        <div class="shop-items">
            <div class="shop-item">
                <span class="shop-item-title">Jacket(A6)</span>
                <img class="shop-item-image" src="">
                <div class="shop-item-details">
                    <span class="shop-item-price">£180.99</span>
                    <button class="btn btn-primary shop-item-button" type="button">ADD TO BASKET</button>

                </div>
            </div>
            <input type="radio" id="red" name="red" value="red">
            <label for="red">red</label><br>
            <input type="radio" id="blue" name="blue" value="blue">
            <label for="blue">blue</label><br>
            <input type="radio" id="black" name="black" value="black">
            <label for="black">black</label><br>
            <input type="radio" id="green" name="green" value="green">
            <label for="green">green</label>

            <section class="container content-section">
                <h2 class="section-header"></h2>
                <div class="shop-items">
                    <div class="shop-item">
                        <span class="shop-item-title">Chair(B2)</span>
                        <img class="shop-item-image" src="">
                        <div class="shop-item-details">
                            <span class="shop-item-price">£22.44</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO BASKET</button>
                        </div>
                    </div>
                    <input type="radio" id="purple" name="purple" value="purple">
                    <label for="purple">purple</label><br>
                    <input type="radio" id="light blue" name="light blue" value="light blue">
                    <label for="light blue">light blue</label><br>
                    <input type="radio" id="black" name="black" value="black">
                    <label for="black">black</label><br>
                    <input type="radio" id="green" name="green" value="green">
                    <label for="green">green</label>


                    <section class="container content-section">
                        <h2 class="section-header"></h2>
                        <div class="shop-items">
                            <div class="shop-item">
                                <span class="shop-item-title">Table(C4)</span>
                                <img class="shop-item-image" src="">
                                <div class="shop-item-details">
                                    <span class="shop-item-price">£40.55</span>
                                    <button class="btn btn-primary shop-item-button" type="button">ADD TO
                                        BASKET</button>
                                </div>
                            </div>

    </div>
			    
	<footer>
        <div class="footer">
            <div class="inner_footer">
                <div class="logo_container">
                    <img src="Images/logo 3.png">

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
