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
//use Bitrix\Highloadblock as HL; 
//use Bitrix\Main\Entity; 


$this->setFrameMode(true);?>

<style>
.loading-gif{
    display: none;
}
.loading-gif img{
    width: 10%;
    position: fixed;
    margin-left: -5%;
    left: 50%;
    top: 50%;
    margin-top: -5%;
}
   
</style> 
<?  
//echo "<pre>";
//print_r($arResult["ITEMS"]);
//echo "</pre>";
$filtered_count = $arResult['filtered_count']; // кол во фильтрованых
$GLOBALS['filtered_count'] = $filtered_count;  // объявляем глобально
// задаем номер страницы
if($_GET['PAGEN_1']==""){
    $page = 1;
}
else{
    $page = $_GET['PAGEN_1'];
}
?>
<div class="js-pager-wrepper" style="display: none;">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
</div>

<?if(count($arResult["ITEMS"])>0)
{
    $my_cout = count($arResult["ITEMS"]);
    
    $_POST['my_count'] = $my_cout;
    ?>

    <?//echo $GLOBALS['filtered_count']?>

<?foreach($arResult["ITEMS"] as $index=>$arItem):?>
<?//print_r($arItem['PROPERTIES']);?>
<? 

   // echo $index;
   // if($index == $page)
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	if($arItem['PREVIEW_PICTURE']['SRC']==""){
	   $image = 'recept_item_default.jpg';
	}
    else{
        $image = $arItem['PREVIEW_PICTURE']['SRC'];
    }
    ?>
    <?
    if($index==4&&$page==1){?>
        <!-- случайный рецепт -->	
                 <div class="item random-recipe">
						<div class="item_image"><a href="<?=$arItem["DETAIL_PAGE_URL"]?> "><img src="/bitrix/templates/Holiday/img/pic/recept_item_default.jpg" title="Случайный рецепт" alt="Случайный рецепт"/></a></div>
						<div class="item_text">
							<div class="item_title">случайный рецепт</div>		
						</div>
					</div>
    <?}
    else{?>
                    <div class="item">
						<div class="item_image"><a class="recipe-link" href="<?=$arItem["DETAIL_PAGE_URL"]?> "><img src="<?=$image?>" title="<?echo $arItem["NAME"]?>" alt="<?echo $arItem["NAME"]?>"/></a></div>
						<div class="item_text">
							<div class="item_title"><?echo $arItem["NAME"]?></div>
							<div class="item_bar">
								<div class="item_rating">
                                
                                <?
                                $count = 3;
                                //echo $arItem['PROPERTIES']['hardship']['VALUE'];
                                while ($arItem['PROPERTIES']['hardship']['VALUE'] > 0) {
                                    $arItem['PROPERTIES']['hardship']['VALUE'] = $arItem['PROPERTIES']['hardship']['VALUE']-1;
                                    $count = $count-1;?>
									<span class="active">
										<svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="360.9 161 236.2 208.6" xml:space="preserve">
											<g>
												<path d="M597.1,247.6c0-30.4-24.7-55.1-55.1-55.1c-1.3,0-2.7,0.1-4,0.1C524.9,173,502.8,161,479,161s-45.9,12-59,31.6
													c-1.3-0.1-2.7-0.1-4-0.1c-30.4,0-55.1,24.7-55.1,55.1c0,27.7,20.6,50.7,47.2,54.5v47.1c0,11.2,9.1,20.4,20.4,20.4h100.8
													c11.2,0,20.4-9.1,20.4-20.4v-47.1C576.5,298.3,597.1,275.3,597.1,247.6L597.1,247.6z M529.4,353.9H428.6c-2.5,0-4.7-2.2-4.7-4.7
													v-47.1c7.7-1.1,15-3.8,21.6-8c10.1,5.5,21.6,8.5,33.6,8.5s23.5-3.1,33.6-8.5c6.6,4.2,13.9,6.9,21.6,8v47.1
													C534.1,351.8,532,353.9,529.4,353.9L529.4,353.9z M542,287c-5.3,0-10.4-1-15.1-3c9.5-8.7,16.8-20.1,20.4-33.2
													c1.2-4.2-1.3-8.5-5.5-9.7s-8.5,1.3-9.6,5.5c-6.6,23.8-28.4,40.4-53.1,40.4s-46.5-16.6-53.1-40.4c-1.2-4.2-5.5-6.6-9.7-5.5
													c-4.2,1.2-6.6,5.5-5.5,9.7c3.6,13.1,10.8,24.4,20.4,33.2c-4.7,2-9.8,3-15.1,3c-21.7,0-39.4-17.7-39.4-39.4s17.7-39.4,39.4-39.4
													c2.2,0,4.5,0.2,6.7,0.6c3.3,0.6,6.5-1,8.2-3.9c9.8-17.4,28.2-28.2,48.1-28.2s38.3,10.8,48.1,28.2c1.6,2.9,4.9,4.4,8.2,3.9
													c2.3-0.4,4.5-0.6,6.7-0.6c21.7,0,39.4,17.7,39.4,39.4C581.4,269.3,563.7,287,542,287L542,287z"/>
											</g>
										</svg>
									</span>
								<?}?>
                                <?while ($count > 0) {
                                    $count = $count-1;
                                    ?>
                                    <span>
										<svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="360.9 161 236.2 208.6" xml:space="preserve">
											<g>
												<path d="M597.1,247.6c0-30.4-24.7-55.1-55.1-55.1c-1.3,0-2.7,0.1-4,0.1C524.9,173,502.8,161,479,161s-45.9,12-59,31.6
													c-1.3-0.1-2.7-0.1-4-0.1c-30.4,0-55.1,24.7-55.1,55.1c0,27.7,20.6,50.7,47.2,54.5v47.1c0,11.2,9.1,20.4,20.4,20.4h100.8
													c11.2,0,20.4-9.1,20.4-20.4v-47.1C576.5,298.3,597.1,275.3,597.1,247.6L597.1,247.6z M529.4,353.9H428.6c-2.5,0-4.7-2.2-4.7-4.7
													v-47.1c7.7-1.1,15-3.8,21.6-8c10.1,5.5,21.6,8.5,33.6,8.5s23.5-3.1,33.6-8.5c6.6,4.2,13.9,6.9,21.6,8v47.1
													C534.1,351.8,532,353.9,529.4,353.9L529.4,353.9z M542,287c-5.3,0-10.4-1-15.1-3c9.5-8.7,16.8-20.1,20.4-33.2
													c1.2-4.2-1.3-8.5-5.5-9.7s-8.5,1.3-9.6,5.5c-6.6,23.8-28.4,40.4-53.1,40.4s-46.5-16.6-53.1-40.4c-1.2-4.2-5.5-6.6-9.7-5.5
													c-4.2,1.2-6.6,5.5-5.5,9.7c3.6,13.1,10.8,24.4,20.4,33.2c-4.7,2-9.8,3-15.1,3c-21.7,0-39.4-17.7-39.4-39.4s17.7-39.4,39.4-39.4
													c2.2,0,4.5,0.2,6.7,0.6c3.3,0.6,6.5-1,8.2-3.9c9.8-17.4,28.2-28.2,48.1-28.2s38.3,10.8,48.1,28.2c1.6,2.9,4.9,4.4,8.2,3.9
													c2.3-0.4,4.5-0.6,6.7-0.6c21.7,0,39.4,17.7,39.4,39.4C581.4,269.3,563.7,287,542,287L542,287z"/>
											</g>
										</svg>
									</span>
                                <?}?>	
								</div>
								<div class="item_clock">
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="470.2 270.3 19.5 19.5" xml:space="preserve">
										<style type="text/css">
											.st0{stroke:#000000;stroke-width:0.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
										</style>
										<g>
											<path class="st0" d="M480,270.5c-0.2,0-0.3,0.1-0.3,0.3v4.2c0,0.2,0.1,0.3,0.3,0.3s0.3-0.1,0.3-0.3v-3.9c4.7,0.2,8.5,4.1,8.5,8.9
												c0,4.9-4,8.9-8.9,8.9s-8.9-4-8.9-8.9c0-2.4,0.9-4.6,2.6-6.3c0.1-0.1,0.1-0.3,0-0.4s-0.3-0.1-0.4,0c-1.8,1.8-2.8,4.2-2.8,6.7
												c0,5.2,4.3,9.5,9.5,9.5s9.5-4.3,9.5-9.5C489.5,274.8,485.2,270.5,480,270.5L480,270.5z"/>
											<path class="st0" d="M479.5,281.1c0.2,0.3,0.5,0.4,0.8,0.5h0.1c0.3,0,0.6-0.1,0.8-0.3c0.2-0.2,0.4-0.6,0.3-0.9
												c0-0.3-0.2-0.6-0.5-0.8l-4.1-3c-0.1-0.1-0.3-0.1-0.4,0s-0.1,0.3,0,0.4L479.5,281.1z"/>
										</g>
										</svg>
										<span><?=$arItem['PROPERTIES']['duration']['VALUE'];?> мин.</span>
								</div>
							</div>
						</div>
					</div>
    <?}?>
    
                    
                    
<?endforeach;?>	
					
<?}
else{
    echo "Рецептов по Вашему запросу не найдено";
    
}
?>
					
                    