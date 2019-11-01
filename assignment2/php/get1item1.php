
<?php
	session_start();
	require'config.php';
	

if ($con->connect_error){
    die("Connection failed: " . $con->connect_error);
}

//include 'getitem.php?varname=<?php echo $var_value ?>';

$sql = "SELECT * FROM Items where ItemName='{$_SESSION['var']}";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
//echo "<div class='column'> <div class='card' style='width: 18rem;'> <div class='card-body'> <h5 class='card-title'> ". $row["ItemName"].
//    " <p class='card-text'>". $row["Discription"]. "</p> <p><a href='#i5'><button>View Item</button></a></p> </div> </div> </div>";
//echo "<br> ItemName: ". $row["ItemName"]. " - discription: ". $row["Discription"]. "<br>";

echo "<div class='item'> <h2>". $_SESSION["var"]."</h2> <p>". $row["Discription"]. "</p><h4>Price:". $row["Price"]. "</h4></div>".
"</p> <p><a href='index.php#buy'><button>Buy now</button></a></p>";
    

  }

} else {
    echo "0 results";
}
$con->close();

?>

