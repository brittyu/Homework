<?php
function &test() {
    static $b = 0;
    $b = $b + 1;
    echo $b;
    return $b;
}

$a = test();
print $a;
$a = 5;
$a = test();
print $a;
$a = 5;
$a = &test();
print $a;
$a = 5;
$a = test();
print $a;
