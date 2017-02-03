<?php
$a = array(1,2,3,4,d,a,b,c);

$b = json_encode($a);
echo '<b style="color:blue"> Json_encode: </b>'.'<br>';
var_dump($b);
echo '<br>'.'<b style="color:blue"> Json_decode: </b>'.'<br>';
$bjd = json_decode($b); // string on success and false on failure
var_dump($bjd);
echo '<hr>';

//2. for json_encode to object type
$bb = json_encode($a, JSON_FORCE_OBJECT);
echo '<b style="color:blue"> Json_encode: </b>'.'<br>';
var_dump($bb);
echo '<br>'.'<b style="color:blue"> Json_decode: </b>'.'<br>';
$bbjd = json_decode($bb);
var_dump($bbjd);
echo '<hr>';

//3. for associative array
$assArr = array('first'=>'1st', 'second'=> '2nd','third'=>'3rd','fourth'=>'4th');
$x = json_encode($assArr);
echo '<b style="color:blue"> Json_encode: </b>'.'<br>';
var_dump($x);
echo '<br>'.'<b style="color:blue"> Json_decode: </b>'.'<br>';
$xjd = json_decode($x);
var_dump($xjd);
echo '<hr>';

//4. for arrary of arrays of associative type
$aA = array(
    array('a'=>'1','aa'=>'11','aaa'=>'111'),
    array('b'=>'2','bb'=>'22'),
    array('c'=>'3')
);

echo '<b style="color:blue"> Json_encode: </b>'.'<br>';
$aAb = json_encode($aA);
var_dump($aAb);
echo '<br>'.'<b style="color:blue"> Json_decode: </b>'.'<br>';
$aAjd = json_decode($aAb);
var_dump($aAjd);
echo '<hr>';

//5. for associative array of arrays of associative type 

$aaA = array(
   '0'=> array('a'=>'1','aa'=>'11','aaa'=>'111'),
   '1'=> array('b'=>'2','bb'=>'22'),
   '2'=> array('c'=>'3')
);
//if keys are not 0,1,2... then only it is of assoc. type
echo '<b style="color:blue"> Json_encode: </b>'.'<br>';
$aaAb = json_encode($aaA);
var_dump($aaAb);
echo '<br>'.'<b style="color:blue"> Json_decode: </b>'.'<br>';
$aaAjd = json_decode($aaAb);
var_dump($aaAjd);
echo '<hr>';

//6. for string
$s = 'This is a string';
$sab = json_encode($s);
echo '<b style="color:blue"> Json_encode: </b>'.'<br>';
var_dump($sab);

echo '<hr>';
var_dump (json_encode(array('success' => 'true')) );
echo '{success : true}' ;
echo '<hr>';

// for multidimention array ;

$mD = array();
$mD[1]['name'] = 'name1' ;
$mD[1]['age'] = 11 ;
$mD[2]['name'] = 'name2' ;
$mD[2]['age'] = 12 ;

var_dump ( json_encode(array('mD' => $mD) )) ;

echo '<hr>';

$xyz = array();
 
for($i = 0 ; $i < 3 ; $i++ ){
    $wx = array();
    $wx['id'] = 'R0'.$i ;
    $wx['name'] = 'hey'.$i.'abc'.$i;
    $xyz[] = $wx;
}

 echo json_encode(array('json_encode' => $xyz) ) ;