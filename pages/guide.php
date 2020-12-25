<?php
$leaders = array(
  'ru' => array(
    array(
      'leaderImg' => 'bobozoda.jpg',
      'leaderPosition' => 'ДИРЕКТОР',
      'leaderName' => 'ШАВКАТ БОБОЗОДА',
      'leaderDesc' => 'ДИРЕКТОР АГЕНТСТВА ЭКСПОРТА ПРИ ПРАВИТЕЛЬСТВЕ РЕСПУБЛИКИ ТАДЖИКИСТАН',
      'guideShowAllBtn' => 'Показать все'
    ),
    array(
      'leaderImg' => 'bakhtiyor.jpg',
      'leaderPosition' => 'МУОВИНИ ЯКУМ',
      'leaderName' => 'АЗИРМАДЗОДА Бахтиёр.',
      'leaderDesc' => 'ПЕРВЫЙ ЗАМЕСТИТЕЛЬ ДИРЕКТОРА АГЕНТСТВА ЭКСПОРТА ПРИ ПРАВИТЕЛЬСТВЕ РЕСПУБЛИКИ ТАДЖИКИСТАН',
      'guideShowAllBtn' => 'Показать все'
    ),
    array(
      'leaderImg' => 'bakhodur.jpg',
      'leaderPosition' => 'МУОВИН',
      'leaderName' => 'РАХИМЗОДА Баходур Карим',
      'guideShowAllBtn' => 'Показать все'
    )
  ),
  'en' => array(
    array(
      'leaderImg' => 'bobozoda.jpg',
      'leaderPosition' => 'DIRECTOR',
      'leaderName' => 'SHAVKAT BOBOZOD',
      'leaderDesc' => 'DIRECTOR OF EXPORT AGENCY UNDER THE GOVERNMENT OF THE REPUBLIC OF TAJIKISTAN',
      'guideShowAllBtn' => 'Show All'
    ),
    array(
      'leaderImg' => 'bakhtiyor.jpg',
      'leaderPosition' => 'МУОВИНИ ЯКУМ',
      'leaderName' => 'AZIRMADZODA Bakhtiyor.',
      'leaderDesc' => 'FIRST DEPUTY DIRECTOR OF EXPORT AGENCY UNDER THE GOVERNMENT OF THE REPUBLIC OF TAJIKISTAN',
      'guideShowAllBtn' => 'Show All'
    ),
    array(
      'leaderImg' => 'bakhodur.jpg',
      'leaderPosition' => 'МУОВИН',
      'leaderName' => 'RAHIMZODA Bahodur Karim',
      'guideShowAllBtn' => 'Show All'
    )
  ),
  'tj' => array(
    array(
      'leaderImg' => 'bobozoda.jpg',
      'leaderPosition' => 'ДИРЕКТОР',
      'leaderName' => 'ШАВКАТ БОБОЗОДА',
      'leaderDesc' => 'ДИРЕКТОРИ АГЕНТИИ СОДИРОТИ НАЗДИ ҲУКУМАТИ ҶУМҲУРИИ ТОҶИКИСТОН',
      'guideShowAllBtn' => 'Показать все'
    ),
    array(
      'leaderImg' => 'bakhtiyor.jpg',
      'leaderPosition' => 'МУОВИНИ ЯКУМ',
      'leaderName' => 'АЗИРМАДЗОДА Бахтиёр.',
      'leaderDesc' => 'МУОВИНИ ЯКУМИ ДИРЕКТОРИ АГЕНТИИ СОДИРОТИ НАЗДИ ҲУКУМАТИ ҶУМҲУРИИ ТОҶИКИСТОН',
      'guideShowAllBtn' => 'Показать все'
    ),
    array(
      'leaderImg' => 'bakhodur.jpg',
      'leaderPosition' => 'МУОВИН',
      'leaderName' => 'РАХИМЗОДА Баходур Карим',
      'guideShowAllBtn' => 'Показать все'
    )
  )
);


for ($i = 0; $i < count($leaders[$currentLang]); $i++) {
  $leaderImg = $leaders[$currentLang][$i]['leaderImg'];
  $leaderPosition = $leaders[$currentLang][$i]['leaderPosition'];
  $leaderName = $leaders[$currentLang][$i]['leaderName'];
  $guideBtn = $leaders[$currentLang][$i]['guideShowAllBtn'];

  if ($leaders[$currentLang][$i]['leaderDesc']) {
    $leaderDesc = $leaders[$currentLang][$i]['leaderDesc'];
  } else {
    $leaderDesc = '';
  };

  echo "<div class='news-item'>
          <div class='news-description'>
            <div class='news-text'>
              <p>
                <img src='../images/leaders/$leaderImg'>

                <div>
                  <h2>$leaderPosition</h2>
                  <h3>$leaderName<br>$leaderDesc</h3>
                </div>
              </p>
            </div>
          </div>

          <div class='show-hide-description'>$guideBtn</div>
        </div>";
};
?>
