<?php
session_start();

//Incluir conexao com BD
include_once("conexao.php");
	   $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
     $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
 $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
 $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
 
 $placa = filter_input(INPUT_POST, 'placa', FILTER_SANITIZE_STRING);
 $fabricante = filter_input(INPUT_POST, 'fabricante', FILTER_SANITIZE_STRING);
 $modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
 $ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_STRING);
 $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
 
 	$servico = filter_input(INPUT_POST, 'servico', FILTER_SANITIZE_STRING);
    $start = filter_input(INPUT_POST, 'start', FILTER_SANITIZE_STRING);
	  $end = filter_input(INPUT_POST, 'end', FILTER_SANITIZE_STRING);
$observacao = filter_input(INPUT_POST, 'observacao', FILTER_SANITIZE_STRING);


	$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $color = filter_input(INPUT_POST, 'color', FILTER_SANITIZE_STRING);

	if(!empty($id) && empty($title) && empty($color) && !empty($start) && !empty($end)){
	//Converter a data e hora do formato brasileiro para o formato do Banco de Dados
	$data = explode(" ", $start);
	list($date, $hora) = $data;
	$data_sem_barra = array_reverse(explode("/", $date));
	$data_sem_barra = implode("-", $data_sem_barra);
	$start_sem_barra = $data_sem_barra . " " . $hora;
	
	$data = explode(" ", $end);
	list($date, $hora) = $data;
	$data_sem_barra = array_reverse(explode("/", $date));
	$data_sem_barra = implode("-", $data_sem_barra);
	$end_sem_barra = $data_sem_barra . " " . $hora;

$result_events = "UPDATE events SET nome='$nome', telefone='$telefone', email='$email', endereco='$endereco',
								   placa='$placa', fabricante='$fabricante', modelo='$modelo', ano='$ano', tipo='$tipo', 
								   servico='$servico', start='$start_sem_barra', end='$end_sem_barra', observacao='$observacao',  
								   title='Agendado', color='#FF4500' WHERE id='$id'"; 

	$resultado_events = mysqli_query($conn, $result_events);
	
	//Verificar se alterou no banco de dados através "mysqli_affected_rows"
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<div class='alert alert-success' role='alert'>Serviço editado com Sucesso.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
		header("Location: agenda.php");
	}else{
		$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao editar o agendamento<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
		header("Location: agenda.php");
	}
	
}else{
	$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Verifique se todos os campos foram preenchidos<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
	header("Location: agenda.php");
}