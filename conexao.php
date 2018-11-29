<?php
//VARIAVEIS COM CONFIGURAÇÕES DO BANCO DE DADOS
	$host = "muurun.mysql.dbaas.com.br";
	$database = "muurun";
	$usuario = "muurun";
	$senha = "muurun@2018";
	
//CONEXÃO COM O BANCO
	$con = new PDO("mysql:host=$host;dbname=$database", "$usuario", "$senha"); 
?>