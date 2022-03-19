<html>
<head>
<title>CampyCampers Register page</title>
<link rel="stylesheet" href="css/style.css">
    <meta name="author" content="Vaida Rubyte ">
    <meta  name="pageInfo" content = "it is Register page for CampyCampers project. version1. 12.03.2022">


</head>
<body>
    <img src="logo 3.png" alt="CampyCampers logo" height="100px" width="110px">
<header>
    <h1>Register</h1>
</header>

   <center>
         <a href ="login.php">Login</a> 
         <a href ="Register.php">Register</a> 
    
   </center>

<br>
    <center>
        <div class="REGISTER_USER"  >
        <form method="POST" action="WriteUser.php">
            <table>
                <form >
                    <div class="REGISTER_USER"  >
                            <input type="text"  name="Email" placeholder="Enter Email ......"   ><br>
                        
                            <input type="text"  name="Password" placeholder="Enter Password ......"><br>

                            <input type="text"  name="Address" placeholder="Enter Address ......."><br>
                        
                            <input type="text"  name="Name" placeholder="Enter Name ......."><br>
                        
                            <input type="text"  name="Surname" placeholder="Enter Surname ....."><br>
                        </div>

                    <tr>
                        <td colspan="2"><input type="submit" value="Register"/></td>
                    </tr>

                </form> 
            </table>
        </form>
    </center>
</body>

</html>