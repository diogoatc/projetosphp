<?php

$nomes = array("joao","maria","fernanda","diogo","Marcelo","fabiano","Otavio","zapata",0,""); //N�o coloquei os 20 nomes, mas acredito que funcione
$intervalo = array(); //Array para guardar os valores do intervalo dado
$cont= 0; //contador para o vetor do intervalo
	foreach ($nomes as $valor){
	
	
	$primeiro = substr(ucfirst($valor),0,1); //pega somente a primeira letra da string, altera para caixa alta em ucfirst(string) e verifica se ela est� no intervalo
		if($primeiro >= "L" and $primeiro <= "S"){ //Compara se a primeira letra da String est� no intervalo dado pela quest�o
			$intervalo[$cont] = $valor;
			$cont++;
		}

	}
var_dump($intervalo);  //var_dump s� para verificar se todos os nomes entraram no vetor do intervalo
 
?>