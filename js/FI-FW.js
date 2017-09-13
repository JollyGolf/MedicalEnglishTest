var i = 0;
$(".img-left").each(function(){ i++; $(this).attr("id","left-fi-fw-"+i); });

var j = 0;
$(".word-right").each(function(){ j++; $(this).attr("id","right-fi-fw-"+j); });

if( $('#left-fi-fw-1')) $('#left-fi-fw-1', function(){ $('#left-fi-fw-1').addClass('left-fi-fw-1'); });
if( $('#left-fi-fw-2')) $('#left-fi-fw-2', function(){ $('#left-fi-fw-2').addClass('left-fi-fw-1'); });
if( $('#left-fi-fw-3')) $('#left-fi-fw-3', function(){ $('#left-fi-fw-3').addClass('left-fi-fw-1'); });
if( $('#left-fi-fw-4')) $('#left-fi-fw-4', function(){ $('#left-fi-fw-4').addClass('left-fi-fw-1'); });

if( $('#right-fi-fw-1')) $('#right-fi-fw-1', function(){ $('#right-fi-fw-1').addClass('right-fi-fw-1'); });
if( $('#right-fi-fw-2')) $('#right-fi-fw-2', function(){ $('#right-fi-fw-2').addClass('right-fi-fw-1'); });
if( $('#right-fi-fw-3')) $('#right-fi-fw-3', function(){ $('#right-fi-fw-3').addClass('right-fi-fw-1'); });
if( $('#right-fi-fw-4')) $('#right-fi-fw-4', function(){ $('#right-fi-fw-4').addClass('right-fi-fw-1'); });
// 1st iteration game
if( $('#left-fi-fw-5')) $('#left-fi-fw-5', function(){ $('#left-fi-fw-5').addClass('left-fi-fw-2'); });
if( $('#left-fi-fw-6')) $('#left-fi-fw-6', function(){ $('#left-fi-fw-6').addClass('left-fi-fw-2'); });
if( $('#left-fi-fw-7')) $('#left-fi-fw-7', function(){ $('#left-fi-fw-7').addClass('left-fi-fw-2'); });
if( $('#left-fi-fw-8')) $('#left-fi-fw-8', function(){ $('#left-fi-fw-8').addClass('left-fi-fw-2'); });

if( $('#right-fi-fw-5')) $('#right-fi-fw-5', function(){ $('#right-fi-fw-5').addClass('right-fi-fw-2'); });
if( $('#right-fi-fw-6')) $('#right-fi-fw-6', function(){ $('#right-fi-fw-6').addClass('right-fi-fw-2'); });
if( $('#right-fi-fw-7')) $('#right-fi-fw-7', function(){ $('#right-fi-fw-7').addClass('right-fi-fw-2'); });
if( $('#right-fi-fw-8')) $('#right-fi-fw-8', function(){ $('#right-fi-fw-8').addClass('right-fi-fw-2'); });
// 2st iteration game
if( $('#left-fi-fw-9')) $('#left-fi-fw-9', function(){ $('#left-fi-fw-9').addClass('left-fi-fw-3'); });
if( $('#left-fi-fw-10')) $('#left-fi-fw-10', function(){ $('#left-fi-fw-10').addClass('left-fi-fw-3'); });
if( $('#left-fi-fw-11')) $('#left-fi-fw-11', function(){ $('#left-fi-fw-11').addClass('left-fi-fw-3'); });
if( $('#left-fi-fw-12')) $('#left-fi-fw-12', function(){ $('#left-fi-fw-12').addClass('left-fi-fw-3'); });

if( $('#right-fi-fw-9')) $('#right-fi-fw-9', function(){ $('#right-fi-fw-9').addClass('right-fi-fw-3'); });
if( $('#right-fi-fw-10')) $('#right-fi-fw-10', function(){ $('#right-fi-fw-10').addClass('right-fi-fw-3'); });
if( $('#right-fi-fw-11')) $('#right-fi-fw-11', function(){ $('#right-fi-fw-11').addClass('right-fi-fw-3'); });
if( $('#right-fi-fw-12')) $('#right-fi-fw-12', function(){ $('#right-fi-fw-12').addClass('right-fi-fw-3'); });
// 3st iteration game

