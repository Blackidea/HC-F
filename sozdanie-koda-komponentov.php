<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Создание кода компонентов");
?><?$APPLICATION->IncludeComponent("altasib:geobase.select.city", "custom", Array(
	"LOADING_AJAX" => "N",	// Подгружать окно "Выбор города" со списком городов ajax-запросом
		"RIGHT_ENABLE" => "N",	// Выводить вместо правой надписи строки "Выберите город" город, определенный автоматически
		"SPAN_LEFT" => "Мой город:",	// Текстовое поле на левую надпись строки, клик по которой вызывает всплывающее окно
		"SPAN_RIGHT" => "Выберите город",	// Текстовое поле на правую надпись строки, если город не задан или не определен
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>