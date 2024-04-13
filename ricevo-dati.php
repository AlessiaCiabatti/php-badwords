<?php
$parola = $_POST['parola'];
$paragrafo = $_POST['paragrafo'];

$num_lettere = strlen($paragrafo);

// echo strlen($paragrafo);

// echo str_replace($parola, "***", $paragrafo)

$paragrafo_2 = str_replace($parola, "***", $paragrafo);
$num_lettere_par_2 = strlen($paragrafo_2);
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
    <!-- <h1>Parola: <?php echo $parola ?> </h1> -->
    <h1> <?php echo $paragrafo ?> </h1>

    <h3>Il paragrafo ha <?php echo $num_lettere; ?> lettere</h3>
    <h3><?php echo $paragrafo_2 ?></h3>
    <h3>Il secondo pragrafo ha <?php echo $num_lettere_par_2 ?> lettere</h3>
  </div>
</body>
</html>