<?php
$string1 = 'foobarbaz';
$string2 = 'foobarbiz';
$pos = strspn($string1 ^ $string2, "\0");

printf(
    'First difference at position %d: "%s" vs "%s"',
    $pos, $string1[$pos], $string2[$pos]
);
?>