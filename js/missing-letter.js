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
  var ms1 = $('#1').val();
  var ms2 = $('#2').val();
  var ms3 = $('#3').val();
  var ms4 = $('#4').val();
  var ms5 = $('#5').val();
  var ms6 = $('#6').val();
  var ms7 = $('#7').val();
  var ms8 = $('#8').val();
  var ms9 = $('#9').val();
  var arrms = [ ms1, ms2, ms3, ms4, ms5, ms6, ms7, ms8, ms9];
  arrms.clean("");
  arrms.clean(" ");
  var count = arrms.length;
  progress_bar = document.getElementById('step-progress-bar');
  progress_bar.style.width = (count * 13) + '%';
  if ((count == 8) || (count == 9)) {
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

var i = 0;
$('.input-miss-letter').each(function(){ i++; $(this).attr('id', i); });
$('.btn-success').on('click', function(){
  type_missing_letter = $('.type_miss_letter').text();
  type_missing_letter = type_missing_letter.split(',')[0];
  miss_letter_1 = $('#1').val();
  miss_letter_2 = $('#2').val();
  miss_letter_3 = $('#3').val();
  miss_letter_4 = $('#4').val();
  miss_letter_5 = $('#5').val();
  miss_letter_6 = $('#6').val();
  miss_letter_7 = $('#7').val();
  miss_letter_8 = $('#8').val();
  miss_letter_9 = $('#9').val();
  array_letter = { 
    iteration : 1,
    type_missing_letter : type_missing_letter,
    missing_letter_1 : miss_letter_1, 
    missing_letter_2 : miss_letter_2, 
    missing_letter_3 : miss_letter_3, 
    missing_letter_4 : miss_letter_4, 
    missing_letter_5 : miss_letter_5, 
    missing_letter_6 : miss_letter_6, 
    missing_letter_7 : miss_letter_7, 
    missing_letter_8 : miss_letter_8, 
    missing_letter_9 : miss_letter_9
   };
  console.log(array_letter);
})