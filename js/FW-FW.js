var i = 0;
$(".FW-FW-left .left").each(function(){ i++; $(this).attr("id","left-fw-fw-"+i); });

var j = 0;
$(".FW-FW-right .right").each(function(){ j++; $(this).attr("id","right-fw-fw-"+j); });

var n = 0;
$(".btn-check-clear").each(function(){ n++; $(this).attr("id","btn-check-clear-fw-fw-"+n); });



if( $('#left-fw-fw-1')) $('#left-fw-fw-1', function(){ $('#left-fw-fw-1').addClass('left-fw-fw-1'); });
if( $('#left-fw-fw-2')) $('#left-fw-fw-2', function(){ $('#left-fw-fw-2').addClass('left-fw-fw-1'); });
if( $('#left-fw-fw-3')) $('#left-fw-fw-3', function(){ $('#left-fw-fw-3').addClass('left-fw-fw-1'); });
if( $('#left-fw-fw-4')) $('#left-fw-fw-4', function(){ $('#left-fw-fw-4').addClass('left-fw-fw-1'); });

if( $('#right-fw-fw-1')) $('#right-fw-fw-1', function(){ $('#right-fw-fw-1').addClass('right-fw-fw-1'); });
if( $('#right-fw-fw-2')) $('#right-fw-fw-2', function(){ $('#right-fw-fw-2').addClass('right-fw-fw-1'); });
if( $('#right-fw-fw-3')) $('#right-fw-fw-3', function(){ $('#right-fw-fw-3').addClass('right-fw-fw-1'); });
if( $('#right-fw-fw-4')) $('#right-fw-fw-4', function(){ $('#right-fw-fw-4').addClass('right-fw-fw-1'); });
// 1st iteration game
if( $('#left-fw-fw-5')) $('#left-fw-fw-5', function(){ $('#left-fw-fw-5').addClass('left-fw-fw-2'); });
if( $('#left-fw-fw-6')) $('#left-fw-fw-6', function(){ $('#left-fw-fw-6').addClass('left-fw-fw-2'); });
if( $('#left-fw-fw-7')) $('#left-fw-fw-7', function(){ $('#left-fw-fw-7').addClass('left-fw-fw-2'); });
if( $('#left-fw-fw-8')) $('#left-fw-fw-8', function(){ $('#left-fw-fw-8').addClass('left-fw-fw-2'); });

if( $('#right-fw-fw-5')) $('#right-fw-fw-5', function(){ $('#right-fw-fw-5').addClass('right-fw-fw-2'); });
if( $('#right-fw-fw-6')) $('#right-fw-fw-6', function(){ $('#right-fw-fw-6').addClass('right-fw-fw-2'); });
if( $('#right-fw-fw-7')) $('#right-fw-fw-7', function(){ $('#right-fw-fw-7').addClass('right-fw-fw-2'); });
if( $('#right-fw-fw-8')) $('#right-fw-fw-8', function(){ $('#right-fw-fw-8').addClass('right-fw-fw-2'); });
// 2st iteration game
if( $('#left-fw-fw-9')) $('#left-fw-fw-9', function(){ $('#left-fw-fw-9').addClass('left-fw-fw-3'); });
if( $('#left-fw-fw-10')) $('#left-fw-fw-10', function(){ $('#left-fw-fw-10').addClass('left-fw-fw-3'); });
if( $('#left-fw-fw-11')) $('#left-fw-fw-11', function(){ $('#left-fw-fw-11').addClass('left-fw-fw-3'); });
if( $('#left-fw-fw-12')) $('#left-fw-fw-12', function(){ $('#left-fw-fw-12').addClass('left-fw-fw-3'); });

if( $('#right-fw-fw-9')) $('#right-fw-fw-9', function(){ $('#right-fw-fw-9').addClass('right-fw-fw-3'); });
if( $('#right-fw-fw-10')) $('#right-fw-fw-10', function(){ $('#right-fw-fw-10').addClass('right-fw-fw-3'); });
if( $('#right-fw-fw-11')) $('#right-fw-fw-11', function(){ $('#right-fw-fw-11').addClass('right-fw-fw-3'); });
if( $('#right-fw-fw-12')) $('#right-fw-fw-12', function(){ $('#right-fw-fw-12').addClass('right-fw-fw-3'); });
// 3st iteration game

if( ( $('.left-fw-fw-1') ) ) { $('.left-fw-fw-1', fw_fw_1); }
if( ( $('.left-fw-fw-2') ) ) { $('.left-fw-fw-2', fw_fw_2); }
if( ( $('.left-fw-fw-3') ) ) { $('.left-fw-fw-3', fw_fw_3); }

