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
</body>

</html>