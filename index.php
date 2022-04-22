<!DOCTYPE html>
<!-- ICS2O-Unit3-01-PHP-AreaTrapezoid -->
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="PHP hour! I am tired. that's okay. it's time for the volume of a triangular pyramid.">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Katie G">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"> 
    <title>volume of a triangular pyramid calculator now totally free and totally available to the public on php !</title>
 
    <!-- favicon wow! -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
  </head>
<body>
  <!-- PHP echo time for webpage header oh man -->
  <?php 
    echo "<h1>Volume of a triangular pyramid in PHP!!! Never before seen content here!!</h1>";
  ?>

  <!-- form for volume to surprise the people when the numbers appear  -->
  <form action="./results.php" method="post" target="volume-results">
    <label for="side-a">The Value of Side A!</label>
    <input type="number" id="side-a" placeholder="Side a in cm" name="side-a">
    <br>
    <br>
    <label for="side-b">The Value of Side B!</label>
    <input type="number" id="side-b" placeholder="Side b in cm" name="side-b">
    <br>
    <br>
    <label for="height">The Value of the Height!</label>
    <input type="number" id="height" placeholder="Height in cm" name="height">
    <br>
    <br>
    <input type="submit" value="Calculation hour is upon us!">
  </form>

  <!-- Frame for the results because boy do they be appearing -->
  <iframe id="volume-results" name="volume-results">
    Wow! the volume will now be shared :) " + $volume + cm<sup>3</sup>"
  </iframe>
</body>
</html>