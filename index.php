<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

use Helpers\IblockHelper;

$APPLICATION->SetTitle("HUT");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetPageProperty("need_slider", 'Y');

?><? $APPLICATION->IncludeComponent(
		"bitrix:catalog.section",
		"main-page",
		array(
			"ACTION_VARIABLE" => "action",
			"ADD_PICT_PROP" => "-",
			"ADD_PROPERTIES_TO_BASKET" => "Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"ADD_TO_BASKET_ACTION" => "ADD",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"BACKGROUND_IMAGE" => "-",
			"BASKET_URL" => "/personal/basket.php",
			"BROWSER_TITLE" => "-",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"COMPATIBLE_MODE" => "N",
			"CONVERT_CURRENCY" => "N",
			"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[{\"CLASS_ID\":\"CondIBProp:88:1397\",\"DATA\":{\"logic\":\"Equal\",\"value\":14217}}]}",
			"DETAIL_URL" => "",
			"DISABLE_INIT_JS_IN_COMPONENT" => "N",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_COMPARE" => "N",
			"DISPLAY_TOP_PAGER" => "N",
			"ELEMENT_SORT_FIELD" => "sort",
			"ELEMENT_SORT_FIELD2" => "id",
			"ELEMENT_SORT_ORDER" => "asc",
			"ELEMENT_SORT_ORDER2" => "desc",
			"ENLARGE_PRODUCT" => "STRICT",
			"FILTER_NAME" => "arrFilter",
			"HIDE_NOT_AVAILABLE" => "N",
			"HIDE_NOT_AVAILABLE_OFFERS" => "N",
			"IBLOCK_ID" => IblockHelper::getIdByCode("hutcatalog"),
			"IBLOCK_TYPE" => "hut",
			"INCLUDE_SUBSECTIONS" => "Y",
			"LABEL_PROP" => array(
				0 => "TYPE",
			),
			"LABEL_PROP_MOBILE" => "",
			"LABEL_PROP_POSITION" => "top-left",
			"LAZY_LOAD" => "N",
			"LINE_ELEMENT_COUNT" => "3",
			"LOAD_ON_SCROLL" => "N",
			"MESSAGE_404" => "",
			"MESS_BTN_ADD_TO_BASKET" => "В корзину",
			"MESS_BTN_BUY" => "Купить",
			"MESS_BTN_DETAIL" => "Подробнее",
			"MESS_BTN_LAZY_LOAD" => "Показать ещё",
			"MESS_BTN_SUBSCRIBE" => "Подписаться",
			"MESS_NOT_AVAILABLE" => "Нет в наличии",
			"MESS_NOT_AVAILABLE_SERVICE" => "Недоступно",
			"META_DESCRIPTION" => "-",
			"META_KEYWORDS" => "-",
			"OFFERS_CART_PROPERTIES" => "",
			"OFFERS_FIELD_CODE" => array(
				0 => "",
				1 => "",
			),
			"OFFERS_LIMIT" => "5",
			"OFFERS_PROPERTY_CODE" => array(
				0 => "",
				1 => "",
			),
			"OFFERS_SORT_FIELD" => "sort",
			"OFFERS_SORT_FIELD2" => "id",
			"OFFERS_SORT_ORDER" => "asc",
			"OFFERS_SORT_ORDER2" => "desc",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Товары",
			"PAGE_ELEMENT_COUNT" => "24",
			"PARTIAL_PRODUCT_PROPERTIES" => "N",
			"PRICE_CODE" => array(
				0 => "BASE",
			),
			"PRICE_VAT_INCLUDE" => "Y",
			"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
			"PRODUCT_DISPLAY_MODE" => "N",
			"PRODUCT_ID_VARIABLE" => "id",
			"PRODUCT_PROPERTIES" => array(),
			"PRODUCT_PROPS_VARIABLE" => "prop",
			"PRODUCT_QUANTITY_VARIABLE" => "quantity",
			"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false}]",
			"PRODUCT_SUBSCRIPTION" => "N",
			"PROPERTY_CODE" => array(
				0 => "",
				1 => "TYPE",
				2 => "",
			),
			"PROPERTY_CODE_MOBILE" => array(
				0 => "TYPE",
			),
			"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
			"RCM_TYPE" => "personal",
			"SECTION_CODE" => "",
			"SECTION_ID" => $_REQUEST["SECTION_ID"],
			"SECTION_ID_VARIABLE" => "SECTION_ID",
			"SECTION_URL" => "",
			"SECTION_USER_FIELDS" => array(
				0 => "",
				1 => "",
			),
			"SEF_MODE" => "N",
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SHOW_ALL_WO_SECTION" => "N",
			"SHOW_CLOSE_POPUP" => "N",
			"SHOW_DISCOUNT_PERCENT" => "N",
			"SHOW_FROM_SECTION" => "N",
			"SHOW_MAX_QUANTITY" => "N",
			"SHOW_OLD_PRICE" => "Y",
			"SHOW_PRICE_COUNT" => "1",
			"SHOW_SLIDER" => "N",
			"SLIDER_INTERVAL" => "3000",
			"SLIDER_PROGRESS" => "N",
			"TEMPLATE_THEME" => "blue",
			"USE_ENHANCED_ECOMMERCE" => "N",
			"USE_MAIN_ELEMENT_SECTION" => "N",
			"USE_PRICE_COUNT" => "N",
			"USE_PRODUCT_QUANTITY" => "N",
			"COMPONENT_TEMPLATE" => "main-page",
			"LINK_VALUE" => "/catalog/novinki/",
			"LINK_TEXT" => "Все новинки",
			"BLOCK_TITLE" => "Новинки",
		),
		false
	); ?>

<div class="main-page__promo container">
	<div class="main-page__promo-inner">
		<div class="main-page__promo-img">
			<? $APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				[
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/include/main/promo/img.php",
				],
				false,
			); ?>
		</div>
		<div class="main-page__promo-text">
			<? $APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				[
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/include/main/promo/text.php",
				],
				false,
			); ?>
		</div>
	</div>
</div>

<div class="container">
	<? $APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"main-about",
		array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array("ID", ""),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => IblockHelper::getIdByCode("mainabout"),
			"IBLOCK_TYPE" => "hut",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "20",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array("BACK_COLOR", ""),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "SORT",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "ASC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N",
			"LINK_VALUE" => "#",
			"LINK_TEXT" => "о компании",
		)
	); ?>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>