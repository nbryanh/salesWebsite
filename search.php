
<?php
ini_set('display_startup_errors', 1);	

	session_start();
	require'config.php';
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Search results</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
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
                		$result = "<strong> Item No: </strong>". $results['ItemID']. "<strong> Item Name: </strong>".$results['ItemName'].  "<strong> Item Description: </strong>".$results['Discription']. "<strong> Item Price: </strong>".$results['Price']."<br><br>";
				echo($result);
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

</body>
<html>
