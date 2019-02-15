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
				<a class="button" onclick="nextPrev(1)" >SI</a>
				<a class="button" onclick="nextPrev(1)" >NO</a>
			</div>
		</div>
	</div>
</div>



<?php
	include 'footer.php';
?>	