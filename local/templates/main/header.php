<!DOCTYPE html>
<html>
<head>
	<?/** @var CMain $APPLICATION */?>
	<?$APPLICATION->ShowHead()?>
	<title><?$APPLICATION->ShowTitle()?></title>
	<?// Вывод мета-тегов для OpenGraph через отложенную функцию вывода настроек страницы?>
	<?$APPLICATION->ShowProperty('og_title');?>
	<?$APPLICATION->ShowProperty('og_image');?>
</head>

<body>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	