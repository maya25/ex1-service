<?php
include("myCalc.php");

$calc = new Calc();
$calc->getMyValues();
$calc->mycalculate();
$calc->responseJSON();
?>