<?php
        session_start();
        require'config.php';

if ($con->connect_error){
    die("Connection failed: " . $con->connect_error);
}
$query = 'aoc';
$query2= 'predator';
$query3= 'swift';

$sql = "SELECT * FROM Items  WHERE  (ItemID LIKE '%$query%') OR (ItemName LIKE '%$query%') OR (Discription LIKE '%$query%') OR (Price LIKE '%$query%') OR (ItemID LIKE '%$query2%') OR ".
"(ItemName LIKE '%$query2%') OR (Discription LIKE '%$query2%') OR (Price LIKE '%$query2%') OR".
"(ItemID LIKE '%$query3%') OR (ItemName LIKE '%$query3%') OR (Discription LIKE '%$query3%') OR (Price LIKE '%$query3%')";

$result = $con->query($sql);

if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {

$var = $row["ItemName"];

echo "<div class='column'> <div class='card' style='width: 18rem;'> <div class='card-body'> <h5 class='card-title'> ". $var.
    " <p class='card-text'>". $row["Discription"]. "</p> <p><a href='index.php#i5'><button>View Item</button></a></p> </div> </div> </div>";
//echo "<br> ItemName: ". $row["ItemName"]. " - discription: ". $row["Discription"]. "<br>";

//echo "<div class='item'> <h2>". $row["ItemName"]."</h2> <p>". $row["Discription"]. "</p><h4>Price:". $row["Price"]. "</h4></div>".
//"</p> <p><a href='#'><button>Buy now</button></a></p>";

  }

} else {
    echo "0 results";
}



?>

