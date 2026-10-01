<?php
include("banking system.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #ZYRONBANK{
             border :2px solid black;
        background-color:white;
            justify-content:left;
            align-items:left;
            display:grid;
            width :250px;
            border-radius:25px;
        }
    </style>
</head>
<body>
  <div id ="ZYRONBANK">
<h4><?php echo "Phone_number: ". $phone_number ?> </h4>
<h4><?php echo "Password: ". $password  ?></h4>
</div>
</body>
</html>
