
<?php
ini_set('display_startup_errors', 1);	

	session_start();
	require'config.php';
?> 
<!DOCTYPE html> 
<html> 
  <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel='stylesheet' href='css/styles.css'>
        <title>Search</title>
	<script type="text/javascript" src="script.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


  </head>
<body>
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



<?php
if(isset($_POST['search']))
{
    	$query = $_POST['query'];
   	$min_length = 1;

	if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
       		$query = htmlspecialchars($query);
		//$query = mysqli_real_escape_string($query);
        	$raw_results = mysqli_query($con, "SELECT * FROM Items  WHERE  (ItemID LIKE '%$query%') OR (ItemName LIKE '%$query%') OR (Discription LIKE '%$query%') OR (Price LIKE '%$query%')");
// or die(mysql_error());
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
       		 if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
            		while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
                		$result = "<div class='column'> <div class='card' style='width: 18rem;'> <div class='card-body'> <h5 class='card-title'> ". $results["ItemName"].
				" <p class='card-text'>". $results["Discription"]. "</p> <p><a href='#i5'><button>View Item</button></a></p> </div> </div> </div>";
				echo ($result);			
			//echo "<br> ItemName: ". $result["ItemName"]. " - discription: ". $result["Discription"]. "<br>";

			//	header("Location: index.html?result=".$result);

		}
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            	 }
             
        }
        else{ // if there is no matching rows do following
            echo "No results found!";
        }
}
else{ // if query length is less than minimum
    echo "Minimum length is ";
} 

?>

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
