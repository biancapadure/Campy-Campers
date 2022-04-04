<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chairs</title>
    <link rel="stylesheet" href="css/style.css">
<style>
img {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 80px;
  }
</style>

</head>

<body>

<?php
	include ('sideMenu.html');
	?>

	<div id="container">

	<?php
	include ('topMenu.html');
	?>
<H1>Chairs</H1>
<table border="1">

<tr>

<th>stock description</th>
<th>price per item</th>
<th> item image</th>
<th>   Add to basket button   </th>
</tr>



    <?php
        include("dbConnect.php");     
        $Query = " SELECT stockDescription, Price, imgLink FROM CampyCampersStock WHERE stockID  LIKE 'chair%' ";


        $Result = mysqli_query($DB,$Query);    

        


        while ($Row = mysqli_fetch_assoc($Result)) 
        {
        //  mysqli_fetch_assoc looks for the named field in the row eg CDTitle

        echo '<tr>'; // html table row tag
        echo '<td>'.$Row['stockDescription'].'</td>'; // html Table detail tags
        echo '<td>'.$Row['Price'].'</td>';
        echo '<td>'.'<img src="'.$Row['imglink'].'" alt="image of chair" />'.'</td>';
        echo '<td>'.'<input type = "submit" name="your_button_name" value = "Add to Basket">'.'</td>';
        echo '</tr>';
        }
    
    ?>
    </table>

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
