<?php

$a = array(
    '0'=>'abc',
    '1'=>'xyz',
    '2'=>'pqr',
    '10'=>'rst',
    '11'=>'a',
    '12'=>1,
    '20'=>2,
    '21'=>3,
    '22'=>22,
);

$result1 = array_search(22, $a);
echo 'result1: ';
var_dump($result1);

$result2 = array_search('xyz',$a);
echo '<br>'.'result2: ';
var_dump($result2);

$result3 = array_search( 'ABC',$a);
echo '<br>'.'result3: ';
var_dump($result3);

echo '<hr>'.'array_key_exist : '.'<br>' ;
echo 'key 10 : ';
$res = array_key_exists('10', $a);
var_dump($res);
echo '<br>'.'key 11 : ';
$res1 = array_key_exists(11, $a);
var_dump($res1);
echo '<br>'.'key 5 : ';
$res2 = array_key_exists(5, $a);
var_dump($res2);