if( ( $('.left-fi-fw-1') ) ) { $('.left-fi-fw-1', fi_fw_1); }
if( ( $('.left-fi-fw-2') ) ) { $('.left-fi-fw-2', fi_fw_2); }
if( ( $('.left-fi-fw-3') ) ) { $('.left-fi-fw-3', fi_fw_3); }

type = $('.type').text();
type = type.split(',')[0];
type_game = $('.type-game').text();
type_game = type_game.split(',')[0];

function fi_fw_1(){ var lll1; var rrr1; var lll2; var rrr2; var lll3; var rrr3; var lll4; var rrr4;
$('.left-fi-fw-1').one('click', function left_side(){
  if(lll1) off('click', left_side);
  $(this).addClass('one-krop-bg-green');
  url_image1_fi_fw_1 = $(this).find('img').attr('src');
  url_image1_fi_fw_1 = url_image1_fi_fw_1.substring(6);
  var lll1 = $(this);
  $(this).off('click', '.right-fi-fw-1', left_side);
  $('.left-fi-fw-1').off('click', left_side);
  $('.right-fi-fw-1').one('click', function right_side(){
    //if(rrr1) off('click', right_side);
    $(this).addClass('one-krop-bg-green');
    word1_fw_fw_1 = $(this).text();
    var rrr1 = $(this);
    lll1.css({ display: 'none'}),rrr1.css({ display: 'none'});
    $(this).off('click', '.right-fi-fw-1', right_side);
    $('.right-fi-fw-1').off('click', right_side);
    $('.left-fi-fw-1').one('click', function left_side(){
      if(lll2) off('click', left_side);
      $(this).addClass('one-krop-bg-red');
      url_image2_fi_fw_1 = $(this).find('img').attr('src');
      url_image2_fi_fw_1 = url_image2_fi_fw_1.substring(6);
      var lll2 = $(this);
      $(this).off('click', '.right-fi-fw-1', left_side);
      $('.left-fi-fw-1').off('click', left_side);
      $('.right-fi-fw-1').one('click', function right_side(){
        if(rrr2) off('click', right_side);
        $(this).addClass('one-krop-bg-red');
        word2_fw_fw_1 = $(this).text();
        var rrr2 = $(this);
        lll2.css({ display: 'none'}),rrr2.css({ display: 'none'});
        $(this).off('click', '.right-fi-fw-1', right_side);
        $('.right-fi-fw-1').off('click', right_side);
        $('.left-fi-fw-1').one('click', function left_side(){
          if(lll3) off('click', left_side);
          $(this).addClass('one-krop-bg-blue');
          url_image3_fi_fw_1 = $(this).find('img').attr('src');
          url_image3_fi_fw_1 = url_image3_fi_fw_1.substring(6);
          var lll3 = $(this);
          $(this).off('click', '.right-fi-fw-1', left_side);
          $('.left-fi-fw-1').off('click', left_side);
          $('.right-fi-fw-1').one('click', function right_side(){
            if(rrr3) off('click', right_side);
            $(this).addClass('one-krop-bg-blue');
            word3_fw_fw_1 = $(this).text();
            var rrr3 = $(this);
            lll3.css({ display: 'none'}),rrr3.css({ display: 'none'});
            $(this).off('click', '.right-fi-fw-1', right_side);
            $('.right-fi-fw-1').off('click', right_side);
            $('.left-fi-fw-1').one('click', function left_side(){
              if(lll4) off('click', left_side);
              $(this).addClass('one-krop-bg-yellow');
              url_image4_fi_fw_1 = $(this).find('img').attr('src');
              url_image4_fi_fw_1 = url_image4_fi_fw_1.substring(6);
              var lll4 = $(this);
              $(this).off('click', '.right-fw-fw-1', left_side);
              $('.left-fi-fw-1').off('click', left_side);
              $('.right-fi-fw-1').one('click', function right_side(){
                if(rrr4) off('click', right_side);
                $(this).addClass('one-krop-bg-yellow');
                word4_fw_fw_1 = $(this).text();
                var rrr4 = $(this);
                lll4.css({ display: 'none'}),rrr4.css({ display: 'none'});
                $('.FW-FW-center').css({ display: 'none'});
                lll1.css({ display: 'block'}),rrr1.css({ display: 'block'});
                lll2.css({ display: 'block'}),rrr2.css({ display: 'block'});
                lll3.css({ display: 'block'}),rrr3.css({ display: 'block'});
                lll4.css({ display: 'block'}),rrr4.css({ display: 'block'});
                array_fi_fw_1 = { 
                                  iteration : 1,
                                  url_image_1 : url_image1_fi_fw_1,
                                  url_image_2 : url_image2_fi_fw_1,
                                  url_image_3 : url_image3_fi_fw_1,
                                  url_image_4 : url_image4_fi_fw_1,
                                  word_1 : word1_fw_fw_1,
                                  word_2 : word2_fw_fw_1,
                                  word_3 : word3_fw_fw_1,
                                  word_4 : word4_fw_fw_1,
                                  type : type, 
                                  type_game : type_game 
                                };
                console.log(array_fi_fw_1);
                $('.info-fw-fi-0').css({ display: 'none'});
                $('.success-fi-fw-0').css({ display: 'block'});
                $('.FW-FW-center').css({ display: 'block'});
                $(this).off('click', '.right-fi-fw-1', right_side);
                $('.right-fi-fw-1').off('click', right_side);
              });
            });
          });
        });
      });
    });
  });
});
}

