<?php
/**
 * Export English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['export_site_cacheable'] = 'Включать некэшируемые файлы:';
$_lang['export_site_exporting_document'] = 'Экспортируется файл <strong>%s</strong> из <strong>%s</strong><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><i>%s</i>, id %s</small><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$_lang['export_site_failed'] = '<span style="color:#990000">Ошибка!</span>';
$_lang['export_site_html'] = 'Экспортировать сайт в HTML';
$_lang['export_site_maxtime'] = 'Максимальное время экспорта:';
$_lang['export_site_maxtime_message'] = 'Здесь вы можете указать количество секунд, в течение которых MODX может экспортировать сайт (будут переопределены настройки PHP). Введите 0 для неограниченного времени. Пожалуйста, обратите внимание, что установка 0 или очень большого числа может нарушить работу вашего сервера и не рекомендуется.';
$_lang['export_site_message'] = '<p>Используя эту функцию, вы можете экспортировать весь сайт в HTML-файлы. Пожалуйста, учтите, однако, что вы потеряете большинство функционала MODX, такого как:</p>
<ul>
  <li>прочтения страниц в экспортируемых файлах не будут записываться;</li>
  <li>в экспортированных файлах НЕ будут работать интерактивные сниппеты;</li>
  <li>будут экспортированы только обычные документы, web-ссылки экспортированы не будут;</li>
  <li>процесс экспорта может прерваться, если ваши документы содержат сниппеты, которые посылают перенаправляющие http-заголовки;</li>
  <li>в зависимости от того, как генерируются ваши документы, стили и изображения, внешний вид вашего сайта может «сломаться». Чтобы исправить это, вы можете сохранить/переместить экспортированные файлы в ту же директорию, где лежит главный MODX файл index.php.</li>
</ul>
<p>Пожалуйста заполните форму и нажмите «Экспорт», чтобы начать процесс. Созданные файлы будут сохранены в указанном вами месте, используя, по возможности, алиасы документов как имена файлов. При экспортировании вашего сайта лучше установить настройку «Использовать дружественные URL» в значение «Да». В зависимости от размера вашего сайта, экспорт может занять некоторое время.</p>
<p><em>Любые существующие файлы будут перезаписаны новыми файлами, если их имена совпадают!</em></p>';
$_lang['export_site_numberdocs'] = '<p><strong>Найдено %s документов для экспорта...</strong></p>';
$_lang['export_site_prefix'] = 'Префикс файла:';
$_lang['export_site_start'] = 'Начать экспорт';
$_lang['export_site_success'] = '<span style="color:#009900">Выполнено!</span>';
$_lang['export_site_suffix'] = 'Суффикс файла:';
$_lang['export_site_target_unwritable'] = 'Невозможно произвести запись в каталог. Убедитесь в том, что каталог доступен для записи, и повторите попытку.';
$_lang['export_site_time'] = 'Экспорт закончен за %s секунд.';