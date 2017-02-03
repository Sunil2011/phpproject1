<?php
// variables scope
$a = 5;
$b = 10;
function sum(){
    global $a, $b ; //acessing the global varaibles inside local scope
    $b = $a + $b ;
}
sum();
echo "new b = $b " . '<br>';

// another method the access the global variables 

$x = 20;
$y = 25;
function add(){
    $GLOBALS['x'] = $GLOBALS['x'] + $GLOBALS['y'];
}
add();
echo"new x =  $x". '<br>';
echo'<hr>';
//---------Use of static variables------------------------
function test()
{
    static $count = 0;

    $count++;
    echo $count;
    if ($count < 10) {
        echo '<br>';
        test();
    }
    //$count--;
    //echo $count;
}
test();
echo'<hr>';
//---------- variable variables -------------
$m = 'hello';
$hello = 'world';
$world = 'war';
$war = 'hello';
echo $m . '<br>'; // = hello
echo $$m . '<br>'; // smae as $hello = world
echo $$$m . '<br>'; // same as $world = war
echo $$$$m . '<br>'; // same as $war = hello
echo $$$$$m . '<br>'; // same as $hello = world