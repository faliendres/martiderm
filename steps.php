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
			<button type="button" class="button p_1" onclick="nextPrev(1)" value="1">&nbsp;&nbsp;SI&nbsp;</button>

			<button type="button" class="button p_1" onclick="nextPrev(1)" value="0">NO</button>
    		<input type="hidden" name="pregunta_1" id="pregunta_1" value="1">
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
				<button type="button" class="button p_2" onclick="nextPrev(1)" value="1">&nbsp;&nbsp;SI&nbsp;</button>
				<button type="button" class="button p_2" onclick="nextPrev(1)" value="0">NO</button>
				<input type="hidden" name="pregunta_2" id="pregunta_2" value="1">
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
			<div id="radio_container" class="col-md-12 text-center">
				<div class="spc-2"></div>
  				<label class="container-radio radio-inline"><span class="text300 radio-text">6</span>
			    	<input type="radio" name="pregunta_3" class="pregunta_3" value="6"><span class="checkmark"></span>
			    </label>
			    <label class="container-radio radio-inline"><span class="text300 radio-text">8</span>
			    	<input type="radio" name="pregunta_3" class="pregunta_3" value="8"><span class="checkmark"></span>
			    </label>
			    <label class="container-radio radio-inline"><span class="text300 radio-text">12</span>
			    	<input type="radio" name="pregunta_3" class="pregunta_3" value="12"><span class="checkmark"></span>
			    </label>
			    <label class="container-radio radio-inline"><span class="text300 radio-text">9</span>
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
				<span class="title1-bold">Oooh...</span><br>
				<span class="title1">¡RESPUESTA INCORRECTA!</span><br>
				<span class="title2">¡TENEMOS 9 TIPOS DE AMPOLLAS!</span>
				<div class="spc-2"></div>
				<div class="col-sm-12 col-md-12 text-center">
					<img src="assets/img/productosv2.png" alt="Productos" style="max-width: 100%;">
				</div>
			</div>
		</div>
		<div class="row answer-container">
			<div class="spc-2"></div>
			<div class="col-md-12 text-center">
				<button type="button" class="button" onclick="nextPrev(3)">SIGUIENTE</button>	
			</div>
		</div>
	</div>
</div>
<div class="tab">
	<div class="wizard-step">
		<div class="row">
			<div class="col-md-12 text-center questions">
				<span class="title1-bold">¡FELICIDADES!</span><br>
				<span class="title1">¡RESPUESTA CORRECTA!</span><br>
				<span class="title2">¡TENEMOS 9 TIPOS DE AMPOLLAS!</span>
				<div class="spc-2"></div>
				<div class="col-sm-12 col-md-12 text-center">
					<img src="assets/img/productosv2.png" alt="Productos" style="max-width: 100%;">
				</div>
			</div>
		</div>
		<div class="row answer-container">
			<div class="spc-2"></div>
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
				<span class="title1">¿CUAL DE LAS SIGUIENTES<br>AFIRMACIONES CREES<br>QUE REPRESENTA MEJOR<br>A <b>MARTIDERM</b>?</span>
			</div>
		</div>
		<div class="row answer-container">
			<div class="col-md-12 text-center">
				<div class="spc-2"></div>
				<div id="myDIV">
					<button type="button" class="btn-opt p_4" value="1">Está presente en más de <b>30 países</b></button>
					<button type="button" class="btn-opt p_4" value="2">Fue el <b>primer laboratorio</b> en lanzar una ampolla de
<b>proteoglicano y vitamina C</b></button>
					<button type="button" class="btn-opt p_4" value="3">Promueve un <b>estilo de vida Smart Aging</b></button>
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
				<span class="title1">¿FUE <b>MARTIDERM</b> EL PRIMER LABORATORIO EN LANZAR UNA AMPOLLA DE <b>PROTEOGLICANO</b> Y <b>VITAMINA C</b>?</span>
			</div>
		</div>
		<div class="row answer-container">
			<div class="spc-2"></div>
			<div id="radio_container_2" class="col-md-12 text-center">
				<label class="container-radio radio-inline"><span class="text300 radio-text">Verdadero</span>
			    	<input type="radio" name="pregunta_5" class="pregunta_5" value="1"><span class="checkmark"></span>
			    </label>
			    <label class="container-radio radio-inline"><span class="text300 radio-text">Falso</span>
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
				<span class="title1-bold">Oooh...</span><br>
				<span class="title1">¡RESPUESTA INCORRECTA!</span><br>
			</div>
		</div>
		<div class="row answer-container">
			<div class="spc-2"></div>
				<div class="col-sm-12 col-md-12 text-center">
					<img src="assets/img/texto-ampolla.png" alt="" style="max-width: 80%">
				</div>
			<div class="col-md-12 col-sm-12 text-center">
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
				<span class="title1-bold">¡FELICIDADES!</span><br>
				<span class="title1">¡RESPUESTA CORRECTA!</span><br>
			</div>
		</div>
		<div class="row answer-container">
			<div class="spc-2"></div>
				<div class="col-sm-12 col-md-12 text-center">
					<img src="assets/img/texto-ampolla.png" alt="" style="max-width: 80%">
				</div>
			<div class="col-md-12 col-sm-12 text-center">
				<div class="spc-5"></div>
				<button type="button" class="button" onclick="nextPrev(1)">SIGUIENTE</button>	
			</div>
		</div>
	</div>
