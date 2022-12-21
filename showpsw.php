<?php

session_start();
$psw=isset($_SESSION["psw"]) ? $_SESSION["psw"] : " ";


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="my-container">
        <div class="box-psw">
            <div>
                PASSWORD GENERATA:
            </div> 
            <strong><?php echo $psw ?></strong>

        </div>
        
    </div>

    
</body>
</html>