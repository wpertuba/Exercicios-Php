<?php 

	$nota1 = $_POST['nota1'];
	$nota2 = $_POST['nota2'];
	$nota3 = $_POST['nota3'];
	$nota4 = $_POST['nota4'];

	$media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

	if ($media >= 7.0) echo "Sua média é: $media <br>Você foi Aprovado, Parabéns!";
		else echo "Sua média é: $media <br>Você foi Reprovado :(";
 ?>