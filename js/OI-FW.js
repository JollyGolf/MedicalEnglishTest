var i = 0;
$('.oi-fw').each(function(){ i++; $(this).attr('id','word-oi-fw-'+i); });

if( $('#word-oi-fw-1')) $('#word-oi-fw-1', function(){ $('#word-oi-fw-1').addClass('word-oi-fw-1'); });
if( $('#word-oi-fw-2')) $('#word-oi-fw-2', function(){ $('#word-oi-fw-2').addClass('word-oi-fw-1'); });
if( $('#word-oi-fw-3')) $('#word-oi-fw-3', function(){ $('#word-oi-fw-3').addClass('word-oi-fw-1'); });
if( $('#word-oi-fw-4')) $('#word-oi-fw-4', function(){ $('#word-oi-fw-4').addClass('word-oi-fw-1'); });

if( $('#word-oi-fw-5')) $('#word-oi-fw-5', function(){ $('#word-oi-fw-5').addClass('word-oi-fw-2'); });
if( $('#word-oi-fw-6')) $('#word-oi-fw-6', function(){ $('#word-oi-fw-6').addClass('word-oi-fw-2'); });
if( $('#word-oi-fw-7')) $('#word-oi-fw-7', function(){ $('#word-oi-fw-7').addClass('word-oi-fw-2'); });
if( $('#word-oi-fw-8')) $('#word-oi-fw-8', function(){ $('#word-oi-fw-8').addClass('word-oi-fw-2'); });

if( $('#word-oi-fw-9')) $('#word-oi-fw-9', function(){ $('#word-oi-fw-9').addClass('word-oi-fw-3'); });
if( $('#word-oi-fw-10')) $('#word-oi-fw-10', function(){ $('#word-oi-fw-10').addClass('word-oi-fw-3'); });
if( $('#word-oi-fw-11')) $('#word-oi-fw-11', function(){ $('#word-oi-fw-11').addClass('word-oi-fw-3'); });
if( $('#word-oi-fw-12')) $('#word-oi-fw-12', function(){ $('#word-oi-fw-12').addClass('word-oi-fw-3'); });

if( ( $('.word-oi-fw-1') ) ) { $('.word-oi-fw-1', oi_fw_1); }
if( ( $('.word-oi-fw-2') ) ) { $('.word-oi-fw-2', oi_fw_2); }
if( ( $('.word-oi-fw-3') ) ) { $('.word-oi-fw-3', oi_fw_3); }

type = $('.type').text();
type = type.split(',')[0];
type_game = $('.type-game').text();
type_game = type_game.split(',')[0];

function oi_fw_1(){
  $('.word-oi-fw-1').on('click', function() {
  $('.word-oi-fw-1').addClass('one-krop-bg-super-grey');
  $('.word-oi-fw-1').removeClass('one-krop-bg-green');
  $(this).removeClass('one-krop-bg-super-grey');
  $(this).addClass('one-krop-bg-green');
    word_oi_fw_1 = $(this).text();
    array_oi_fw_1 = { iteration : 1, right_word : word_oi_fw_1, type : type, type_game : type_game };
    console.log(array_oi_fw_1);
});
}

function oi_fw_2(){
  $('.word-oi-fw-2').on('click', function() {
  $('.word-oi-fw-2').addClass('one-krop-bg-super-grey');
  $('.word-oi-fw-2').removeClass('one-krop-bg-green');
  $(this).removeClass('one-krop-bg-super-grey');
  $(this).addClass('one-krop-bg-green');
    word_oi_fw_2 = $(this).text();
    array_oi_fw_2 = { iteration : 2, right_word : word_oi_fw_2, type : type, type_game : type_game };
    console.log(array_oi_fw_2);
});
}

function oi_fw_3(){
  $('.word-oi-fw-3').on('click', function() {
  $('.word-oi-fw-3').addClass('one-krop-bg-super-grey');
  $('.word-oi-fw-3').removeClass('one-krop-bg-green');
  $(this).removeClass('one-krop-bg-super-grey');
  $(this).addClass('one-krop-bg-green');
    word_oi_fw_3 = $(this).text();
    array_oi_fw_3 = { iteration : 3, right_word : word_oi_fw_3, type : type, type_game : type_game };
    console.log(array_oi_fw_3);
});
}
