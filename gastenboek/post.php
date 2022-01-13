<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="container">
    <form action="landingpage.php" method="post" class="login">
    <h1>Post something(:</h1>
    <div class="flex-input">
        <label for="name" class="formlabel">Name:</label>
        <input type="text" name="name" id="name">
    </div>
   

    <div class="flex-input">
        <label for="message" class="formlabel">Message:</label>
        <input type="text" name="message" id="message">
    </div>
    
    <input type="submit" value="POST!">
    </form>
</body>
</html>