function fw_fw_1(){ var lll1; var rrr1; var lll2; var rrr2; var lll3; var rrr3; var lll4; var rrr4;
$('.left-fw-fw-1').one('click', function left_side(){
  if(lll1) off('click', left_side);
  $(this).addClass('one-krop-bg-green');
  var lll1 = $(this);
  $(this).off('click', '.right-fw-fw-1', left_side);
  $('.left-fw-fw-1').off('click', left_side);
  $('.right-fw-fw-1').one('click', function right_side(){
    //if(rrr1) off('click', right_side);
    $(this).addClass('one-krop-bg-green');
    var rrr1 = $(this);
    lll1.css({ display: 'none'}),rrr1.css({ display: 'none'});
    $(this).off('click', '.right-fw-fw-1', right_side);
    $('.right-fw-fw-1').off('click', right_side);
    $('.left-fw-fw-1').one('click', function left_side(){
      if(lll2) off('click', left_side);
      $(this).addClass('one-krop-bg-red');
      var lll2 = $(this);
      $(this).off('click', '.right-fw-fw-1', left_side);
      $('.left-fw-fw-1').off('click', left_side);
      $('.right-fw-fw-1').one('click', function right_side(){
        if(rrr2) off('click', right_side);
        $(this).addClass('one-krop-bg-red');
        var rrr2 = $(this);
        lll2.css({ display: 'none'}),rrr2.css({ display: 'none'});
        $(this).off('click', '.right-fw-fw-1', right_side);
        $('.right-fw-fw-1').off('click', right_side);
        $('.left-fw-fw-1').one('click', function left_side(){
          if(lll3) off('click', left_side);
          $(this).addClass('one-krop-bg-blue');
          var lll3 = $(this);
          $(this).off('click', '.right-fw-fw-1', left_side);
          $('.left-fw-fw-1').off('click', left_side);
          $('.right-fw-fw-1').one('click', function right_side(){
            if(rrr3) off('click', right_side);
            $(this).addClass('one-krop-bg-blue');
            var rrr3 = $(this);
            lll3.css({ display: 'none'}),rrr3.css({ display: 'none'});
            $(this).off('click', '.right-fw-fw-1', right_side);
            $('.right-fw-fw-1').off('click', right_side);
            $('.left-fw-fw-1').one('click', function left_side(){
              if(lll4) off('click', left_side);
              $(this).addClass('one-krop-bg-yellow');
              var lll4 = $(this);
              $(this).off('click', '.right-fw-fw-1', left_side);
              $('.left-fw-fw-1').off('click', left_side);
              $('.right-fw-fw-1').one('click', function right_side(){
                if(rrr4) off('click', right_side);
                $(this).addClass('one-krop-bg-yellow');
                var rrr4 = $(this);
                lll4.css({ display: 'none'}),rrr4.css({ display: 'none'});
                $('.FW-FW-center').css({ display: 'none'});
                lll1.css({ display: 'block'}),rrr1.css({ display: 'block'});
                lll2.css({ display: 'block'}),rrr2.css({ display: 'block'});
                lll3.css({ display: 'block'}),rrr3.css({ display: 'block'});
                lll4.css({ display: 'block'}),rrr4.css({ display: 'block'});
                $('.info-fw-fw-0').css({ display: 'none'});
                $('.success-fw-fw-0').css({ display: 'block'});
                $('.FW-FW-center').css({ display: 'block'});
                $(this).off('click', '.right-fw-fw-1', right_side);
                $('.right-fw-fw-1').off('click', right_side);
              });
            });
          });
        });
      });
    });
  });
});
}

function fw_fw_2(){ var lll11; var rrr11; var lll22; var rrr22; var lll33; var rrr33; var lll44; var rrr44;
$('.left-fw-fw-2').one('click', function left_side(){
  if(lll11) off('click', left_side);
  $(this).addClass('one-krop-bg-green');
  var lll11 = $(this);
  $(this).off('click', '.right-fw-fw-2', left_side);
  $('.left-fw-fw-2').off('click', left_side);
  $('.right-fw-fw-2').one('click', function right_side(){
    //if(rrr11) off('click', right_side);
    $(this).addClass('one-krop-bg-green');
    var rrr11 = $(this);
    lll11.css({ display: 'none'}),rrr11.css({ display: 'none'});
    $(this).off('click', '.right-fw-fw-2', right_side);
    $('.right-fw-fw-2').off('click', right_side);
    $('.left-fw-fw-2').one('click', function left_side(){
      if(lll22) off('click', left_side);
      $(this).addClass('one-krop-bg-red');
      var lll22 = $(this);
      $(this).off('click', '.right-fw-fw-2', left_side);
      $('.left-fw-fw-2').off('click', left_side);
      $('.right-fw-fw-2').one('click', function right_side(){
        if(rrr22) off('click', right_side);
        $(this).addClass('one-krop-bg-red');
        var rrr22 = $(this);
        lll22.css({ display: 'none'}),rrr22.css({ display: 'none'});
        $(this).off('click', '.right-fw-fw-2', right_side);
        $('.right-fw-fw-2').off('click', right_side);
        $('.left-fw-fw-2').one('click', function left_side(){
          if(lll33) off('click', left_side);
          $(this).addClass('one-krop-bg-blue');
          var lll33 = $(this);
          $(this).off('click', '.right-fw-fw-2', left_side);
          $('.left-fw-fw-2').off('click', left_side);
          $('.right-fw-fw-2').one('click', function right_side(){
            if(rrr33) off('click', right_side);
            $(this).addClass('one-krop-bg-blue');
            var rrr33 = $(this);
            lll33.css({ display: 'none'}),rrr33.css({ display: 'none'});
            $(this).off('click', '.right-fw-fw-2', right_side);
            $('.right-fw-fw-2').off('click', right_side);
            $('.left-fw-fw-2').one('click', function left_side(){
              if(lll44) off('click', left_side);
              $(this).addClass('one-krop-bg-yellow');
              var lll44 = $(this);
              $(this).off('click', '.right-fw-fw-2', left_side);
              $('.left-fw-fw-2').off('click', left_side);
              $('.right-fw-fw-2').one('click', function right_side(){
                if(rrr44) off('click', right_side);
                $(this).addClass('one-krop-bg-yellow');
                var rrr44 = $(this);
                lll44.css({ display: 'none'}),rrr44.css({ display: 'none'});
                $('.FW-FW-center').css({ display: 'none'});
                lll11.css({ display: 'block'}),rrr11.css({ display: 'block'});
                lll22.css({ display: 'block'}),rrr22.css({ display: 'block'});
                lll33.css({ display: 'block'}),rrr33.css({ display: 'block'});
                lll44.css({ display: 'block'}),rrr44.css({ display: 'block'});
                $('.info-fw-fw-1').css({ display: 'none'});
                $('.success-fw-fw-1').css({ display: 'block'});
                $('.FW-FW-center').css({ display: 'block'});
                $(this).off('click', '.right-fw-fw-2', right_side);
                $('.right-fw-fw-2').off('click', right_side);
              });
            });
          });
        });
      });
    });
  });
});
}

