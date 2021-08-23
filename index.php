<!DOCTYPE html>
<html>
	<head>
		<!--Links-->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
		<title>Landing_Page_01</title>
		<!--Meta Tags-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="author" content="Matheus Bespalec - matheusbespalec@gmail.com">
	</head>
	<body>

		<!-- Formulario -->
		<div class="container">
			<div class="line"></div><!--line-->

			<form method="post">
				<h2>Increva-se e receba nossos E-mails</h2>
				<div class="input-group">
					<input type="text" name="nome" required>
					<span>Nome</span>
				</div><!--input-group-->
				<div class="input-group">
					<input type="email" name="email" required>
					<span>E-mail</span>
				</div><!--input-group-->
				<div class="input-group">
					<textarea required></textarea>
					<span>Sua Mensagem...</span>
				</div><!--input-group-->
				<input type="submit" name="invit" value="Enviar!">
			</form>

			<img src="images/pessoa.png">

		</div><!--container-->

	</body>
</html>