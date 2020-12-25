<?php
$page = $_GET['page'];
$lang = $_GET['lang'];

$defaultPage = './pages/main.php';
$defaultLang = 'ru';

$pages = array(
  'about' => './pages/about-agency.php',
  'contacts' => './pages/contacts.php',
  'gallery' => './pages/gallery.php',
  'guide' => './pages/guide.php',
  'news' => './pages/news.php',
  'partners' => './pages/partners.php',
  'reglament' => './pages/reglament.php',
  'services' => './pages/services.php',
  'structural-tasks' => './pages/structural-tasks.php',
  'structure' => './pages/structure.php'
);


$currentPage = $defaultPage;
$currentLang = $defaultLang;

if ($page) {
  $currentPage = $pages[$page];
} else {
  $currentPage = $defaultPage;
};

if ($lang) {
  $currentLang = $lang;
} else {
  $currentLang = $defaultLang;
};

include './includes/translate.php';
?>



<!DOCTYPE html>
<html lang=<?php echo $currentLang ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <title><?php echo $siteTitle ?></title>
  <!-- <link rel="stylesheet" type="text/css" href="./css/swiper.min.css"> -->
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/content.css">
  <link rel="stylesheet" href="./css/navbar.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/map.css">

  <link rel="shortcut icon" href="images/logos/shortcut_logo.png">
</head>

<body>
  <div class="popup-pdf">
    <div class="close-btn">
      <div class="close-btn_line close-btn_line-1"></div>
      <div class="close-btn_line close-btn_line-2"></div>
    </div>
    <div class="pdf-list"></div>
  </div>

  <div id="wrapper" class=<?php echo $currentLang ?>>

    <div id="header">
      <div class="header__top">
        <a href=<?php echo './?lang=' . $currentLang ?> class=<?php echo $currentLang ?>>
          <div id="logo"></div>
        </a>

        <div class="menu-button">
          <div class="menu-line"></div>
          <div class="menu-line"></div>
          <div class="menu-line"></div>
        </div>
      </div>

      <?php include './includes/header_menu.php' ?>

      <ul class="top-menu">
        <a href="#">
          <li class="top-menu-item top-menu-item-0">REX</li>
        </a>
        <a href="#">
          <li class="top-menu-item"><?php echo $activity ?></li>
        </a>
        <a href=<?php echo './?page=contacts&lang=' . $currentLang ?>>
          <li class="top-menu-item"><?php echo $contacts ?></li>
        </a>
        <li class="top-menu-item toggle-language">
          <!-- <span><?php echo $langText ?></span> -->
          <ul class="toggle-language__list">
            <a href=<?php echo './?page=' . $page . '&lang=tj' ?>>
              <li class="toggle-language__item toggle-language__item_tj"></li>
            </a>
            <a href=<?php echo './?page=' . $page . '&lang=ru' ?>>
              <li class="toggle-language__item toggle-language__item_ru"></li>
            </a>
            <a href=<?php echo './?page=' . $page . '&lang=en' ?>>
              <li class="toggle-language__item toggle-language__item_en"></li>
            </a>
          </ul>
        </li>
      </ul>
    </div>


    <div id="content">
      <div id="navbar">
        <div id="sidebar">
          <ul class="sidebar__list">
            <li class="list__item download-pdf" data-type="acts"><?php echo $regulations ?></li>
            <a href="https://tajtrade.tj/?l=ru" target="_blank">
              <li class="list__item"><?php echo $TPT ?></li>
            </a>
            <li class="list__item has-sub-list"><?php echo $sourcesInformation ?>
              <ul class="sub-list">
                <a href="https://www.trademap.org/" target="_blank">
                  <li class="sub-list__item"><?php echo $tradingCard ?></li>
                </a>
                <a href="https://marketanalysis.intracen.org/" target="_blank">
                  <li class="sub-list__item"><?php echo $marketAnalysis ?></li>
                </a>
                <a href="https://www.un.org/ru/wto/" target="_blank">
                  <li class="sub-list__item"><?php echo $WTO ?></li>
                </a>
                <a href="https://oec.world" target="_blank">
                  <li class="sub-list__item"><?php echo $TTAC ?></li>
                </a>
              </ul>
            </li>
          </ul>
        </div>

        <table id="calendar2">
          <thead>
            <tr>
              <td>‹</td>
              <td colspan="5"></td>
              <td>›</td>
            </tr>
            <tr><?php echo $weeks ?></tr>
          </thead>
          <tbody></tbody>
        </table>

        <!-- <div id="contacts">
          <ul class="list contacts__list">
            <div class="list__title contacts__title"><?php echo $contacts ?></div>
            <li>
              <div>E-mail:</div>
              <div>info@export.tj</div>
            </li>
            <li>
              <div><?php echo $reception ?>:</div>
              <div>2217003</div>
            </li>
            <li>
              <div><?php echo $commonDepartment ?>:</div>
              <div>(44)7011616</div>
            </li>
            <li>
              <div><?php echo $fax ?>:</div>
              <div>(44)7014045</div>
            </li>
          </ul>
        </div> -->


        <div id="valute">
          <ul class="list">
            <div class="list__title valute__title"><?php echo $exchangeRate ?></div>
            <li>
              <div>1 <b class="valute-sign">USD</b>:</div>
              <div class="usd"></div>
            </li>
            <li>
              <div>1 <b class="valute-sign">EUR</b>:</div>
              <div class="eur"></div>
            </li>
            <li>
              <div>1 <b class="valute-sign">RUB</b>:</div>
              <div class="rub"></div>
            </li>
          </ul>
        </div>
      </div>


      <div id="main-content">
        <!-- pages -->
        <?php include $currentPage ?>

      </div>
    </div>

    <div id="footer">
      <div id="contacts">
        <ul class="list contacts__list">
          <div class="list__title contacts__title"><?php echo $contacts ?></div>
          <li>
            <div class="list__name">E-mail:</div>
            <div>info@export.tj</div>
          </li>
          <li>
            <div class="list__name"><?php echo $phone ?>:</div>
            <div>2217003 (<?php echo $reception ?>)</div>
            <div>(44)7011616 (<?php echo $commonDepartment ?>)</div>
          </li>
          <li>
            <div class="list__name"><?php echo $fax ?>:</div>
            <div>(44)7014045</div>
          </li>

          <li>
            <div class="list__name"><?php echo $address ?>:</div>
            <div>Мирзо Турсунзода 23</div>
          </li>
        </ul>
      </div>

      <div class="footer__text"><?php echo $siteTitle ?></div>
    </div>

  </div>

  <script src="./js/calendar.js"></script>
  <script src="./js/menu.js"></script>
  <script src="./js/request.js"></script>
  <script src="./js/show-text.js"></script>
  <script src="./js/download-pdf.js"></script>
</body>

</html>