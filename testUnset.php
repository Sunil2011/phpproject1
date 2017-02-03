<?php

$ar = array('1st'=>'first',
    '2nd'=>'second',
    '3rd'=>'third',
    '4th'=>'fourth');
unset($ar['2nd']);
var_dump($ar);

echo '<hr>';

unset($ar);
var_dump($ar);

echo '<hr>';
$ar[]= 'xXx';
$ar[] = 'xYx' ;
var_dump($ar);

echo '<hr>';
array_push($ar, 'abc');
var_dump($ar);