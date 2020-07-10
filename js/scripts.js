$(document).ready(function(){
  $('form.sfwd-mark-complete').hide();
  $('#yes-btn-instruction').hide();
  $('#no-btn-instruction').hide();
  $('#reveal-complete-btn').on('click', function(){
    $('form.sfwd-mark-complete').show();
    $('#yes-btn-instruction').show();
  });
  $('#incomplete-btn').on('click', function(){
  	$('#no-btn-instruction').show();
  });
});
