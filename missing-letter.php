<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <? require("parts/link-top.php"); ?>
</head>
<body>

<? require("parts/nav.php"); ?>
<? require("parts/modal-authentication-window.php"); ?>
<? require("parts/modal-registration-window.php"); ?>

<div class="container title-form-input">
  <div class="panel panel-warning">
    <div class="panel-heading">Insert into the words the missing letters "л" or "р".</div>
    <div class="panel-body">
    А<input type="text" class="input-miss-letter" id="miss-letter-1">е<input type="text" class="input-miss-letter" id="miss-letter-2">гія,
    анестезіо<input type="text" class="input-miss-letter" id="miss-letter-3">ог,
    г<input type="text" class="input-miss-letter" id="miss-letter-4">ип,
    к<input type="text" class="input-miss-letter" id="miss-letter-5">ючиця,
    ку<input type="text" class="input-miss-letter" id="miss-letter-6">ак,
    ліка<input type="text" class="input-miss-letter" id="miss-letter-7">,
    <input type="text" class="input-miss-letter" id="miss-letter-8">ікування,
    ни<input type="text" class="input-miss-letter" id="miss-letter-9">ка,
    ни<input type="text" class="input-miss-letter" id="miss-letter-10">ка,
    підбо<input type="text" class="input-miss-letter" id="miss-letter-11">іддя,
    п<input type="text" class="input-miss-letter" id="miss-letter-12">ече,
    по<input type="text" class="input-miss-letter" id="miss-letter-13">ік<input type="text" class="input-miss-letter" maxlength="1" id="miss-letter-14">ініка,
    <input type="text" class="input-miss-letter" id="miss-letter-15">одимка,
    <input type="text" class="input-miss-letter" id="miss-letter-16">от,
    <input type="text" class="input-miss-letter" id="miss-letter-17">ука,
    стомато<input type="text" class="input-miss-letter" id="miss-letter-18">ог,
    ст<input type="text" class="input-miss-letter" id="miss-letter-19">ес,
    ті<input type="text" class="input-miss-letter" id="miss-letter-20">о,
    хво<input type="text" class="input-miss-letter" id="miss-letter-21">ий,
    хі<input type="text" class="input-miss-letter" id="miss-letter-22">у<input type="text" class="input-miss-letter" maxlength="1" id="miss-letter-23">гія,
    х<input type="text" class="input-miss-letter" id="miss-letter-24">ебет,
    за<input type="text" class="input-miss-letter" id="miss-letter-25">оза.
  </div>
  <div class="panel-footer">
    <div class="progress">
      <div class="progress-bar progress-bar-success progress-bar-striped active" id="step-progress-bar" role="progress-bar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
      </div>
    </div>
    <div class="btn btn-warning center-block" role="button" id="button-wait"><span class="fa fa-spinner fa-2x fa-pulse"></span></div>
    <div class="btn btn-success center-block" role="button"  id="button-continue" onclick="open_section()" style="display: none;"><span class="fa fa-check-circle fa-2x"></span></div>
  </div>
  </div>
</div>
<script src="js/link-next.js"></script>
<? require("parts/link-bottom.php"); ?>
<script src="js/modal-window.js"></script>
<script src="js/missing-letter.js"></script>
</body>
</html>