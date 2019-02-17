<?php
	include 'header.php';
?>
<form id="regForm" action="">
	<!-- One "tab" for each step in the form: -->
<div class="tab">
  <div class="wizard-step">
		<div class="row">
			<div class="col-md-12 text-center questions">
				<span class="title1">¿TRABAJAS EN UNA<br><b>FARMACIA</b>?</span>
			</div>
		</div>
		<div class="spc-5"></div>
		<div class="row answer-container text-center" >
			<button type="button" class="button p_1" onclick="nextPrev(1)" value="1">SI</button>

			<button type="button" class="button p_1" onclick="nextPrev(1)" value="0">NO</button>
    		<input type="hidden" name="pregunta_1" id="pregunta_1"-->
		</div>
	</div>
</div>

<div class="tab">
	<div class="wizard-step">
		<div class="row">
			<div class="col-md-12 text-center questions">
				<span class="title1">¿CONOCÍAS <b>MARTIDERM</b><br>ANTES DE<br>VISITAR EL STAND?</span>
			</div>
		</div>
		<div class="row answer-container">
			<div class="col-md-12 text-center">
				<div class="spc-5"></div>
				<button type="button" class="button p_2" onclick="nextPrev(1)" value="1">SI</button>
				<button type="button" class="button p_2" onclick="nextPrev(1)" value="0">NO</button>
				<input type="hidden" name="pregunta_2" id="pregunta_2">
			</div>
		</div>
	</div>
</div>
<div class="tab">
	<div class="wizard-step">
		<div class="row">
			<div class="col-md-12 text-center questions">
				<span class="title1">¿CUANTOS TIPOS DE <br>AMPOLLAS TIENE<br><b>MARTIDERM</b>?</span>
			</div>
		</div>
		<div class="row answer-container">
			<div class="col-md-12 text-center">
				<div class="spc-2"></div>
  				<label class="container-radio radio-inline"><span class="text100">6</span>
			    	<input type="radio" name="pregunta_3" class="pregunta_3" value="6"><span class="checkmark"></span>
			    </label>
			    <label class="container-radio radio-inline"><span class="text100">8</span>
			    	<input type="radio" name="pregunta_3" class="pregunta_3" value="8"><span class="checkmark"></span>
			    </label>
			    <label class="container-radio radio-inline"><span class="text100">12</span>
			    	<input type="radio" name="pregunta_3" class="pregunta_3" value="12"><span class="checkmark"></span>
			    </label>
			    <label class="container-radio radio-inline"><span class="text100">9</span>
			    	<input type="radio" name="pregunta_3" class="pregunta_3" value="9"><span class="checkmark"></span>
			    </label>
			    <div class="spc-2"></div>
  				<div class="col-md-12 text-center">
  					<button class="button p_3" type="button">SIGUIENTE</button>	
  				</div>
			</div>
		</div>
	</div>
</div>
<div class="tab">
	<div class="wizard-step">
		<div class="row">
			<div class="col-md-12 text-center questions">
				<span class="title1"><b>Oooh...</b><br>¡RESPUESTA INCORRECTA!</span>
				<span class="title1">¡TENEMOS 9 TIPOS DE AMPOLLAS!</span>
				<div class="spc-2"></div>
				<div class="col-md-12 text-center">
					<img src="assets/img/quizz-app-7.png" alt="Productos" style="max-width: 100%;">
				</div>
			</div>
		</div>
		<div class="row answer-container">
			<div class="spc-5"></div>
			<div class="col-md-12 text-center">
				<button type="button" class="button" onclick="nextPrev(2)">SIGUIENTE</button>	
			</div>
		</div>
	</div>
</div>
<div class="tab">
	<div class="wizard-step">
		<div class="row">
			<div class="col-md-12 text-center questions">
				<span class="title1"><b>¡FELICIDADES!</b><br>¡RESPUESTA CORRECTA!</span>
				<span class="title1">¡TENEMOS 9 TIPOS DE AMPOLLAS!</span>
				<div class="spc-2"></div>
				<div class="col-md-12 text-center">
					<img src="assets/img/quizz-app-7.png" alt="Productos" style="max-width: 100%;">
				</div>
			</div>
		</div>
		<div class="row answer-container">
			<div class="spc-5"></div>
			<div class="col-md-12 text-center">
				<button type="button" class="button" onclick="nextPrev(1)">SIGUIENTE</button>	
			</div>
		</div>
	</div>
