<?php
/*
// Hieronder staan de variabelen die je nodig hebt bij het inloggen op de database.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gastenboek";

// Hieronder staat hoe je een connectie met de database maakt.

$conn = new mysqli($servername, $username, $password, $dbname);
// Hieronder zie je hoe een connectie kan worden gecontroleerd. Als er een error is ontstaan, dan wordt de functie die uitgevoerd die de boel afsluit.
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}


// Hieronder zie je een echo die alleen wordt uitgevoerd als het resultaat van de connectie geen error gaat opleveren.
echo "Connected successfully";
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<style>
body{
  background-image: url(background.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  display: flex;
  background-color: gray;
  justify-content: center;
  height: 700px;
  align-items: center;
}
.output{
  background-color: rgb(255, 255, 255, 0.7);
  padding: 10px;
  width: 400px;
}
</style>
<?php 
$name = $_POST["name"];
$message = $_POST["message"];

date_default_timezone_set('CET');    
echo date('d-m-Y H:i:s'); // ---->2013-06-22
?>
<body>
    <div class="ouput">
    <label for="name" class="formlabel">Name:</label>
    <div class="output"><?php echo $name?></div>
    </div>

    <div class="ouput">
    <label for="message" class="formlabel">Message:</label>
    <div class="output"><?php echo $message?></div>
    </div>
</body>
</html>
