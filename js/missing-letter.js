$(document).ready(function () {
  $(".input-miss-letter").attr('maxlength', '1');    
});
$(".input-miss-letter").on("keydown", function() { 
  Array.prototype.clean = function(deleteValue){
    for (var i = 0; i < this.length; i++) {
      if (this[i] == deleteValue) {         
        this.splice(i, 1);
        i--;
      }
    }
    return this;
  };
  var ms1 = $('#miss-letter-1').val();
  var ms2 = $('#miss-letter-2').val();
  var ms3 = $('#miss-letter-3').val();
  var ms4 = $('#miss-letter-4').val();
  var ms5 = $('#miss-letter-5').val();
  var ms6 = $('#miss-letter-6').val();
  var ms7 = $('#miss-letter-7').val();
  var ms8 = $('#miss-letter-8').val();
  var ms9 = $('#miss-letter-9').val();
  var ms10 = $('#miss-letter-10').val();
  var ms11 = $('#miss-letter-11').val();
  var ms12 = $('#miss-letter-12').val();
  var ms13 = $('#miss-letter-13').val();
  var ms14 = $('#miss-letter-14').val();
  var ms15 = $('#miss-letter-15').val();
  var ms16 = $('#miss-letter-16').val();
  var ms17 = $('#miss-letter-17').val();
  var ms18 = $('#miss-letter-18').val();
  var ms19 = $('#miss-letter-19').val();
  var ms20 = $('#miss-letter-20').val();
  var ms21 = $('#miss-letter-21').val();
  var ms22 = $('#miss-letter-22').val();
  var ms23 = $('#miss-letter-23').val();
  var ms24 = $('#miss-letter-24').val();
  var ms25 = $('#miss-letter-25').val();
  var arrms = [ ms1, ms2, ms3, ms4, ms5, ms6, ms7, ms8, ms9, ms10, ms11, ms12, ms13, ms14, ms15, ms16, ms17, ms18, ms19, ms20, ms21, ms22, ms23, ms24, ms25];
  arrms.clean("");
  arrms.clean(" ");
  var count = arrms.length;
  progress_bar = document.getElementById('step-progress-bar');
  progress_bar.style.width = (count * 4.166666666666667) + '%';
  if ((count == 24) || (count == 25)) {
    var button_wait = document.getElementById('button-wait'); {
      button_wait.style.display = "none";
    }
    var button_continue = document.getElementById('button-continue'); {
      button_continue.style.display = "block";
    }
  }
  else {
    var button_wait = document.getElementById('button-wait'); {
      button_wait.style.display = "block";
    }
    var button_continue = document.getElementById('button-continue'); {
      button_continue.style.display = "none";
    }
  }
});