$(document).ready(function() {

  $('.game-entry').on('click', function() {
    $(this).addClass('active');
    $('body').addClass('fixed');
  });
});