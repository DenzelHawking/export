<?php
$menuList = array(
  'main' => array(
    'title' => $main,
    'link' => "./?lang=$currentLang"
  ),
  'news' => array(
    'title' => $news,
    'subMenu' => array(
      array(
        'title' => $currentNews,
        'link' => "./?page=news&lang=$currentLang"
      )
    )
  ),
  'aboutAgency' => array(
    'title' => $aboutAgency,
    'subMenu' => array(
      array(
        'title' => $leadership,
        'link' => "./?page=guide&lang=$currentLang"
      ),
      array(
        'title' => $services,
        'link' => "./?page=services&lang=$currentLang"
      ),
      array(
        'title' => $partners,
        'link' => "./?page=partners&lang=$currentLang"
      )
    )
  ),
  'logistics' => array(
    'title' => $logistics,
    'subMenu' => array(
      array(
        'title' => $logisticsCompanies,
        'link' => "#"
      ),
      array(
        'title' => $logisticPortal,
        'link' => "https://portal.aiatt.tj/home"
      )
    )
  ),
  'registers' => array(
    'title' => $registers,
    'subMenu' => array(
      array(
        'title' => $ERAP,
        'download' => 'agriculture'
      ),
      array(
        'title' => $EIPR,
        'download' => 'industry'
      )
    )
  ),
  'exportGuide' => array(
    'title' => $exportGuide,
    'link' => '#'
  ),
  'NDS' => array(
    'title' => $NDS,
    'download' => 'guide'
  ),
  'reglament' => array(
    'title' => $reglament,
    'link' => "./?page=reglament&lang=$currentLang"
  ),
  'GUP' => array(
    'title' => $GUP,
    'link' => "#"
  )
);

echo '<ul class="header__menu">';

foreach ($menuList as $key => $value) {
  if ($menuList[$key]['link']) {
    echo '<a href=' . $menuList[$key]['link'] . '>';
  }

  if ($value['subMenu']) {
    echo '<li class="menu-item">' . $value['title'];

    echo '<ul class="sub-list-menu">';

    for ($i = 0; $i < count($menuList[$key]['subMenu']); $i++) {
      if ($menuList[$key]['subMenu'][$i]['download']) {
        $subDownloadPDF = 'download-pdf';
        $subDownloadData = 'data-type="' . $menuList[$key]['subMenu'][$i]['download'] . '"';
      } else {
        $subDownloadPDF = '';
        $subDownloadData = '';
      };

      if ($menuList[$key]['subMenu'][$i]['link']) {
        echo '<a href=' . $menuList[$key]['subMenu'][$i]['link'] . '>';
      }

      echo "<li class='$subDownloadPDF' $subDownloadData> " . $menuList[$key]['subMenu'][$i]['title'] . "</li>";
      if ($menuList[$key]['subMenu'][$i]['link']) {
        echo '</a>';
      }
    }

    echo '</ul>';
  } else {

    if ($menuList[$key]['download']) {
      $downloadPDF = 'download-pdf';
    } else {
      $downloadPDF = '';
    };

    echo "<li class='menu-item $downloadPDF' $subDownloadData>" . $value['title'] . "</li>";
  }


  if ($menuList[$key]['link']) {
    echo '</a>';
  }
};

echo '</ul>';
