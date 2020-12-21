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

      <?php $test = "Sono un paragrafo e questa è una brutta parola: " ?>

      <?php $bad = "democristiano" ?>

      <?php echo $test . $bad ; ?>

      <br>

      <br>

      <?php echo $test . $_GET["censura"]; ?>

    </p>

  </body>
</html>
