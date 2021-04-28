<?php 


include('../process/process.php');


?>

<!DOCTYPE html>
<html pt-br>
<head>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweet-modal@1.3.2/dist/min/jquery.sweet-modal.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
	<link rel="icon" href= "../imgs/icon.png" style="width: 100%; height: 100%">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="Author" name="Isaque Silva">
	<meta name="description" content="site de streaming de musicas/logar">
	<meta charset="utf-8">
	<title>Music Nation - Entrar</title>
</head>
<body style="background: #341f97;">

    <!-- BANNER -->
<header>
	<div class="banner">
		<ul class="links">
			<li><a href="#">Início</a></li>
			<li><a href="#">Sobre</a></li>
			<li><a href="#">Premium</a></li>
		</ul>
		<a class="icon" href="#"><img src="../imgs/logo.png" width="90" height="90"></a>
		<a class="text1" href="#"> MusicNation </a>
	</div>
</header>

	<!-- LOGIN -->
	
	<div class="content">
		<h1 style="text-align: center;">ENTRAR</h1>
		<form  method="post" action="../process/process.php">
			<label class="labeltxt">Nome de usuário:</label>
    		<input class="usuario" type="text" name="username" required>

			<label class="labeltxt">Senha:</label>
    		<input class="senha" type="password" name="password" required>
    		<input class="entrar" type="submit" value="Entrar" name="login">
    		<a class="criarcontabtt" href="../register/register.php">Criar Conta</a>
  		</form>
	 </div>
	</from>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
	<script type="text/javascript">
		// Show modal
		$('.ui.basic.modal').modal('show');
	</script>
</body>
</html>