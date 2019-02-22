var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  
  //if (n == (x.length - 1)) {
  //  document.getElementById("nextBtn").innerHTML = "Submit";
  //} else {
  //  document.getElementById("nextBtn").innerHTML = "Next";
  //}
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    //document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  if (y.length > 0){
    if(y[0].name == 'pregunta_3'){
      if(!$("#radio_container input[name='pregunta_3']").is(':checked'))
        return false;
    }
    if(y[0].name == 'pregunta_5'){
      if(!$("#radio_container_2 input[name='pregunta_5']").is(':checked'))
        return false;
    }
    if(y[0].name == 'selected'){
          var val = 0;
          var val2 = 0;
          var btns = document.getElementsByClassName("tab-relate");
          Object.values(btns).forEach(function(element) {
            if( $(element).hasClass("light-green-selected")){
              if(element.id == 'opcion3')  
                val2++;
              val++;
            }
             if( $(element).hasClass("light-brown-selected")){
              if(element.id == 'opcion4')   
                val2++;
              val++;
            }
             if( $(element).hasClass("dark-green-selected")){
              if(element.id == 'opcion2')  
                val2++;
              val++;
            }
            if( $(element).hasClass("dark-gray-selected")){
              if(element.id == 'opcion1')   
                val2++;
              val++;
            }
          });

          if (val2 == 4)
              $("#pregunta_6").val(1);

          if ($("#pregunta_6").val() == 0){
            $("#error_relacion").show();
            valid=false;
          }

    
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

// Form assignation
jQuery(".p_1").on("click", function () {
    jQuery("#pregunta_1").val(jQuery(this).val());
});

jQuery(".p_2").on("click", function () {
    jQuery("#pregunta_2").val(jQuery(this).val());
});

jQuery(".p_3").on("click", function () {
    if($("input[name='pregunta_3']:checked").val()=="9"){
      nextPrev(2);
    }
    else{
      nextPrev(1);
    }
});


jQuery(".circle-item").on("click", function () {
  var btns = document.getElementsByClassName("selected");
  Object.values(btns).forEach(function(element) {
    $(element).removeClass("selected");
  });
  if(!$(this).hasClass("selected") ){
    $(this).addClass(  $(this).data("color")+"-selected selected" );
    $("#selected").val($(this).data("color"));
    $('#selected').attr('data-correct', $(this).data("correct"));
  }
 
});

jQuery(".tab-relate").on("click", function () {
  var good=false;
 var btns = document.getElementsByClassName("tab-relate");
  Object.values(btns).forEach(function(element) {
    $(element).removeClass($('#selected').val()+"-selected");
  });
  if($('#selected').val() != ""){
    if($('#selected').val() == 'dark-gray' && $(this).attr("id")=='opcion1')
      good=true;
    if($('#selected').val() == 'dark-green' && $(this).attr("id")=='opcion2')
      good=true;
    if($('#selected').val() == 'light-green' && $(this).attr("id")=='opcion3')
      good=true;
    if($('#selected').val() == 'light-brown' && $(this).attr("id")=='opcion4')
      good=true;
    if(good){
      $(this).addClass($('#selected').val()+"-selected selected");
      $(this).attr('data-correct', $('#selected').data("correct"));
      $(this).removeData( "data-correct" );
    }
    else{
      Swal.fire({
      position: 'center',
      type: 'error',
      title: 'Respuesta incorrecta',
      showConfirmButton: false,
      timer: 1000
    })
    }
    
  }
});


var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn-opt");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  if (current.length > 0) {
    current[0].className = current[0].className.replace(" active", "");
  }
  this.className += " active";
  });
}

jQuery(".p_4").on("click", function () {
    jQuery("#pregunta_4").val(jQuery(this).val());
    nextPrev(1);
});

jQuery(".p_5").on("click", function () {
    if($("input[name='pregunta_5']:checked").val()=="1"){
      nextPrev(2);
    }
    else{
      nextPrev(1);
    }
});

jQuery(".p_7").on("click", function (e) {
    e.preventDefault();
    jQuery("#pregunta_7").val($(e.target).val());
    nextPrev(1);
});

jQuery(".p_8").on("click", function (e) {
    e.preventDefault();
    jQuery("#pregunta_8").val($(e.target).val());
    nextPrev(1);
});

jQuery(".p_9").on("click", function () {
    jQuery("#pregunta_9").val(jQuery(this).val());
    $.post('db.php', $('#regForm').serialize());
    window.setTimeout( function(){
         window.location = "index.php";
     }, 5000 );
});

function farmacia(pasos){
    if(jQuery("#pregunta_1").val()=="1")
        nextPrev(1);
    else
        nextPrev(pasos);
}