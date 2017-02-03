<?php
var_dump(25/7);
echo'<br>';
var_dump((int)(25/7));
echo '<br>'.'round of 27/7 = ';
var_dump(round(27/7)); // type of ronded number
echo '<br>'.'round of 24/7 = ';
var_dump(round(24/7));
echo '<br>';
#........... int of any float number ...........
echo(int)((0.1+0.7)*10); // echos 7.
echo '<br>';
$x = 0.1;
$y = 0.7;
echo '(' . $x .'+';
echo  $y .')'.'*10 = ';
echo(int)(($x+$y)*10);
//..... boolean types ...............
echo '<hr>'.'empty string boolean type : ';
var_dump((bool)"");
echo '<br>'.'any +ve integar boolean type : ';
var_dump((bool)3 );
echo '<br>'.'any -ve integer boolean type : ';
var_dump((bool)-3);
echo '<br>'.'any non empty string boolean type : ';
var_dump((bool)"foo");
echo '<br>'.'any non empty array boolean type : ';
var_dump((bool)array(12));
echo '<br>'.'ant empty array boolean type : ';
var_dump((bool)array());
echo '<br>'.'boolean type for boolean false : ';
var_dump((bool)false);
?>
