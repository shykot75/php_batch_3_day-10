<?php
require_once ('vendor/autoload.php');
use App\classes\Example;

$exam = new Example();
$exam->index();


echo "<br />";
$exam->name="BITM";
echo $exam->name;
