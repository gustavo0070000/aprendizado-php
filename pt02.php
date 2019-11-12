<?php 

 
if (isset($_POST["acao"])){ 
 
   $vendendor=$_POST["vendedor"]; 
   $unidades=$_POST["unidades"];
   $salario=$_POST["salario"];
   $data=$_POST["data"];
   $pecas=$_POST["pecas"];
   
$a = 1100 / $pecas;
$b = $salario - $a;
$salario_comissao = $b; 

echo " $vendendor, alocado na unidade $unidades desde $data, salário base de $salario.
Quantidade de peças vendidas no mês: $pecas.
Salário será de R$ $salario_comissao";



/*echo $salario_comissao;*/
 }

 



?>