</div>
<div class="tab">
	<div class="wizard-step">
		<div class="row">
			<div class="col-md-12 text-center questions">
				<span class="title1">¿CUAL DE LAS SIGUIENTES<br>AFIRMACIONES CREES<br>QUE REPRESENTA MEJOR<br>A <b>MARTIDERM</b>?</span>
			</div>
		</div>
		<div class="row answer-container">
			<div class="col-md-12 text-center">
				<div class="spc-2"></div>
				<div id="myDIV">
					<button type="button" class="btn-opt p_4" value="1">Es un laboratorio que apuesta por la <br><b>calidad y efectividad</b> de sus productos.</button>
					<button type="button" class="btn-opt p_4" value="2">Tiene <b>buenas promociones y precios competitivos</b>.</button>
					<button type="button" class="btn-opt p_4" value="3">Promueve un <b>estilo de vida Smart Aging</b>: cuida tu alimentación y bienestar personal, haz ejercicio, mima tu piel, y respeta el planeta.</button>
					<button type="button" class="btn-opt p_4" value="4">Aboga por la <b>innovación</b> en el <b>cuidado de la piel</b><br>y el <b>bienestar personal</b>.</button>
					<input type="hidden" name="pregunta_4" id="pregunta_4">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="tab">
	<div class="wizard-step">
		<div class="row">
			<div class="col-md-12 text-center questions">
				<span class="title1">¿FUE <b>MARTIDERM</b> EL PRIMER<br>LABORATORIO EN LANZAR UNA<br>AMPOLLA DE <b>PROTEOGLICANO</b><br>Y <b>VITAMINA C</b>?</span>
			</div>
		</div>
		<div class="row answer-container">
			<div class="spc-2"></div>
			<div class="col-md-12 text-center">
				<label class="container-radio radio-inline"><span class="text100">Verdadero</span>
			    	<input type="radio" name="pregunta_5" class="pregunta_5" value="1"><span class="checkmark"></span>
			    </label>
			    <label class="container-radio radio-inline"><span class="text100">Falso</span>
			    	<input type="radio" name="pregunta_5" class="pregunta_5" value="0"><span class="checkmark"></span>
			    </label>
			</div>
			<div class="col-md-12 text-center">
				<div class="spc-2"></div>
				<button type="button" class="button p_5">SIGUIENTE</button>	
			</div>
		</div>
	</div>
</div>
<div class="tab">
	<div class="wizard-step">
		<div class="row">
			<div class="col-md-12 text-center questions">
				<span class="title1"><b>¡FELICIDADES!</b><br>¡RESPUESTA CORRECTA!</span>
			</div>
		</div>
		<div class="row answer-container">
			<div class="spc-2"></div>
			<div class="">
				<div class="col-md-7 col-md-offset-1">
					<p class="parrafo">EN 1989 MARTIDERM LANZA LA<br>PRIMERA AMPOLLA DE VITAMINA<br>C Y PROTEOGLICANO CON EL<br>NOMBRE DE 'PROTEOGLICANOS'</p>
				</div>
				<div class="col-md-2">
					<img src="assets/img/quizz-app-14.png" alt="" style="max-width: 60%;">
				</div>
			</div>
			<div class="col-md-12 text-center">
				<div class="spc-5"></div>
				<button type="button" class="button" onclick="nextPrev(2)">SIGUIENTE</button>	
			</div>
		</div>
	</div>
</div>
<div class="tab">
	<div class="wizard-step">
		<div class="row">
			<div class="col-md-12 text-center questions">
				<span class="title1"><b>Oooh...</b><br>¡RESPUESTA INCORRECTA!</span>
			</div>
		</div>
		<div class="row answer-container">
			<div class="spc-2"></div>
			<div class="">
				<div class="col-md-7 col-md-offset-1">
					<p class="parrafo">EN 1989 MARTIDERM LANZA LA<br>PRIMERA AMPOLLA DE VITAMINA<br>C Y PROTEOGLICANO CON EL<br>NOMBRE DE 'PROTEOGLICANOS'</p>
				</div>
				<div class="col-md-2">
					<img src="assets/img/quizz-app-14.png" alt="" style="max-width: 60%;">
				</div>
			</div>
			<div class="col-md-12 text-center">
				<div class="spc-5"></div>
				<button type="button" class="button" onclick="nextPrev(2)">SIGUIENTE</button>	
			</div>
		</div>
	</div>
