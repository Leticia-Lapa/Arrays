<?php

//echo $nome[1]

//Arrays Associativos
$nome = array("nome" => "Jose Carlos", "Idade" => 13,"Email" => "jose.barbosa111@etec.sp.gov.br" );

echo $nome["nome"];
echo "<br>";
echo $nome["Idade"];
echo "<br>";
echo $nome["Email"];
echo "<br>";
echo "<hr>";

//Arrays Multidimensionais
$cars = array (
    array("Volvo",2022,4),
    array("BMW",2024,2),
    array("Saab",2023,4),
    array("Land Rover",2021,2)
);

echo "Carro: ".$cars[0][0]." Ano: ".$cars[0][1]." Porta: ".$cars[0][2];
echo "<br>";
echo "Carro: ".$cars[1][0]." Ano: ".$cars[1][1]." Porta: ".$cars[1][2];
echo "<br>";
echo "<hr>";

//Trazendo todos os dados do Array

foreach($cars[0] as $valor){
    echo $valor;
    echo "<br>";

}

foreach($nome as $valor){
    echo $valor;
    echo "<br>";
    
}
?>