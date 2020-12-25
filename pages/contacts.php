<?php
$contactsList = array(
  'ru' => array(
    array(
      'title' => 'Отдел кадров и делопроизводства:',
      'phone' => '48-701-16-16'
    ),
    array(
      'title' => 'Управление экспорта промышленной продукции:',
      'phone' => '48-701-12-12'
    ),
    array(
      'title' => 'Управление экспорта сельскохозяйственной продукции:',
      'phone' => '48-702-30-34'
    ),
    array(
      'title' => 'Управление финансов и юридического обеспечения:',
      'phone' => '48-702-30-39'
    ),
    array(
      'title' => 'Управление внешних связей, маркетинга и логистики:',
      'phone' => '48-701-13-13'
    )
  ),
  'en' => array(
    array(
      'title' => 'Human Resources and Office Work Department:',
      'phone' => '48-701-16-16'
    ),
    array(
      'title' => 'Industrial Export Administration:',
      'phone' => '48-701-12-12'
    ),
    array(
      'title' => 'Agricultural Products Export Administration:',
      'phone' => '48-702-30-34'
    ),
    array(
      'title' => 'Department of Finance and Legal Support:',
      'phone' => '48-702-30-39'
    ),
    array(
      'title' => 'Department of External Relations, Marketing and Logistics:',
      'phone' => '48-701-13-13'
    )
  ),
  'tj' => array(
    array(
      'title' => 'Шуъбаи кадрҳо ва коргузорӣ:',
      'phone' => '48-701-16-16'
    ),
    array(
      'title' => 'Раёсати содироти маҳсулоти саноатӣ:',
      'phone' => '48-701-12-12'
    ),
    array(
      'title' => 'Раёсати содироти маҳсулоти кишоварзӣ:',
      'phone' => '48-702-30-34'
    ),
    array(
      'title' => 'Раёсати молия ва таъминоти ҳуқуқӣ:',
      'phone' => '48-702-30-39'
    ),
    array(
      'title' => 'Раёсати муносибатҳои беруна, маркетинг ва логистика:',
      'phone' => '48-701-13-13'
    )
  )
);
?>


<div class="contact-page">
  <ul class="contact-page__list">
    <?php
    for ($i = 0; $i < count($contactsList[$currentLang]); $i++) {
      $contactTitle = $contactsList[$currentLang][$i]['title'];
      $contactPhone = $contactsList[$currentLang][$i]['phone'];

      echo "<li class='contact-page__list__item'>
              <div>$contactTitle</div>
              <div>$contactPhone</div>
            </li>";
    };
    ?>
  </ul>
</div>

<div id="google_map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d838.1908891694927!2d68.79394984962015!3d38.57483327070815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d38.5749273!2d68.7941326!5e0!3m2!1sen!2s!4v1586591489068!5m2!1sen!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>