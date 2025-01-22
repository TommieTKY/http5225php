<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week2</title>
</head>
<body>
    <h1>Hello World!</h1>
    <script>
        document.write('Hello World in JS')
    </script>
    <?php
        echo 'Hello World to PHP!' ;
        echo '<h1>Welcome to Tommie\'s World</h1>';
        echo '<p>The content of the paragraph.</p>'.'<p>Another paragraph.</p>';
        echo '<img src="https://google.com/image">';
    ?>
    <img src="<?php echo 'https://google.com/image' ?>" alt="<?php echo 'ALT TAG'; ?>">
    <br>
    <?php
    $name = "Tommie Tong";
    $lastName = 'Tong';
    echo "Hello, " . $name;
    // $person=array['Tommie','Tong','info@humber.ca'];
    // $person[0];
    $person['first']='Tommie';
    $person['last']='Tong';
    $person['email']='info@humber.ca';
    $person['web']='https://humber.ca';

    echo '<br>';
    echo 'Hello, '.$person['first'];

    echo '<br>';
    echo '<br>';

    echo '<a href="mailto:'.$person['email'].'">'.$person['email'].'</a>';
    echo '<br>';
    echo '<a href="'.$person['web'].'">'.$person['web'].'</a>';

    echo '<br>';
    echo '<br>';

    echo "<a href=\"mailto:'{$person['email']}\">{$person['email']}</a>";
    echo '<br>';

    ?>

    <h1>Hello, <?=$person['first']?><h1>
    <a href="<?=$person['web']?>"><?=$person['web']?></a>

</body>
</html>