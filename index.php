<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Магазин Rozetka</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="icon" type="image/ic" href="assets/img/favicon.ico">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/media.css">
  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
</head>
<body>
	 <nav>	 
    <div class="container">
         <div class="phones mb-2">
          <i class="fa fa-phone fa-lg "></i> 
         (333) 333-333-2222,
         (321) 32320-03 545-46,
         (334) 2345-43-3542
   </div>
   <div class="links_languages">
        <a href="#!"  class="links_nav disabled" id="not_active">RU</a> 
        <a href="#!" class="links_nav">UA</a>
   </div>
      <a href="index.php" class="navbar-brand ml-7">
        <img src="assets/img/192.png" class="logo" alt="logo" title="logo">    
      </a>
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
          Отследить заказ</a>
        </li>
        <li class="top-list">
          <a href="#!">Продавать на Розетке</a>
        </li>
      </ul>
<!--    <ul class="navbar-nav navbar-right ml-auto">
        <li class="nav-item ml-auto" style="margin-top: 7px;">
          <li class="nav-item mt-2">
          Здравствуйте, войдите в личный кабинет
          </li>
</ul> -->
   <div class="form-search">
   <i class="fa fa-search fa-lg" aria-hidden="true"></i>
    <input type="search" class="input-search" placeholder="Поиск" aria-label="Search">
    <button class="btn-search" type="submit">Поиск</button>
       </div>
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


  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/jquery.waterwheelCarousel.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>