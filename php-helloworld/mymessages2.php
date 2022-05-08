<?php
// Ref at https://phpdelusions.net/pdo_examples/select

include 'connection.php';

/*
try{
 // create a PostgreSQL database connection
 $conn = new PDO($mydsn);
 
 // display a message if connected to the PostgreSQL successfully
 if($conn){
    echo "Connected to the <strong>$dbname</strong> database successfully!";
 }
} catch (PDOException $e){
 // or else report error message
 echo $e->getMessage();
}
*/

$mypdo = new PDO($mydsn);
$data = $mypdo->query("SELECT * FROM MYMESSAGES")->fetchAll();

echo "<table>";
foreach ($data as $row) {
	echo "<tr>";
	echo "<td align='center' width='200'>" . $row['id'] . "</td>";
	echo "<td align='center' width='200'>" . $row['name'] . "</td>";
	echo "<td align='center' width='200'>" . $row['msg'] . "</td>";
	echo "</tr>";
	}
echo "</table>";
?>
