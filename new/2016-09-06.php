<?php

$fileDesti = '/uploads/myImages/' ;
$filename =  $fileDesti.'abc.jpg';

var_dump(basename($filename));

echo '<br>';
$info = pathinfo($filename);
$file_name =  basename($filename,'.'.$info['extension']);

echo $file_name;

echo'<br>';
echo $file_name.'.'.$info['extension'] ;

echo '<br>';
echo 'random-string :' . rand(1 , 1000000);

echo '<br>';
$RandomAccountNumber = uniqid();
echo 'uniqId :' . $RandomAccountNumber;