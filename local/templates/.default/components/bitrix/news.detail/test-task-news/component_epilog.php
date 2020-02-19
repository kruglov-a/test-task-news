<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var CMain $APPLICATION */
$APPLICATION->SetPageProperty('og_title', '<meta property="og:title" content="'.$_SERVER['HTTP_X_FORWARDED_PROTO'].'://'.$_SERVER['HTTP_HOST'].$arResult['NAME'].'">');
$APPLICATION->SetPageProperty('og_image', '<meta property="og:image" content="'.$_SERVER['HTTP_X_FORWARDED_PROTO'].'://'.$_SERVER['HTTP_HOST'].$arResult['DETAIL_PICTURE']['SRC'].'">');
?>