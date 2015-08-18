<?php

echo "WELCOME!!";
echo "to HAH";

$server = "localhost";
$user = "root";
$pass = "";
$db = "test";

$conn = new mysqli($server, $user, $pass, $db);

if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}

echo "<br>I am here";

$sql = "SELECT * FROM test";
$result = mysqli_query($conn, $sql);

echo $result;

if(mysqli_num_rows($result) > 0){
	echo "<br>I am here *";
	while($row = mysqli_fetch_assoc($result)){
		echo "id: " . $row["Id"]. " - Name: ". $row["Name"]. "<br>";
	}
}else {
	echo "<br>Zero results";
}
mysqli_close($conn);

?>