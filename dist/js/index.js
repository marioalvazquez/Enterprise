$(document).ready(function(){
  $('.exhibitors-card').hover(function(){
    $(this).find('.col-sm-12').addClass('active');
  },function(){
    $(this).find('.col-sm-12').removeClass('active');
  });
});
