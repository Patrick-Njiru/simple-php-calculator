<?php
function myCalculator($num1, $oper, $num2)
{
  settype($num1, 'float');
  settype($num2, 'float');

  $sum = 0;
  if ($oper == 'add') $sum = $num1 + $num2;
  elseif ($oper == 'subtract') $sum = $num1 - $num2;
  elseif ($oper == 'divide') $sum = $num1 / $num2;
  elseif ($oper == 'multiply') $sum = $num1 * $num2;
  return $sum;
}

$num1 = $_GET['num1'];
$oper = $_GET['operation'];
$num2 = $_GET['num2'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Simple Calculator</title>
</head>

<body>
  <div class="container">
    <form method="get">
      <legend>My Calculator</legend>
      <p class="results"><?php echo myCalculator($num1, $oper, $num2) ?></p>
      <div class="inputs">
        <input type="text" name="num1" id="num1" placeholder="X">
        <select name="operation" id="oper">
          <option value="add" default>+</option>
          <option value="subtract">-</option>
          <option value="multiply">*</option>
          <option value="divide">/</option>
        </select>
        <input type="text" name="num2" id="num2" placeholder="Y">
      </div>
      <button type="submit">Calculate!</button>
    </form>
  </div>
</body>

</html>