<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <form action="012_calculator_2.php" method="post">
          1st number:&nbsp <input type="number" step= 0.0001 name="num1"><br>
          Operation: &nbsp&nbsp <input type="text" name="op"><br>
          2nd number: <input type="number" step= 0.0001 name="num2">

          <input type="submit">
      </form>
  <?php
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $op = $_POST["op"];

      if($op == "-"){
        echo $num1 - $num2;
      } elseif($op == "+"){
        echo  $num1 + $num2;
      } elseif($op == "/"){
        echo  $num1 / $num2;
      } elseif($op == "*"){
        echo  $num1 * $num2;
      } else {
        echo "Invalid operator";
      }

  ?>
  </body>
</html>
