<?php
	session_start();
	require'config.php';

if ($con->connect_error){
    die("Connection failed: " . $con->connect_error);
}
$sql = "SELECT * FROM Items";
$result = $con->query($sql);

if ($result->num_rows > 0) {

$items= array( );

    // output data of each row

/*while($row = mysql_fetch_assoc($result))
{
    $items[] = $row;
}
print_r($items);
*/

    while($row = $result->fetch_assoc()) {
//
$var = $row["ItemName"];
$items[] = $row["ItemName"];
$_SESSION["var"] = $items;


echo "<div class='column'> <div class='card' style='width: 18rem;'> <div class='card-body'> <h5 class='card-title'> ". $var.
    " <p class='card-text'>". $row["Discription"]."<br> InStock: ". $row["stock"] . "<br><h4> Price: </h4>$ " . $row["Price"] .  "</p> <p><a href='index.php#i5'><button>View Item</button></a></p> </div> </div> </div>";
//echo "<br> ItemName: ". $row["ItemName"]. " - discription: ". $row["Discription"]. "<br>";
	
//echo "<div class='item'> <h2>". $row["ItemName"]."</h2> <p>". $row["Discription"]. "</p><h4>Price:". $row["Price"]. "</h4></div>".
//"</p> <p><a href='#'><button>Buy now</button></a></p>";
    
  }

} else {
    echo "0 results";
}



?>

