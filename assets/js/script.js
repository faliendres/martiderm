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
 var btns = document.getElementsByClassName("tab-relate");
  Object.values(btns).forEach(function(element) {
    $(element).removeClass($('#selected').val()+"-selected");
  });
  
  if($('#selected').val() != ""){
    $(this).addClass($('#selected').val()+"-selected selected");
    $(this).attr('data-correct', $('#selected').data("correct"));
    $(this).removeData( "data-correct" );
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
      nextPrev(1);
    }
    else{
      nextPrev(2);
    }
});

jQuery(".p_8").on("click", function () {
    jQuery("#pregunta_8").val(jQuery(this).val());
    $.post('db.php', $('#regForm').serialize());
});

jQuery(".p_6").on("click", function () {
  var val = 0;
  var btns = document.getElementsByClassName("tab-relate");
  Object.values(btns).forEach(function(element) {
    if( $(element).hasClass("light-green-selected")){
      val++;
    }
     if( $(element).hasClass("light-brown-selected")){
      val++;
    }
     if( $(element).hasClass("dark-green-selected")){
      val++;
    }
    if( $(element).hasClass("dark-gray-selected")){
      val++;
    }

    if (val == 4) {
      console.log($("#divproducto1").data("correct")+"-"+$("#opcion3").data("correct"));
      console.log($("#divproducto2").data("correct")+"-"+$("#opcion4").data("correct"));
      console.log($("#divproducto3").data("correct")+"-"+$("#opcion2").data("correct"));
      console.log($("#divproducto4").data("correct")+"-"+$("#opcion1").data("correct"));

      if( $("#divproducto1").data("correct") == $("#opcion3").data("correct") && $("#divproducto2").data("correct") == $("#opcion4").data("correct") && $("#divproducto3").data("correct") == $("#opcion2").data("correct") && $("#divproducto4").data("correct") == $("#opcion1").data("correct")){
        $("#pregunta_6").val("1");
      }
    }

  });
  
});
