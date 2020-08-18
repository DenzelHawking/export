<?php
$menuList = [
  'main' => [
    'title' => $main,
    'link' => '/'
  ],
  'news' => [
    'title' => $news,
    'subMenu' => [
      [
        'title' => $currentNews,
        'link' => "./?page=news&lang=$currentLang"
      ]
    ]
  ],
  'aboutAgency' => [
    'title' => $aboutAgency,
    'subMenu' => [
      [
        'title' => $leadership,
        'link' => "./?page=guide&lang=$currentLang"
      ],
      [
        'title' => $services,
        'link' => "./?page=services&lang=$currentLang"
      ],
      [
        'title' => $partners,
        'link' => "./?page=partners&lang=$currentLang"
      ]
    ]
  ],
  'logistics' => [
    'title' => $logistics,
    'subMenu' => [
      [
        'title' => $logisticsCompanies,
        'link' => "#"
      ],
      [
        'title' => $logisticPortal,
        'link' => "https://portal.aiatt.tj/home"
      ]
    ]
  ],
  'registers' => [
    'title' => $registers,
    'subMenu' => [
      [
        'title' => $ERAP,
        'download' => 'agriculture'
      ],
      [
        'title' => $EIPR,
        'download' => 'industry'
      ]
    ]
  ],
  'exportGuide' => [
    'title' => $exportGuide,
    'link' => '#'
  ],
  'NDS' => [
    'title' => $NDS,
    'download' => 'guide'
  ]
];

echo '<ul class="header__menu">';

foreach ($menuList as $key => $value) {
  if ($menuList[$key]['link']) {
    echo '<a href=' . $menuList[$key]['link'] . '>';
  }

  if ($value['subMenu']) {
    echo '<li class="menu-item">' . $value['title'];

    echo '<ul class="sub-list-menu">';

    for ($i = 0; $i < count($menuList[$key]['subMenu']); $i++) {
      if($menuList[$key]['subMenu'][$i]['download']) {
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

    if($menuList[$key]['download']) {
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
?>
