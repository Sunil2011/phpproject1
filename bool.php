<?php

$var = null ;

function Bool($x){
    if($x){
        // if boolval($x) is true ..then only code below is executed
        echo 'true' ;
    }else{
        //  if boolval($x) is false ..then only code below is executed
        echo 'false' ;
    }
}
Bool($var);
echo '<br/>';
var_dump(boolval($var));