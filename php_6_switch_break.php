<?php

$i = 0 ;
while($i<11){
    switch ($i){
        case 1 :
            echo"you are at one"."<br>";
            break;
        case 2 :
            echo 'you are at two' .'<br>';
            break;
        case 5:
            echo 'you are at five' . '<br>';
            break;
        case 7 :
            echo 'you are at seven ' . '<br>';
            break;
        case 10 : 
            echo 'you are at ten' . '<br>';
            break;
        default :
            break;
    }
    $i++ ;
}

print "<hr>";
?>