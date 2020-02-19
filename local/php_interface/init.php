<?
function getTextCount($number, $arText)
{
	$result = $arText[0];
	if($number % 10 == 1 && $number % 100 != 11){
		$result = $arText[1];
	}elseif(in_array($number % 10, [2, 3, 4]) && !in_array($number % 100, [12, 13, 14]) ){
		$result = $arText[2];
	}
	$result = $number.' '.$result;
	return $result;
}