<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var CMain $APPLICATION */

// Установка значений для вывода мета-тегов для OpenGraph
$APPLICATION->SetPageProperty('og_title', '<meta property="og:title" content="'.$arResult['NAME'].'">');
$APPLICATION->SetPageProperty('og_image', '<meta property="og:image" content="'.$_SERVER['HTTP_X_FORWARDED_PROTO'].'://'.$_SERVER['HTTP_HOST'].$arResult['DETAIL_PICTURE']['SRC'].'">');
?>