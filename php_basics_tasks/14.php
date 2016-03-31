<?php 

$foo = 'bar';
$foo =&$bar;
$bar = 10;
echo "$foo";

 ?>