<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Primo progetto php</title>
  </head>
  <body>

    <style media="screen">

      body{
        text-align: center;
        background-color: lightblue;
      }

      p{
        font-size: 30px;
      }


    </style>

    <p>

      <?php $badword = $_GET['badword']; ?>

      <?php $test = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ";
            $lng = strlen($test);
      ?>

      <?php $sostituto = str_replace($badword, '***' , $test) ; ?>

      <?php echo $test . ' (' . $lng . ')' ; ?>

      <br>

      <br>

      <?php echo $sostituto; ?>

    </p>

  </body>
</html>
