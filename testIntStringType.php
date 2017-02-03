<?php

$x = '12.34';
$y = 0 + $x ;
$z = $x + 1 ;
echo '<br>' . 'x: ';
var_dump($x);
echo '<br>' . 'y: ';
var_dump($y);
echo '<br>' . 'z: ';
var_dump($z);
echo '<hr>';

$a = 'abc ' ;
$b =  'xyz';
$c = $a + $b ;
echo '<br>' . 'c(=a+b): ';
var_dump($c); // 0 bcz '+' operation for numeric values
$d = $a + 0 ;
echo '<br>'.'d: ';
var_dump( $d ); // it will neglet the value of a bcz a is non numeric type
echo '<hr>';

$k = '11.234, 33.456 ';
$m = 0 + $k ;
var_dump($m) ;
echo '<br>';
var_dump( gettype($m) );
echo '<hr>';

$l = 'not found';
$zz =  $l + 0  ; // integer type (same for 0+$l )
var_dump($l);
echo '<br>';
var_dump($zz);
echo '<br>';
var_dump( gettype($zz) );
echo '<br>';

if($zz == 0){
    echo '$l is: ' .$l;
}
///////////////////////////////////////////////////////
echo '<hr>';
$ac = (float) $k ;
var_dump($ac); // equlas it's value  
echo '<br>';
$az = 'klm' ;
$ad = (float)$az ; // 0 because 1st letter is not a number
var_dump($ad);