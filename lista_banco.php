<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php


if (isset($_POST["enviar"])) {
    $caixa = "Caixa Atendimento Prioritário ";

$caixa_deposito="Caixa Depósito";
$caixa_saque="Caixa Saque";
$gerencia="Gerencia Atendimento Prioritário";
$gerencia_geral="Gerencia Atendimento Geral";


$cliente_prioridade = new SplPriorityQueue;
$cliente_prioridade ->insert($caixa,10 );
$cliente_prioridade ->insert($caixa_deposito, 9);
$cliente_prioridade ->insert($caixa_saque, 8);
$cliente_prioridade ->insert($gerencia, 8);
$cliente_prioridade ->insert($gerencia_geral, 3);



echo "<h2>Atendendo o cliente </h2>" ;
while ($cliente_prioridade ->valid()){
    echo "<br> A ordem de atendimento é   " .$cliente_prioridade ->extract($_POST["enviar"]);
                        }


}



?>

</html>

    </body>
</html>
