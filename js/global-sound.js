
$(document).ready(function() {
  function getSelectedText(){
    var text = "";
    if (window.getSelection) {
        text = window.getSelection();
    }else if (document.getSelection) {
        text = document.getSelection();
    }else if (document.selection) {
        text = document.selection.createRange().text;
    }
    return text;
  }
    var isCtrl = false;
    $(document).keyup(function (e) {
        if(e.which == 17) isCtrl = false;
    }).keydown(function (e) {
        if(e.which == 17) isCtrl=true;
        if(e.which == 13 && isCtrl == true) {
            alert(getSelectedText());
        }
    });
});