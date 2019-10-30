<!DOCTYPE html> 
<html> 
  <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel='stylesheet' href='css/styles.css'>
        <title>Index Page</title>
	<script type="text/javascript" src="script.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


  </head>
  
<body style = "text-align:center;">  
  
<div class='header'>       
	<form action="search.php" method="POST">
		 <strong class='title'>B&R PC</strong>
	         <input class='search-bar' type='text'  placeholder='Search...' name='query' style = "width:50%; height:35px;")/>
		 <input class="search-btn" type="submit" name="search" value="Search"/>
	</form>

        </form>

	
	<form>
        	<input class="personal" type="button" href="#" value="Cart">
        	<input class="personal" type="button" href="#" value="Order">
	</form>
</div>
</div>


<div class='nav'>
	<a href='a2.html'>Home</a>
	<div class="dropdown">
    <button><a href='#'>CPU <i class="fa fa-caret-down"></i></a></button>
    <div class="dropdown-content">
	<div class='row2'>
	<div class='column2'>
      <div class='card' style='width: 18rem;'>
			<img id='image'class='card-img-top' src='inteli5.jpg' alt='intel i5' style='width:100%'>
			<div class='card-body'>
			<h5 class='card-title'>Intel i5</h5>

		<p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		</div>
		</div>
		<div class='column2'>
      <div class='card' style='width: 18rem;'>
			<img id='image'class='card-img-top' src='inteli5.jpg' alt='intel i5' style='width:100%'>
			<div class='card-body'>

			<h5 class='card-title'>Intel i5</h5>
			<p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		</div>
		</div>
      <div class='column2'>
      <div class='card' style='width: 18rem;'>
			<img id='image'class='card-img-top' src='inteli5.jpg' alt='intel i5' style='width:100%'>
			<div class='card-body'>
			<h5 class='card-title'>Intel i5</h5>
			<p><buttoindexn onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		</div>
		</div>
    </div>
	</div>
  </div>
	<div class="dropdown">
	<button><a href='gpu'>GPU</a></button>
	</div>
	<div class="dropdown">
	<button><a href='#'>Motherboard</a></button>
	</div>
	<div class="dropdown">
	<button><a href='#'>RAM</a></button>
	</div>
	<div class="dropdown">
	<button><a href='#'>Monitor</a></button>
	</div>
	<div class="dropdown">
	<button><a href='#'>PC Case</a></button>
	</div>
	<div class="dropdown">
	<button><a href='#'>CPU Cooling</a></button>
	</div>
	<div class="dropdown">
	<button><a href='#'>Mouse</a></button>
	</div>
	<div class="dropdown">
    <button><a href='#'>Keyboard</a></button>
	</div>
    <a id='login' onclick="document.getElementById('id02').style.display='block'">Register</a>
    <a id='login' onclick="document.getElementById('id01').style.display='block'">Login</a>

</div>


  <div id="id01" class="loginModal">
    <form class="loginModal-content animate" action="login.php" method="post">

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
        <form class="registerModal-content animate" action="register.php" method="post">

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

<div class='row'>
	<div class='column'>
		<div class='card' style='width: 18rem;'>
			<img id='image'class='card-img-top' src='inteli5.jpg' alt='intel i5' style='width:100%'>
			<div class='card-body'>
			<h5 class='card-title'>Intel i5</h5>
			<p class='card-text'>
				With intelligent performance that accelerates in response to demanding tasks..</p>
			<p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>

			</div>
		</div>
	</div>
	<div class='column'>
		<div class='card' style='width: 18rem;'>
			<img id='image'class='card-img-top' src='inteli5.jpg' alt='intel i5' style='width:100%'>
			<div class='card-body'>
			<h5 class='card-title'>Intel i5</h5>
			<p class='card-text'>With intelligent performance that accelerates in response to demanding tasks..</p>
			<p><button onclick="document.getElementById('it01').style.display='block'">View Item</button></p>
			</div>
		</div>
	</div>
</div>

<div  class="registerModal">
        <form class="registerModal-content animate" >
          
            <div class="imgcontainer">
              <span onclick="document.getElementById('it01').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>
        
        <div class="container">
		<h2>Intel i5 9600K</h2>
        <img src='inteli5.jpg' alt='Intel i5 CPU'>
		<p>
		With intelligent performance that accelerates in response to demanding tasks, such as playing games
		and editing photos, the Intel Core i5 processor moves faster when you do.
		</p>
		<p>
		The Intel Core i5 processor automatically allocates processing power where it's needed most. Whether
		you're creating HD video, composing digital music, editing photos, or playing the coolest PC games - with
		the Intel Core i5 processor you can multitask with ease and be more productive than ever.
		</p>
		<h4>$349</h4>
		<h5>Stock: 3</h5>
		</div>
		
		<div class="container" style="background-color:#f1f1f1">
            <button><a class='button' href='#'>Check Out</a></button>
			<button><a class='button' href='#'>Add to Cart</a></button> 

        </div>
    </form>
</div>
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
            <span>&copy; copyrightB&Rpc's2019 </span> <a class="policy" href='#'>Privacy Policy</a> <a href='#'>   Terms & Conditions</a><br>
            <span>&#9993; brpc@gmail.com.au</span> <br>
            <span>90 South Street Murdoch WA 6150 </span><br>
            <span>&phone; +61 8 9360 6000</span><br>
        </div>

    </footer>

</html>

