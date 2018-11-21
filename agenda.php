<?php
require_once("restrito.php"); 
session_start();
include_once("conexao.php");
$result_events = "SELECT id, nome, telefone, email, endereco,
						 placa, fabricante, modelo, ano, tipo, servico,
						start, end, observacao, title, color FROM events";
$resultado_events = mysqli_query($conn, $result_events);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset='utf-8' />
		<title>Agenda Vip Var</title>
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/fullcalendar.min.css' rel='stylesheet' />
		<link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
		<link href='css/personalizado.css' rel='stylesheet' />
		<script src='js/jquery.min.js'></script>

		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
		<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

        <link href='css/layout.css' rel='stylesheet'>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>

		<script src='js/bootstrap.min.js'></script>
		<script src='js/moment.min.js'></script>
		<script src='js/fullcalendar.min.js'></script>
		<script src='locale/pt-br.js'></script>
		<script>
			$(document).ready(function() {
				$('#calendar').fullCalendar({

					handleWindowResize:true,
					slotDuration:'01:00:00',
					minTime:'08:00:00',
					maxTime:'18:00:00',
					unselectAuto:true,
					businessHours: [ // specify an array instead
					{
						dow: [ 1, 2, 3 ,4,5], // Monday, Tuesday, Wednesday
						start: '08:00', // 8am
						end: '18:00' // 6pm
					},
					{
						dow: [ 6 ], // Thursday, Friday
						start: '08:00', // 10am
						end: '12:00' // 4pm
					}
					],

					header: {
						left: 'prev,next today',
						center: 'title',
						right: 'month,agendaWeek,agendaDay,list'
					},
					defaultDate: Date(),
					navLinks: true, // can click day/week names to navigate views
					editable: true,
					eventLimit: true, // allow "more" link when too many events
					eventClick: function(event) {
						
						$('#visualizar #id').text(event.id);
						$('#visualizar #id').val(event.id);
						$('#visualizar #nome').text(event.nome);
						$('#visualizar #nome').val(event.nome);
						$('#visualizar #telefone').text(event.telefone);
						$('#visualizar #telefone').val(event.telefone);
						$('#visualizar #email').text(event.email);
						$('#visualizar #email').val(event.email);
						$('#visualizar #endereco').text(event.endereco);
						$('#visualizar #endereco').val(event.endereco);

						$('#visualizar #placa').text(event.placa);
						$('#visualizar #placa').val(event.placa);
						$('#visualizar #fabricante').text(event.fabricante);
						$('#visualizar #fabricante').val(event.fabricante);
						$('#visualizar #modelo').text(event.modelo);
						$('#visualizar #modelo').val(event.modelo);
						$('#visualizar #ano').text(event.ano);
						$('#visualizar #ano').val(event.ano);
						
						$('#visualizar #tipo').text(event.tipo);
						$('#visualizar #tipo').val(event.tipo);

						$('#visualizar #servico').text(event.servico);	
						$('#visualizar #servico').val(event.servico);	

						$('#visualizar #start').text(event.start.format('DD/MM/YYYY HH:mm:ss'));
						$('#visualizar #start').val(event.start.format('DD/MM/YYYY HH:mm:ss'));
						$('#visualizar #end').text(event.end.format('DD/MM/YYYY HH:mm:ss'));
						$('#visualizar #end').val(event.end.format('DD/MM/YYYY HH:mm:ss'));
						$('#visualizar #observacao').text(event.observacao);
						$('#visualizar #observacao').val(event.observacao);	

						$('#visualizar #title').text(event.title);
						$('#visualizar #title').val(event.title);

						$('#visualizar').modal('show');
						return false;

					},
					
					selectable: true,
					selectHelper: true,
					select: function(start, end){
						$('#cadastrar #start').val(moment(start).format('DD/MM/YYYY HH:mm:ss'));
						$('#cadastrar #end').val(moment(end).format('DD/MM/YYYY HH:mm:ss'));
						$('#cadastrar').modal('show');						
					},
					events: [
						<?php
							while($row_events = mysqli_fetch_array($resultado_events)){
								?>
								{
								id: '<?php echo $row_events['id']; ?>',
								nome: '<?php echo $row_events['nome']; ?>',
								telefone: '<?php echo $row_events['telefone']; ?>',
								email: '<?php echo $row_events['email']; ?>',
								endereco: '<?php echo $row_events['endereco']; ?>',

								placa: '<?php echo $row_events['placa']; ?>',
								fabricante: '<?php echo $row_events['fabricante']; ?>',
								modelo: '<?php echo $row_events['modelo']; ?>',
								ano: '<?php echo $row_events['ano']; ?>',
								tipo: '<?php echo $row_events['tipo']; ?>',
								
								servico: '<?php echo $row_events['servico']; ?>',
								start: '<?php echo $row_events['start']; ?>',
								end: '<?php echo $row_events['end']; ?>',
								observacao: '<?php echo $row_events['observacao']; ?>',

								title: '<?php echo $row_events['title']; ?>',
								color: '<?php echo $row_events['color']; ?>',
								},<?php
							}
						?>
					]
				});
			});
			
			//Mascara para o campo data e hora
			function DataHora(evento, objeto){
				var keypress=(window.event)?event.keyCode:evento.which;
				campo = eval (objeto);
				if (campo.value == '00/00/0000'){
					campo.value=""
				}
			 
				caracteres = '0123456789';
				separacao1 = '/';
				separacao2 = ' ';
				separacao3 = ':';
				conjunto1 = 2;
				conjunto2 = 5;
				conjunto3 = 10;
				conjunto4 = 13;
				conjunto5 = 16;
				if ((caracteres.search(String.fromCharCode (keypress))!=-1) && campo.value.length < (19)){
					if (campo.value.length == conjunto1 )
					campo.value = campo.value + separacao1;
					else if (campo.value.length == conjunto2)
					campo.value = campo.value + separacao1;
					else if (campo.value.length == conjunto3)
					campo.value = campo.value + separacao2;
					else if (campo.value.length == conjunto4)
					campo.value = campo.value + separacao3;
					else if (campo.value.length == conjunto5)
					campo.value = campo.value + separacao3;
				}else{
					event.returnValue = false;
				}
			}
		</script>
	</head>
	<body>

		<!-- Navbar -->
	<div class="w3-top">
		<div class="w3-bar w3-theme w3-top w3-left-align w3-large">

			<a
				class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1"
				href="javascript:void(0)" onclick="w3_open()"><i
				class="fa fa-bars"></i></a> 
                
                <a href="index.php" class="w3-bar-item w3-button w3-theme-l1">Home</a> 
			 <a  href="excluir.php" class="w3-bar-item w3-button w3-hover-small w3-hover-medium w3-hover-white">Excluir</a>
			</div>
	</div>   

	<!-- Overlay effect when opening sidebar on small screens -->
	<div class="w3-overlay w3-hide-large" onclick="w3_close()"
		style="cursor: pointer" title="close side menu" id="myOverlay"></div>

		<div class="w3-main">
			<div class="page-header">
				<h1>Agenda Vip Car</h1>
			</div>
			<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>
		
			<div id='calendar'></div>
		</div>

		<div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title text-center">Editar Agendamento</h4>
					</div>
					<div class="modal-body">
					<div class="visualizar">
						<dl class="dl-horizontal">
							<dt>ID do Evento</dt>
							<dd id="id"></dd>
							<dt>Nome</dt>
							<dd id="nome"></dd>
							<dt>Telefone</dt>
							<dd id="telefone"></dd>
							<dt>E-mail</dt>
							<dd id="email"></dd>
							<dt>Endereço</dt>
							<dd id="endereco"></dd>
							<dt>Placa</dt>
							<dd id="placa"></dd>
							<dt>Fabricante</dt>
							<dd id="fabricante"></dd>
							<dt>Modelo</dt>
							<dd id="modelo"></dd>
							<dt>Ano Fabricação</dt>
							<dd id="ano"></dd>
							<dt>Tipo de Veículo</dt>
							<dd id="tipo"></dd>
							<dt>Serviço</dt>
							<dd id="servico"></dd>
							<dt>Titulo do Evento</dt>
							<dd id="title"></dd>
							<dt>Inicio do Evento</dt>
							<dd id="start"></dd>
							<dt>Fim do Evento</dt>
							<dd id="end"></dd>
							<dt>Observação</dt>
							<dd id="observacao"></dd>
						</dl>
						<button class="btn btn-canc-vis btn-warning">Editar</button>
						</div>
					<div class="form">
					<form class="form-horizontal" method="POST" action="proc_edit_evento.php">
						<h3 class="text-center" style="color:#00c554;">Dados Pessoais</h3>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
								<div class="col-sm-10">
									<input type="text" required="true"  class="form-control" id="nome" name="nome" placeholder="Nome">
								</div>
							</div>	
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Telefone</label>
								<div class="col-sm-10">
									<input type="text" required="true" class="form-control"  id= "telefone" name="telefone" placeholder="(99) 99999-9999">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
								<div class="col-sm-10">
									<input type="text" required="true" class="form-control" id="email" name="email" placeholder="exemplo@vipcar.com.br">
								</div>
							</div>	
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Endereço</label>
								<div class="col-sm-10">
									<textarea type="text" required="true" class="form-control" id="endereco" name="endereco" placeholder="rua, avenida, número, bairro, cidade, estado..."></textarea>
								</div>
							</div>

							<h3 class="text-center" style="color:#00c554;">Dados do Veículo</h3>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Placa</label>
								<div class="col-sm-10">
									<input type="text" required="true" class="form-control" id="placa" name="placa" placeholder="AAA-9999">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Fabricante</label>
								<div class="col-sm-10">
									<input type="text" required="true" class="form-control" id= "fabricante" name="fabricante" placeholder="Fabricante">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Modelo</label>
								<div class="col-sm-10">
									<input type="text" required="true" class="form-control" id="modelo" name="modelo" placeholder="Modelo">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Ano de Fabricação</label>
								<div class="col-sm-10">
									<input type="text" required="true" class="form-control" id="ano" name="ano" placeholder="2020">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Tipo de Veículo</label>
								<div class="col-sm-10">
								<input type="text" required="true" class="form-control" id="tipo" name="tipo">
								</div>
							</div>

							<h3  class="text-center" style="color:#00c554;">Dados do Serviço</h3>

							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Serviço</label>
								<div class="col-sm-10">
								<input type="text" required="true" class="form-control" id="servico" name="servico">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Data e Hora inicial</label>
								<div class="col-sm-10">
									<input type="text" class="form-control"  name="start" id="start" onKeyPress="DataHora(event, this)">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Data e Hora Final</label>
								<div class="col-sm-10">
									<input type="text" class="form-control"  name="end" id="end" onKeyPress="DataHora(event, this)">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Observação</label>
								<div class="col-sm-10">
									<textarea type="text" required="true" class="form-control" id="observacao" name="observacao" 
									placeholder="Digite algo mais para o serviço do seu veículo... "></textarea>
								</div>
							</div>
										<input type="hidden" class="form-control" name="id" id="id">
							<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="button" class="btn btn-canc-edit btn-primary">Cancelar</button>
										<button type="submit" class="btn btn-warning">Salvar Alterações</button>
									</div>
								</div>
						</form>

					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('.btn-canc-vis').on("click", function() {
				$('.form').slideToggle();
				$('.visualizar').slideToggle();
			});
			$('.btn-canc-edit').on("click", function() {
				$('.visualizar').slideToggle();
				$('.form').slideToggle();
			});
		</script>
		
	</body>

	<script>
		// Get the Sidebar
		var mySidebar = document.getElementById("mySidebar");

		// Get the DIV with overlay effect
		var overlayBg = document.getElementById("myOverlay");

		// Toggle between showing and hiding the sidebar, and add overlay effect
		function w3_open() {
			if (mySidebar.style.display === 'block') {
				mySidebar.style.display = 'none';
				overlayBg.style.display = "none";
			} else {
				mySidebar.style.display = 'block';
				overlayBg.style.display = "block";
			}
		}

		// Close the sidebar with the close button
		function w3_close() {
			mySidebar.style.display = "none";
			overlayBg.style.display = "none";
		}
	</script>

</html>
