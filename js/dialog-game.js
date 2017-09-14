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
$('.input').each(function(){ j++; $(this).attr('id','input-'+j); });
count = $('.input').length + 1;
alert(count);
for(i = 0; i++; i < count) {
  var ip = "#input-"+i+"";
  $(ip).addClass('inputtttttttt');
}

$('.check-button-click').on('click', function(){
  name_dialog = $('.name_dialog').text();
  name_dialog = name_dialog.split(',')[0];
  array_dialog = { 
    iteration : 1,
    name_dialog : name_dialog 
   };
  console.log(array_dialog);
})