function fi_fw_2(){ var lll11; var rrr11; var lll22; var rrr22; var lll33; var rrr33; var lll44; var rrr44;
$('.left-fi-fw-2').one('click', function left_side(){
  if(lll11) off('click', left_side);
  $(this).addClass('one-krop-bg-green');
  url_image1_fi_fw_2 = $(this).find('img').attr('src');
  url_image1_fi_fw_2 = url_image1_fi_fw_2.substring(6);
  var lll11 = $(this);
  $(this).off('click', '.right-fi-fw-2', left_side);
  $('.left-fi-fw-2').off('click', left_side);
  $('.right-fi-fw-2').one('click', function right_side(){
    //if(rrr11) off('click', right_side);
    $(this).addClass('one-krop-bg-green');
    word1_fw_fw_2 = $(this).text();
    var rrr11 = $(this);
    lll11.css({ display: 'none'}),rrr11.css({ display: 'none'});
    $(this).off('click', '.right-fi-fw-2', right_side);
    $('.right-fi-fw-2').off('click', right_side);
    $('.left-fi-fw-2').one('click', function left_side(){
      if(lll22) off('click', left_side);
      $(this).addClass('one-krop-bg-red');
      url_image2_fi_fw_2 = $(this).find('img').attr('src');
      url_image2_fi_fw_2 = url_image2_fi_fw_2.substring(6);
      var lll22 = $(this);
      $(this).off('click', '.right-fi-fw-2', left_side);
      $('.left-fi-fw-2').off('click', left_side);
      $('.right-fi-fw-2').one('click', function right_side(){
        if(rrr22) off('click', right_side);
        $(this).addClass('one-krop-bg-red');
        word2_fw_fw_2 = $(this).text();
        var rrr22 = $(this);
        lll22.css({ display: 'none'}),rrr22.css({ display: 'none'});
        $(this).off('click', '.right-fi-fw-2', right_side);
        $('.right-fi-fw-2').off('click', right_side);
        $('.left-fi-fw-2').one('click', function left_side(){
          if(lll33) off('click', left_side);
          $(this).addClass('one-krop-bg-blue');
          url_image3_fi_fw_2 = $(this).find('img').attr('src');
          url_image3_fi_fw_2 = url_image3_fi_fw_2.substring(6);
          var lll33 = $(this);
          $(this).off('click', '.right-fi-fw-2', left_side);
          $('.left-fi-fw-2').off('click', left_side);
          $('.right-fi-fw-2').one('click', function right_side(){
            if(rrr33) off('click', right_side);
            $(this).addClass('one-krop-bg-blue');
            word3_fw_fw_2 = $(this).text();
            var rrr33 = $(this);
            lll33.css({ display: 'none'}),rrr33.css({ display: 'none'});
            $(this).off('click', '.right-fi-fw-2', right_side);
            $('.right-fi-fw-2').off('click', right_side);
            $('.left-fi-fw-2').one('click', function left_side(){
              if(lll44) off('click', left_side);
              $(this).addClass('one-krop-bg-yellow');
              url_image4_fi_fw_2 = $(this).find('img').attr('src');
              url_image4_fi_fw_2 = url_image4_fi_fw_2.substring(6);
              var lll44 = $(this);
              $(this).off('click', '.right-fi-fw-2', left_side);
              $('.left-fi-fw-2').off('click', left_side);
              $('.right-fi-fw-2').one('click', function right_side(){
                if(rrr44) off('click', right_side);
                $(this).addClass('one-krop-bg-yellow');
                word4_fw_fw_2 = $(this).text();
                var rrr44 = $(this);
                lll44.css({ display: 'none'}),rrr44.css({ display: 'none'});
                $('.FW-FW-center').css({ display: 'none'});
                lll11.css({ display: 'block'}),rrr11.css({ display: 'block'});
                lll22.css({ display: 'block'}),rrr22.css({ display: 'block'});
                lll33.css({ display: 'block'}),rrr33.css({ display: 'block'});
                lll44.css({ display: 'block'}),rrr44.css({ display: 'block'});
                array_fi_fw_2 = { 
                                  iteration : 2,
                                  url_image_1 : url_image1_fi_fw_2,
                                  url_image_2 : url_image2_fi_fw_2,
                                  url_image_3 : url_image3_fi_fw_2,
                                  url_image_4 : url_image4_fi_fw_2,
                                  word_1 : word1_fw_fw_2,
                                  word_2 : word2_fw_fw_2,
                                  word_3 : word3_fw_fw_2,
                                  word_4 : word4_fw_fw_2,
                                  type : type, 
                                  type_game : type_game 
                                };
                console.log(array_fi_fw_2);
                $('.info-fi-fw-1').css({ display: 'none'});
                $('.success-fi-fw-1').css({ display: 'block'});
                $('.FW-FW-center').css({ display: 'block'});
                $(this).off('click', '.right-fi-fw-2', right_side);
                $('.right-fi-fw-2').off('click', right_side);
              });
            });
          });
        });
      });
    });
  });
});
}

