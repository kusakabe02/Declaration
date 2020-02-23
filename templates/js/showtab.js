$(function() {

  $('.tab li').click(function() {
    var index = $('.tab li').index(this);
    $('.tab li').removeClass('active');
    $(this).addClass('active');
    $('.area ul').removeClass('view').eq(index).addClass('view');
  });
});
