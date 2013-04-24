<?php
echo "Hello India";
$res = add( 3,4);
function add( $a, $b ) {
    $c = $a + $b;
    return $c;
}
require_once '/test/SampleCodeTest.php';
require_once 'PHPUnit.php';

$suite  = new PHPUnit_TestSuite("SampleCodeTest");
$result = PHPUnit::run($suite);

echo $result -> toString();
?>