</div>
<div class="tab">
	<div class="wizard-step">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center questions">
				<span class="title1">RELACIONA EL PRODUCTO CON SU DESCRIPCIÓN</span>
			</div>
		</div>
		<div class="row answer-container">
			<input type="hidden" id="selected" name="selected" value="">
    		<input type="hidden" id="pregunta_6" name="pregunta_6" value="0">
			<div class="spc-2"></div>
			<div class="col-md-12 col-sm-12 col-xs-12 relation-items text-center">
				<div class="col-md-3 col-sm-3 col-xs-3 circle-item light-green" id="divproducto1" data-color="light-green" data-correct="3">
					<img style="width: 100%;" src="assets/img/quizz-app-21.png">	
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6" style="padding-top: 1vh;">
					<button type="button" class="tab-relate" id="opcion1">Hidratación intensiva</button> 
					<button type="button" class="tab-relate" id="opcion2">Protección optima frente a UVA / UVB / IR / HEV (LUZ AZUL) / EM</button>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 circle-item light-brown" id="divproducto2" data-color="light-brown" data-correct="4">
					<img style="width: 100%;" src="assets/img/quizz-app-24.png">
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 relation-items text-center">
				<div class="col-md-3 col-sm-3 col-xs-3 circle-item dark-green" id="divproducto3" data-color="dark-green" data-correct="2">
					<img style="width: 100%;" src="assets/img/quizz-app-22.png">	
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<button type="button" class="tab-relate" id="opcion3">Efecto antifatiga inmediato</button>
					<button type="button" class="tab-relate" id="opcion4">Despigmentante</button>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 circle-item dark-gray" id="divproducto4" data-color="dark-gray" data-correct="1">
					<img style="width: 100%;" src="assets/img/quizz-app-23.png">
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 text-center">
				<div class="spc-2"></div>
				<button disabled type="button" class="button p_6" onclick="farmacia(4)">SIGUIENTE</button>	
			</div>
		</div>
	</div>
</div>
<div class="tab">
	<div class="wizard-step">
		<div class="row">
			<div class="col-md-12 text-center questions">
				<span class="title1">¿QUÉ PRODUCTOS <br><b>MARTIDERM </b>SON LOS QUE MÁS VENDES APARTE DE LAS AMPOLLAS</span>
			</div>
		</div>
		<div class="row answer-container">
			<div class="spc-2"></div>
			<div class="col-md-12 col-sm-12 col-xs-12 text-center image-options">
				<div class="col-md-3 col-sm-3 col-xs-3">
					<input type="image" class="p_7" src="assets/img/16.1.png" value="1">
					<span class="text900 image-caption">CREMAS DE DÍA</span>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3">
					<input type="image" class="p_7" src="assets/img/16.2.png" value="2">
					<span class="text900 image-caption">CREMAS DE NOCHE</span>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3">
					<input type="image" class="p_7" src="assets/img/16.3.png" value="3">
					<span class="text900 image-caption">SERUMS</span>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3">
					<input type="image" class="p_7" src="assets/img/16.4.png" value="4">
					<span class="text900 image-caption">PRODUCTOS ESPECIFICOS</span> <span class="text300">(ej: capilar, contorno de ojos,
acné, etc…)</span>
				</div>
			</div>
			<input type="hidden" name="pregunta_7" id="pregunta_7" value="0">
		</div>
		<div class="col-md-12 text-center">
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
			<div class="col-md-12 col-sm-12 col-xs-12 text-center image-options">
				<div class="col-md-3 col-sm-3 col-xs-3">
					<input type="image" class="p_8" src="assets/img/opt1.png" value="1">
					<span class="text900 image-caption">RRSS</span>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3">
					<input type="image" class="p_8" src="assets/img/opt2.png" value="2">
					<span class="text900 image-caption">WHATSAPP</span>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3">
					<input type="image" class="p_8" src="assets/img/opt3.png" value="3">
					<span class="text900 image-caption">MEDIOS LOCALES</span>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3">
					<input type="image" class="p_8" src="assets/img/opt4.png" value="4">
					<span class="text900 image-caption">BOCA OREJA</span>
				</div>
			</div>
			<input type="hidden" name="pregunta_8" id="pregunta_8" value="0">
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
			<div class="spc-5"></div>
			<div class="col-md-12 text-center">
				<button type="button" class="button p_9" onclick="nextPrev(1)" value="1">&nbsp;&nbsp;SI&nbsp;</button>
    			<button type="button" class="button p_9" onclick="nextPrev(1)" value="0">NO</button>
    			<input type="hidden" name="pregunta_9" id="pregunta_9" value="0">
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