<!-- 
    Version: 1
    Created by: Bianca Padure
    Student number: 19015005
    Date: 10 March 2022
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php
	include ('sideMenu.html');
	?>

	<div id="container">

	<?php
	include ('topMenu.html');
	?>

    <h1>Basket</h1>

    <table>
        <tr>
            <th>Item No</th>
            <th>Product and code</th>
            <th>Price (Per item)</th>
            <th>No. of items</th>
            <th>Color</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Jacket (A6)</td>
            <td>£180.99</td>
            <td>1</td>
            <td>Green</td>
            <td>Add</td>
            <td>Remove</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Chair (B2)</td>
            <td>£22.44</td>
            <td>3</td>
            <td>Black</td>
            <td>Add</td>
            <td>Remove</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Table (C4)</td>
            <td>£40.55</td>
            <td>1</td>
            <td>White</td>
            <td>Add</td>
            <td>Remove</td>
        </tr>
    </table>

    <br>
    <a href="pay.php"><button>Click to pay</button></a>

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
	
    <script src="script.js"></script>
</body>
</html>
