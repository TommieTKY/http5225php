      <?php
        $database = "if0_38404845_beaches";
        $connect = mysqli_connect(
          'sql112.infinityfree.com', //URL
          'if0_38404845', //Username
          'EEmobxkC8jP', //Your password here, either root or empty
          $database // your database name, check your PHP myAdmin
        );
        if(!$connect){
          echo 'Error Code: ' . mysqli_connect_errno();
          echo 'Error Message: ' . mysqli_connect_error();
          exit;
        }
      ?>