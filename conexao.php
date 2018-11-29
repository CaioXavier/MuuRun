<?php
//VARIAVEIS COM CONFIGURAÇÕES DO BANCO DE DADOS
	$host = "muurun.database.windows.net";
	$database = "MuuRun";
	$usuario = "muurun";
	$senha = "maravaca@2019";
	
//CONEXÃO COM O BANCO
	$con = new PDO("mysql:host=$host;dbname=$database", "$usuario", "$senha"); 
?>