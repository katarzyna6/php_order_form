<!DOCTYPE html>
<html lang="ang">

<head>
    <meta charset="utf-8"/>
    <title>My order summary</title>
</head>

<body>

<?php
  $cupcakes = $_POST["cupcakes"];
  $donuts = $_POST["donuts"];
  $total = 0.70*$cupcakes + 0.90*$donuts;

echo<<<END
  <h2>My order summary</h2>
  <table border="1" cellpadding="10" cellspacing="0">
  <tr> 
    <td>Cupcake (0.70€/piece)</td> <td>$cupcakes</td>
  </tr>
  <tr>
    <td>Donut (0.90€/piece)</td> <td>$donuts</td>
  </tr>
  <tr>
    <td>TOTAL</td> <td>$total €</td>
  </tr>
  </table>
  <br><a href="index.php">Back to Homepage</a>
END;
?>

</body>
</html>