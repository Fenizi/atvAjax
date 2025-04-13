<?php

include_once("./model/Aluno.php");

$name = new Aluno("Pedro", 18);
$stringName = json_encode($name);

echo $stringName;