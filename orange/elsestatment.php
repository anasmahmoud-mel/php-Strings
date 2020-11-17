<?php

$t =40;

if ($t<100 && $t>=90) {
  echo "Have a A!";
}
elseif ($t<90 && $t>=80) {
    echo "Have a B!";
  }
  elseif ($t<80 && $t>=70) {
    echo "Have a C!";
  }
  elseif ($t<70 && $t>=60) {
    echo "Have a D!";
  }
  elseif ($t<60 ) {
    echo "Have a FAIL!";
  }

?>

<?php
$mark = "95";

switch ($mark) {
  case "$mark>=91 && $mark<100":
    echo "A";
    break;
  case "$mark>=81":
    echo "B";
    break;
  case "$mark>=71":
    echo "C";
    break;
 case "$mark>=61":
    echo "D";
  default:
    echo "you are FAIL hhhhhhhhhh!";
}
?>