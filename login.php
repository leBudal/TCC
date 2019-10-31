<?php

include('conexao.php');

if(empty($_POST['email']) or empty($_POST['senha'])){
	//redirecionar para a pagina de login mostrando uma mensagem "Usuario ou senha em branco"
	alert('Email ou senha vazios');
}else{
	//continuar validação
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$query = "SELECT tabela where email= {$email} and senha = {$senha}";
	$result = mysqli_query($con, $query);
	$row = mysql_num_rows($result);

	if($row == 0){
		//redirecionar para a pagina de login mostrando uma mensagem "Usuario ou senha invalidos"
	}else{
		//efetuar o login, levando para a pagina "index.html"
	}

}

?>