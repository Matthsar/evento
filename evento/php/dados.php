<?php

include_once("connect.php");

$comprova = $_POST['comprova'];
$name = $_POST['name'];
$cpf = $_POST['cpf'];
$nis = $_POST['nis'];
$elog = $_POST['elog'];
$bairro = $_POST['bairro'];
$entrega = $_POST['entrega'];
$enter = $_POST['bt-logar'];

$db = mysqli_select_db($con, "pessoa") or die("erro");
echo"";

if (isset($enter)) {
	$verifica_cad = mysqli_query($con, "SELECT * FROM cadastro WHERE cpf = '$cpf' ");

	if (mysqli_num_rows($verifica_cad) == 1) {
		echo "<script language= 'javascript' type='text/javascript'>alert('Este CPF já está cadastrado!'); window.location.href='../form.php';</script>";
	} else {
		$sql ="INSERT INTO cadastro(numero, nome, cpf, nis, endereco, bairro, entrega)";
		$sql.="VALUES ('$comprova', '$name', '$cpf', '$nis', '$elog', '$bairro', '$entrega')";

		$salvar = mysqli_query($con, $sql);

		$linhas = mysqli_affected_rows($con);

		echo "
			<script language='javascript' type='text/javascript'>
				alert('Pessoa cadastrada com sucesso');
			window.location.href='../index.php';</script>";

	}
	}

?>