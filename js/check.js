$('.btn-success:last').remove();
$('.result').on('click', function(){
  $('.volume').hide('1000');
  $('.black-back').hide('1000');
  $('.one-krop-bg-red').removeClass('one-krop-bg-red').addClass('one-krop-bg-blue');
});
$('.resulting').on('click', function(){
  $('.volume').show('1000');
  $('.black-back').show('1000');
});
$('.continuing').on('click', function(){
  location.reload();
});
$('.continue').on('click', function(){
  location.reload();
});