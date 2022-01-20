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
 echo time_ago('2022-01-20 14:00:00');  
 function time_ago($timestamp)  
 {  
      $time_ago = strtotime($timestamp);  
      $current_time = time();  
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes = round($seconds / 60 ); // value 60 is seconds  
      $hours = round($seconds / 3600); //value 3600 is 60 minutes * 60 sec  
      $days = round($seconds / 86400); //86400 = 24 * 60 * 60;  
      $weeks = round($seconds / 604800); // 7* 24 * 60 * 60;  
      $months = round($seconds / 2629440); //((365+365+365+365+366)/5/12) * 24 * 60 * 60  
      $years = round($seconds / 31553280); //(365+365+365+365+366)/5 * 24 * 60 * 60  
      if($seconds <= 60)  
      {  
     return "Just Now";  
   }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
       return "one minute ago";  
     }  
     else  
           {  
       return "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
       return "an hour ago";  
     }  
           else  
           {  
       return "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
       return "yesterday";  
     }  
           else  
           {  
       return "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       return "a week ago";  
     }  
           else  
           {  
       return "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       return "a month ago";  
     }  
           else  
           {  
       return "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       return "one year ago";  
     }  
           else  
           {  
       return "$years years ago";  
     }  
   }  
 }  
?>
<body>


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