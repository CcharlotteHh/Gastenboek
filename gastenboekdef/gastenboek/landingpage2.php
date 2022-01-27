<?php
$post_id = $_GET["post_id"];

$mysqli = new mysqli("localhost", "root", "", "gastenboek");

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
$sql = "SELECT vnaam, bericht, tijd
FROM posts
WHERE id = $post_id";


$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $name = $row["vnaam"];
        $message =$row["bericht"];
        $date = $row["tijd"];
    }
} else {
    echo "0 results";
}
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
    <link rel="stylesheet" href="style.php">

</head>

<body class="container">
    <div class="innercontainer">
        <div class="output naam">
            <label class="formLabel" for="adress">Naam:</label>
            <?php echo $name; ?>
        </div>

        <div class="output message">
            <label class="formLabel" for="adress">Message:</label>
            <?php echo  $message; ?>
        </div>

        <div class="output timestamp">
            <label class="formLabel" for="adress">Timestamp:</label>
            <?php echo $date; ?>
        </div>
        <?php
        header("refresh:60;url=index.php");
        ?>
    </div>
</body>


</html>