<?php
$con = mysqli_connect("localhost","root","");
if (!$con){
	die("Error:".mysqli_error($con));
	/*echo "Conexão estabelecida com sucesso";*/
}
if (!mysqli_select_db($con, "pessoa")) {
	die("Error:".mysqli_error($con));
}
	//echo "<br/> Banco selecionado com sucesso";

?>