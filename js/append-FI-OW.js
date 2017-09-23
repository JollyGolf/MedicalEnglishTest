  var summ = $('.summ').text();
  var success = $('.success').text();
  var warning = $('.warning').text();
  var percent = 100/summ*success;
  percent = percent.toFixed(0);
  percent = percent + '%';
  $('.small-letter-names').text(percent);