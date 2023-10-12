<!DOCTYPE html>
<html>
<head>
	<title>Login Facebook</title>
	<meta charset="utf-8">
	<meta name="viewport" content="widith=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header>
		<div class="center">
			<div class="logo">
				<h2> Facebook </h2>
			</div>
			
			<form method="post" class="form-login">
				<div class="form-element">
					<p>E-mail ou Telefone</p>
					<input type="email" />
				</div>
				<div class="form-element">
					<p>Senha</p>
					<input type="password" />
				</div>
				<div class="form-element">
					<input type="submit" name="acao" value="Entrar">
				</div>
			</form>
			<div class="clear"></div>
		</div>
	</header>

	<section class="main">
		 <div class="center">
		 	<div class="text">
		 		<p class="texto">O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</p>
		 	</div>
		 	<div class="img-pessoas">
		 		<img src="mundo.jpg">
		 	</div>
		 	<div class="abrir-conta">
		 		<h2>Abra uma conta</h2>
		 		<h3>É gratuito e sempre será.</h3>

		 		<form class="criar-conta">
		 			<div class="w50">
		 				<input type="text" name="" placeholder="Nome">
		 			</div>

		 			<div class="w50">
		 				<input type="text" placeholder="Sobrenome" >
		 			</div>

		 			<div class="w100">
		 				<input type="email" name="" placeholder="Celular ou E-mail">
		 			</div>

		 			<div class="w100">
		 				<input type="password" name="" placeholder="Nova senha">
		 			</div>

		 			<div class="w100">
		 				<h2> Data de nascimento </h2>
		 				<select name="nascimento-dia" class="nascimento">
		 					<?php
		 						for ($i= 1; $i <= 31 ; $i++){ 	
		 						
		 					?>
		 					<option value="<?php echo $i ?>"><?php echo $i ?>	</option>
		 				<?php } ?>
		 				</select>
		 				<select name="nascimento-mes" class="nascimento">
		 					<option value="1">janeiro</option>
		 					<option value="2">fevereiro</option>
		 					<option value="3">março</option>
		 					<option value="4">abril</option>
		 					<option value="5">maio</option>
		 					<option value="6">junho</option>
		 					<option value="7">julho</option>
		 					<option value="8">agosto</option>
		 					<option value="9">setembro</option>
		 					<option value="10">outubro</option>
		 					<option value="11">novembro</option>
		 					<option value="12">dezembro</option>

		 				</select>
		 				<select name="nascimento-ano" class="nascimento">
		 					<?php
		 						for ($i= 1960; $i <= 2020 ; $i++){ 	
		 						
		 					?>
		 					<option value="<?php echo $i ?>"><?php echo $i ?>	</option>
		 				<?php } ?>
		 				</select>
		 				<div class="clear"></div>
		 			</div>

		 			<div class="w100">
		 				
		 				<div class="input-radio">
		 					<input type="radio" name="sexo" value="sex">
		 					<h2>Masculino</h2>
		 				</div>
		 				<div class="input-radio">
		 					<input type="radio" name="sexo" value="sex">
		 					<h2>Feminino</h2>
		 				</div>
		 			</div>

		 			<div class="clear"></div>
		 			

		 			<div class="w100">
		 				<input type="submit" name="acao" value="Cadastre-se">
		 			</div>

		 			<div class="clear"></div>
		 		</form>

		 	</div>

		 	<div class="clear"></div>
		 </div>
	</section>

	<section class="linguas">
		<div class="center">

			<a href="#" class="selected-lingua">Português (BR)</a>
			<a href="#" >Português (BR)</a>
			<a href="#" >Português (BR)</a>
			<a href="#" >Português (BR)</a>
			<a href="#" >Português (BR)</a>
			<a href="#" >Português (BR)</a>
			<a href="#" >Português (BR)</a>
			<a href="#" >Português (BR)</a>
			<a href="#" >Português (BR)</a>
			<a href="#" >Português (BR)</a>

		</div>

		<div style="border:0;padding-top:10px;" class="center">

			<a href="#" class="selected-lingua">Português (BR)</a>
			<a href="#" >Português (BR)</a>
			<a href="#" >Português (BR)</a>
			<a href="#" >Português (BR)</a>
			<a href="#" >Português (BR)</a>
			<a href="#" >Português (BR)</a>
			<a href="#" >Português (BR)</a>
			<a href="#" >Português (BR)</a>
			<a href="#" >Português (BR)</a>
			<a href="#" >Português (BR)</a>

		</div>
	</section>

</body>
</html>