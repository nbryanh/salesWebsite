<!DOCTYPE html> 
<html> 
  <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel='stylesheet' href='css/styles.css'>
        <title>Index Page</title>
	<script type="text/javascript" src="js/script.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/jquery-3.3.1.js"></script>	
	<script src="js/index.js"></script>

  </head>
  
<body style = "text-align:center;">  
  
<div class='header'>       
	<form action="php/search.php" method="POST">
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
<a href='#'>Home</a>
<a href='#cpu' >CPU</a>
<a href='#gpu'>GPU</a>
<a href='#mobo'>Motherboard</a>
<a href='#ram'>RAM</a>
<a href='#moni'>Monitor</a>
<a href='#pcc'>PC Case</a>
<a href='#cpuc'>Power Supply</a>
<a href='#mouse'>Mouse</a>
<a href='#kb'>keyboard</a>
<a href='#lpt'>Laptop & Others</a>

    <a id='login' onclick="document.getElementById('id02').style.display='block'">Register</a>
    <a id='login' onclick="document.getElementById('id01').style.display='block'">Login</a>

</div>


  <div id="id01" class="loginModal">
    <form class="loginModal-content animate" action="php/login.php" method="post">

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

          <button class="login" name="login" id="login_btn" type="submit" >Login</button>



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

      <div id="id02" class="registerModal">
        <form class="registerModal-content animate" action="php/register.php" method="post">

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

<article id='home'>
<?php include 'php/getitem.php';?>
</article>

<article id='i5' hidden='hidden'>
<?php include 'php/get1item.php';?>
</article>

<article id='buy' hidden='hidden'>
<h4>Thanks for buying!</h4>
</article>

<article id='cpu' hidden='hidden'>
<?php include 'php/getcpu.php';?>
</article>

<article id='gpu' hidden='hidden'>
<?php include 'php/getgpu.php';?>
</article>

<article id='ram' hidden='hidden'>
<?php include 'php/getram.php';?>
</article>

<article id='mobo' hidden='hidden'>
<?php include 'php/getmobo.php';?>
</article>

<article id='moni' hidden='hidden'>
<?php include 'php/getmoni.php';?>
</article>

<article id='kb' hidden='hidden'>
<?php include 'php/getkb.php';?>
</article>

<article id='lpt' hidden='hidden'>
<?php include 'php/getlpt.php';?>
</article>

<article id='acc' hidden='hidden'>
<?php include 'php/getacc.php';?>
</article>

<article id='pcc' hidden='hidden'>
<?php include 'php/getpcc.php';?>
</article>

<article id='cpuc' hidden='hidden'>
<?php include 'php/getcpuc.php';?>
</article>

<article id='mouse' hidden='hidden'>
<?php include 'php/getmouse.php';?>
</article>










<sript type="text/javascript" src="js/script.js"> </script>

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

<article id='help' hidden='hidden'>
	  <div class="profilecontainer">
        <h1>HELP</h1>
        <h4>1. How to buy?</h4>
		<h3>To buy our product simply log-in or register, if you dont have an account, and function will be granted</h3>
		<h4>2. Delivery?</h4>
		<h3>Product will then be delivered to address registered</h3>
		<h4>More Information</h4>
		<h3>Contanct: +61 8 9360 6000</h3>
      </div>
	</article>
	
	<article id='about' hidden='hidden'>
	  <div class="profilecontainer">
        <h1>About</h1>
        <h4>B&R PC</h4>
		<h3>
		Hello, welcome to B&R PC. we are a pc component shop that sells various parts for a pc such as CPU, GPU, Motherboard,
		and others from different types of brands starting from Intel, Asus, MSI, and many more. we make pc building as easy 
		as making legos.
		</h3>
		<h4>Location</h4>
		<h3>B&R PC is located in 90 South Street Murdoch WA 6150</h3>
		<h4>How we sell our product</h4>
		<h3>
		We will be displaying our product in out website where customers could brows through the site to look for a product that 
		they are looking for. To buy the product customer will need to register as a member and log-in. if customer is not log-in 
		the purchase function will not be available. Product will then be delivered to address registered.
		</h3>
      </div>
	</article>


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

