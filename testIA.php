<?php

$ia= new IA();
$ia->setMapaCol(4);
$ia->setMapaFil(3);

echo $ia->getTipoNaveIAdefecto($navesIA); . "<br>";

$ia->setNaveIA("nodriza",3,1);
$ia->setNaveIA("nave",0,1);

$ia->imprimirNavesIA();


?>
