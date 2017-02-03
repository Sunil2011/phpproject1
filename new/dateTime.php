<?php

date_default_timezone_set("Asia/Kolkata");

echo '<hr>';
$format = "Y-m-d H:i:s" ;
echo date($format);
echo '<hr>';

$d = date("Y-m-d") ;
echo $d . "<br>";
$date = new DateTime($d);
$week = $date->format("W");
echo "Weeknubmer: $week";
echo '<hr>';

$ddate = "2012-10-18";
echo $ddate ."<br>";
$date2 = new DateTime($ddate);
$week2 = $date2->format("W");
echo "Weeknummer: $week2";