function fw_fw_3(){ var lll111; var rrr111; var lll222; var rrr222; var lll333; var rrr333; var lll444; var rrr444;
$('.left-fw-fw-3').one('click', function left_side(){
  if(lll111) off('click', left_side);
  $(this).addClass('one-krop-bg-green');
  var lll111 = $(this);
  $(this).off('click', '.right-fw-fw-3', left_side);
  $('.left-fw-fw-3').off('click', left_side);
  $('.right-fw-fw-3').one('click', function right_side(){
    //if(rrr11) off('click', right_side);
    $(this).addClass('one-krop-bg-green');
    var rrr111 = $(this);
    lll111.css({ display: 'none'}),rrr111.css({ display: 'none'});
    $(this).off('click', '.right-fw-fw-3', right_side);
    $('.right-fw-fw-3').off('click', right_side);
    $('.left-fw-fw-3').one('click', function left_side(){
      if(lll222) off('click', left_side);
      $(this).addClass('one-krop-bg-red');
      var lll222 = $(this);
      $(this).off('click', '.right-fw-fw-3', left_side);
      $('.left-fw-fw-3').off('click', left_side);
      $('.right-fw-fw-3').one('click', function right_side(){
        if(rrr222) off('click', right_side);
        $(this).addClass('one-krop-bg-red');
        var rrr222 = $(this);
        lll222.css({ display: 'none'}),rrr222.css({ display: 'none'});
        $(this).off('click', '.right-fw-fw-3', right_side);
        $('.right-fw-fw-3').off('click', right_side);
        $('.left-fw-fw-3').one('click', function left_side(){
          if(lll333) off('click', left_side);
          $(this).addClass('one-krop-bg-blue');
          var lll333 = $(this);
          $(this).off('click', '.right-fw-fw-3', left_side);
          $('.left-fw-fw-3').off('click', left_side);
          $('.right-fw-fw-3').one('click', function right_side(){
            if(rrr333) off('click', right_side);
            $(this).addClass('one-krop-bg-blue');
            var rrr333 = $(this);
            lll333.css({ display: 'none'}),rrr333.css({ display: 'none'});
            $(this).off('click', '.right-fw-fw-3', right_side);
            $('.right-fw-fw-3').off('click', right_side);
            $('.left-fw-fw-3').one('click', function left_side(){
              if(lll444) off('click', left_side);
              $(this).addClass('one-krop-bg-yellow');
              var lll444 = $(this);
              $(this).off('click', '.right-fw-fw-3', left_side);
              $('.left-fw-fw-3').off('click', left_side);
              $('.right-fw-fw-3').one('click', function right_side(){
                if(rrr444) off('click', right_side);
                $(this).addClass('one-krop-bg-yellow');
                var rrr444 = $(this);
                lll444.css({ display: 'none'}),rrr444.css({ display: 'none'});
                $('.FW-FW-center').css({ display: 'none'});
                lll111.css({ display: 'block'}),rrr111.css({ display: 'block'});
                lll222.css({ display: 'block'}),rrr222.css({ display: 'block'});
                lll333.css({ display: 'block'}),rrr333.css({ display: 'block'});
                lll444.css({ display: 'block'}),rrr444.css({ display: 'block'});
                $('.info-fw-fw-2').css({ display: 'none'});
                $('.success-fw-fw-2').css({ display: 'block'});
                $('.FW-FW-center').css({ display: 'block'});
                $(this).off('click', '.right-fw-fw-3', right_side);
                $('.right-fw-fw-3').off('click', right_side);
              });
            });
          });
        });
      });
    });
  });
});
}
