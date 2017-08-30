$('#button-continue-auth').on('click', function(){
  if($('#checkbox-auth').prop('checked')) {
    $('modal-window-reg').modal('toggle(slow)');
    $('modal-window-auth').modal('toggle(slow)');
  } else {
    alert('Off');
  }
})
$('#button-continue-reg').on('click', function(){
  if($('#checkbox-reg').prop('checked')) {
    alert('On');
  } else {
    $('modal-window-reg').modal('toggle(slow)');
    $('modal-window-auth').modal('toggle(slow)');
  }
})