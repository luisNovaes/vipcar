<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>VipCarWEB</title>

    <meta charset='utf-8' />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
		<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

        <link href='css/layout.css' rel='stylesheet'>

		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/fullcalendar.min.css' rel='stylesheet' />
		<link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
		<link href='css/personalizado.css' rel='stylesheet' />
		<script src='js/jquery.min.js'></script>
		<script src='js/bootstrap.min.js'></script>
		<script src='js/moment.min.js'></script>
		<script src='js/fullcalendar.min.js'></script>
		<script src='locale/pt-br.js'></script>
</head>

<body>

	<!-- Navbar -->
	<div class="w3-top">
		<div class="w3-bar w3-theme w3-top w3-left-align w3-large">

			<a
				class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1"
				href="javascript:void(0)" onclick="w3_open()"><i
				class="fa fa-bars"></i></a> 
                
                <a href="#quemSomos" class="w3-bar-item w3-button w3-theme-l1">VipCar</a> 

			    <a href="#quemSomos" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Quem Somos</a> 
                
                <a href="#servicos" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Serviço</a>
                
                <a href="#localizacao" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Localização</a>

			    <a href="#agendamento" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Agendamento</a>

			    <a  href="agenda.php" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Login</a>
		</div>
	</div>   

	<!-- Sidebar -->
	<nav
		class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left"
		id="mySidebar">
		<a href="javascript:void(0)" onclick="w3_close()"
			class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large"
			title="Close Menu"> <i class="fa fa-remove"></i>
		</a>
		<h4 class="w3-bar-item">
			<b>Menu</b>
		</h4>
		<a class="w3-bar-item w3-button w3-hover-black" href="#quemSomos">Quem
			Somos</a> <a class="w3-bar-item w3-button w3-hover-black"
			href="#servicos">Serviço</a> <a
			class="w3-bar-item w3-button w3-hover-black" href="#localizacao">Localizacao</a>
		<a class="w3-bar-item w3-button w3-hover-black" href="#agendamento">Agendamento</a>
		<a class="w3-bar-item w3-button w3-hover-black"  href="agenda.php">Login</a>
	</nav>

	<!-- Overlay effect when opening sidebar on small screens -->
	<div class="w3-overlay w3-hide-large" onclick="w3_close()"
		style="cursor: pointer" title="close side menu" id="myOverlay"></div>

	<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
	<div class="w3-main" style="margin-left: 250px">

		<div class="w3-row w3-padding-5">
			    <div class="w3-container w3-padding-32" id="quemSomos">
				    <h1 class="w3-text-teal text-center">VipCar Auto Center</h1>
                </div>
                
                <div class="w3-container w3-padding-8" id="quemSomos">
                    <p class="text-justify">A Vip Car nasceu do sonho dos dois jovens
                        empreendedores, Ricardo Almeida e Douglas Coelho, que sempre
                        tiveram em suas veias a vontade de empreender e fazer a diferença
                        no mercado.</p>
                </div>

            <div class="w3-container w3-padding-16">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                        <div class="item active">
                            <img src="imgs/vipcar1.jpg" alt="Logo" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="imgs/vipcar2.jpg" alt="Fachada" style="width:100%;">
                        </div>
                        
                        <div class="item">
                            <img  src="imgs/vipcar3.jpg" alt="Administracao" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="imgs/vipcar4.jpg" alt="Sala Vip" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="imgs/vipcar5.jpg" alt="Oficina" style="width:100%;">
                        </div>
                        
                        <div class="item">
                            <img  src="imgs/vipcar6.jpg" alt="Atendimento" style="width:100%;">
                        </div>

                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
            </div>

                <div class="w3-container w3-padding-16">
				<p class="text-justify">Com experiencial no ramo de auto elétrica e
					serviços automotivos, Ricardo Almeida convidou Douglas para abrir
					um novo negócio neste segmento e vislumbraram na cidade de Tangará
					da Serra - MT, a oportunidade de estabelecer o novo empreendimento,
					onde através de uma pesquisa de mercado identificaram que as
					pessoas da cidade, há muito, necessitavam desses serviços na área
					de linha leve, com qualidade de atendimento e excelência na
					execução dos serviços. Assim sendo, decidiram montar a Vip Car, uma
					empresa focada em soluções automotivas na parte elétrica, ar
					condicionado e injeção eletrônica, que conta com sala vip,
					agendamento e um fluxo de atendimento que priorize o bem estar do
					cliente , além de uma equipe capacitada e engajada em fazer o
					melhor sempre!</p>
                </div>

				<div class="w3-container w3-padding-8">
					<h3 class="w3-text-teal">Missão</h3>
					<p class="text-justify">Proporcionar soluções eficazes, com
						qualidade e excelente atendimento no ramo automotivo, atendendo ou
						excedendo as expectativas de nossos clientes, respeitando o meio
						ambiente e atuando de forma proativa perante a sociedade.</p>
				</div>
				<div class="w3-container w3-padding-8">
					<h3 class="w3-text-teal">Visão</h3>
					<p class="text-justify">Ser o autocenter líder em qualidade e em
						participação de mercado na região de Tangará da Serra até dezembro
						de 2022.</p>
				</div>

				<div class="w3-container w3-padding-8">
					<h3 class="w3-text-teal">Nossos valores</h3>
					<p >Ética, respeito, honestidade, comprometimento, qualidade e
						inovação.</p>
				</div>

			</div>
			<div class="w3-container w3-padding-32" id="servicos">
                        <h3 class="w3-text-teal">Nossos Serviço</h3>

                            <div class="responsive">
                                <div class="gallery">
                                    <a target="_blank" href="imgs/servico1.jpg">
                                    <img src="imgs/servico1.jpg" alt="Serviços Especializados" width="400" height="400">
                                    </a>
                                    <div class="desc text-justify">Realize a manutenção preventiva
                                            regularmente e conte com nossos especialistas para um
                                            diagnóstico antes de qualquer viagem.</div>
                                </div>
                            </div>


                            <div class="responsive">
                                <div class="gallery">
                                    <a target="_blank" href="imgs/servico4.jpg">
                                    <img src="imgs/servico4.jpg" alt="Auto Elétrica" width="400" height="400">
                                    </a>
                                    <div class="desc text-justify">Um centro automotivo dedicado a encontrar
                                                    sempre as melhores soluções para seus clientes e com os melhores
                                                    preços e condições de pagamento.</div>
                                </div>
                            </div>

                            <div class="responsive">
                                <div class="gallery">
                                    <a target="_blank" href="imgs/servico5.jpg">
                                    <img src="imgs/servico5.jpg"alt="Ar Condicionado" width="400" height="400">
                                    </a>
                                    <div class="desc text-justify">Manutenção preventiva, inspeção e
                                                regulagem dos itens mecânicos, limpeza e higienização do
                                                equipamento.</div>
                                </div>
                            </div>

			</div>
                    <div class="w3-container w3-padding-32" id="localizacao">
                            <h3 class="w3-text-teal">Localização</h3>
                                <div>
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.6715014335296!2d-57.48478708560311!3d-14.617779889791496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9398fb8ca5738743%3A0x2e2f720be4214f0f!2sVip+Car!5e0!3m2!1spt-BR!2sbr!4v1526243583476"
                                        width="100%" height="370" frameborder="0" style="border: 0"></iframe>
                                </div>
                    </div>

                    <div class="w3-container w3-padding-32" id="agendamento">
                        <h3 class="w3-text-teal">Agendamento</h3>
                        <p class="text-justify">Agende agora um horário para o serviço do seu
                            veículo e aproveite toda comodidade, segurança, eficiência e
                            qualidade que a Vip Car oferece para seus clientes.</p>
                        <a href="http://localhost/vipcar/agendamento.php" class="w3-button w3-green w3-large">Agendar</a>                           
                    </div>



                       <div class="w3-container w3-padding-8" id="administracao">
                            
			            </div>


             <footer  class="w3-container w3-padding-8" id="myFooter">
                        <div class="w3-container w3-theme-l2 w3-padding-32">
                            <p class="text-justify">Rua Celso Rosa (26) número 67 Centro, Tangará
                                da Serra - MT, CEP - 78300-000 (65)33261412 - contato@vipcar.site</p>
                        </div>

                        <div class="w3-container w3-theme-l1">
                            <p>
                                Powered by <a href="#" target="_blank">luismagnovaes@gmail.com</a>
                            </p>
                        </div>
                    </footer>

		</div>

		            <!-- END MAIN -->
	</div>

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

</body>
</html>
