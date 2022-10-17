<?php include 'header.php'; ?>
<div class="bg-viaje">
	<div class="container">
		<!--Encabezado viaje-->
		<div class="row encabezado-viaje">
			<div class="col-sm-12 col-md-4 col-lg-4">
				<h2 class="bold">VIAJE</h2>
				<p>Ciudad de México a Guadalajara</p>
				<hr>
			</div>
			<div class="col-sm-12 col-md-3 col-lg-3">
				
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4">
				<h2 class="bold">FECHAS:</h2>
				<form class="form-viaje-ida-regreso">
					<label>Ida</label>
					<input type="date" name="fecha-ida">
					<label>Regreso</label>
					<input type="date" name="fecha-regreso">
				</form>
			</div>
			<div class="col-sm-12 col-md-1 col-lg-1">

			</div>
		</div>
		<!--Encabezado viaje-->
		<!--Asientos ida-->
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<!--Acordeón-->
				<div class="accordion" id="accordionIda">
				  	<div class="accordion-item">
				    	<h2 class="accordion-header" id="headingOneIda">
				      		<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneIda" aria-expanded="true" aria-controls="collapseOneIda">
				        		ASIENTOS DE IDA
				      		</button>
				    	</h2>
				    	<div id="collapseOneIda" class="accordion-collapse collapse show" aria-labelledby="headingOneIda" data-bs-parent="#accordionExample">
				      		<div class="accordion-body">
				      			<!--Corrida 1-->
				      			<div class="contenedor-viaje">
				      				<!--Fila bus-->
				      				<div class="row fila-bus">
				        				<div class="col-sm-6 col-md-4 col-lg-4 columna-bus">
				        					<div class="fecha">
				        						<i class="fas fa-calendar-alt"></i> 08 de octubre
				        					</div>
				        					<div class="bus">
				        						<img src="img/bus.png">
				        					</div>
				        					<div class="detalles">
				        						<img src="img/detalles.png">
				        					</div>
				        					<a class="btn-ver-detalles" data-bs-toggle="modal" data-bs-target="#detallesModal1">Ver detalles</a>
				        				</div>
				        				<div class="col-sm-6 col-md-4 col-lg-4 columna-precio">
				        					<div class="partida">
				        						<img src="img/ico-partida.png"><span class="hora"> 00:30 </span><a data-bs-toggle="modal" data-bs-target="#partidaModal1">Ciudad de México</a>
				        					</div>
				        					<div class="destino">
				        						<img src="img/ico-destino.png"><span class="hora"> 06:00 </span><a data-bs-toggle="modal" data-bs-target="#destinoModal1">OXXO Hotel Riu - Guadalajara</a>
				        					</div>
				        					<div class="btn-promo">
				        						<img src="img/ico-promo.png"> Dos asientos a este precio
				        					</div>
				        					<div class="precio">
				        						$419 MXN
				        					</div>
				        				</div>
				        				<div class="col-sm-12 col-md-4 col-lg-4">
				        					<div class="btn-elegir-asiento">
				        						<a href="#fila-asientos-ida1" id="btn-fila-asientos-ida1">ELEGIR ASIENTO <i class="fas fa-chevron-down"></i></a><!--Colocar el ID correspondiente-->
				        					</div>
				        				</div>
				        			</div>
				        			<!--Fila bus-->
				        			<!--Fila asientos-->
				        			<div class="row fila-asientos" id="fila-asientos-ida1"><!--El ID debe ir incrementando por le número de filas-->
				        				<div class="col-sm-12 col-md-8 col-lg-8 columna-asientos">
				        					<ul class="nav nav-tabs" id="tabPisos" role="tablist">
  												<li class="nav-item" role="presentation">
    												<button class="nav-link active" id="inferior-tab" data-bs-toggle="tab" data-bs-target="#inferior" type="button" role="tab" aria-controls="inferior" aria-selected="true">Piso inferior</button>
  												</li>
  												<li class="nav-item" role="presentation">
    												<button class="nav-link" id="superior-tab" data-bs-toggle="tab" data-bs-target="#superior" type="button" role="tab" aria-controls="superior" aria-selected="false">Piso superior</button>
  												</li>  												
											</ul>
											<div class="tab-content" id="tabPisosContent">
  												<div class="tab-pane fade show active" id="inferior" role="tabpanel" aria-labelledby="inferior-tab">
  													<!--Contenedor asientos-->
  													<ol class="seat-rows">
  														<li class="seat-row">
  															<ol>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento4-corrida1">
  																	<label for="asiento4-corrida1">4</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento8-corrida1">
  																	<label for="asiento8-corrida1">8</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento12-corrida1">
  																	<label for="asiento12-corrida1">12</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento16-corrida1">
  																	<label for="asiento16-corrida1">16</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento20-corrida1">
  																	<label for="asiento20-corrida1">20</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento24-corrida1">
  																	<label for="asiento24-corrida1">24</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento28-corrida1">
  																	<label for="asiento28-corrida1">28</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento32-corrida1">
  																	<label for="asiento32-corrida1">32</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento36-corrida1">
  																	<label for="asiento36-corrida1">36</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento40-corrida1" disabled>
  																	<label for="asiento40-corrida1">40</label>
  																</li>
  															</ol>
  														</li>  		
  														<li class="seat-row">
  															<ol>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento3-corrida1">
  																	<label for="asiento3-corrida1">3</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento7-corrida1">
  																	<label for="asiento7-corrida1">7</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento11-corrida1">
  																	<label for="asiento11-corrida1">11</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento15-corrida1">
  																	<label for="asiento15-corrida1">15</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento19-corrida1">
  																	<label for="asiento19-corrida1">19</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento23-corrida1">
  																	<label for="asiento23-corrida1">23</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento27-corrida1">
  																	<label for="asiento27-corrida1">27</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento31-corrida1">
  																	<label for="asiento31-corrida1">31</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento35-corrida1">
  																	<label for="asiento35-corrida1">35</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento39-corrida1" disabled>
  																	<label for="asiento39-corrida1">39</label>
  																</li>
  															</ol>
  														</li> 	
  														<li class="seat-row">
  															<ol>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  															</ol>
  														</li> 	
  														<li class="seat-row">
  															<ol>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento2-corrida1">
  																	<label for="asiento2-corrida1">2</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento6-corrida1">
  																	<label for="asiento6-corrida1">6</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento10-corrida1">
  																	<label for="asiento10-corrida1">10</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento14-corrida1">
  																	<label for="asiento14-corrida1">14</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento18-corrida1">
  																	<label for="asiento18-corrida1">18</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento22-corrida1" disabled>
  																	<label for="asiento22-corrida1">22</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento26-corrida1">
  																	<label for="asiento26-corrida1">26</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento30-corrida1">
  																	<label for="asiento30-corrida1">30</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento34-corrida1">
  																	<label for="asiento34-corrida1">34</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento38-corrida1">
  																	<label for="asiento38-corrida1">38</label>
  																</li>
  															</ol>
  														</li> 										
  														<li class="seat-row">
  															<ol>
  																<li class="seat volante">
  																	<img src="img/ico-volante.png">
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento1-corrida1">
  																	<label for="asiento1-corrida1">1</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento5-corrida1">
  																	<label for="asiento5-corrida1">5</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento9-corrida1">
  																	<label for="asiento9">9</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento13-corrida1">
  																	<label for="asiento13-corrida1">13</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento17-corrida1">
  																	<label for="asiento17-corrida1">17</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento21-corrida1">
  																	<label for="asiento21-corrida1">21</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento25-corrida1">
  																	<label for="asiento25-corrida1">25</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento29-corrida1">
  																	<label for="asiento29-corrida1">29</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento33-corrida1">
  																	<label for="asiento33-corrida1">33</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento37-corrida1">
  																	<label for="asiento37-corrida1">37</label>
  																</li>
  															</ol>
  														</li> 
  													</ol>
  													<!--Contenedor asientos-->  													
  												</div>
  												<div class="tab-pane fade" id="superior" role="tabpanel" aria-labelledby="superior-tab">
  													<!--Contenedor asientoSs-->
  													<ol class="seat-rows">
  														<li class="seat-row">
  															<ol>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS4-corrida1">
  																	<label for="asientoS4-corrida1">4</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS8-corrida1">
  																	<label for="asientoS8-corrida1">8</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS12-corrida1">
  																	<label for="asientoS12-corrida1">12</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS16-corrida1">
  																	<label for="asientoS16-corrida1">16</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS20-corrida1">
  																	<label for="asientoS20-corrida1">20</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS24-corrida1">
  																	<label for="asientoS24-corrida1">24</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS28-corrida1">
  																	<label for="asientoS28-corrida1">28</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS32-corrida1">
  																	<label for="asientoS32-corrida1">32</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS36-corrida1">
  																	<label for="asientoS36-corrida1">36</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS40-corrida1" disabled>
  																	<label for="asientoS40-corrida1">40</label>
  																</li>
  															</ol>
  														</li>  		
  														<li class="seat-row">
  															<ol>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS3-corrida1">
  																	<label for="asientoS3-corrida1">3</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS7-corrida1">
  																	<label for="asientoS7-corrida1">7</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS11-corrida1">
  																	<label for="asientoS11-corrida1">11</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS15-corrida1">
  																	<label for="asientoS15-corrida1">15</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS19-corrida1">
  																	<label for="asientoS19-corrida1">19</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS23-corrida1">
  																	<label for="asientoS23-corrida1">23</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS27-corrida1">
  																	<label for="asientoS27-corrida1">27</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS31-corrida1">
  																	<label for="asientoS31-corrida1">31</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS35-corrida1">
  																	<label for="asientoS35-corrida1">35</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS39-corrida1" disabled>
  																	<label for="asientoS39-corrida1">39</label>
  																</li>
  															</ol>
  														</li> 	
  														<li class="seat-row">
  															<ol>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  															</ol>
  														</li> 	
  														<li class="seat-row">
  															<ol>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS2-corrida1">
  																	<label for="asientoS2-corrida1">2</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS6-corrida1">
  																	<label for="asientoS6-corrida1">6</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS10-corrida1">
  																	<label for="asientoS10-corrida1">10</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS14-corrida1">
  																	<label for="asientoS14-corrida1">14</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS18-corrida1">
  																	<label for="asientoS18-corrida1">18</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS22-corrida1" disabled>
  																	<label for="asientoS22-corrida1">22</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS26-corrida1">
  																	<label for="asientoS26-corrida1">26</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS30-corrida1">
  																	<label for="asientoS30-corrida1">30</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS34-corrida1">
  																	<label for="asientoS34-corrida1">34</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS38-corrida1">
  																	<label for="asientoS38-corrida1">38</label>
  																</li>
  															</ol>
  														</li> 										
  														<li class="seat-row">
  															<ol>
  																<li class="seat volante">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS1-corrida1">
  																	<label for="asientoS1-corrida1">1</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS5-corrida1">
  																	<label for="asientoS5-corrida1">5</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS9-corrida1">
  																	<label for="asientoS9-corrida1">9</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS13-corrida1">
  																	<label for="asientoS13-corrida1">13</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS17-corrida1">
  																	<label for="asientoS17-corrida1">17</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS21-corrida1">
  																	<label for="asientoS21-corrida1">21</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS25-corrida1">
  																	<label for="asientoS25-corrida1">25</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS29-corrida1">
  																	<label for="asientoS29-corrida1">29</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS33-corrida1">
  																	<label for="asientoS33-corrida1">33</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS37-corrida1">
  																	<label for="asientoS37-corrida1">37</label>
  																</li>
  															</ol>
  														</li> 
  													</ol>
  													<!--Contenedor asientoSs-->  
  												</div>
											</div>
				        				</div>
				        				<div class="col-sm-12 col-md-4 col-lg-4">
				        					<div class="row estatus-asientos">
				        						<div class="col-sm-12 col-md-12 col-lg-4 libre">
				        							<p>LIBRE</p>
				        							<span>1</span>
				        						</div>
				        						<div class="col-sm-12 col-md-12 col-lg-4 seleccionado">
				        							<p>SELECCIONADO</p>
				        							<span>1</span>
				        						</div>
				        						<div class="col-sm-12 col-md-12 col-lg-4 ocupado">
				        							<p>OCUPADO</p>
				        							<span>1</span>
				        						</div>
				        					</div>
				        					<div class="row resumen">
				        						<div class="col-sm-6 col-md-6 col-lg-6 seat">
				        							ASIENTOS
				        						</div>
				        						<div class="col-sm-12 col-md-6 col-lg-6 price">
				        							(2) $419 MXN
				        						</div>
				        						<div class="col-sm-6 col-md-6 col-lg-6">
				        							11, 12
				        						</div>
				        						<div class="col-sm-12 col-md-6 col-lg-6 total">
				        							TOTAL $838 MXN
				        						</div>
				        					</div>
				        					<div class="row btn-continuar">
				        						<div class="col-sm-12 col-md-12 col-lg-12">
				        							<button><i class="fas fa-ticket-alt"></i> CONTINUAR</button>
				        						</div>
				        					</div>
				        				</div>
				        			</div>
				        			<!--Fila asientos-->
				        			<!--Modal Ver detalles 1-->
									<!--LLENAR CON LA INFORMACIÓN CORRESPONDIENTE-->
									<div class="modal fade" id="detallesModal1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="detallesModalLabel" aria-hidden="true">
									  	<div class="modal-dialog modal-dialog-centered modal-lg">
									    	<div class="modal-content">
									      		<div class="modal-header">        		
									        		<a data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
									      		</div>
									      		<div class="modal-body">
									      			<!--Carousel-->
									        		<div id="carouselDetalles1" class="carousel slide" data-bs-ride="carousel">
	  													<div class="carousel-inner">
	    													<div class="carousel-item active">
	      														<img src="img/asientos.png" class="img-fluid">
	    													</div>
	    													<div class="carousel-item">
	      														<img src="img/asientos.png" class="img-fluid">
	    													</div>
	    													<div class="carousel-item">
	      														<img src="img/asientos.png" class="img-fluid">
	    													</div>
	  													</div>
	  													<button class="carousel-control-prev" type="button" data-bs-target="#carouselDetalles1" data-bs-slide="prev">
	    													<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    													<span class="visually-hidden">Previous</span>
	  													</button>
	  													<button class="carousel-control-next" type="button" data-bs-target="#carouselDetalles1" data-bs-slide="next">
	    													<span class="carousel-control-next-icon" aria-hidden="true"></span>
	    													<span class="visually-hidden">Next</span>
	  													</button>
													</div>
													<!--Carousel-->
													<div class="detalle">
														<img src="img/ico-bano.png"> Baño	
													</div>
													<div class="detalle">
														<img src="img/ico-usb.png"> Conexión USB
													</div>
													<div class="detalle">
														<img src="img/ico-asiento.png"> 40 asientos
													</div>
													<div class="detalle">
														<img src="img/ico-seguro.png"> Seguro de viajero
													</div>										
									      		</div>      		
									    	</div>
									  </div>
									</div>
									<!--Modal Ver detalles 1-->
									<!--Modal Partida 1-->
									<!--LLENAR CON LA INFORMACIÓN CORRESPONDIENTE-->
									<div class="modal fade" id="partidaModal1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="partidaModalLabel" aria-hidden="true">
									  	<div class="modal-dialog modal-dialog-centered modal-lg">
									    	<div class="modal-content">
									      		<div class="modal-header">        		
									        		<a data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
									      		</div>
									      		<div class="modal-body">
									      			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.7401485950218!2d-99.16527478461273!3d19.42363024599941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff36da5b09df%3A0x70f1041a2c6dd42e!2sGlorieta%20de%20los%20Insurgentes.!5e0!3m2!1ses-419!2smx!4v1665504102389!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>							
									      		</div>      		
									    	</div>
									  </div>
									</div>
									<!--Modal Partida 1-->
									<!--Modal Destino 1-->
									<!--LLENAR CON LA INFORMACIÓN CORRESPONDIENTE-->
									<div class="modal fade" id="destinoModal1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="destinoModalLabel" aria-hidden="true">
									  	<div class="modal-dialog modal-dialog-centered modal-lg">
									    	<div class="modal-content">
									      		<div class="modal-header">        		
									        		<a data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
									      		</div>
									      		<div class="modal-body">
									      			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.092633020688!2d-103.39592528460119!3d20.66581000544426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae79d08424f1%3A0x5856cc8c87b76f76!2sHotel%20Riu%20Plaza%20Guadalajara!5e0!3m2!1ses-419!2smx!4v1665504210928!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>						
									      		</div>      		
									    	</div>
									  </div>
									</div>
									<!--Modal Destino 1-->
				      			</div>					      			
				      			<!--Corrida 1-->	

				      			<!--Corrida 2-->
				      			<div class="contenedor-viaje">
				      				<!--Fila bus-->
				      				<div class="row fila-bus">
				        				<div class="col-sm-6 col-md-4 col-lg-4 columna-bus">
				        					<div class="fecha">
				        						<i class="fas fa-calendar-alt"></i> 08 de octubre
				        					</div>
				        					<div class="bus">
				        						<img src="img/bus.png">
				        					</div>
				        					<div class="detalles">
				        						<img src="img/detalles.png">
				        					</div>
				        					<a class="btn-ver-detalles" data-bs-toggle="modal" data-bs-target="#detallesModal2">Ver detalles</a>
				        				</div>
				        				<div class="col-sm-6 col-md-4 col-lg-4 columna-precio">
				        					<div class="partida">
				        						<!--El ID cambia según el número de corridas-->
				        						<img src="img/ico-partida.png"><span class="hora"> 00:30 </span><a data-bs-toggle="modal" data-bs-target="#partidaModal2">Ciudad de México</a>
				        					</div>
				        					<div class="destino">
				        						<!--El ID cambia según el número de corridas-->
				        						<img src="img/ico-destino.png"><span class="hora"> 06:00 </span><a data-bs-toggle="modal" data-bs-target="#destinoModal2">OXXO Hotel Riu - Guadalajara</a>
				        					</div>
				        					<!-- <div class="btn-promo">
				        						<img src="img/ico-promo.png"> Dos asientos a este precio
				        					</div> -->
				        					<div class="precio">
				        						$419 MXN
				        					</div>
				        				</div>
				        				<div class="col-sm-12 col-md-4 col-lg-4">
				        					<div class="btn-elegir-asiento">
				        						<a href="#fila-asientos-ida2" id="btn-fila-asientos-ida2">ELEGIR ASIENTO <i class="fas fa-chevron-down"></i></a><!--Colocar el ID correspondiente-->
				        					</div>
				        				</div>
				        			</div>
				        			<!--Fila bus-->
				        			<!--Fila asientos-->
				        			<div class="row fila-asientos" id="fila-asientos-ida2"><!--El ID debe ir incrementando por le número de filas-->
				        				<div class="col-sm-12 col-md-8 col-lg-8 columna-asientos">
				        					<!-- <ul class="nav nav-tabs" id="tabPisos" role="tablist">
  												<li class="nav-item" role="presentation">
    												<button class="nav-link active" id="inferior-tab" data-bs-toggle="tab" data-bs-target="#inferior" type="button" role="tab" aria-controls="inferior" aria-selected="true">Piso inferior</button>
  												</li>
  												<li class="nav-item" role="presentation">
    												<button class="nav-link" id="superior-tab" data-bs-toggle="tab" data-bs-target="#superior" type="button" role="tab" aria-controls="superior" aria-selected="false">Piso superior</button>
  												</li>  												
											</ul> -->
											<div class="tab-content" id="tabPisosContent">
  												<!-- <div class="tab-pane fade show active" id="inferior" role="tabpanel" aria-labelledby="inferior-tab">
  													  													
  												</div> -->
  												<!--Contenedor asientos-->
  													<ol class="seat-rows">
  														<li class="seat-row">
  															<ol>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento4-corrida2">
  																	<label for="asiento4-corrida2">4</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento8-corrida2">
  																	<label for="asiento8-corrida2">8</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento12-corrida2">
  																	<label for="asiento12-corrida2">12</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento16-corrida2">
  																	<label for="asiento16-corrida2">16</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento20-corrida2">
  																	<label for="asiento20-corrida2">20</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento24-corrida2">
  																	<label for="asiento24-corrida2">24</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento28-corrida2">
  																	<label for="asiento28-corrida2">28</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento32-corrida2">
  																	<label for="asiento32-corrida2">32</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento36-corrida2">
  																	<label for="asiento36-corrida2">36</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento40-corrida2" disabled>
  																	<label for="asiento40-corrida2">40</label>
  																</li>
  															</ol>
  														</li>  		
  														<li class="seat-row">
  															<ol>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento3-corrida2">
  																	<label for="asiento3-corrida2">3</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento7-corrida2">
  																	<label for="asiento7-corrida2">7</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento11-corrida2">
  																	<label for="asiento11-corrida2">11</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento15-corrida2">
  																	<label for="asiento15-corrida2">15</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento19-corrida2">
  																	<label for="asiento19-corrida2">19</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento23-corrida2">
  																	<label for="asiento23-corrida2">23</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento27-corrida2">
  																	<label for="asiento27-corrida2">27</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento31-corrida2">
  																	<label for="asiento31-corrida2">31</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento35-corrida2">
  																	<label for="asiento35-corrida2">35</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento39-corrida2" disabled>
  																	<label for="asiento39-corrida2">39</label>
  																</li>
  															</ol>
  														</li> 	
  														<li class="seat-row">
  															<ol>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  															</ol>
  														</li> 	
  														<li class="seat-row">
  															<ol>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento2-corrida2">
  																	<label for="asiento2-corrida2">2</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento6-corrida2">
  																	<label for="asiento6-corrida2">6</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento10-corrida2">
  																	<label for="asiento10-corrida2">10</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento14-corrida2">
  																	<label for="asiento14-corrida2">14</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento18-corrida2">
  																	<label for="asiento18-corrida2">18</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento22-corrida2" disabled>
  																	<label for="asiento22-corrida2">22</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento26-corrida2">
  																	<label for="asiento26-corrida2">26</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento30-corrida2">
  																	<label for="asiento30-corrida2">30</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento34-corrida2">
  																	<label for="asiento34-corrida2">34</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento38-corrida2">
  																	<label for="asiento38-corrida2">38</label>
  																</li>
  															</ol>
  														</li> 										
  														<li class="seat-row">
  															<ol>
  																<li class="seat volante">
  																	<img src="img/ico-volante.png">
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento1-corrida2">
  																	<label for="asiento1-corrida2">1</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento5-corrida2">
  																	<label for="asiento5-corrida2">5</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento9-corrida2">
  																	<label for="asiento9-corrida2">9</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento13-corrida2">
  																	<label for="asiento13-corrida2">13</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento17-corrida2">
  																	<label for="asiento17-corrida2">17</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento21-corrida2">
  																	<label for="asiento21-corrida2">21</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento25-corrida2">
  																	<label for="asiento25-corrida2">25</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento29-corrida2">
  																	<label for="asiento29-corrida2">29</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento33-corrida2">
  																	<label for="asiento33-corrida2">33</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento37-corrida2">
  																	<label for="asiento37-corrida2">37</label>
  																</li>
  															</ol>
  														</li> 
  													</ol>
  													<!--Contenedor asientos-->
											</div>
				        				</div>
				        				<div class="col-sm-12 col-md-4 col-lg-4">
				        					<div class="row estatus-asientos">
				        						<div class="col-sm-12 col-md-12 col-lg-4 libre">
				        							<p>LIBRE</p>
				        							<span>1</span>
				        						</div>
				        						<div class="col-sm-12 col-md-12 col-lg-4 seleccionado">
				        							<p>SELECCIONADO</p>
				        							<span>1</span>
				        						</div>
				        						<div class="col-sm-12 col-md-12 col-lg-4 ocupado">
				        							<p>OCUPADO</p>
				        							<span>1</span>
				        						</div>
				        					</div>
				        					<div class="row resumen">
				        						<div class="col-sm-6 col-md-6 col-lg-6 seat">
				        							ASIENTOS
				        						</div>
				        						<div class="col-sm-12 col-md-6 col-lg-6 price">
				        							(2) $419 MXN
				        						</div>
				        						<div class="col-sm-6 col-md-6 col-lg-6">
				        							11, 12
				        						</div>
				        						<div class="col-sm-12 col-md-6 col-lg-6 total">
				        							TOTAL $838 MXN
				        						</div>
				        					</div>
				        					<div class="row btn-continuar">
				        						<div class="col-sm-12 col-md-12 col-lg-12">
				        							<button><i class="fas fa-ticket-alt"></i> CONTINUAR</button>
				        						</div>
				        					</div>
				        				</div>
				        			</div>
				        			<!--Fila asientos-->
				        			<!--Modal Ver detalles 2-->
									<!--LLENAR CON LA INFORMACIÓN CORRESPONDIENTE-->
									<div class="modal fade" id="detallesModal2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="detallesModalLabel" aria-hidden="true">
									  	<div class="modal-dialog modal-dialog-centered modal-lg">
									    	<div class="modal-content">
									      		<div class="modal-header">        		
									        		<a data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
									      		</div>
									      		<div class="modal-body">
									      			<!--Carousel-->
									      			<!--Cambiar el ID según las filas-->
									        		<div id="carouselDetalles2" class="carousel slide" data-bs-ride="carousel">
	  													<div class="carousel-inner">
	    													<div class="carousel-item active">
	      														<img src="img/asientos.png" class="img-fluid">
	    													</div>
	    													<div class="carousel-item">
	      														<img src="img/asientos.png" class="img-fluid">
	    													</div>
	    													<div class="carousel-item">
	      														<img src="img/asientos.png" class="img-fluid">
	    													</div>
	  													</div>
	  													<!--Cambiar el ID según las filas-->
	  													<button class="carousel-control-prev" type="button" data-bs-target="#carouselDetalles2" data-bs-slide="prev">
	    													<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    													<span class="visually-hidden">Previous</span>
	  													</button>
	  													<!--Cambiar el ID según las filas-->
	  													<button class="carousel-control-next" type="button" data-bs-target="#carouselDetalles2" data-bs-slide="next">
	    													<span class="carousel-control-next-icon" aria-hidden="true"></span>
	    													<span class="visually-hidden">Next</span>
	  													</button>
													</div>
													<!--Carousel-->
													<div class="detalle">
														<img src="img/ico-bano.png"> Baño	
													</div>
													<div class="detalle">
														<img src="img/ico-usb.png"> Conexión USB
													</div>
													<div class="detalle">
														<img src="img/ico-asiento.png"> 40 asientos
													</div>
													<div class="detalle">
														<img src="img/ico-seguro.png"> Seguro de viajero
													</div>										
									      		</div>      		
									    	</div>
									  </div>
									</div>
									<!--Modal Ver detalles 2-->
									<!--Modal Partida 2-->
									<!--LLENAR CON LA INFORMACIÓN CORRESPONDIENTE-->
									<div class="modal fade" id="partidaModal2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="partidaModalLabel" aria-hidden="true">
									  	<div class="modal-dialog modal-dialog-centered modal-lg">
									    	<div class="modal-content">
									      		<div class="modal-header">        		
									        		<a data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
									      		</div>
									      		<div class="modal-body">
									      			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.7401485950218!2d-99.16527478461273!3d19.42363024599941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff36da5b09df%3A0x70f1041a2c6dd42e!2sGlorieta%20de%20los%20Insurgentes.!5e0!3m2!1ses-419!2smx!4v1665504102389!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>							
									      		</div>      		
									    	</div>
									  </div>
									</div>
									<!--Modal Partida 2-->
									<!--Modal Destino 2-->
									<!--LLENAR CON LA INFORMACIÓN CORRESPONDIENTE-->
									<div class="modal fade" id="destinoModal2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="destinoModalLabel" aria-hidden="true">
									  	<div class="modal-dialog modal-dialog-centered modal-lg">
									    	<div class="modal-content">
									      		<div class="modal-header">        		
									        		<a data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
									      		</div>
									      		<div class="modal-body">
									      			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.092633020688!2d-103.39592528460119!3d20.66581000544426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae79d08424f1%3A0x5856cc8c87b76f76!2sHotel%20Riu%20Plaza%20Guadalajara!5e0!3m2!1ses-419!2smx!4v1665504210928!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>						
									      		</div>      		
									    	</div>
									  </div>
									</div>
									<!--Modal Destino 1-->
				      			</div>					      			
				      			<!--Corrida 1-->		        		
				      		</div>
				    	</div>
				  	</div>						  			  	
				</div>
				<!--Acordeón-->
			</div>
		</div>
		<!--Asientos ida-->

		<!--Asientos regreso-->
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<!--Acordeón-->
				<div class="accordion" id="accordionRegreso">
				  	<div class="accordion-item">
				    	<h2 class="accordion-header" id="headingOneRegreso">
				      		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneRegreso" aria-expanded="true" aria-controls="collapseOneRegreso">
				        		ASIENTOS DE REGRESO
				      		</button>
				    	</h2>
				    	<div id="collapseOneRegreso" class="accordion-collapse collapse" aria-labelledby="headingOneRegreso" data-bs-parent="#accordionExample">
				      		<div class="accordion-body">
				      			<!--Corrida 1-->
				      			<div class="contenedor-viaje">
				      				<!--Fila bus-->
				      				<div class="row fila-bus">
				        				<div class="col-sm-6 col-md-4 col-lg-4 columna-bus">
				        					<div class="fecha">
				        						<i class="fas fa-calendar-alt"></i> 08 de octubre
				        					</div>
				        					<div class="bus">
				        						<img src="img/bus.png">
				        					</div>
				        					<div class="detalles">
				        						<img src="img/detalles.png">
				        					</div>
				        					<!--Cambiar ID según el número de filas-->
				        					<a class="btn-ver-detalles" data-bs-toggle="modal" data-bs-target="#detallesModal3">Ver detalles</a>
				        				</div>
				        				<div class="col-sm-6 col-md-4 col-lg-4 columna-precio">
				        					<div class="partida">
				        						<img src="img/ico-partida.png"><span class="hora"> 00:30 </span><a data-bs-toggle="modal" data-bs-target="#partidaModal3">Ciudad de México</a>
				        					</div>
				        					<div class="destino">
				        						<img src="img/ico-destino.png"><span class="hora"> 06:00 </span><a data-bs-toggle="modal" data-bs-target="#destinoModal3">OXXO Hotel Riu - Guadalajara</a>
				        					</div>
				        					<div class="btn-promo">
				        						<img src="img/ico-promo.png"> Dos asientos a este precio
				        					</div>
				        					<div class="precio">
				        						$419 MXN
				        					</div>
				        				</div>
				        				<div class="col-sm-12 col-md-4 col-lg-4">
				        					<div class="btn-elegir-asiento">
				        						<a href="#fila-asientos-regreso1" id="btn-fila-asientos-regreso1">ELEGIR ASIENTO <i class="fas fa-chevron-down"></i></a><!--Colocar el ID correspondiente-->
				        					</div>
				        				</div>
				        			</div>
				        			<!--Fila bus-->
				        			<!--Fila asientos-->
				        			<div class="row fila-asientos" id="fila-asientos-regreso1"><!--El ID debe ir incrementando por le número de filas-->
				        				<div class="col-sm-12 col-md-8 col-lg-8 columna-asientos">
				        					<ul class="nav nav-tabs" id="tabPisos2" role="tablist">
  												<li class="nav-item" role="presentation">
    												<button class="nav-link active" id="inferior-tab" data-bs-toggle="tab" data-bs-target="#inferior" type="button" role="tab" aria-controls="inferior" aria-selected="true">Piso inferior</button>
  												</li>
  												<li class="nav-item" role="presentation">
    												<button class="nav-link" id="superior-tab" data-bs-toggle="tab" data-bs-target="#superior" type="button" role="tab" aria-controls="superior" aria-selected="false">Piso superior</button>
  												</li>  												
											</ul>
											<div class="tab-content" id="tabPisosContent2">
  												<div class="tab-pane fade show active" id="inferior" role="tabpanel" aria-labelledby="inferior-tab">
  													<!--Contenedor asientos-->
  													<ol class="seat-rows">
  														<li class="seat-row">
  															<ol>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento4-corrida3">
  																	<label for="asiento4-corrida3">4</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento8-corrida3">
  																	<label for="asiento8-corrida3">8</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento12-corrida3">
  																	<label for="asiento12-corrida3">12</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento16-corrida3">
  																	<label for="asiento16-corrida3">16</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento20-corrida3">
  																	<label for="asiento20-corrida3">20</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento24-corrida3">
  																	<label for="asiento24-corrida3">24</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento28-corrida3">
  																	<label for="asiento28-corrida3">28</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento32-corrida3">
  																	<label for="asiento32-corrida3">32</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento36-corrida3">
  																	<label for="asiento36-corrida3">36</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento40-corrida3" disabled>
  																	<label for="asiento40-corrida3">40</label>
  																</li>
  															</ol>
  														</li>  		
  														<li class="seat-row">
  															<ol>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento3-corrida3">
  																	<label for="asiento3-corrida3">3</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento7-corrida3">
  																	<label for="asiento7-corrida3">7</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento11-corrida3">
  																	<label for="asiento11-corrida3">11</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento15-corrida3">
  																	<label for="asiento15-corrida3">15</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento19-corrida3">
  																	<label for="asiento19-corrida3">19</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento23-corrida3">
  																	<label for="asiento23-corrida3">23</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento27-corrida3">
  																	<label for="asiento27-corrida3">27</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento31-corrida3">
  																	<label for="asiento31-corrida3">31</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento35-corrida3">
  																	<label for="asiento35-corrida3">35</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento39-corrida3" disabled>
  																	<label for="asiento39-corrida3">39</label>
  																</li>
  															</ol>
  														</li> 	
  														<li class="seat-row">
  															<ol>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  															</ol>
  														</li> 	
  														<li class="seat-row">
  															<ol>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento2-corrida3">
  																	<label for="asiento2-corrida3">2</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento6-corrida3">
  																	<label for="asiento6-corrida3">6</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento10-corrida3">
  																	<label for="asiento10-corrida3">10</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento14-corrida3">
  																	<label for="asiento14-corrida3">14</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento18-corrida3">
  																	<label for="asiento18-corrida3">18</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento22-corrida3" disabled>
  																	<label for="asiento22-corrida3">22</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento26-corrida3">
  																	<label for="asiento26-corrida3">26</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento30-corrida3">
  																	<label for="asiento30-corrida3">30</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento34-corrida3">
  																	<label for="asiento34-corrida3">34</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento38-corrida3">
  																	<label for="asiento38-corrida3">38</label>
  																</li>
  															</ol>
  														</li> 										
  														<li class="seat-row">
  															<ol>
  																<li class="seat volante">
  																	<img src="img/ico-volante.png">
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento1-corrida3">
  																	<label for="asiento1-corrida3">1</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento5-corrida3">
  																	<label for="asiento5-corrida3">5</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento9-corrida3">
  																	<label for="asiento9-corrida3">9</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento13-corrida3">
  																	<label for="asiento13-corrida3">13</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento17-corrida3">
  																	<label for="asiento17-corrida3">17</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento21-corrida3">
  																	<label for="asiento21-corrida3">21</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento25-corrida3">
  																	<label for="asiento25-corrida3">25</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento29-corrida3">
  																	<label for="asiento29-corrida3">29</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento33-corrida3">
  																	<label for="asiento33-corrida3">33</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asiento" id="asiento37-corrida3">
  																	<label for="asiento37-corrida3">37</label>
  																</li>
  															</ol>
  														</li> 
  													</ol>
  													<!--Contenedor asientos-->  													
  												</div>
  												<div class="tab-pane fade" id="superior" role="tabpanel" aria-labelledby="superior-tab">
  													<!--Contenedor asientoSs-->
  													<ol class="seat-rows">
  														<li class="seat-row">
  															<ol>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS4-corrida3">
  																	<label for="asientoS4-corrida3">4</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS8-corrida3">
  																	<label for="asientoS8-corrida3">8</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS12-corrida3">
  																	<label for="asientoS12-corrida3">12</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS16-corrida3">
  																	<label for="asientoS16-corrida3">16</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS20-corrida3">
  																	<label for="asientoS20-corrida3">20</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS24-corrida3">
  																	<label for="asientoS24-corrida3">24</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS28-corrida3">
  																	<label for="asientoS28-corrida3">28</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS32-corrida3">
  																	<label for="asientoS32-corrida3">32</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS36-corrida3">
  																	<label for="asientoS36-corrida3">36</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS40-corrida3" disabled>
  																	<label for="asientoS40-corrida3">40</label>
  																</li>
  															</ol>
  														</li>  		
  														<li class="seat-row">
  															<ol>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS3-corrida3">
  																	<label for="asientoS3-corrida3">3</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS7-corrida3">
  																	<label for="asientoS7-corrida3">7</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS11-corrida3">
  																	<label for="asientoS11-corrida3">11</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS15-corrida3">
  																	<label for="asientoS15-corrida3">15</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS19-corrida3">
  																	<label for="asientoS19-corrida3">19</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS23-corrida3">
  																	<label for="asientoS23-corrida3">23</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS27-corrida3">
  																	<label for="asientoS27-corrida3">27</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS31-corrida3">
  																	<label for="asientoS31-corrida3">31</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS35-corrida3">
  																	<label for="asientoS35-corrida3">35</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS39-corrida3" disabled>
  																	<label for="asientoS39-corrida3">39</label>
  																</li>
  															</ol>
  														</li> 	
  														<li class="seat-row">
  															<ol>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  															</ol>
  														</li> 	
  														<li class="seat-row">
  															<ol>
  																<li class="seat">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS2-corrida3">
  																	<label for="asientoS2-corrida3">2</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS6-corrida3">
  																	<label for="asientoS6-corrida3">6</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS10-corrida3">
  																	<label for="asientoS10-corrida3">10</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS14-corrida3">
  																	<label for="asientoS14-corrida3">14</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS18-corrida3">
  																	<label for="asientoS18-corrida3">18</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS22-corrida3" disabled>
  																	<label for="asientoS22-corrida3">22</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS26-corrida3">
  																	<label for="asientoS26-corrida3">26</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS30-corrida3">
  																	<label for="asientoS30-corrida3">30</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS34-corrida3">
  																	<label for="asientoS34-corrida3">34</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS38-corrida3">
  																	<label for="asientoS38-corrida3">38</label>
  																</li>
  															</ol>
  														</li> 										
  														<li class="seat-row">
  															<ol>
  																<li class="seat volante">
  																	<!--Vacio para dejar espacio-->
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS1-corrida3">
  																	<label for="asientoS1-corrida3">1</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS5-corrida3">
  																	<label for="asientoS5-corrida3">5</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS9-corrida3">
  																	<label for="asientoS9-corrida3">9</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS13-corrida3">
  																	<label for="asientoS13-corrida3">13</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS17-corrida3">
  																	<label for="asientoS17-corrida3">17</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS21-corrida3">
  																	<label for="asientoS21-corrida3">21</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS25-corrida3">
  																	<label for="asientoS25-corrida3">25</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS29-corrida3">
  																	<label for="asientoS29-corrida3">29</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS33-corrida3">
  																	<label for="asientoS33-corrida3">33</label>
  																</li>
  																<li class="seat">
  																	<input type="checkbox" name="asientoS" id="asientoS37-corrida3">
  																	<label for="asientoS37-corrida3">37</label>
  																</li>
  															</ol>
  														</li> 
  													</ol>
  													<!--Contenedor asientoSs-->  
  												</div>
											</div>
				        				</div>
				        				<div class="col-sm-12 col-md-4 col-lg-4">
				        					<div class="row estatus-asientos">
				        						<div class="col-sm-12 col-md-12 col-lg-4 libre">
				        							<p>LIBRE</p>
				        							<span>1</span>
				        						</div>
				        						<div class="col-sm-12 col-md-12 col-lg-4 seleccionado">
				        							<p>SELECCIONADO</p>
				        							<span>1</span>
				        						</div>
				        						<div class="col-sm-12 col-md-12 col-lg-4 ocupado">
				        							<p>OCUPADO</p>
				        							<span>1</span>
				        						</div>
				        					</div>
				        					<div class="row resumen">
				        						<div class="col-sm-6 col-md-6 col-lg-6 seat">
				        							ASIENTOS
				        						</div>
				        						<div class="col-sm-12 col-md-6 col-lg-6 price">
				        							(2) $419 MXN
				        						</div>
				        						<div class="col-sm-6 col-md-6 col-lg-6">
				        							11, 12
				        						</div>
				        						<div class="col-sm-12 col-md-6 col-lg-6 total">
				        							TOTAL $838 MXN
				        						</div>
				        					</div>
				        					<div class="row btn-continuar">
				        						<div class="col-sm-12 col-md-12 col-lg-12">
				        							<button><i class="fas fa-ticket-alt"></i> CONTINUAR</button>
				        						</div>
				        					</div>
				        				</div>
				        			</div>
				        			<!--Fila asientos-->
				        			<!--Modal Ver detalles 3-->
									<!--LLENAR CON LA INFORMACIÓN CORRESPONDIENTE-->
									<div class="modal fade" id="detallesModal3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="detallesModalLabel" aria-hidden="true">
									  	<div class="modal-dialog modal-dialog-centered modal-lg">
									    	<div class="modal-content">
									      		<div class="modal-header">        		
									        		<a data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
									      		</div>
									      		<div class="modal-body">
									      			<!--Carousel-->
									        		<div id="carouselDetalles3" class="carousel slide" data-bs-ride="carousel">
	  													<div class="carousel-inner">
	    													<div class="carousel-item active">
	      														<img src="img/asientos.png" class="img-fluid">
	    													</div>
	    													<div class="carousel-item">
	      														<img src="img/asientos.png" class="img-fluid">
	    													</div>
	    													<div class="carousel-item">
	      														<img src="img/asientos.png" class="img-fluid">
	    													</div>
	  													</div>
	  													<button class="carousel-control-prev" type="button" data-bs-target="#carouselDetalles3" data-bs-slide="prev">
	    													<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    													<span class="visually-hidden">Previous</span>
	  													</button>
	  													<button class="carousel-control-next" type="button" data-bs-target="#carouselDetalles3" data-bs-slide="next">
	    													<span class="carousel-control-next-icon" aria-hidden="true"></span>
	    													<span class="visually-hidden">Next</span>
	  													</button>
													</div>
													<!--Carousel-->
													<div class="detalle">
														<img src="img/ico-bano.png"> Baño	
													</div>
													<div class="detalle">
														<img src="img/ico-usb.png"> Conexión USB
													</div>
													<div class="detalle">
														<img src="img/ico-asiento.png"> 40 asientos
													</div>
													<div class="detalle">
														<img src="img/ico-seguro.png"> Seguro de viajero
													</div>										
									      		</div>      		
									    	</div>
									  </div>
									</div>
									<!--Modal Ver detalles 3-->
									<!--Modal Partida 3-->
									<!--LLENAR CON LA INFORMACIÓN CORRESPONDIENTE-->
									<div class="modal fade" id="partidaModal3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="partidaModalLabel" aria-hidden="true">
									  	<div class="modal-dialog modal-dialog-centered modal-lg">
									    	<div class="modal-content">
									      		<div class="modal-header">        		
									        		<a data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
									      		</div>
									      		<div class="modal-body">
									      			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.7401485950218!2d-99.16527478461273!3d19.42363024599941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff36da5b09df%3A0x70f1041a2c6dd42e!2sGlorieta%20de%20los%20Insurgentes.!5e0!3m2!1ses-419!2smx!4v1665504102389!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>							
									      		</div>      		
									    	</div>
									  </div>
									</div>
									<!--Modal Partida 3-->
									<!--Modal Destino 3-->
									<!--LLENAR CON LA INFORMACIÓN CORRESPONDIENTE-->
									<div class="modal fade" id="destinoModal3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="destinoModalLabel" aria-hidden="true">
									  	<div class="modal-dialog modal-dialog-centered modal-lg">
									    	<div class="modal-content">
									      		<div class="modal-header">        		
									        		<a data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
									      		</div>
									      		<div class="modal-body">
									      			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.092633020688!2d-103.39592528460119!3d20.66581000544426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae79d08424f1%3A0x5856cc8c87b76f76!2sHotel%20Riu%20Plaza%20Guadalajara!5e0!3m2!1ses-419!2smx!4v1665504210928!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>						
									      		</div>      		
									    	</div>
									  </div>
									</div>
									<!--Modal Destino 3-->
				      			</div>					      			
				      			<!--Corrida 1-->				 	        
				      		</div>
				    	</div>
				  	</div>						  			  	
				</div>
				<!--Acordeón-->
			</div>
		</div>
		<!--Asientos regreso-->
	</div>
</div>
<?php include 'footer.php'; ?>