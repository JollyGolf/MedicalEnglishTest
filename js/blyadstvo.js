$('.btn-clear').on('click', function add_fw_fw(){
  $('.FW-FW').remove();
  i = 0;
  res = 0;
  $('.after-append').append('<div class="FW-FW"><div class="FW-FW-left"><div class="btn btn-primary btn-lg btn-block select-word left">Facebook</div><div class="btn btn-primary btn-lg btn-block select-word left">VKontacte</div><div class="btn btn-primary btn-lg btn-block select-word left">Twitter</div><div class="btn btn-primary btn-lg btn-block select-word left">Instagram</div></div><div class="FW-FW-center"><span class="after-append-two"></span><span class="fa fa-code-fork fa-3x fa-pulse center"></span></div><div class="FW-FW-right"><div class="btn btn-primary btn-lg btn-block select-word right">Facebook</div><div class="btn btn-primary btn-lg btn-block select-word right">VKontacte</div><div class="btn btn-primary btn-lg btn-block select-word right">Twitter</div><div class="btn btn-primary btn-lg btn-block select-word right">Instagram</div></div></div>');
  var i = 0;
  var res = 0;
  $('.left').on('click', function left_side(){
    $('.left').on('click', function(){
      if( ($(this) !== del_left) ) {
        $(this).off('click', left_side);
      }
    });
    $('.left:not(this)').addClass('disabled').css({cursor: 'pointer'});
    $(this).removeClass('disabled');
    i = Number(i);
    res = Number(res);
    i = i + 1;
    $(this).addClass('left-back-'+i+'');
    var del_left = $(this);
    res = i;
    res = Number(res);
    $('.right').one('click', function right_side(){
      var del_right = $(this);
      $('.rig'),del_right.css({display: 'none'}),del_left.css({display: 'none'});
      $(this)/*append('<span class="rig" style="float: left;">'+res+'</span>')*/.off("click", ".right", right_side);
    $(this).addClass('right-back-'+res+'');
    $('.left').removeClass('disabled');
    $('.right').addClass('disabled');
    $('.right').prop('disabled', true);
    $(this).removeClass('disabled');
    $('.right').off('click', right_side);
    $('.left').on('click', function left_side(){
      $('.left').on('click', function(){
        if( ($(this) !== del_left) ) {
          $(this).off('click', left_side);
        }
      });
      $('.left:not(this)').addClass('disabled').css({cursor: 'pointer'});
      $(this).removeClass('disabled');
      i = Number(i);
      res = Number(res);
      i = i + 1;
      $(this).addClass('left-back-'+i+'');
      var del_left = $(this);
      res = i;
      res = Number(res);
      $('.right').on('click', function right_side(){
        var del_right = $(this);
        $('.rig'),del_right.css({display: 'none'}),del_left.css({display: 'none'});
        $(this)/*append('<span class="rig" style="float: left;">'+res+'</span>')*/.off("click", ".right", right_side);
        $(this).addClass('right-back-'+res+'');
        $('.left').removeClass('disabled');
        $('.right').addClass('disabled');
        $('.right').prop('disabled', true);
        $(this).removeClass('disabled'); 
        $('.right').off('click', right_side);
        $('.left').on('click', function left_side(){
          $('.left').on('click', function(){
            if( ($(this) !== del_left) ) {
              $(this).off('click', left_side);
            }
          });
          $('.left:not(this)').addClass('disabled').css({cursor: 'pointer'});
          $(this).removeClass('disabled');
          i = Number(i);
          res = Number(res);
          i = i + 1;
          $(this).addClass('left-back-'+i+'');
          var del_left = $(this);
          res = i;
          res = Number(res);
          $('.right').on('click', function right_side(){
            var del_right = $(this);
            $('.rig'),del_right.css({display: 'none'}),del_left.css({display: 'none'});
            $(this)/*append('<span class="rig" style="float: left;">'+res+'</span>')*/.off("click", ".right", right_side);
            $(this).addClass('right-back-'+res+'');
            $('.left').removeClass('disabled');
            $('.right').addClass('disabled');
            $('.right').prop('disabled', true);
            $(this).removeClass('disabled'); 
            $('.right').off('click', right_side);
            $('.left').on('click', function left_side(){
              $('.left').on('click', function(){
                if( ($(this) !== del_left) ) {
                  $(this).off('click', left_side);
                }
              });
              $('.left:not(this)').addClass('disabled').css({cursor: 'pointer'});
              $(this).removeClass('disabled');
              i = Number(i);
              res = Number(res);
              i = i + 1;
              $(this).addClass('left-back-'+i+'');
              var del_left = $(this);
              res = i;
              res = Number(res);
              $('.right').on('click', function right_side(){
                $('.center').css({display: 'none'});
                var del_right = $(this);
                $('.rig'),del_right.css({display: 'none'}),del_left.css({display: 'none'});
                $(this)/*append('<span class="rig" style="float: left;">'+res+'</span>')*/.off("click", ".right", right_side);
                $(this).addClass('right-back-'+res+'');
                $('.left').removeClass('disabled');
                $('.right').addClass('disabled');
                $('.right').prop('disabled', true);
                $(this).removeClass('disabled'); 
                $('.right').off('click', right_side);
                var l1 = $('.left-back-1').text();
                var l2 = $('.left-back-2').text();
                var l3 = $('.left-back-3').text();
                var l4 = $('.left-back-4').text();
                var r1 = $('.right-back-1').text();
                var r2 = $('.right-back-2').text();
                var r3 = $('.right-back-3').text();
                var r4 = $('.right-back-4').text();
                $('.after-append-two').append('<div class="container"><table class="table center-block"><tbody><tr class="success"><td class="l1">'+l1+'</td><td><i class="fa fa-arrows-h fa-1x center"></td><td class="r1">'+r1+'</td></tr><tr class="danger"><td class="l2">'+l2+'</td><td><i class="fa fa-arrows-h fa-1x center"></td><td class="r2">'+r2+'</td></tr><tr class="info"><td class="l3">'+l3+'</td><td><i class="fa fa-arrows-h fa-1x center"></td><td class="r3">'+r3+'</td></tr><tr class="warning"><td class="l4">'+l4+'</td><td><i class="fa fa-arrows-h fa-1x center"></td><td class="r4">'+r4+'</td></tr></tbody></table></div>');
                $('.FW-FW-center .container').css({width: '50%', color: 'black', fontSize: '15pt', display: 'block'}), $('.FW-FW-left').css({width: '35%'}), $('.FW-FW-right').css({width: '25%'});
              });
              $('.right').on('mouseover', function(){
                $(this).removeClass('disabled');
              })
              $('.right').on('mouseout', function(){
                $(this).addClass('disabled');
              })
              $('.left').off('click',left_side);
            });
          });
          $('.right').on('mouseover', function(){
            $(this).removeClass('disabled');
          })
          $('.right').on('mouseout', function(){
            $(this).addClass('disabled');
          })
          $('.left').off('click',left_side);
        });
      });
      $('.right').on('mouseover', function(){
        $(this).removeClass('disabled');
      })
      $('.right').on('mouseout', function(){
        $(this).addClass('disabled');
      })
      $('.left').off('click',left_side);
    });
  });
  $('.right').on('mouseover', function(){
    $(this).removeClass('disabled');
  })
  $('.right').on('mouseout', function(){
    $(this).addClass('disabled');
  })
  $('.left').off('click',left_side);
  });
})
var i = 0;
var res = 0;
$('.left').on('click', function left_side(){
  $('.left').on('click', function(){
    if( ($(this) !== del_left) ) {
      $(this).off('click', left_side);
    }
  });
  $('.left:not(this)').addClass('disabled').css({cursor: 'pointer'});
  $(this).removeClass('disabled');
  i = Number(i);
  res = Number(res);
  i = i + 1;
  $(this).addClass('left-back-'+i+'');
  var del_left = $(this);
  res = i;
  res = Number(res);
  $('.right').one('click', function right_side(){
    var del_right = $(this);
    $('.rig'),del_right.css({display: 'none'}),del_left.css({display: 'none'});
    $(this)/*append('<span class="rig" style="float: left;">'+res+'</span>')*/.off("click", ".right", right_side);
    $(this).addClass('right-back-'+res+'');
    $('.left').removeClass('disabled');
    $('.right').addClass('disabled');
    $('.right').prop('disabled', true);
    $(this).removeClass('disabled');
    $('.right').off('click', right_side);
    $('.left').on('click', function left_side(){
      $('.left').on('click', function(){
        if( ($(this) !== del_left) ) {
          $(this).off('click', left_side);
        }
      });
      $('.left:not(this)').addClass('disabled').css({cursor: 'pointer'});
      $(this).removeClass('disabled');
      i = Number(i);
      res = Number(res);
      i = i + 1;
      $(this).addClass('left-back-'+i+'');
      var del_left = $(this);
      res = i;
      res = Number(res);
      $('.right').on('click', function right_side(){
        var del_right = $(this);
        $('.rig'),del_right.css({display: 'none'}),del_left.css({display: 'none'});
        $(this)/*append('<span class="rig" style="float: left;">'+res+'</span>')*/.off("click", ".right", right_side);
        $(this).addClass('right-back-'+res+'');
        $('.left').removeClass('disabled');
        $('.right').addClass('disabled');
        $('.right').prop('disabled', true);
        $(this).removeClass('disabled'); 
        $('.right').off('click', right_side);
        $('.left').on('click', function left_side(){
          $('.left').on('click', function(){
            if( ($(this) !== del_left) ) {
              $(this).off('click', left_side);
            }
          });
          $('.left:not(this)').addClass('disabled').css({cursor: 'pointer'});
          $(this).removeClass('disabled');
          i = Number(i);
          res = Number(res);
          i = i + 1;
          $(this).addClass('left-back-'+i+'');
          var del_left = $(this);
          res = i;
          res = Number(res);
          $('.right').on('click', function right_side(){
            var del_right = $(this);
            $('.rig'),del_right.css({display: 'none'}),del_left.css({display: 'none'});
            $(this)/*append('<span class="rig" style="float: left;">'+res+'</span>')*/.off("click", ".right", right_side);
            $(this).addClass('right-back-'+res+'');
            $('.left').removeClass('disabled');
            $('.right').addClass('disabled');
            $('.right').prop('disabled', true);
            $(this).removeClass('disabled'); 
            $('.right').off('click', right_side);
            $('.left').on('click', function left_side(){
              $('.left').on('click', function(){
                if( ($(this) !== del_left) ) {
                  $(this).off('click', left_side);
                }
              });
              $('.left:not(this)').addClass('disabled').css({cursor: 'pointer'});
              $(this).removeClass('disabled');
              i = Number(i);
              res = Number(res);
              i = i + 1;
              $(this).addClass('left-back-'+i+'');
              var del_left = $(this);
              res = i;
              res = Number(res);
              $('.right').on('click', function right_side(){
                $('.center').css({display: 'none'});
                var del_right = $(this);
                $('.rig'),del_right.css({display: 'none'}),del_left.css({display: 'none'});
                $(this)/*append('<span class="rig" style="float: left;">'+res+'</span>')*/.off("click", ".right", right_side);
                $(this).addClass('right-back-'+res+'');
                $('.left').removeClass('disabled');
                $('.right').addClass('disabled');
                $('.right').prop('disabled', true);
                $(this).removeClass('disabled'); 
                $('.right').off('click', right_side);
                var l1 = $('.left-back-1').text();
                var l2 = $('.left-back-2').text();
                var l3 = $('.left-back-3').text();
                var l4 = $('.left-back-4').text();
                var r1 = $('.right-back-1').text();
                var r2 = $('.right-back-2').text();
                var r3 = $('.right-back-3').text();
                var r4 = $('.right-back-4').text();
                $('.after-append-two').append('<div class="container"><table class="table center-block"><tbody><tr class="success"><td class="l1">'+l1+'</td><td><i class="fa fa-arrows-h fa-1x center"></td><td class="r1">'+r1+'</td></tr><tr class="danger"><td class="l2">'+l2+'</td><td><i class="fa fa-arrows-h fa-1x center"></td><td class="r2">'+r2+'</td></tr><tr class="info"><td class="l3">'+l3+'</td><td><i class="fa fa-arrows-h fa-1x center"></td><td class="r3">'+r3+'</td></tr><tr class="warning"><td class="l4">'+l4+'</td><td><i class="fa fa-arrows-h fa-1x center"></td><td class="r4">'+r4+'</td></tr></tbody></table></div>');
                $('.FW-FW-center .container').css({width: '50%', color: 'black', fontSize: '15pt', display: 'block'}), $('.FW-FW-left').css({width: '35%'}), $('.FW-FW-right').css({width: '25%'});
              });
              $('.right').on('mouseover', function(){
                $(this).removeClass('disabled');
              })
              $('.right').on('mouseout', function(){
                $(this).addClass('disabled');
              })
              $('.left').off('click',left_side);
            });
          });
          $('.right').on('mouseover', function(){
            $(this).removeClass('disabled');
          })
          $('.right').on('mouseout', function(){
            $(this).addClass('disabled');
          })
          $('.left').off('click',left_side);
        });
      });
      $('.right').on('mouseover', function(){
        $(this).removeClass('disabled');
      })
      $('.right').on('mouseout', function(){
        $(this).addClass('disabled');
      })
      $('.left').off('click',left_side);
    });
  });
  $('.right').on('mouseover', function(){
    $(this).removeClass('disabled');
  })
  $('.right').on('mouseout', function(){
    $(this).addClass('disabled');
  })
  $('.left').off('click',left_side);
});
