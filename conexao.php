<?php
	$banco = pg_connect("host=localhost port=5432 dbname=hackathon user=postgres password=123");
	
	if(!$banco){
		echo "Não houve conexão!!";
	}
?>
