<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$cp = $this->__component;
$cp->setResultCacheKeys(['DETAIL_PICTURE']);
?>
<div>
	
	<h1><?=$arResult['NAME']?></h1>
	
	<p id="news-last-date">
		<?// Старт композитного кэшерирования динамической части шаблона компонента?>
		<?$frame = $this->createFrame('news-last-date', false)->begin();?>
		<?
		// Подсчет времени, которое прошло от даты начала активности до текущего времени на сервере в количестве минут и секунд
		$minutes = $seconds = 0;
		$leftSecond = time()-strtotime($arResult['ACTIVE_FROM']);
		$minutes = floor($leftSecond/60);
		$seconds = $leftSecond-60*$minutes;
		// Вывод текста со склоняемыми словами в зависимости от количества минут и секунд?>
		<?=getTextCount($minutes, ['минут', 'минута', 'минуты']).' '.getTextCount($seconds, ['секунд', 'секунда', 'секунды']).' назад'?>
		<?// Завершение композитного кэшерирования динамической части шаблона компонента?>
		<?$frame->end();?>
	</p>
	
	<p id="news-counter">
		<?// Старт композитного кэшерирования динамической части шаблона компонента?>
		<?$frame = $this->createFrame('news-counter', false)->begin();?>
		<?=$arResult['FIELDS']['SHOW_COUNTER']?>
		<?// Завершение композитного кэшерирования динамической части шаблона компонента?>
		<?$frame->end();?>
	</p>
	
	<img class="lazyload" data-src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" <?/*width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>" height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"*/?> alt="<?=$arResult['DETAIL_PICTURE']['ALT']?>" title="<?=$arResult['DETAIL_PICTURE']['TITLE']?>" />
	
	<div><?=$arResult['DETAIL_TEXT']?></div>

	<?$arDopPhotos = [];
	if(is_array($arResult['DISPLAY_PROPERTIES']['DOP_PHOTOS']['VALUE']) && count($arResult['DISPLAY_PROPERTIES']['DOP_PHOTOS']['VALUE']) === 1){
		$arDopPhotos[] = $arResult['DISPLAY_PROPERTIES']['DOP_PHOTOS']['FILE_VALUE'];
	}elseif(is_array($arResult['DISPLAY_PROPERTIES']['DOP_PHOTOS']['VALUE']) && count($arResult['DISPLAY_PROPERTIES']['DOP_PHOTOS']['VALUE']) > 1){
		foreach ($arResult['DISPLAY_PROPERTIES']['DOP_PHOTOS']['FILE_VALUE'] as $pic) {
			$arDopPhotos[] = $arResult['DISPLAY_PROPERTIES']['DOP_PHOTOS']['FILE_VALUE'];
		}
	}?>

	<?if(count($arDopPhotos) > 0){?>
		<?foreach ($arDopPhotos as $pic) {?>
			<?$thumb = CFile::ResizeImageGet($pic['ID'], ['width' => 200, 'height' => 200], BX_RESIZE_IMAGE_PROPORTIONAL)?>
			<a href="<?=$pic['SRC']?>" target="_blank"><img class="lazyload" data-src="<?=$thumb['src']?>"></a><br>
		<?}?>
	<?}?>

</div>