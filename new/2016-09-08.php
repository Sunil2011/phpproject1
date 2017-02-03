<?php

$var = '1,32,45,79,21,';
echo 'var = '.$var;
echo '<br>';
echo substr_replace($var, '45,', 0) . "<br />\n";
echo substr_replace($var, '1,', 0, strlen($var)) . "<br />\n";

echo '<hr>';

echo str_replace('21,' , '', $var);

echo '<hr>';
$st = explode(',', $var);
var_dump($st);

echo '<hr>';
$var1 = ',1,32,45,79,21';
$st1 = explode(',', $var1);
var_dump($st1);