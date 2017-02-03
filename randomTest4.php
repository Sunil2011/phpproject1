<?php
$id = "aa aa";
$id = str_replace(' ', '_', $id);
echo $id;

echo '<br>';

$str = '';
var_dump($str);
echo '<br>';
var_dump((bool)$str); // empty string : bool(false)
echo '<br>';
var_dump((bool)0); // 0 : bool(false)

echo '<br>';
var_dump($_SERVER['HTTP_HOST']);

echo '<br>';
var_dump($_SERVER['DOCUMENT_ROOT'] );