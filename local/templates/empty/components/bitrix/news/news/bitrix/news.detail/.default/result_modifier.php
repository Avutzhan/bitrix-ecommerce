<?php

$arFilter = array(
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "ACTIVE" => "Y",
        "ACTIVE_DATE" => "Y",
        "SECTION_GLOBAL_ACTIVE" => "Y",
        "SECTION_ID" => $arParams["SECTION_ID"],
        "ELEMENT_ID" => $arParams["ELEMENT_ID"],
    );

$arOrder = array(
        $arParams["OFFERS_SORT_FIELD"] => $arParams["ELEMENT_ID"],
        $arParams["OFFERS_SORT_FIELD2"] => $arParams["ELEMENT_ID2"],
    );

$arNavStartParams = array(
        "nElementID" => $arResult["ID"],
        "nPageSize" => 1

    );

$end = false;

$DBRes = CIBlockElement::GetList($arOrder, $arFilter, false, $arNavStartParams);

//var_dump($DBRes->GetNext()["DETAIL_PAGE_URL"]);

while ($res = $DBRes->GetNext()) {
    if($res['ID'] == $arResult["ID"]) {
        $end = true;
    } elseif ($end) {
        $arResult["NEWS_RING"]["NEXT"] = $res;
    } else {
        $arResult["NEWS_RING"]["PREV"] = $res;
    }
}