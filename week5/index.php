<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $connect = mysqli_connect(
    'localhost',
    'root',
    '',
    'csv_db 14');

    if (!$connect) {
        die('Connection Failed:'.mysqli_connect_error());
    }

    $query = "SELECT * FROM colors";
    $colors = mysqli_query($connect, $query);
    
    echo '<pre>'.print_r($colors).'</pre>';

    if (!empty($colors)) {
      foreach ($colors as $color) {
          echo '<div style="background-color: '.$color['Hex'].'">'.$color['Name'].'</div>';          
      }
    }
    ?>
</body>
</html>