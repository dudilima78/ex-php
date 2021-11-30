<?php

echo"<h2>Exercícios de Lógica de Programação</h2><br>";
echo "Ex. 1<br><br>";

$A = 10;
$B = 20;
$A ^= $B ^= $A ^=$B;
echo"Variável A = {$A}<br>";
echo"Variável B = {$B}";
echo "<hr>";

//ou

$a = 10;
$b = 20;
echo "Valor de A: {$a} - Valor de B: {$b}<br>";

//$a = 10    e $b=20    e $c = 10

$c =$a;
$a = $b;
$b = $c;
echo "Valor de A: {$a} - Valor de B: {$b}";
echo "<hr>";

echo "Ex. 3<br><br>";
echo "A=> sim<br>";
echo "B => não<br>";
echo "C => não<br>";
echo "<hr>";

echo "Ex. 4<br><br>";

$A = 6*(3+2);
$B = 2+6*(3+2);
$C = 2+3*6/(2+4);
$D = 2*8/(3+1);
$E = 3+(16-2)/(2*(9-2));
$F = 6/3+8/2;
$G = (3+8/2)*4+3*2;
$H = 6*3*3+6-10;
$I = (10*8+3)*9;
$J = -12*-4+3*-4;
echo "A=> 6*(3+2) = {$A}<br>";
echo "B => 2+6*(3+2) = {$B}<br>";
echo "C => 2+3*6/(2+4) = {$C}<br>";
echo "D => 2*8/(3+1) = {$D}<br>";
echo "E => 3+(16-2)/(2*(9-2)) = {$E}<br>";
echo "F => 6/3+8/2 = {$F}<br>";
echo "G => (3+8/2)*4+3*2 = {$G}<br>";
echo "H => 6*3*3+6-10 = {$H}<br>";
echo "I => (10*8+3)*9 = {$I}<br>";
echo "J => -12*-4+3*-4 = {$J}<br>";
echo "<hr>";

$num = 10;
$ant = $num-1;
echo "Ex. 5<br><br>";
echo "Antecessor: {$ant}";
echo "<hr>";

$base = 20;
$alt = 10;
echo "Ex. 6<br><br>";
echo "Área do Retângulo = ".$base*$alt;
echo "<hr>";

$anos = 30;
$meses = 10;
$dias = 15;
echo "Ex. 7<br><br>";
echo "Idade em dias =".$anos*365+$meses*30+$dias;
echo "<hr>";

$vcarro = 10000;
$imp = $vcarro * 0.45;
$dis = $vcarro * 0.28;
$vfcarro = $vcarro + $imp + $dis;
echo "Ex. 10<br><br>";
echo "O valor final do carro é de: {$vfcarro}";
echo "<hr>";

$valor = 10;
echo "Ex. 14<br><br>";
if ($valor>10){
    echo "É MAIOR QUE 10!";
    } else {
    echo "NÃO É MAIOR QUE 10!";
    }
    echo"<hr>";

$valor = -5;
echo "Ex. 15<br><br>";
if ($valor>=0){
    echo "O VALOR {$valor} É POSITIVO";
} else{
    echo "O VALOR {$valor} É NEGATIVO";
}
echo"<hr>";

$macas = 3;
echo "Ex. 16<br><br>";
if ($macas<12){
    echo "PREÇO DA MAÇÃ R$ 1.30";
}else {
    echo "PREÇO DA MACÃ R$1.00";
}
echo"<hr>";

$nota1 = 9;
$nota2 = 5;
$media = ($nota1+$nota2)/2;
echo "Ex. 17<br><br>";

if ($media>=6){
    echo "Média {$media} - Aluno aprovado";
}else {
    echo "Média {$media} - Aluno reprovado";
}


