<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <?php require_once("../parts/link-top.php"); ?>
</head>
<body>

<?php require("../parts/nav.php"); ?>
<?php require("../parts/modal-authentication-window.php"); ?>
<?php require("../parts/modal-registration-window.php"); ?>
                    
<div class="container title-form-input" id="full-dialog">
  <div class="panel panel-primary">
    <div class="panel-heading">Read the Dialog several times</div>
    <div class="panel-body">Лікар: Доброго ранку! Що Вас турбує?</div>
    <div class="panel-body bg-panel">Пацієнт: Доброго ранку! Мене турбує головний біль, слабкість, біль
у області серця.</div>
	<div class="panel-body">Лікар: Як довго Ви перебуваєте у такому стані?</div>
	<div class="panel-body bg-panel">Пацієнт: Уже 3 дні. Спочатку думав, що біль мине, але, на жаль,
стало тільки гірше.</div>
	<div class="panel-body">Лікар: Які ліки Ви приймали?</div>
	<div class="panel-body bg-panel">Пацієнт: Я випив «Цитрамон-Дарниця» від головного болю та
«Корвалол» від болю у серці.</div>
	<div class="panel-body">Лікар: У Вашому стані цього недостатньо та і як Ви знаєте
самолікування ніколи до добра не приводило. Тому, зараз ідіть
зробіть кардіограму та рентген серця, а потім зі знімком прийдете
знов до мене. Після того, як я подивлюся результати рентгену, скажу
як далі Вам лікуватися.</div>
	<div class="panel-body bg-panel">Пацієнт: Дякую, лікарю. До побачення!</div>
	<div class="panel-body">Лікар: До побачення!</div>
	<div class="panel-footer">
	  <div class="progress">
	  	<div class="progress-bar progress-bar-default progress-bar-striped active" role="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 0%;" id="flex-progress-bar">
	  	</div>
	  </div>
	  <!--<div class="btn btn-success center-block" id="button-continue" onclick="closeDialog()"><span class="fa fa-arrow-circle-right fa-2x"></span></div>-->
	</div>
  </div>
</div>

<div class="container title-form-input display-none" id="less-dialog">
  <div class="panel panel-primary">
    <div class="panel-heading">Insert into the Dialog the missing words.</div>
    <div class="panel-body">Лікар: Доброго ранку! Що Вас турбує?</div>
    <div class="panel-body bg-panel">Пацієнт: Доброго ранку! Мене турбує <input type="text" class="input-dialog" pattern="\D \s">, <input type="text" class="input-dialog">, <input type="text" class="input-dialog">
у області серця.</div>
	<div class="panel-body">Лікар: Як довго Ви перебуваєте у <input type="text" class="input-dialog">?</div>
	<div class="panel-body bg-panel">Пацієнт: Уже 3 дні. Спочатку думав, що <input type="text" class="input-dialog">, але, на жаль,
стало тільки гірше.</div>
	<div class="panel-body">Лікар: Які <input type="text" class="input-dialog"> Ви приймали?</div>
	<div class="panel-body bg-panel">Пацієнт: Я випив «Цитрамон-Дарниця» від <input type="text" class="input-dialog"> та
«Корвалол» від <input type="text" class="input-dialog">.</div>
	<div class="panel-body">Лікар: У Вашому стані цього недостатньо та і як Ви знаєте
<input type="text" class="input-dialog"> ніколи до добра не приводило. Тому, зараз ідіть зробіть <input type="text" class="input-dialog"> та <input type="text" class="input-dialog"> серця, а потім зі знімком прийдете
знов до мене. Після того, як я подивлюся результати рентгену, скажу
як далі Вам <input type="text" class="input-dialog">.</div>
	<div class="panel-body bg-panel">Пацієнт: Дякую, <input type="text" class="input-dialog">. До побачення!</div>
	<div class="panel-body">Лікар: До побачення!</div>
	<div class="panel-footer">
	  <div class="progress">
	  	<div class="progress-bar progress-bar-info progress-bar-striped active" role="progress-bar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
	  	</div>
	  </div>
	  <div class="btn btn-info center-block" role="button" onclick="open_dialog_section()"><span class="fa fa-check-circle fa-2x"></span></div>
	</div>
  </div>
</div>
<script src="../../js/link-next.js"></script>
<script src="../../js/dialog-game.js"></script>
<?php require("../parts/link-bottom.php"); ?>
<script src="../../js/modal-window.js"></script>
</body>
</html>