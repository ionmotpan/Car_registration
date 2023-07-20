<!-- Formular la tema Inregistrare auto:
  Brand, model, culoare, idnp proprietar vechi, idnp proprietar nou, vin masina, year, type, motor, nr locuri,
  dotaru(conditioner, radio, tuning), avariata sau nu input pret. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Car Registration</title>
</head>
<body>
  <nav>
     <li><a href="./index.php">Home</a></li>
     <li><a href="./data.php">Data</a></li>
  </nav>
<h1>Car Registration</h1>
<div class="form-container">
  <form action="./data.php" method="POST">
    <div>
      <label for="brand">Brand</label>
      <input type="text" name="brand" id="brand">
    </div>
    <div>
      <label for="price">Price</label>
      <input type="number" name="price" id="price" min="0">
    </div>
    <div>
      <label for="model">Model</label>
      <input type="text" name="model" id="model">
    </div>
    <div>
      <label for="color">Color</label>
      <input type="text" name="color" id="color">
    </div>
    <div>
      <label for="currentOwnerIDNP">IDNP Current Owner</label>
      <input type="number" min="0" name="currentOwnerIDNP" id="currentOwnerIDNP">
    </div>
    <div>
      <label for="newOwnerIDNP">IDNP New Owner</label>
      <input type="number" name="newOwnerIDNP" id="newOwnerIDNP">
    </div>
    <div>
      <label for="vin">VIN</label>
      <input type="text" name="vin" id="vin">
    </div>
    <div>
      <label for="manufacturingYear">Manufacturing Year</label>
      <input type="date" name="manufacturingYear" id="manufacturingYear">
    </div>  
    <div>
    <label for="typeOfCar">Type</label>
      <select name="typeOfCar" id="typeOfCar">
        <option value="">choose an option:</option>
        <option value="sedan">Sedan</option>
        <option value="universal">Universal</option>
        <option value="pickup">Pickup</option>
      </select>
    </div>
    <div>
    <label for="engine">Engine</label>
      <select name="engine" id=""engine>
        <option value="">choose an option:</option>
        <option value="1.5">1.5</option>
        <option value="2.2">2.2</option>
        <option value="3.0">3.0</option>
        <option value="5.8">5.8</option>
      </select>
    </div>
    <div>
      <label for="numberOfSeats">Number Of Seats</label>
      <select name="numberOfSeats" id="numberOfSeats">
        <option value="">choose an option</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="5">5</option>
        <option value="7">7</option>
      </select>
    </div>
    <div>
      <h3>Choose the equipment of the car:</h3>
    </div>
    <div class="check">
    <input type="checkbox" name="equipment[]" id="airConditioning" value="airConditioning">
    <label for="airConditioning">Air Conditioning</label>
    <input type="checkbox" name="equipment[]" id="radio" value="radio">
    <label for="radio">Radio</label>
    <input type="checkbox" name="equipment[]" id="tuning" value="tuning">
    <label for="tuning">Tuning</label>
    </div>
    <div>
      <h3>Damaged Car:</h3>
    </div>
    <div class="radio">
      <input type="radio" name="damaged" id="yes" value="yes">
      <label for="yes">Yes</label>
      <input type="radio" name="damaged" id="no" value="no">
      <label for="no">No</label>
    </div>
    <button type="submit">Send</button>
  </form>
</div>
</body>
</html>