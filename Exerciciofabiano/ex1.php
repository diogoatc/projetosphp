<?php

$nomes = array("GUTO GARCIA","PEDRO CORREA","ANITA LOPES","MARIA CORREA","JOAO BOND");
asort($nomes); //Função para colocar em ordem alfabética os nomes

foreach ($nomes as $chave){
	echo "$chave"."<br/>";
}



?>
