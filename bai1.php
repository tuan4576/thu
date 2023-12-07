<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bai1.php" method="get">
    <label>tên<label>  
    <input type = "text" name = "text">
     <label>mat khau<label>  
     <input type = "password" name = "password">
     <input type = "submit" value = "gửi" name = "submitt">
    <form>
    <?php
    $a = array( "key1" => "value1",
            "key2" => "value2",
            "key3"=> "value3");
    foreach($a as $key => $value){
        echo "$key";
    }
    ?>
    <?php
    $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
      );
      for($row = 0; $row < 4;$row++)
      {
        for($col = 0; $col < 3;$col++){
            echo "".$cars[$row][$col]."";
        }
      }
    ?>
    <?php
      print_r($_SERVER);
    ?>
    
</body>
</html>
