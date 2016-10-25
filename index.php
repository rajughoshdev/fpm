<?php 

require('./vendor/autoload.php');

$valPass = new VPassword();
var_dump($valPass->validLength('1234'));
?>
