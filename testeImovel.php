<?php
    require_once 'Casa.php';
    require_once 'Apartamento.php';
    
    $casa1 = new Casa();
    $apto1 = new Apartamento();

    $casa1->setNQuartos(2);
    $casa1->setMetragemQuintal(4.5);
    echo "<br><br>Casa<br>";
    echo "Número de Quartos: ".$casa1->getnQuartos()."<br>";
    echo "Metragem do Quintal: ".$casa1->getMetragemQuintal()."<br>";

    $apto1->setNQuartos(3);
    $apto1->setBloco('A');
    $apto1->setAndar(3);
    echo "<br><br>Apartamento<br>";
    echo "Número de Quartos: ".$apto1->getnQuartos()."<br>";
    echo "Bloco: ".$apto1->getBloco()."<br>";
    echo "Andar: ".$apto1->getAndar()."<br>";
?>