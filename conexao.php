<?php
//VARIAVEIS COM CONFIGURAÇÕES DO BANCO DE DADOS
	$host = "muurun.database.windows.net";
	$database = "dbo.tab-contato";
	$usuario = "muurun";
	$senha = "maravaca@2018";
	
//CONEXÃO COM O BANCO
	$con = new PDO("mysql:host=$host;dbname=$database", "$usuario", "$senha"); 
?>