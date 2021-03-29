<?php

foreach($arResult["ITEMS"] as $cell=>$arItem) {
    if($arItem['PREVIEW_PICTURE']['ID']) {
        $file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width' => $arParams["NEWS_WIDTH"], 'height' => $arParams["NEWS_HEIGHT"]), BX_RESIZE_IMAGE_EXACT, true);
        $arResult["ITEMS"][$cell]['PREVIEW_PICTURE']['WIDTH'] = $file['width'];
        $arResult["ITEMS"][$cell]['PREVIEW_PICTURE']['HEIGHT'] = $file['height'];
        $arResult["ITEMS"][$cell]['PREVIEW_PICTURE']['SRC'] = $file['src'];
    }
}