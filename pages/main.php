<?php
  $presidentLinkArray = ['ru' => 'http://prezident.tj/ru', 'en' => 'http://prezident.tj/en', 'tj' => 'http://prezident.tj'];
  $presidentLink = $presidentLinkArray[$currentLang];
?>


<!-- <div class="swiper">
  <div class="swiper-controller"></div>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><a href="./pages/services.html"><img src="./images/slider/img_1.jpg"></a></div>
      <div class="swiper-slide"><a href="./pages/services.html"><img src="./images/slider/img_2.jpg"></a></div>
      <div class="swiper-slide"><a href="./pages/services.html"><img src="./images/slider/img_3.jpg"></a></div>
      <div class="swiper-slide"><a href="./pages/services.html"><img src="./images/slider/img_4.jpg"></a></div>
      <div class="swiper-slide"><a href="./pages/services.html"><img src="./images/slider/img_5.jpg"></a></div>
      <div class="swiper-slide"><a href="./pages/services.html"><img src="./images/slider/img_6.jpg"></a></div>
      <div class="swiper-slide"><a href="./pages/services.html"><img src="./images/slider/img_7.jpg"></a></div>
      <div class="swiper-slide"><a href="./pages/services.html"><img src="./images/slider/img_8.jpg"></a></div>
      <div class="swiper-slide"><a href="./pages/services.html"><img src="./images/slider/img_9.jpg"></a></div>
      <div class="swiper-slide"><a href="./pages/services.html"><img src="./images/slider/img_10.jpg"></a></div>
      <div class="swiper-slide"><a href="./pages/services.html"><img src="./images/slider/img_11.jpg"></a></div>
    </div>
    <div class="swiper-button-next"><img src="./images/slider/right.png"></div>
    <div class="swiper-button-prev"><img src="./images/slider/left.png"></div>
  </div>
</div> -->

<div class="president">
  <div class="president__inner">
    <div class="president__img"></div>
    <div class="president__description">В ближайшем будущем государственная политика в сферах торговли и услуг
      должна проводиться по трем направлениям – стимулирование экспорта, обеспечение диверсификации
      экспортоориентированного производства и упрощение торговых процедур.
    </div>
  </div>
  <a href="<?php echo $presidentLink ?>" target="_blank" class="president__link">www.prezident.tj</a target="_blank">
</div>

<div class="alert-text">Расчет времени в пути носит чисто информационный характер и может иметь различия с
  реальными данными</div>
<form id="map_form">
  <div class="form-group">
    <label>Откуда:</label>
    <input type="hidden" name="tochki[]">
    <input type="text" class="form-control point">

    <a href="javascript:;" class="add__point-button"><i class="fas fa-plus"></i> Добавить транзитный пункт</a>
  </div>
  <div class="form-group">
    <label>Куда:</label>
    <input type="hidden" name="tochki[]">
    <input type="text" class="form-control point">
  </div>
  <button type="button" class="calculate-button">Рассчитать</button>
</form>

<div id="result-calculate"></div>

<div id="transit-point">
  <div class="form-group">
    <label>Транзитный пункт:</label>
    <div class="input-group">
      <input type="hidden" name="tochki[]">
      <input type="text" class="form-control point transit-input">
      <div class="input-group-append">
        <button class="remove-point-button" type="button"><i class="fas fa-times"></i></button>
      </div>
    </div>
    <a href="javascript:;" class="add__point-button"><i class="fas fa-plus"></i> Добавить транзитный пункт</a>
  </div>
</div>

<div id="map"></div>


<!-- scripts -->
<script src="./js/swiper.min.js"></script>
<script type="text/javascript">
  var swiper = new Swiper('.swiper-container', {
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  var pause = false
  $(".swiper-controller").click(() => {
    if (!pause) {
      swiper.autoplay.stop();
      $(".swiper-controller").css("background", "url(./images/slider/play.png)")
      $(".swiper-controller").css("background-size", "100%")
      pause = !pause
    } else {
      swiper.autoplay.start();
      $(".swiper-controller").css("background", "url(./images/slider/stop.png)")
      $(".swiper-controller").css("background-size", "100%")
      pause = !pause
    }
  })
</script>

<!-- Map -->
<script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&apikey=2fe1fad8-bec9-4c19-87f1-b7b74f5c91be" type="text/javascript"></script>
<script src="./js/map.js" type="text/javascript"></script>