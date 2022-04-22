<?php
  $side_a = $_POST["side-a"];
  $side_b = $_POST["side-b"];
  $height = $_POST["height"];
  $volume = (1/6) * $side_a * $side_b * $height;
?>
<h5> rejoice, for volume hour is upon us!!</h5>
<?php echo "the volume of the triangular pyramid with those values is " . round($volume) . " cm<sup>3</sup>" ?>