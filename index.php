<?php require 'objects/bdd.php';
// require 'manager/bdd.php';
// $manager=new Manager($bdd);
// $destinations = $manager->getAllDestination(); 
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="img/airplane.png" />
</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="img/airplane.png" width="30" height="24">
    </a>
  </nav>
  <div>

    <?php
    echo "<div class='row row-cols-1 row-cols-md-3 g-4'>";

    $active = "";
    foreach ($bdd->query('SELECT * FROM destinations') as $item) {
      $nommaj = ucfirst($item[location]);
      // var_dump($item);

      echo "
          <div class='col'>
    <div class='card' style=''>
      <img src='img/$item[location].jpg' class='card-img-top test' >
      <div class='card-body'>
        <h5 class='card-title'>$nommaj</h5>";
      $tourOperator = $bdd->query("SELECT * FROM tour_operators WHERE id= $item[id_tour_operator]");
      $nomTourOperator = $tourOperator->fetchAll();
      echo "<p class='card-text'><a href='";
      echo $nomTourOperator[0]['link'] . "'>";

      echo $nomTourOperator[0]['name'] . "</a> </div>
    </div>
  </div>";

      // echo "<div class='carousel-item$active'>";
    }
    echo "
        </div>
        ";




    ?>









</body>

</html>