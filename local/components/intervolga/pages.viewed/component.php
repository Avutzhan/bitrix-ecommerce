<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */

if(!CModule::includeModule("iblock"))
{
    ShowError(GetMessage("IBLOCK_MODULE_NOT_INSTALLED"));
    return;
}

$arFilter = array(
    "IBLOCK_ID" => $arParams["IBLOCKS"],
    "PROPERTY_USER" => $_SESSION["SESS_AUTH"]["SESSION_HASH"]
);

$arOrder = array(
    "created" => "desc"
);

$arSelect = array(
    "NAME",
    "PROPERTY_URL"
);

$rsItems = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelect);

while($arItem = $rsItems -> GetNext())
{
//    var_dump($arItem); короче проблема в базе. нет колонки по урл это надо инфоблок нормально настроить
    $arResult["ITEMS"][] = array(
        'TITLE' => $arItem["NAME"],
        'URL' => $arItem["PROPERTY_URL_VALUE"]
    );
}
//var_dump($arResult["ITEMS"][1]["URL"]);
$this->includeComponentTemplate();

?>
