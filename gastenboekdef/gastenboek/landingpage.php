<?php


$name = $_POST["name"];
$message = $_POST["message"];
$date = date("Y-m-d H:i");

$mysqli = new mysqli("localhost", "root", "", "gastenboek");

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// Perform query
if ($result = $mysqli->query("INSERT INTO posts (vnaam, bericht, tijd)
VALUES ('$name','$message', '$date')"));

$last_id = $mysqli->insert_id;
echo $last_id;

$mysqli->close();

header("Location: landingpage2.php?post_id=$last_id");
exit();


?>

