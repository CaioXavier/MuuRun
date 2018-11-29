<!-- IMPORTA CONECTOR COM O BANCO -->
<?php require_once('conexao.php'); ?>
<?php 
	//VERIFICA SE OCORREU O POST DO FORMULARIO

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$nome 		= $_POST['nome'];
		$telefone 	= $_POST['telefone'];
		$email 		= $_POST['email'];
		$mensagem 	= $_POST['mensagem'];

	//PREPARA A QUERY PARA INSERIR OS DADOS NO BANCO DE DADOS
		$stmt = $con->prepare("INSERT INTO contato(nome, telefone, email, mensagem) VALUES(?, ?, ?, ?)");
		$stmt->bindParam(1,$nome);
		$stmt->bindParam(2,$telefone);
		$stmt->bindParam(3,$email);
		$stmt->bindParam(4,$mensagem);
		$stmt->execute();

	//CONFIGURA MENSAGEM DE SUCESSO
		$return_message = "Seus Dados Foram Enviados com Sucesso!";

	}
 ?>

 <html>

<head>
	<title>Contato</title> 

	<meta charset="utf-8">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Montserrat|Quattrocento+Sans" rel="stylesheet">

	<link rel="stylesheet" href="css/maravaca.css">
	<link id="" href="img\vaca.png" rel="icon" type="image\x-icon">

	<meta name="viewport" content="width=device-width, initial-scale=1"> <!--rodapé-->
<style>

.footer {
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
} <!--rodapé-->

</style> <!--rodapé-->

</head>

<body>

	<!-- Barra de navegação superior -->
    <img src="img/muurun.png" img class="vacas-largas">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
                 
			<div class="navbar-header">
				<button type="button" class="navbar-toggle glyphicon glyphicon-menu-hamburger"
				data-toggle="collapse" data-target="#maravaca-navbar">
        </button>
			</div>

			<ul id="maravaca-navbar" class="nav navbar-nav navbar-left collapse navbar-collapse" data-toggle="collapse" data-target="#bona-navbar">
				<li ><a href="index.html">Início</a></li>
				<li><a href="sobre.html">Sobre</a></li>
				<li><a href="download.html">Download</a></li>
				<li><a href="desenvolvedores.html">Desenvolvedores</a></li>
				<li class="active"><a href="contato.php">Contato</a></li>
			</ul>
            
		</div>
	</nav>
	<!-- Corpo da página -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="text-uppercase">
					Contato
				</p>
			</div>	
			<div class="col-md-4 col-md-offset-4">
				<form>
					<div class="form-group">
						<label for="exampleInputName">Nome</label>
						<input type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Seu Nome Completo">
					</div>
					<div class="form-group">
						<label for="exampleInputPhone">Telefone</label>
						<input type="number" class="form-control" id="exampleInputTelefone" aria-describedby="phoneHelp" placeholder="Insira Seu Telefone">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail">E-mail</label>
						<input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Insira Seu E-mail">
					</div>
					<div class="form-group">
						<label for="exampleInputMenssage">Mensagem</label>
						<textarea class="form-control" rows="5" id="comment" placeholder="Deixe sua mensagem aqui =)"></textarea>
					</div>

					<div class="form-group text-center" >
						<button type="submit" class="btn btn-success" style="width:100%;">
							<span class="glyphicon glyphicon-send" aria-hidden="true"></span> 
							Enviar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<div class="footer"> <!--rodapé conteúdo-->
  <img class="zeni-menor" src="img/fateclogo.png"></a>
  <img class="zeni-menor" src="img/Zenigame.png"></a>
  <img class="zeni-menor" src="img/logocps.png"></a>

  <p> </p>

</div>

</body>

</html>
