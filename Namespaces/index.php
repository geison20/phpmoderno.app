<?php 

namespace PHPModerno;

require_once('Classes/Configuration.php');
require_once('Classes/People.php');

use PHPModerno\Classes\Config\Configuration,
	PHPModerno\Classes\Human\People as Pessoa
;


$people = new Pessoa();

$description = $people->getDescriptionClass();
echo $description ."<br>";

Configuration::getNamespace();
Configuration::getClass();
