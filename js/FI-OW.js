var i = 0;
$('.btn-check').each(function(){ i++; $(this).attr('id','image-fi-ow-'+i); });

if( $('#image-fi-ow-1')) $('#image-fi-ow-1', function(){ $('#image-fi-ow-1').addClass('image-fi-ow-1'); });
if( $('#image-fi-ow-2')) $('#image-fi-ow-2', function(){ $('#image-fi-ow-2').addClass('image-fi-ow-1'); });
if( $('#image-fi-ow-3')) $('#image-fi-ow-3', function(){ $('#image-fi-ow-3').addClass('image-fi-ow-1'); });
if( $('#image-fi-ow-4')) $('#image-fi-ow-4', function(){ $('#image-fi-ow-4').addClass('image-fi-ow-1'); });

if( $('#image-fi-ow-5')) $('#image-fi-ow-5', function(){ $('#image-fi-ow-5').addClass('image-fi-ow-2'); });
if( $('#image-fi-ow-6')) $('#image-fi-ow-6', function(){ $('#image-fi-ow-6').addClass('image-fi-ow-2'); });
if( $('#image-fi-ow-7')) $('#image-fi-ow-7', function(){ $('#image-fi-ow-7').addClass('image-fi-ow-2'); });
if( $('#image-fi-ow-8')) $('#image-fi-ow-8', function(){ $('#image-fi-ow-8').addClass('image-fi-ow-2'); });

if( $('#image-fi-ow-9')) $('#image-fi-ow-9', function(){ $('#image-fi-ow-9').addClass('image-fi-ow-3'); });
if( $('#image-fi-ow-10')) $('#image-fi-ow-10', function(){ $('#image-fi-ow-10').addClass('image-fi-ow-3'); });
if( $('#image-fi-ow-11')) $('#image-fi-ow-11', function(){ $('#image-fi-ow-11').addClass('image-fi-ow-3'); });
if( $('#image-fi-ow-12')) $('#image-fi-ow-12', function(){ $('#image-fi-ow-12').addClass('image-fi-ow-3'); });

if( ( $('.left-fw-fw-1') ) ) { $('.left-fw-fw-1', fi_ow_1); }
if( ( $('.left-fw-fw-2') ) ) { $('.left-fw-fw-2', fi_ow_2); }
if( ( $('.left-fw-fw-3') ) ) { $('.left-fw-fw-3', fi_ow_3); }

type = $('.type').text();
type = type.split(',')[0];
type_game = $('.type-game').text();
type_game = type_game.split(',')[0];
array_fi_ow = [ 
                'nothing', 
                'nothing', 
                'nothing' 
              ];

function fi_ow_1(){
$('.image-fi-ow-1').on('click', function() {
  $('.image-fi-ow-1').addClass('one-krop-bg-red');
  $('.image-fi-ow-1').removeClass('one-krop-bg-green');
  $(this).removeClass('one-krop-bg-red');
  $(this).addClass('one-krop-bg-green');
    data_id = $(this).attr('data-id');
    url_fi_ow_1 = $(this).find('img').attr('src');
    url_fi_ow_1 = url_fi_ow_1.substring(6);
    type = $('.type').text();
    type = type.split(',')[1];
    type_game = $('.type-game').text();
    type_game = type_game.split(',')[1];
    assoc_array();
    array_fi_ow_1 = { 
                      iteration : 1, 
                      right_url : url_fi_ow_1, 
                      type : type, 
                      type_game : type_game,
                      data_id : data_id 
                    };
    array_fi_ow[0] = array_fi_ow_1;
    console.clear();
    console.log(array_fi_ow);
  });
}

function fi_ow_2(){
$('.image-fi-ow-2').on('click', function() {
  $('.image-fi-ow-2').addClass('one-krop-bg-red');
  $('.image-fi-ow-2').removeClass('one-krop-bg-green');
  $(this).removeClass('one-krop-bg-red');
  $(this).addClass('one-krop-bg-green');
    data_id = $(this).attr('data-id');
    url_fi_ow_2 = $(this).find('img').attr('src');
    url_fi_ow_2 = url_fi_ow_2.substring(6);
    type = $('.type').text();
    type = type.split(',')[1];
    type_game = $('.type-game').text();
    type_game = type_game.split(',')[1];
    assoc_array();
    array_fi_ow_2 = { 
                      iteration : 2, 
                      right_url : url_fi_ow_2, 
                      type : type, 
                      type_game : type_game, 
                      data_id : data_id
                    };
    array_fi_ow[1] = array_fi_ow_2;
    console.clear();
    console.log(array_fi_ow);
});
}

function fi_ow_3(){
$('.image-fi-ow-3').on('click', function() {
  $('.image-fi-ow-3').addClass('one-krop-bg-red');
  $('.image-fi-ow-3').removeClass('one-krop-bg-green');
  $(this).removeClass('one-krop-bg-red');
  $(this).addClass('one-krop-bg-green');
    data_id = $(this).attr('data-id');
    url_fi_ow_3 = $(this).find('img').attr('src');
    url_fi_ow_3 = url_fi_ow_3.substring(6);
    type = $('.type').text();
    type = type.split(',')[0];
    type_game = $('.type-game').text();
    type_game = type_game.split(',')[0];
    assoc_array();
    array_fi_ow_3 = { 
                      iteration : 3, 
                      right_url : url_fi_ow_3, 
                      type : type, 
                      type_game : type_game,
                      data_id : data_id 
                    };
    array_fi_ow[2] = array_fi_ow_3;
    console.clear();
    console.log(array_fi_ow);
});
}

$('#check').on('click', function () {
  if ( (window.array_fi_ow_1 == undefined) || (window.array_fi_ow_2 == undefined) || (window.array_fi_ow_3 == undefined)){
    alert("Выполните все задание!");
  }
  else {

      $.ajax(
      {
        type: "GET",
        url: "/MedicalEnglishTest/functions/check_game/FI-OW.php",//для кажого типа разные файлы обработчики
        data: "data="+JSON.stringify(array_fi_ow),
        success: function(data)
        {
          $('body').html(data);
        }
      }
    );

  }
});
$(document).ready(function() {
  $('.disabled:last').remove();
});