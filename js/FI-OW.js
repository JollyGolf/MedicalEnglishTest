//var i = 0;
//$(".select-image-of-four .one-krop").each(function(){ i++; $(this).attr("id","image-fi-ow-"+i); });

$('.btn-check').on('click', function() {
  $('.btn-check').addClass('one-krop-bg-red');
  $('.btn-check').removeClass('one-krop-bg-green');
  $(this).removeClass('one-krop-bg-red');
  $(this).addClass('one-krop-bg-green');
});

$('.btn-clear').on('click', function() {
  $('.btn-check').removeClass('one-krop-bg-green');
  $('.btn-check').addClass('one-krop-bg-red');
});