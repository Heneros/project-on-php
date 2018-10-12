  $(document).ready(function () {
        var carousel = $("#carousel").waterwheelCarousel({
          flankingItems: 1,
        });

        $('#prev').bind('click', function () {
          carousel.prev();
          return false
        });

        $('#next').bind('click', function () {
          carousel.next();
          return false;
        });
      });



$('document').ready(function(){
  $('#button').on('click', function(){
     $('.modal').addClass('modal-is-active');
     $('.container').addClass('container-is-blurred');
  });
  
    $('.modal').on('click', function(){
        if($('.modal').hasClass('modal-is-active'))
        {
         $('.modal').removeClass('modal-is-active');
         $('.container').removeClass('container-is-blurred');
        }
    });    
});
