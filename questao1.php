<html>
	<head><title>Prova Questão 1</title></head>
<style>
	input{
		background-color:white;
	}
	#p1{
		color:black;
	
	}
	.imagem{
		background-image: url(https://images3.alphacoders.com/273/thumb-1920-273289.jpg);
		font-size:30px;
		color:black;
		text-align:center;
		background-attachment: fixed;
	}
</style>
<body class="imagem">
	<?php
		$raio=$_POST["raio"];
		echo"<h4>Questão 1 Prova A1 Prof Heryka</h4>";
		echo"<h3>Programa que calcula a área do circulo</h3>";
		echo"<h3>O raio digitado foi $raio</h3><hr>";
		//$pi=3.14;
		$area=3.14*$raio;
		echo"A área do círculo é: $area";
	?>
</body>
</html>
