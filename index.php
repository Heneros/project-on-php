<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Магазин Rozetka</title>
  <meta name="description" content="Example online-shop">
  <meta name="keywords" content="shop">
  <meta name="author" content="Heneros">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/ic" href="assets/img/favicon.ico">
  <link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/media.css">
  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
</head>
<body>
	 <nav>	 
    <div class="container">
      <div class="row">
      <!--First level navbar-->
         <div class="phones ">
          <i class="fa fa-phone fa-lg "></i> 
         (333) 333-333-2222,
         (321) 32320-03 545-46,
         (334) 2345-43-3542
   </div>
   <div class="links_languages">
        <a href="#!"  class="links_nav disabled" id="not_active">RU</a> 
        <a href="#!" class="links_nav">UA</a>
   </div>
      <ul class="nav-top-menu">
        <li class="top-list">
          <a href="#!">Вопросы и ответы</a>
        </li>
        <li class="top-list">
          <a href="#!">Кредит</a>
        </li>
        <li class="top-list">
          <a href="#!">Доставка и оплата</a>
        </li>
        <li class="top-list">
          <a href="#!">Гарантия</a>
        </li>
        <li class="top-list">
          <a href="#!">Контакты</a>
        </li>
        <li class="top-list">
          <a href="#!">
          <i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
          Отследить заказ
        </a>
        </li>
        <li class="top-list">
          <a href="#!">Продавать на Розетке</a>
        </li>
      </ul>
</div>
      <!--End First  level navbar-->

      <!--Second level navbar-->
  <div class="user-city ">
    Город <br> 
    <span  data-toggle="modal" data-target="#myModal">Киев</span>
    <i class="fa fa-chevron-down" aria-hidden="true"></i>
     </div>

   <div class="logo-site">
     <a href="#!">
        <img src="assets/img/logo-dark.svg" alt="logo" title="logo">    
      </a>
   </div>

   <div class="form-search">
   <i class="fa fa-search fa-lg" aria-hidden="true"></i>
    <input type="search" class="input-search" placeholder="Поиск" aria-label="Search">
    <button class="btn-search" type="submit">Поиск</button>
       </div>

 
    </div>
      <!--End Second level navbar-->



    <!--Outside the container-->
    <div class="user-register">
    Здравствуйте,
  <a href="#!">
 <i class="fa fa-user" aria-hidden="true"></i>
  войдите в личный кабинет</a>
  </div>
</nav>


    <div id="carousel">
      <a href="#"><img src="assets/img/1.jpg" id="item-1"></a>
      <a href="#"><img src="assets/img/1.jpg" id="item-2"></a>
      <a href="#"><img src="assets/img/1.jpg" id="item-3"></a>
      <a href="#"><img src="assets/img/1.jpg" id="item-4"></a>
      <a href="#"><img src="assets/img/1.jpg" id="item-5"></a>
      <a href="#"><img src="assets/img/1.jpg" id="item-6"></a>
      <a href="#"><img src="assets/img/1.jpg" id="item-7"></a>
      <a href="#"><img src="assets/img/1.jpg" id="item-8"></a>
      <a href="#"><img src="assets/img/1.jpg" id="item-9"></a>
       <a href="#" id="prev">
       	<i class="fa fa-angle-left fa-5x"></i>
       </a>  
       <a href="#" id="next">
       	<i class="fa fa-angle-right fa-5x"></i>
       </a>
    </div>


    <!--Modal window from navbar-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!--End Modal window from navbar-->

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/jquery.waterwheelCarousel.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>