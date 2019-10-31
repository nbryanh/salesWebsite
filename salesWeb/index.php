<?php
	session_start();
	require'config.php';
?>
<!DOCTYPE html> 
<html> 
  <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel='stylesheet' href='css/styles.css'>
        <title>Index Page</title>
  </head>
  
<body style = "text-align:center;">  
  
<div class='header'>       
    <form>
        <strong class='title'>B&R PC</strong> 
        <input class='search-bar' type='text' placeholder='Search..' name='search' style = "width:50%; height:35px;")>
        <button class ="search-btn" type="submit">Search</button>
        <input class="personal" type="button" href="#" value="Cart">
        <input class="personal" type="button" href="#" value="Order">

    </form>
</div>
</div>


<div class='nav'>
	<a href='#'>Home</a>
    <a href='#'>CPU</a>
	<a href='#'>GPU</a>
	<a href='#'>Motherboard</a>
	<a href='#'>RAM</a>
	<a href='#'>Monitor</a>
	<a href='#'>PC Case</a>
	<a href='#'>CPU Cooling</a>
	<a href='#'>Mouse</a>
    <a href='#'>Keyboard</a>
    <a id='login' onclick="document.getElementById('id02').style.display='block'">Register</a>
    <a id='login' onclick="document.getElementById('id01').style.display='block'">Login</a>

</div>


  <div id="id01" class="loginModal">
    <form class="loginModal-content animate" action="" method="post">

        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <h2>Login Form</h2>
          <img src="img/anonymous.jpeg" alt="anonymous" class="anonymous">
        </div>

        <div class="container">
          <label for="username"><b>Username</b></label>
          <input id="username" type="text" placeholder="Enter Username" name="username" required>

          <label for="psw"><b>Password</b></label>
          <input id="password" type="password" placeholder="Enter Password" name="password" required>

          <button class="login" name="login" type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
       <a href="#id02"> <input class="login" type="button" style="background-color: darkblue" value="Register modal"/></a>
	</div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
      </div>
<?php


if ($con->connect_error){
    die("Connection failed: " . $con->connect_error);
}


$sql = "SELECT ItemName, Discription FROM Items";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> ItemName: ". $row["ItemName"]. " - discription: ". $row["Discription"]. "<br>";
    }
} else {
    echo "0 results";
}

$con->close();

/*
		 $username= 'rijan';
	         $password= 'rijan'];

		 $query="select*from UserInfo WHERE username='$username' AND password='$password'";
		 $query_run = mysqli_query($con,$query);

		 echo'<script type="text/javascript"> alert($username, $password)</script>';
*/

?>



      <div id="id02" class="registerModal">
        <form class="registerModal-content animate" action="" method="post">

            <div class="imgcontainer">
              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
              <h2>Registration Form</h2>
              <img src="img/anonymous.jpeg" alt="anonymous" class="anonymous">
            </div>

            <div class="container">

              <label for="uname"><b>UserName</b></label>
              <input type="text" placeholder="Enter Username" name="username" required>

		 <label for="address"><b>Address</b></label>
              <input type="text" placeholder="Enter Address" name="address" >

	      <label for="email"><b>Contact e-mail</b></label>
              <input type="text" placeholder="eg: b&rpc@gmail.com" name="email" >

              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter New Password" name="password" required>

              <label for="psw"><b>Confirm Password</b></label>
              <input type="password" placeholder="Confirm your Password" name="cpassword" required>

              <button class="login" type="submit" style="background-color: darkblue" name="register_btn" href=".loginModal" >Resister</button>

            </div>

            <div class="container">
              <a href=".loginModal"> <button type="button" class="cancelbtn">Back</button></a>

            </div>
          </form>
          </div>

<?php
        if(isset($_POST['register_btn']))
        {
        //      echo'<script type="text/javascript"> alert("Register button clicked") </script>';
        $username= $_POST['username'];
        $password= $_POST['password'];
         $cpassword= $_POST['cpassword'];
	$address = $_POST['address'];
	$email = $_post['email'];
        if($password==$cpassword)
        {
                $query= "select*from UserInfo WHERE username='$username'";
                $query_run = mysqli_query($con,$query);

                if(mysqli_num_rows($query_run)>0)
                {
                        //there is already a user with the same username
                        echo '<script type="text/javascript"> alert("User already exist... try another name") </script>';
                }
		else
                {
                         $query= "INSERT INTO UserInfo(username,password,address,email) values('$username','$password','$address','$email')";
                        $query_run = mysqli_query($con,$query);

                        if($query_run)
                        {
                                echo'<script type="text/javascript"> alert("user Registered.. go to login page")</script>';
                        }
                        else
        		{
                            echo '<script type="text/javascript"> alert("Error!!! user is not registered") </script>';

                   	}

           	}

   	} //ifpwd

   		else
   		{
           		 echo '<script type="text/javascript"> alert("password and confirm password doesnot match") </script>';
   		}

   	} //isset
?>


          <div id="id03" class="homeModal">
            <form id="home" class="homePage-content animate" action="#" method="post">

                <div class="imgcontainer">
                  <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                  <h2>Home Page</h2>
                  <h3> Welcome <?php echo $_SESSION['username'] ?> </h3>
                  <img src="img/anonymous.jpeg" alt="anonymous" class="anonymous">
                </div>


                <div class="container" style="background-color:#f1f1f1">
                  <input type="button" name="logout" class="logoutbtn" value="Logout"/>

                </div>
              </form>
              </div>
<?php
	if(isset($_post['logout']))
	{
		session_destroy();
		header('location:#id01');
	}
?>

	  <script type="text/javascript" src="script.js"> </script>

	</body>

	<footer>
        <div class="footer-text">
            <span>&copy; copyrightB&Rpc's2019 </span> <a class="policy" href='#'>Privacy Policy</a> <a href='#'>   Terms & Conditions</a><br>
            <span>&#9993; brpc@gmail.com.au</span> <br>
            <span>90 South Street Murdoch WA 6150 </span><br>
            <span>&phone; +61 8 9360 6000</span><br>
        </div>

    </footer>

</html>
