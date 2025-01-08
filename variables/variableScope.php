<?php //three scopes local,global,static
//global scope
$x = 10;
function test(): void
{

    global $x;
    echo "This is Global scope {$x}";
}
test();
function testStatic()
{
    static $y = 1;
    $y++;
    echo $y;
}
testStatic();
testStatic();
testStatic();