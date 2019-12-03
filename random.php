<?php 
//echo 'Bem vindo!';
$sorteado = random_int(1, 10);
//echo $sorteado;
$jogadas = 1;
while ($chute <> $sorteado){
 $chute = readline ("chute:");   //$chute = 2;
    if ($chute == $sorteado){
         echo ("Você venceu em $jogadas tentativas || ");}
    else{
        if ($chute > $sorteado){
            echo ('Alto  ');}
        else{
            echo ('Baixo  ');}
        }
     
    $jogadas ++;
    
    }
    
echo "Fim do jogo!";

?>
