<?php
    //Resposta da questão 1 "Função SeculoAno"
    //Código criado por: Cristiano Simão dos Santos
    
    function SeculoAno(int $ano){
        $seculo = $ano / 100;
        if ($ano % 100){
            $seculo++;
        }
        return intval($seculo);
    }
    
    //echo "resultado: ". SeculoAno(1700); //Teste de execução
?>
