$('.btn-check').on('click', function() {
  $('.btn-check').addClass('one-krop-bg-red');
  $('.btn-check').removeClass('one-krop-bg-green');
  $(this).removeClass('one-krop-bg-red');
  $(this).addClass('one-krop-bg-green');
});

$('.btn-clear').on('click', function() {
  //$('.btn-check').closest('.select-image-of-four').find('input:checkbox').prop('checked', false);
  $('.btn-check').removeClass('one-krop-bg-green');
  $('.btn-check').addClass('one-krop-bg-red');
});