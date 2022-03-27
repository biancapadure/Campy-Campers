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

    <h1>Shoes/Jackets/Sleeping bags/Chairs</h1>

    <div id="itemsWrapper">

        <div class="items" id="item1">
            <img class="itemImagePlaceholder" src="img/placeholder.png" alt="item1">
            <div class="alignItemDetails">
                <p>Price:  </p>
                <p>Description: </p>
                    <div class="colorChoice">
                        <p>Available colors:</p>
                        <div class="itemColor" style="background:red;"></div>
                        <div class="itemColor" style="background:orange;"></div>
                        <div class="itemColor" style="background:yellow;"></div>
                        <div class="itemColor" style="background:green;"></div>
                        <div class="itemColor" style="background:blue;"></div>
                        <div class="itemColor" style="background:indigo;"></div>
                        <div class="itemColor" style="background:violet;"></div>
                    </div>
                <button>Add to basket</button>
            </div>
        </div>
        
        <div class="items" id="item2">
            <img class="itemImagePlaceholder" src="img/placeholder.png" alt="item1">
            <div class="alignItemDetails">
                <p>Price:  </p>
                <p>Description: </p>
                    <div class="colorChoice">
                        <p>Available colors:</p>
                        <div class="itemColor" style="background:black;"></div>
                        <div class="itemColor" style="background:blue;"></div>
                        <div class="itemColor" style="background:red;"></div>
                        <div class="itemColor" style="background:yellow;"></div>
                    </div>
                <button>Add to basket</button>
            </div>
        </div>

        <div class="items" id="item3">
            <img class="itemImagePlaceholder" src="img/placeholder.png" alt="item1">
            <div class="alignItemDetails">
                <p>Price:  </p>
                <p>Description: </p>
                    <div class="colorChoice">
                        <p>Available colors:</p>
                        <div class="itemColor" style="background:black;"></div>
                        <div class="itemColor" style="background:blue;"></div>
                        <div class="itemColor" style="background:red;"></div>
                        <div class="itemColor" style="background:yellow;"></div>
                    </div>
                <button>Add to basket</button>
            </div>
        </div>

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
