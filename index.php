<?
//require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тестовое задание");

\Bitrix\Main\Page\Asset::getInstance()->addJs('https://rawgit.com/tuupola/jquery_lazyload/2.x/lazyload.js');
?>

<?$APPLICATION->IncludeComponent("bitrix:news.detail", "test-task", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
	"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
	"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
	"AJAX_MODE" => "N",	// Включить режим AJAX
	"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
	"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
	"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
	"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
	"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
	"CACHE_GROUPS" => "Y",	// Учитывать права доступа
	"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
	"CACHE_TYPE" => "A",	// Тип кеширования
	"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
	"COMPOSITE_FRAME_MODE" => "A",
	"COMPOSITE_FRAME_TYPE" => "AUTO",
	"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
	"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
	"DISPLAY_DATE" => "Y",	// Выводить дату элемента
	"DISPLAY_NAME" => "Y",	// Выводить название элемента
	"DISPLAY_PICTURE" => "Y",	// Выводить детальное изображение
	"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
	"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
	"ELEMENT_CODE" => "",	// Код новости
	"ELEMENT_ID" => $_REQUEST["ID"],	// ID новости
	"FIELD_CODE" => array(	// Поля
		0 => "SHOW_COUNTER",
		1 => "",
	),
	"FILE_404" => "",	// Страница для показа (по умолчанию /404.php)
	"IBLOCK_ID" => "11",	// Код информационного блока
	"IBLOCK_TYPE" => "TEST_TASK",	// Тип информационного блока (используется только для проверки)
	"IBLOCK_URL" => "",	// URL страницы просмотра списка элементов (по умолчанию - из настроек инфоблока)
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
	"MESSAGE_404" => "",
	"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
	"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
	"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
	"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
	"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
	"PAGER_TITLE" => "Страница",	// Название категорий
	"PROPERTY_CODE" => array(	// Свойства
		0 => "",
		1 => "DOP_PHOTOS",
		2 => "",
	),
	"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
	"SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
	"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
	"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
	"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
	"SET_STATUS_404" => "Y",	// Устанавливать статус 404
	"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
	"SHOW_404" => "Y",	// Показ специальной страницы
	"USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
	"USE_SHARE" => "N",	// Отображать панель соц. закладок
), false );?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>