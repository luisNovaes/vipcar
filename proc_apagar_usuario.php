<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_usuario = "DELETE FROM events WHERE id='$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Serviço apagado com sucesso</p>";
		header("Location: excluir.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro o serviço não foi apagado com sucesso</p>";
		header("Location: excluir.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um serviço</p>";
	header("Location: excluir.php");
}
