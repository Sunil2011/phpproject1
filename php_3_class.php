<?php
$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;
echo $str .'<br>';


/* More complex example, with variables. */
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
My name is "$name". <br> I am printing some $foo->foo. <br>
Now, I am printing some {$foo->bar[1]}.<br>
This should print a capital 'A': \x41
EOT;

?>

