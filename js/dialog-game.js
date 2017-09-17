function closeDialog() {
  var less_dialog = document.getElementById('less-dialog'); {
    less_dialog.style.display = "block";
  }
  var full_dialog = document.getElementById('full-dialog'); {
    full_dialog.style.display = "none";
  }
}
setTimeout(function() {
  var less_dialog = document.getElementById('less-dialog'); {
    less_dialog.style.display = "block";
  }
  var full_dialog = document.getElementById('full-dialog'); {
    full_dialog.style.display = "none";
  }  
}, 51500);
progress_bar = document.getElementById('flex-progress-bar');
percent_position = 0;
timerId = setInterval(frame, 50);
function frame(){
  if(percent_position == 100) {
    clearInterval(timerId);
  }
  else {
    percent_position = percent_position + 0.1;
    progress_bar.style.width = percent_position + '%';
  }
}

var j = 0;
$('.input').each(function(){ j++; $(this).attr('id', j); });
count = $('.input').length + 1;
for(i = 0; i++; i < count) {}

$('.check-button-click').on('click', function(){
  name_dialog = $('.name_dialog').text();
  name_dialog = name_dialog.split(',')[0];
  miss_word_1 = $('#1').val();
  miss_word_2 = $('#2').val();
  miss_word_3 = $('#3').val();
  miss_word_4 = $('#4').val();
  miss_word_5 = $('#5').val();
  miss_word_6 = $('#6').val();
  miss_word_7 = $('#7').val();
  miss_word_8 = $('#8').val();
  miss_word_9 = $('#9').val();
  miss_word_10 = $('#10').val();
  miss_word_11 = $('#11').val();
  miss_word_12 = $('#12').val();
  miss_word_13 = $('#13').val();
  array_dialog = { 
    iteration : 1,
    name_dialog : name_dialog,
    missing_word_1 : miss_word_1, 
    missing_word_2 : miss_word_2, 
    missing_word_3 : miss_word_3, 
    missing_word_4 : miss_word_4, 
    missing_word_5 : miss_word_5, 
    missing_word_6 : miss_word_6, 
    missing_word_7 : miss_word_7, 
    missing_word_8 : miss_word_8, 
    missing_word_9 : miss_word_9, 
    missing_word_10 : miss_word_10, 
    missing_word_11 : miss_word_11, 
    missing_word_12 : miss_word_12, 
    missing_word_13 : miss_word_13
   };
  console.log(array_dialog);
})