function fi_fw_3(){ var lll111; var rrr111; var lll222; var rrr222; var lll333; var rrr333; var lll444; var rrr444;
$('.left-fi-fw-3').one('click', function left_side(){
  if(lll111) off('click', left_side);
  $(this).addClass('one-krop-bg-green');
  url_image1_fi_fw_3 = $(this).find('img').attr('src');
  url_image1_fi_fw_3 = url_image1_fi_fw_3.substring(6);
  var lll111 = $(this);
  $(this).off('click', '.right-fi-fw-3', left_side);
  $('.left-fi-fw-3').off('click', left_side);
  $('.right-fi-fw-3').one('click', function right_side(){
    //if(rrr11) off('click', right_side);
    $(this).addClass('one-krop-bg-green');
    word1_fw_fw_3 = $(this).text();
    var rrr111 = $(this);
    lll111.css({ display: 'none'}),rrr111.css({ display: 'none'});
    $(this).off('click', '.right-fi-fw-3', right_side);
    $('.right-fi-fw-3').off('click', right_side);
    $('.left-fi-fw-3').one('click', function left_side(){
      if(lll222) off('click', left_side);
      $(this).addClass('one-krop-bg-red');
      url_image2_fi_fw_3 = $(this).find('img').attr('src');
      url_image2_fi_fw_3 = url_image2_fi_fw_3.substring(6);
      var lll222 = $(this);
      $(this).off('click', '.right-fi-fw-3', left_side);
      $('.left-fi-fw-3').off('click', left_side);
      $('.right-fi-fw-3').one('click', function right_side(){
        if(rrr222) off('click', right_side);
        $(this).addClass('one-krop-bg-red');
        word2_fw_fw_3 = $(this).text();
        var rrr222 = $(this);
        lll222.css({ display: 'none'}),rrr222.css({ display: 'none'});
        $(this).off('click', '.right-fi-fw-3', right_side);
        $('.right-fi-fw-3').off('click', right_side);
        $('.left-fi-fw-3').one('click', function left_side(){
          if(lll333) off('click', left_side);
          $(this).addClass('one-krop-bg-blue');
          url_image3_fi_fw_3 = $(this).find('img').attr('src');
          url_image3_fi_fw_3 = url_image3_fi_fw_3.substring(6);
          var lll333 = $(this);
          $(this).off('click', '.right-fi-fw-3', left_side);
          $('.left-fi-fw-3').off('click', left_side);
          $('.right-fi-fw-3').one('click', function right_side(){
            if(rrr333) off('click', right_side);
            $(this).addClass('one-krop-bg-blue');
            word3_fw_fw_3 = $(this).text();
            var rrr333 = $(this);
            lll333.css({ display: 'none'}),rrr333.css({ display: 'none'});
            $(this).off('click', '.right-fi-fw-3', right_side);
            $('.right-fi-fw-3').off('click', right_side);
            $('.left-fi-fw-3').one('click', function left_side(){
              if(lll444) off('click', left_side);
              $(this).addClass('one-krop-bg-yellow');
              url_image4_fi_fw_3 = $(this).find('img').attr('src');
              url_image4_fi_fw_3 = url_image4_fi_fw_3.substring(6);
              var lll444 = $(this);
              $(this).off('click', '.right-fi-fw-3', left_side);
              $('.left-fi-fw-3').off('click', left_side);
              $('.right-fi-fw-3').one('click', function right_side(){
                if(rrr444) off('click', right_side);
                $(this).addClass('one-krop-bg-yellow');
                word4_fw_fw_3 = $(this).text();
                var rrr444 = $(this);
                lll444.css({ display: 'none'}),rrr444.css({ display: 'none'});
                $('.FW-FW-center').css({ display: 'none'});
                lll111.css({ display: 'block'}),rrr111.css({ display: 'block'});
                lll222.css({ display: 'block'}),rrr222.css({ display: 'block'});
                lll333.css({ display: 'block'}),rrr333.css({ display: 'block'});
                lll444.css({ display: 'block'}),rrr444.css({ display: 'block'});
                array_fi_fw_3 = { 
                                  iteration : 3,
                                  url_image_1 : url_image1_fi_fw_3,
                                  url_image_2 : url_image2_fi_fw_3,
                                  url_image_3 : url_image3_fi_fw_3,
                                  url_image_4 : url_image4_fi_fw_3,
                                  word_1 : word1_fw_fw_3,
                                  word_2 : word2_fw_fw_3,
                                  word_3 : word3_fw_fw_3,
                                  word_4 : word4_fw_fw_3,
                                  type : type, 
                                  type_game : type_game 
                                };
                console.log(array_fi_fw_3);
                $('.info-fi-fw-2').css({ display: 'none'});
                $('.success-fi-fw-2').css({ display: 'block'});
                $('.FW-FW-center').css({ display: 'block'});
                $(this).off('click', '.right-fi-fw-3', right_side);
                $('.right-fi-fw-3').off('click', right_side);
              });
            });
          });
        });
      });
    });
  });
});
}
