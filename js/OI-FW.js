$('.select-word').on('click', function() {
  $('.select-word').addClass('one-krop-bg-super-grey');
  $('.select-word').removeClass('one-krop-bg-green');
  $(this).removeClass('one-krop-bg-super-grey');
  $(this).addClass('one-krop-bg-green');
});

$('.btn-check-clear').on('click', function() {
  $('.select-word').removeClass('one-krop-bg-green');
  $('.select-word').addClass('one-krop-bg-super-grey');
});