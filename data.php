<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>car info</title>
</head>
<body>
<nav>
     <li><a href="./index.php">Home</a></li>
     <li><a href="./data.php">Data</a></li>
  </nav>
  <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      if(strlen($_POST["brand"]) > 0 && 
        !empty($_POST["price"]) &&
        !empty($_POST["model"]) &&
        !empty($_POST["color"]) && 
        !empty($_POST["currentOwnerIDNP"]) &&
        !empty($_POST["newOwnerIDNP"]) &&
        !empty($_POST["vin"]) &&
        !empty($_POST["manufacturingYear"]) &&
        !empty($_POST["typeOfCar"]) && 
        !empty($_POST["engine"]) &&
        !empty($_POST["numberOfSeats"]) &&
        count($_POST["equipment"]) > 0 &&
        !empty($_POST["damaged"])
      ){
        $brand = $_POST["brand"];
        $price = $_POST["price"];
        $model = $_POST["model"];
        $color = $_POST["color"];
        $currentOwnerIDNP = $_POST["currentOwnerIDNP"];
        $newOwnerIDNP = $_POST["newOwnerIDNP"];
        $vin = $_POST["vin"];
        $manufacturingYear = $_POST["manufacturingYear"];
        $typeOfCar = $_POST["typeOfCar"];
        $engine = $_POST["engine"];
        $numberOfSeats = $_POST["numberOfSeats"];
        $equipment = $_POST["equipment"];
        $damaged = $_POST["damaged"];

        echo "<div class='center'>
          <h3><em>Brand: </em>$brand</h3>
          <h3><em>Price: </em>$price $$$</h3>
          <h3><em>Model: </em>$model</h3>
          <h3><em>Color: </em>$color</h3>
          <h3><em>Current Owner IDNP: </em>$currentOwnerIDNP</h3>
          <h3><em>New Owner IDNP: </em>$newOwnerIDNP</h3>
          <h3><em>Vin: </em>$vin</h3>
          <h3><em>ManufacturingYear</em>$manufacturingYear</h3>
          <h3><em>Type Of Car:</em>$typeOfCar</h3>
          <h3><em>Engine: </em>$engine</h3>
          <h3><em>Number Of Seats</em>$numberOfSeats</h3>";
          foreach($equipment as $el) {
            echo "<h3><em>Equipment: </em>$el</h3>";
          }
          echo "
          <h3><em>Damaged: </em>$damaged</h3>
        </div>";
    }else {
      echo "Fill fields";
    }
  } 
  ?>
</body>
</html>