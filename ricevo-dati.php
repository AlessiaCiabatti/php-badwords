<?php
$parola = $_POST['parola'];
$paragrafo = $_POST['paragrafo'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!--  -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ricevo dati</title>
</head>
<body>
  <div class="container">
    <h1>Parola: <?php echo $parola ?> </h1>
    <h1>Paragrafo <?php echo $paragrafo ?> </h1>
  </div>
</body>
</html>