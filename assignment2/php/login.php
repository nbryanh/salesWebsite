
<!DOCTYPE html> 
<html> 
  <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel='stylesheet' href='css/styles.css'>
        <title>Index Page</title>
	<script type="text/javascript" src="../js/script.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="../js/jquery-3.3.1.js"></script>	
	<script src="../js/index.js"></script>

  </head>
  
<body style = "text-align:center;">  
  
<div class='header'>       
	<form action="search.php" method="POST">
		 <strong class='title'>B&R PC</strong>
	         <input class='search-bar' type='text'  placeholder='Search...' name='query' style = "width:50%; height:35px;")/>
		 <input class="search-btn" type="submit" name="search" value="Search"/>
	</form>
        <!-- <div id="id05" class="registerModal">
        	<form class="registerModal-content animate" action="register.php" method="post">
			<p>hello this is search result.</p>
		        <div class="container">
				<ol>
					<li> <?php
						error_reporting(0);
						echo $_POST['result']; ?>
			                </li>
				</ol>		
            		</div>
	</div>
		</form> -->
			
</div>
</div>
<div class='nav'>
<a href='../index.php'>Home</a>
<a href='../index.php#cpu'>CPU</a>
<a href='../index.php#gpu'>GPU</a>
<a href='../index.php#mobo'>Motherboard</a>
<a href='../index.php#ram'>RAM</a>
<a href='../index.php#moni'>Monitor</a>
<a href='../index.php#pcc'>PC Case</a>
<a href='../index.php#cpuc'>Power Supply</a>
<a href='../index.php#mouse'>Mouse</a>
<a href='../index.php#kb'>keyboard</a>
<a href='../index.php#lpt'>Laptop & Others</a>

<a href='#profile' style='float:right;'>Profile</a>
 
</div>




<?php

 	session_start();
        require'config.php';

	if(isset($_POST['login']))
	{
		 $username= $_POST['username'];
	        $password= $_POST['password'];

		$query="select*from UserInfo WHERE username='$username' AND password='$password'";
		 $query_run = mysqli_query($con,$query);

		if(mysqli_num_rows($query_run)>0)
		{
			//valid

			$_SESSION['username']=$username;
			$_SESSION['password']=$password;
//while($row = $result->fetch_assoc()) {
  //       $re= $row["id"];
    //}		

//	$email="select email from UserInfo where username='rijan' AND password='rijan'";
                //	 $query_run = mysqli_query($con,$email);
		//	$_SESSION['email']=$email;
		//		$re=$email;

		}
		else
		{
			//invalid
			echo'<script type="text/javascript"> alert("Invalid Username or Password")</script>';
		}


	}
	else{
              echo'<script type="text/javascript"> alert("Username or Password may not match.. Try again")</script>';

	}

?>
<div id="id03" class="homeModal">
            <form id="home" class="homePage-content animate" action="#" method="post">

                <div class="imgcontainer">
                  <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                  <h2>Home Page</h2>
                  <h3> Welcome <?php echo $_SESSION['username'] ?> </h3>
                  <img src="../img/anonymous.jpeg" alt="anonymous" class="anonymous">
                </div>


                <div class="container" style="background-color:#f1f1f1">
                  <input type="button" name="logout" class="logoutbtn" value="Logout"/>

                </div>
              </form>
 </div>

<article id='profile' hidden='hidden'>
	  <div class="profilecontainer">
        <h1>Personal Profile</h1>
        <h4>Name:</h4>
        <p><?php echo $_SESSION['username'] ?></p>
        <h4>User name:</h4>
	<p><?php echo $_SESSION['username'] ?></p>
	<h4>Password:</h4>
	<p><?php echo $_SESSION['password'] ?></p>
	<h4>Email:</h4>
	<p>email here!</p>
        <h4>Address</h4>
        <p>address here!</p>
      </div>
</article>





 <script type="text/javascript" src="script.js"> </script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#loginmodal").click(function(){

            $.ajax({
                type: 'POST',
                url: 'script.php',
                success: function(data) {
                    alert(data);
                    $("p").text(data);

                }
            });
   });
});
</script>

</body>

	<footer>
        <div class="footer-text">
            <span>&copy; copyrightB&Rpc's2019 </span> <a class="help" href='#help'>HELP</a> <a href='#about'>ABOUT</a><br>
            <span>&#9993; brpc@gmail.com.au</span> <br>
            <span>90 South Street Murdoch WA 6150 </span><br>
            <span>&phone; +61 8 9360 6000</span><br>
        </div>

    </footer>

</html>

