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

$('.check-button-click').on('click', function(){
  name_dialog = $('.name_dialog').text();
  name_dialog = name_dialog.split(',')[0];//13
  data_id = $('.input-dialog').attr('data-id');
  array_dialog = [];
  array_dialog.push(name_dialog);
  array_dialog.push(data_id);
  $.each($('body .input-dialog'), function(i, val) {
    miss_word = $(val).val();
    array_dialog.push(miss_word);
  });
  console.clear();
  console.log(array_dialog);
})
$('#check-button-click').on('click', function () {
      $.ajax(
      {
        type: "GET",
        url: "/MedicalEnglishTest/functions/check_game/dialog.php",//для кажого типа разные файлы обработчики
        data: "data="+JSON.stringify(array_dialog),
        success: function(data)
        {
          $('body').html(data);
        }
      }
    );
});