</div>
<div class="tab">
	<div class="wizard-step">
		<div class="row">
			<div class="col-md-12 text-center questions">
				<span class="title1">RELACIONA EL PRODUCTO CON SU DESCRIPCIÓN</span>
			</div>
		</div>
		<div class="row answer-container">
			<input type="hidden" id="selected" name="selected" value="">
    		<input type="hidden" id="light-green" name="pregunta_6" value="0">
			
			<div class="col-md-12 relation-items">
				<div class="col-md-3 circle-item light-green" id="divproducto1" data-color="light-green" data-correct="3">
					<img style="width: 100%; max-width: 85px;" src="assets/img/quizz-app-24.png">	
				</div>
				<div class="col-md-6">
					<button type="button" class="tab-relate" id="opcion1">Hidratación intensiva</button> 
					<button type="button" class="tab-relate" id="opcion2">Protección optima frente a UVA / UVB / IR / HEV (LUZ AZUL) / EM</button>
				</div>
				<div class="col-md-3 circle-item light-brown" id="divproducto2" data-color="light-brown" data-correct="4">
					<img style="width: 100%; max-width: 85px;" src="assets/img/quizz-app-24.png">
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-3 circle-item dark-green" id="divproducto3" data-color="dark-green" data-correct="2">
					<img style="width: 100%; max-width: 85px;" src="assets/img/quizz-app-24.png">	
				</div>
				<div class="col-md-6">
					<button type="button" class="tab-relate" id="opcion3">Efecto antifatiga inmediato</button>
					<button type="button" class="tab-relate" id="opcion4">Despigmentante</button>
				</div>
				<div class="col-md-3 circle-item dark-gray" id="divproducto4" data-color="dark-gray" data-correct="1">
					<img style="width: 100%; max-width: 85px;" src="assets/img/quizz-app-24.png">
				</div>
			</div>
			<div class="col-md-12 text-center">
				<div class="spc-2"></div>
				<button type="button" class="button p_6" onclick="nextPrev(1)">SIGUIENTE</button>	
			</div>
		</div>
	</div>
</div>
<div class="tab">
	<div class="wizard-step">
		<div class="row">
			<div class="col-md-12 text-center questions">
				<span class="title1">¿CUÁL DE ESTOS CANALES<br>USAS MÁS PARA<br><b>LLEGAR A TUS CLIENTES?</b></span>
			</div>
		</div>
		<div class="row answer-container">
			<div class="spc-2"></div>
			<div class="col-md-12 text-center">
				<div class="col-md-3">
					<input type="image" class="p_7" name="pregunta_7" src="assets/img/opt1.png" value="1">
					<span class="text500">RRSS</span>
				</div>
				<div class="col-md-3">
					<input type="image" class="p_7" name="pregunta_7" src="assets/img/opt2.png" value="2">
					<span class="text500">WHATSAPP</span>
				</div>
				<div class="col-md-3">
					<input type="image" class="p_7" name="pregunta_7" src="assets/img/opt3.png" value="3">
					<span class="text500">MEDIOS LOCALES</span>
				</div>
				<div class="col-md-3">
					<input type="image" class="p_7" name="pregunta_7" src="assets/img/opt4.png" value="4">
					<span class="text500">BOCA OREJA</span>
				</div>
			</div>
		</div>
		<div class="col-md-12 text-center">
		</div>
	</div>
</div>
<div class="tab">
	<div class="wizard-step">
		<div class="row">
			<div class="col-md-12 text-center questions">
				<span class="title1">RECOMENDARÍAS <br><b>MARTIDERM</b><br>A TUS CLIENTES?</span>
			</div>
		</div>
		<div class="row answer-container">
			<div class="col-md-12 text-center">
				<button type="button" class="button p_8" onclick="nextPrev(1)" value="1">SI</button>
    			<button type="button" class="button p_8" onclick="nextPrev(1)" value="0">NO</button>
    			<input type="hidden" name="pregunta_8" id="pregunta_8">
			</div>
		</div>
	</div>
</div>
<div class="tab">
	<div class="wizard-step">
		<div class="row">
			<div class="col-md-12 text-center header-text">
				<span class="title2">¡GRACIAS!</span>
				<br>
				<span class="title1">HAS CONSEGUIDO TU<br>KIT DE MUESTRAS</span>
			</div>
		</div>
	</div>
</div>

<div style="overflow:auto;">
    <div style="float:right;">
      <button style="display: none;" type="button" id="nextBtn" onclick="nextPrev(1)">Siguiente</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px; display: none;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<?php
	include 'footer.php';
?>	