<?php
	if(isset($_post['logout']))
	{
		session_destroy();
		header('location:#id01');
	}
?>
