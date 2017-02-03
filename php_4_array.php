<?php
// indexed array
echo 'Examples of indexed array'.'<br>';
$cars = array('Volvo','BMW','Toyota');
$arrlength = count($cars);
for($i=0;$i<$arrlength;$i++){
    echo $cars[$i];
    echo'<br>';
}
 // ---------------------------
$cars2 = array();
$cars2[0] = 'xyz';
$cars2[1] = 'yzx';
$cars2[2] = 'zxy';
echo $cars2[1];
echo '<hr>';

//---------- associative array---------------
$student = array(
    "name" => 'abc',
     "age" => 23 ,
       1 => 'stdnt',
);
echo $student['name'];
echo '<br>';
var_dump($student);
echo'<br>';
$arr = array(
    'a',
    'b',
  5 => 'c',
    'd',
);
var_dump($arr);
echo '<hr>';
//-----------foreach loop -------
$colors = array('red', 'green', 'blue', 'white');
foreach ($colors as $value) {
    echo $value. '<br>';
}
unset($value);