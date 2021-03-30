<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("test");
?><?$APPLICATION->IncludeComponent(
	"intervolga:pages.viewed", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "pages_viewed",
		"IBLOCKS" => array(
		)
	),
	false
);?><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>