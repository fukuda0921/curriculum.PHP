<?php 
function getRectangularArea($height,$wide,$vertical) {
  $area = $height * $wide * $vertical;
  print "面積は".$area."です";
}
getRectangularArea(5,10,8);
?>