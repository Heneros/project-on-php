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
        })
      });

  $(document).ready(function () {
    $('#myModal').on('hide.bs.modal', function () {
    $('#myInput').trigger('focus');
     })
  });

  
  $(document).ready(function () {
    $('#userModal').on('hide.bs.modal', function () {
    $('#myInput').trigger('focus');
     })
  });
