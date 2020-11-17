<!-- to lower case -->
<?php
$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtolower($str);

echo $str; 
?>
<br>
<!-- to upper case  -->
<?php
$str = "anas melhem ";
$str = strtoupper($str);

echo $str; 
?>
<br>

<!-- the first char upper -->
<?php
$str = "anas melhem ";
$str =  ucfirst(($str));

echo $str; 
?>
<br>


<!--the first str on the all words is upper  -->
<?php
$str = "anas melhem ";
$str =  ucwords(($str));

echo $str; 