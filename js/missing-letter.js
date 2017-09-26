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
  arrms = [];
  $.each($('body .input-miss-letter'), function(i, val) {
    arrms.clean("");
    arrms.clean(" ");
    miss_letter = $(val).val();
    arrms.push(miss_letter);
  });
  LengthArray = arrms.length;
  LengthInput = $('.input-miss-letter').length;
  /*if ((LengthArray) <= (LengthInput/7)) { count = LengthInput/7; alert(count);}
  if ((count) <= (LengthInput/3)) { count = LengthInput/3; alert(count);} 
  if ((count) <= (LengthInput/2)) { count = LengthInput/2; alert(count);} 
  if ((count) >= (LengthInput - (LengthInput/3))) { count = LengthInput - (LengthInput/3); alert(count);} 
  if ((count) >= (LengthInput - (LengthInput/7))) { count = LengthInput - (LengthInput/7); alert(count);} 
  */
  if ((LengthArray) == (LengthInput)) { 
    count = 100;
    var progress_bar = document.getElementById('step-progress-bar');
    progress_bar.style.width = count + '%';
    var button_wait = document.getElementById('button-wait');
    button_wait.style.display = "none";
    var button_continue = document.getElementById('button-continue');
    button_continue.style.display = "block";
  }
});
var i = 0;
$('.input-miss-letter').each(function(){ i++; $(this).attr('id', i); });
$('.btn-success').on('click', function(){
  type_missing_letter = $('.type_miss_letter').text();
  type_missing_letter = type_missing_letter.split(',')[0];
  data_id = $('.input-miss-letter').attr('data-id');
  array_miss_letter = [];
  array_miss_letter.push(type_missing_letter);
  array_miss_letter.push(data_id);
  $.each($('body .input-miss-letter'), function(i, val) {
    miss_letter = $(val).val();
    array_miss_letter.push(miss_letter);
  });
  console.clear();
  console.log(array_miss_letter);  
})
$('#btn-success').on('click', function () {
      $.ajax(
      {
        type: "GET",
        url: "/MedicalEnglishTest/functions/check_game/miss-letter.php",//для кажого типа разные файлы обработчики
        data: "data="+JSON.stringify(array_letter),
        success: function(data)
        {
          $('body').html(data);
        }
      }
    );
});