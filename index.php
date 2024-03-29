<?php
function myCalculator($num1, $oper, $num2)
{
  settype($num1, 'integer');
  settype($num2, 'integer');
  $sum = 'Error!';
  
  if ($oper == 'add') $sum = $num1 + $num2;
  elseif ($oper == 'subtract') $sum = $num1 - $num2;
  elseif ($oper == 'divide') $sum = $num1 / $num2;
  elseif ($oper == 'multiply') $sum = $num1 * $num2;
  return $sum;
}

$num1 = $_GET['num1'];
$oper = $_GET['op'];
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
        <input type='number' default=0 name="num1" placeholder="X">
        <select name="op">
          <option value="add">+</option>
          <option value="subtract">-</option>
          <option value="multiply">*</option>
          <option value="divide">/</option>
        </select>
        <input type='number' name="num2" placeholder="Y">
      </div>
      <button type="submit">Calculate!</button>
    </form>
  </div>
</body>

</html>