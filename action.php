<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "test";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name=$_GET['name'];
$email=$_GET['email'];
$passw=$_GET['pass'];

$emaildb = "SELECT * FROM table1 WHERE email='$email';";

if (mysqli_num_rows($emaildb) > 0){
	echo "Email already used";
}else{
	$sql = "INSERT INTO table1 (Name, email, Password) VALUES ('$name', '$email', '$passw');";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();

?>


