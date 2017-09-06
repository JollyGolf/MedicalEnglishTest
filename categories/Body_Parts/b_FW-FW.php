<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="../../css/select-game.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" href="../../font/font.css">
  <link rel="stylesheet" href="../../libs/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/navigation.css">
  <link rel="stylesheet" href="../../css/desc.css">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container name-brand">
    <div class="navbar-header">
      <a href="../../index.php" class="navbar-brand text-success"><h3><span class="text-info">ENGLISH IN MEDICINE</span></h3></a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="../../index.php"><h3><span class="text-primary">Home</span></h1></a></li>
        <li><a href="../../sections.php"><h3><span class="text-primary">Sections</span></h1></a></li>
        <li><a href="../../vocabulary.php"><h3><span class="text-primary">Vocabluary</span></h1></a></li>
      </ul>
      <div class="log-in-nav">
        <a>
          <span class="fa fa-address-book fa-3x cursor-pointer" data-toggle="modal" data-target="#modal-window-auth"></span>
        </a>
        <input type="text" class="btn btn-primary">
        <a>
          <span class="fa fa-address-book-o fa-3x fa-flip-horizontal cursor-pointer" data-toggle="modal" data-target="#modal-window-reg"></span>
        </a>
      </div>
    </div>
  </div>
</nav>
<?php require("../../parts/modal-authentication-window.php"); ?>
<?php require("../../parts/modal-registration-window.php"); ?>

<div class="container-fluid">
  <div class="panel panel-info">
    <div class="panel-heading description_for_game">Select the word on the left side, then select the right word on the right side, then a couple of these words will disappear. Do the same until all the words on the left and right disappear. If you think you made a mistake, click the "Refresh" button. </div>
  </div>
</div>

<div class="container">
  <span class="after-append"></span>
  <div class="FW-FW">
    <div class="FW-FW-left">
      <div class="btn btn-primary btn-lg btn-block select-word left">Facebook</div>
      <div class="btn btn-primary btn-lg btn-block select-word left">VKontacte</div>
      <div class="btn btn-primary btn-lg btn-block select-word left">Twitter</div>
      <div class="btn btn-primary btn-lg btn-block select-word left">Instagram</div>
    </div>
    <div class="FW-FW-center">
      <span class="fa fa-code-fork fa-3x fa-pulse FW-center"></span>
    </div>
    <div class="FW-FW-right">
      <div class="btn btn-primary btn-lg btn-block select-word right">Facebook</div>
      <div class="btn btn-primary btn-lg btn-block select-word right">VKontacte</div>
      <div class="btn btn-primary btn-lg btn-block select-word right">Twitter</div>
      <div class="btn btn-primary btn-lg btn-block select-word right">Instagram</div>
    </div>
  </div><br><br>
  <div class="btn-check-clear center-block" style="display: flex;flex-direction: row;justify-content: space-around;align-items: center;">
    <button class="btn btn-success btn-lg btn-block center-block btn-clear">
      <span class="fa fa-shower"></span> Refresh
    </button><br>
  </div>
</div>

<br><br>
<div class="btn btn-danger btn-block disabled" style="cursor: default;"></div>
<br><br>

<button class="btn btn-warning btn-lg btn-block FW-FW-right btn-check"><span class="fa fa-check-circle"></span> Check</button>

<?php require("../../parts/link-bottom.php"); ?>

<script type="text/javascript">
$('.btn-clear').on('click', function add_fw_fw(){
  $('.FW-FW').remove();
  i = 0;
  res = 0;
  $('.after-append').append('<div class="FW-FW"><div class="FW-FW-left" id="collapse-group"><div class="btn btn-primary btn-lg btn-block select-word left">Facebook</div><div class="btn btn-primary btn-lg btn-block select-word left">VKontacte</div><div class="btn btn-primary btn-lg btn-block select-word left">Twitter</div><div class="btn btn-primary btn-lg btn-block select-word left">Instagram</div></div><div class="FW-FW-center"><span class="fa fa-code-fork fa-3x fa-pulse"></span></div><div class="FW-FW-right"><div class="btn btn-primary btn-lg btn-block select-word right">Facebook</div><div class="btn btn-primary btn-lg btn-block select-word right">VKontacte</div><div class="btn btn-primary btn-lg btn-block select-word right">Twitter</div><div class="btn btn-primary btn-lg btn-block select-word right">Instagram</div></div></div>');
  var i = 0;
  var res = 0;
  $('.left').on('click', function left_side(){
    $('.left:not(this)').addClass('disabled').css({cursor: 'pointer'});
    $(this).removeClass('disabled');
    i = Number(i);
    res = Number(res);
    i = i + 1;
    $(this).addClass('left-back-'+i+'');
    var del_left = $(this);
    //alert('i = '+i);
    res = i;
    res = Number(res);
    //alert('res = '+res);
    $('.right').on('click', function right_side(){
      //res = res.toString().substr(0, 1);
      $('.rig'),$(this).css({display: 'none'}),del_left.css({display: 'none'});
      $(this).append('<span class="rig" style="float: left;">'+res+'</span>').off("click", ".right", right_side);
      $(this).addClass('right-back-'+res+'');
      //alert("res = "+res);
      //alert("i = "+i);
      /* substr(0, 1) */
      $('.left').removeClass('disabled');
      $('.right').addClass('disabled');
      $('.right').prop('disabled', true);
      $(this).removeClass('disabled');
    });
    $('.right').on('mouseover', function(){
      $(this).removeClass('disabled');
    })
      $('.right').on('mouseout', function(){
      $(this).addClass('disabled');
    })
  });
})

var i = 0;
var res = 0;
$('.left').on('click', function left_side(){
  $('.left:not(this)').addClass('disabled').css({cursor: 'pointer'});
  $(this).removeClass('disabled');
  i = Number(i);
  res = Number(res);
  i = i + 1;
  $(this).addClass('left-back-'+i+'');
  var del_left = $(this);
  //alert('i = '+i);
  res = i;
  res = Number(res);
  //alert('res = '+res);
  $('.right').on('click', function right_side(){
    //res = res.toString().substr(0, 1);
    $('.rig'),$(this).css({display: 'none'}),del_left.css({display: 'none'});
    $(this).append('<span class="rig" style="float: left;">'+res+'</span>').off("click", ".right", right_side);
    $(this).addClass('right-back-'+res+'');
    //alert("res = "+res);
    //alert("i = "+i);
     /* substr(0, 1) */
    $('.left').removeClass('disabled');
    $('.right').addClass('disabled');
    $('.right').prop('disabled', true);
    $(this).removeClass('disabled');
  });
  $('.right').on('mouseover', function(){
    $(this).removeClass('disabled');
  })
  $('.right').on('mouseout', function(){
    $(this).addClass('disabled');
  })
});

</script>
</body>
</html>