<?php
$conteudos = [
    "portugues" => "<h2>EMPRESA</h2>A XXX INDÚSTRIA DE MÁQUINAS LTDA, foi fundada em 1970, e tornou-se o mais importante e tradicional fabricante de máquinas ensacadeiras no Brasil.",
    "ingles" => "<h2>OUR PLANT</h2>The XXX INDÚSTRIA DE MÁQUINAS LTDA, was founded in 1970, and became the most important and traditional supplier of BAGGING MACHINES in Brazil.",
    "espanhol" => "<h2>EMPRESA</h2>La XXX INDÚSTRIA DE MÁQUINAS LTDA, fue fundada en 1970, y se ha convertido en la más importante y tradicional fábrica de MÁQUINAS ENSACADORAS en Brasil."
];

if (isset($_COOKIE["idioma"]) && array_key_exists($_COOKIE["idioma"], $conteudos)) {
    $texto = $conteudos[$_COOKIE["idioma"]];
    file_put_contents("versao.txt", $texto);
    echo $texto;
}
?>
