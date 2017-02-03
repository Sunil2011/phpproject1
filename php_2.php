<?php
// float number and if loop 
$x = 1.1237848;
$y = 1.1236473;
$presion = 0.001;
echo'absolute difference of $x and $y is within presion : ';
if( abs($x-$y) < $presion)
    {
    echo 'true';
}  else {
    echo'false';
}
// string in phph
print '<hr>';

$st = 'hi string';
print $st.'<br>' ;


$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;
echo $str .'<br>';


/* More complex example, with variables. 
class foo
{
    var $foo;
    var $bar;

    function foo()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'MyName';

echo <<<EOT
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41
EOT;
?>