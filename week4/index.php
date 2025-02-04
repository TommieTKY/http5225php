<!doctype html>
<html>
<head>
   <title>PHP and For Loops</title> 
</head>
<body>
    
  <h1>PHP and For Loops</h1> 

  <?php
    // Function to fetch user data from the JSONPlaceholder API
    function getUsers() {
      $url = "https://jsonplaceholder.typicode.com/users";
      $data = file_get_contents($url);
      return json_decode($data, true);
    }
    // Get the list of users
    $users = getUsers();

    echo '<p>There are '.count($users).' users in the list.</p>';

  //   if (count($users)>0) {
  //     echo '<ul>';
  //     for ($i = 0; $i < count($users); $i++)
  //     {
  //       echo '<li>'.$users[$i]['name'].'</li>';
  //       echo '<li>'.$users[$i]['username'].'</li>';
  //       echo '<li>'.$users[$i]['email'].'</li>';
  //       echo '<li>'.$users[$i]['address']['street'].'</li>';
  //       echo '<li>'.$users[$i]['address']['suite'].'</li>';
  //       echo '<li>'.$users[$i]['address']['city'].'</li>';
  //       echo '<li>'.$users[$i]['address']['zipcode'].'</li>';
  //       echo '<li>'.$users[$i]['address']['geo']['lat'].'</li>';
  //       echo '<li>'.$users[$i]['address']['geo']['lng'].'</li>';
  //       echo '<hr>';
  //     }
  //     echo '</ul>';
  // }

    if (!empty($users)) {
      echo '<ul>';
      foreach ($users as $user) {
          echo '<li>Name: '.$user['name'].'</li>';
          echo '<li>Username: '.$user['username'].'</li>';
          echo '<li>Email: <a href="mailto:'.$user['email'].'">'.$user['email'].'</a></li>';
          echo '<li>Street: '.$user['address']['street'].'</li>';
          echo '<li>Suite: '.$user['address']['suite'].'</li>';
          echo '<li>City: '.$user['address']['city'] . '</li>';
          echo '<li>Zipcode: '.$user['address']['zipcode'].'</li>';
          echo '<li>Latitude: '.$user['address']['geo']['lat'].'</li>';
          echo '<li>Longitude: '.$user['address']['geo']['lng'].'</li>';
          echo '<hr>';
      }
      echo '</ul>';
    }

  // Repeat 40 times and displays the numbers 1 to 40 on seperate lines (the numbers should be black)
    for ($i = 1; $i < 41; $i++)
    {
      echo $i.' ';
    }
    echo '<hr>';

  // Every fifth number is red (5, 10, 15, etc…)
  for ($i = 1; $i < 41; $i++)
    {
      if ($i % 5 == 0)
      {
        echo '<span style="color:red">'.$i.'</span> ';
      }
      else
      {
        echo $i.' ';
      }
    }
    echo '<hr>';

  // Every fourth number is blue (4, 8, 12, etc…)
    for ($i = 1; $i < 41; $i++)
    {
      if ($i % 4 == 0)
      {
        echo '<span style="color:blue">'.$i.'</span> ';
      }
      else
      {
        echo $i.' ';
      }
    }
    echo '<hr>';

  // When the fourth and fifth number overlap, the number is purple (20, 40)
    for ($i = 1; $i < 41; $i++)
    {
      if ($i % 4 == 0 && $i % 5 == 0)
      {
        echo '<span style="color:purple">'.$i.'</span> ';
      } elseif ($i % 4 == 0)
      {
        echo '<span style="color:blue">'.$i.'</span> ';
      } elseif ($i % 5 == 0)
      {
        echo '<span style="color:red">'.$i.'</span> ';
      }
      else
      {
        echo $i.' ';
      }
    }
    echo '<hr>';

  ?>


    
</body>
</html>
