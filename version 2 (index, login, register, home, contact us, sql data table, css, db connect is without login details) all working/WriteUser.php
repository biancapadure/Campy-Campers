<html>
  <head>
    <title>CampyCampers</title>
    <meta  name="pageInfo" content = "it is writeUser.php for CampyCampers project. version1. 12.03.2022">
    <link rel="stylesheet" href="css/CampCampersStyle.css">
  </head>
  <body>
  <img src="logo 3.png" alt="CampyCampers logo" height="100px" width="110px">
        <header>
            <h2>CampyCampers</h2>
            <h2>Error Page</h2>
            <center>
		<div class="indexMenu" >
			<a href ="index.html">Home</a> 
			<a href ="Register.php">Register page </a> 
			<a href ="login.php">login Page</a> 
         </div>
	  </center>
         
      </header>
    <?php
        include("DbConnect.php");     // Add in the database connection details
        // Get the information from  Register.php
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $Address = $_POST['Address'];
        $Name = $_POST['Name'];
        $Surname = $_POST['Surname'];
       /*
        echo $Email;
        echo $Password;
        echo $Address;
        echo $Name;
        echo $Surname;
        */
        // SQL statement - Thie SQL statement follows the general insert statement :
        $Query = "insert into CampyCampersUsers (Email, Password, Address,Name, Surname) values ('$Email', '$Password', '$Address', '$Name','$Surname')";

        $Result = mysqli_query($DB,$Query); 	 
        // $Result gives us a boolean value to check if the insert was completed ok. 

          if ($Result)
              {  echo '<script>  alert("User login details inserted!") </script>';
                echo '<script> window.location.href="home.php" </script>';	 }
          else
              {   echo '<h2>'.'Sorry - unable to complete the operation at present'.'</h2';  }
    ?>
  </body>
</html>