
<?php
	if(isset($_POST['login']))
	{
		 $username= $_POST['username'];
	        $password= $_POST['password'];

		$query="select*from UserInfo WHERE username='$username' AND password='$password'";
		 $query_run = mysqli_query($con,$query);

		if(mysqli_num_rows($query_run)>0)
		{
			//valid

			 echo'<script type="text/javascript"> alert("Sucessfully login")</script>';

			$_SESSION['username']=$username;
			header('location:#home');
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
