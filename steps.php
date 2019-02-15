<?php
	include 'header.php';
?>
<form id="regForm" action="">
	<!-- One "tab" for each step in the form: -->
<div class="tab">
  <div class="wizard-step">
		<div class="row">
			<div class="col-md-12 text-center">
				<span class="title1">¿TRABAJAS EN UNA<br><b>FARMACIA</b>?</span>
			</div>
		</div>
		<br><br>
		<div class="row answer-container text-center" >
			<button type="button" class="button" >NO</button>
    		<button type="button" class="button" onclick="nextPrev(1)">SI</button>

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
				<a class="button" >SI</a>
				<a class="button" >NO</a>
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
				<input type="radio" name="pregunta_3" value="6"> 6&nbsp;&nbsp;&nbsp;&nbsp;
  				<input type="radio" name="pregunta_3" value="8"> 8&nbsp;&nbsp;&nbsp;&nbsp;
  				<input type="radio" name="pregunta_3" value="12"> 12&nbsp;&nbsp;&nbsp;&nbsp;
  				<input type="radio" name="pregunta_3" value="9"> 9&nbsp;&nbsp;&nbsp;&nbsp;
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
			</div>
		</div>
		<div class="row answer-container">
		</div>
	</div>
</div>
<div class="tab">
	<div class="wizard-step">
		<div class="row">
			<div class="col-md-12 text-center questions">
				<span class="title1"><b>¡FELICIDADES!</b><br>¡RESPUESTA CORRECTA!</span>
				<span class="title1">¡TENEMOS 9 TIPOS DE AMPOLLAS!</span>
			</div>
		</div>
		<div class="row answer-container">
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
				<a class="button" >Es un laboratorio que apuesta por la <br><b>calidad y efectividad</b> de sus productos.</a>
				<a class="button" >Tiene <b>buenas promociones y precios competitivos</b>.</a>
				<a class="button" >Promueve un <b>estilo de vida Smart Aging</b>: cuida tu alimentación y<br>bienestar personal, haz ejercicio, mima tu piel, y respeta el planeta.</a>
				<a class="button" >Aboga por la <b>innovación</b> en el <b>cuidado de la piel</b><br>y el <b>bienestar personal</b>.</a>
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
			<div class="col-md-12 text-center">
				<input type="radio" name="question_5" value="1"> Verdadero&nbsp;&nbsp;
  				<input type="radio" name="question_5" value="0"> Falso&nbsp;&nbsp;
			</div>
		</div>
	</div>
</div>


<div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
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