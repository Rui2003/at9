<?php

$nota1 = 14;
$nota2 = 16;
$nota3 = 14;
$media = 0;

$media = ($nota1 + $nota2 + $nota3) / 3;
echo ' A media é igual a ' . $media;

if ($media >= 9.5) {
echo ' Aprovado ';
}

elseif ($media >8 && $media <=9.5) {
echo ' Recuperação ';

}
elseif ($media <=8) {
echo ' Reprovado ';
}