<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("test");
?><?$APPLICATION->IncludeComponent(
	"bitrix:search.page",
	"",
Array()
);?><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>