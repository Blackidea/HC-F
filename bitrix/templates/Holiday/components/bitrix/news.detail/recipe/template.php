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
$this->setFrameMode(true);

//print_r($arResult["DISPLAY_PROPERTIES"]);

//echo "<pre>";
//print_r($arResult);
//echo "</pre>";
?>
<section class="recepts_full">
			<div class="container">
				<a href="/recipes/" class="all_news">
					<svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 28 28" style="enable-background:new 0 0 28 28;" xml:space="preserve">
					<path id="XMLID_237_" class="st0" d="M19.4,14.5C19.5,14.4,19.5,14.4,19.4,14.5c0.1-0.1,0.1-0.2,0.1-0.2c0,0,0,0,0-0.1
						c0-0.1,0-0.1,0-0.2l0,0l0,0c0-0.1,0-0.1,0-0.2c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0,0-0.1
						c0,0-0.1-0.1-0.1-0.1v0c0,0,0,0,0,0l-4.4-4.4c-0.4-0.4-1.1-0.4-1.5,0h0c-0.4,0.4-0.4,1.1,0,1.5l2.7,2.7H7.5c-0.6,0-1.1,0.5-1.1,1.1
						s0.5,1.1,1.1,1.1H16l-2.7,2.7c-0.4,0.4-0.4,1.1,0,1.5h0c0.4,0.4,1.1,0.4,1.5,0l4.4-4.4c0,0,0,0,0,0v0c0,0,0.1-0.1,0.1-0.1
						c0,0,0,0,0-0.1C19.4,14.5,19.4,14.5,19.4,14.5z"/>
					<g id="XMLID_61_">
						<path id="XMLID_13_" class="st0" d="M14,2c6.6,0,12,5.4,12,12s-5.4,12-12,12S2,20.6,2,14S7.4,2,14,2 M14,0C6.3,0,0,6.3,0,14
							s6.3,14,14,14c7.7,0,14-6.3,14-14S21.7,0,14,0L14,0z"/>
					</g>
					<g class="hover">
						<path  class="st1" d="M14,0C6.3,0,0,6.3,0,14s6.3,14,14,14c7.7,0,14-6.3,14-14S21.7,0,14,0z M19.6,14L19.6,14
							c0,0.1,0,0.1,0,0.2c0,0,0,0,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1-0.1,0.1c0,0,0,0,0,0.1c0,0-0.1,0.1-0.1,0.1v0
							c0,0,0,0,0,0l-4.4,4.4c-0.4,0.4-1.1,0.4-1.5,0c-0.4-0.4-0.4-1.1,0-1.5l2.7-2.7H7.5c-0.6,0-1.1-0.5-1.1-1.1s0.5-1.1,1.1-1.1H16
							l-2.7-2.7c-0.4-0.4-0.4-1.1,0-1.5c0.4-0.4,1.1-0.4,1.5,0l4.4,4.4c0,0,0,0,0,0v0c0,0,0.1,0.1,0.1,0.1c0,0,0,0,0,0.1
							c0,0,0,0.1,0.1,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1C19.6,13.9,19.6,13.9,19.6,14L19.6,14z"/>
					</g>
					</svg>
					<span>Все рецепты</span>
				</a>
				<div class="row">
					<div class="col-sm-12 col-md-8 col-lg-8">
						<div class="recepts_content">
							<h1><?=$arResult["NAME"]?></h1>
							<div class="recept_info">
								<div class="recept_rating">
									Сложность:
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
								</div>
								<div class="recept_time">
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
									<span><?=$arResult["DISPLAY_PROPERTIES"]["duration"]["VALUE"]?> мин.</span>
								</div>
								<div class="recept_category">
									<span>Кухня: <?=$arResult["DISPLAY_PROPERTIES"]["type"]["DISPLAY_VALUE"]?></span>
								</div>
							</div>
							<img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" class="img-full" alt="<?=$arResult["NAME"]?>" title="<?=$arResult["NAME"]?>">
							<div class="repect_ingridients">
								<h3>Ингредиенты:</h3>
								<ul>
									<?foreach ($arResult["DISPLAY_PROPERTIES"]['ingredients']['VALUE'] as $ingredient):?>
                                    <li><?=$ingredient?></li>
                                    <?endforeach;?>
								</ul>
								<a href="#" class="button">Добавить в список покупок</a>
							</div>
							<div class="recept_created">
								<h3>Приготовление:</h3>
								<?=$arResult['DETAIL_TEXT']?>
							</div>
						</div>
						<div class="share_links">
							<div class="share_tabs">
								<a href="#">
									<svg version="1.1" id="Режим_изоляции"
										 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 160.2 153.9"
										 style="enable-background:new 0 0 160.2 153.9;" xml:space="preserve" width="32" heihgt="31">
									<style type="text/css">
										.st0{stroke:#000000;stroke-width:3;stroke-miterlimit:10;}
									</style>
									<path class="st0" d="M121.9,99.4c-0.5-1.6,0.1-3.3,1.4-4.3l29.9-22c4.8-3.5,6.7-9.4,4.8-15c-1.8-5.6-6.8-9.3-12.7-9.3l-37.1-0.2
										c-1.7,0-3.1-1.1-3.6-2.6L92.9,10.7C91.1,5.1,86,1.5,80.1,1.5c-5.9,0-10.9,3.6-12.8,9.2l-5.2,15.9c-0.8,2.5,0.5,5.2,3.1,6.1
										c2.5,0.8,5.2-0.5,6.1-3.1l5.2-15.9c0.8-2.5,3-2.7,3.7-2.7c0.7,0,2.9,0.2,3.7,2.7L95.4,49c1.8,5.5,6.9,9.2,12.7,9.2l37.1,0.2
										c2.6,0,3.4,2,3.7,2.7c0.2,0.6,0.7,2.8-1.4,4.3l-29.9,22c-4.7,3.4-6.6,9.4-4.9,14.9l11.3,35.4c0.8,2.5-0.9,3.9-1.4,4.3
										c-0.5,0.4-2.4,1.5-4.5,0L88,120.3c-4.7-3.4-11-3.4-15.7,0L42.1,142c-2.1,1.5-4,0.4-4.5,0c-0.5-0.4-2.2-1.8-1.4-4.3l11.3-35.4
										c1.8-5.5-0.2-11.5-4.9-14.9l-29.9-22c-2.1-1.5-1.6-3.7-1.4-4.3c0.2-0.6,1.1-2.7,3.7-2.7l37.1-0.2c2.6,0,4.8-2.2,4.8-4.8
										c0-2.6-2.2-4.8-4.8-4.8h0l-37.1,0.2C9,48.9,4,52.5,2.2,58.1c-1.8,5.6,0.1,11.5,4.8,15l29.9,22c1.3,1,1.9,2.7,1.4,4.3L27,134.8
										c-1.8,5.6,0.1,11.5,4.9,15c2.4,1.7,5.2,2.6,7.9,2.6c2.7,0,5.5-0.9,7.9-2.6l30.1-21.7c1.3-1,3.2-1,4.5,0l30.1,21.7
										c4.8,3.5,11,3.4,15.8,0c4.8-3.5,6.7-9.4,4.9-15L121.9,99.4z M121.9,99.4"/>
									</svg>
								</a>
								<a href="#">
									<svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 viewBox="0 0 392.6 376" style="enable-background:new 0 0 392.6 376;" xml:space="preserve" width="32" heihgt="30">
									<path d="M389,148.5c-1.8-3.3-4.1-6.2-7-8.6L230,12.3c-19.6-16.4-48-16.4-67.6,0L48.5,108c-6.1,5.1-6.9,14.2-1.8,20.3
										c5.1,6.1,14.2,6.9,20.3,1.8L181,34.4c8.9-7.4,21.7-7.4,30.6,0l143.6,120.6l-61,41.6c-6.6,4.5-8.2,13.4-3.8,20
										c2.8,4.1,7.3,6.2,11.9,6.2c2.8,0,5.6-0.8,8.1-2.5l53.4-36.4v143l-122-122c-12.2-12.2-28.3-18.9-45.6-18.9s-33.4,6.7-45.6,18.9
										l-15.9,15.9L23.3,145.5c-3.7-2.5-8.3-3.1-12.6-1.8c-4.2,1.4-7.6,4.7-9,8.9C0.6,155.7,0,159,0,162.3v184.4c0,7.8,3,15.1,8.6,20.6
										c2.8,2.8,6.5,4.2,10.2,4.2c3.7,0,7.4-1.4,10.2-4.2c0.1-0.1,0.2-0.2,0.2-0.3L171,225.2c6.7-6.7,15.7-10.4,25.2-10.4
										c9.5,0,18.5,3.7,25.2,10.4l122,122H86.6c-7.9,0-14.4,6.5-14.4,14.4c0,7.9,6.5,14.4,14.4,14.4h276.7c7.8,0,15-3.1,20.3-8.2
										c0.2-0.1,0.2-0.2,0.4-0.3l0.3-0.3c5.1-5.3,8.2-12.5,8.2-20.3V162.4C392.6,157.5,391.4,152.8,389,148.5L389,148.5z M28.7,326.8V184
										l85.2,57.6L28.7,326.8z M28.7,326.8"/>
									</svg>
								</a>
								<a href="#" onclick="window.print()">
									<svg version="1.1" id="Режим_изоляции"
										 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 473.5 517"
										 style="enable-background:new 0 0 473.5 517;" xml:space="preserve" width="32" heihgt="34">
									<style type="text/css">
										.st0{stroke:#000000;stroke-width:5;stroke-miterlimit:10;}
									</style>
									<g id="X1OBjU_1_">
										<g>
											<path class="st0" d="M362.8,2.5c7.1,3.9,9.6,9.8,9.4,17.8c-0.3,21.7,0,43.3-0.2,65c0,4.6,1.3,6,5.9,6c16.2-0.3,32.3,0.3,48.5-0.2
												c23.8-0.7,43.5,19.8,43.9,39.3c0.1,4,0.6,7.9,0.6,11.9c0,64.8,0,129.7,0,194.5c0,8.4-0.9,16.7-4.9,24.2
												c-8.7,16.6-22.9,24-41.1,24.4c-7.8,0.2-15.7,0.8-23.4-0.6c-7.5-1.4-12-6.5-12.2-13.6c-0.3-7.6,4.2-13.5,11.7-15.2
												c7.4-1.7,14.9-0.6,22.4-0.7c13-0.1,17.4-4.4,17.4-17.3c0-67.2-0.1-134.3-0.1-201.5c0-10.4-5.1-15.7-15.5-15.8c-21.7,0-43.3,0-65,0
												c-12.1,0-17.7-5.6-17.7-17.7c0-21.7-0.1-43.3,0.1-65c0-4.6-1-6.4-6-6.4c-66.5,0.2-133,0.1-199.5,0c-4.5,0-6.1,1.1-6,5.9
												c0.3,16,0.3,32,0.1,48c-0.1,4.5,1.5,5.6,5.8,5.6c33.3-0.1,66.7-0.1,100,0c8.2,0,13.8,5.3,14.8,13.4c0.8,6.9-4,13.5-11.4,15.5
												c-2.3,0.7-4.6,0.7-6.9,0.7c-17.3,0-34.7,0-52,0c-43.8,0-87.7,0-131.5,0c-12.3,0-17,4.6-17.1,16.7c0,67,0,134,0,201
												c0,12.3,4.5,16.7,17,16.7c7.8,0,15.7-0.1,23.5,0.2c8,0.4,13.8,5.8,14.7,13.1c0.8,6.6-3.1,13.2-9.3,15.5c-3,1.1-6.2,1.2-9.4,1.3
												c-9.5,0.2-19,0.2-28.5-0.6c-18.6-1.6-35.7-18.9-37.5-37.3c-1.5-16.3-0.8-32.6-0.8-48.9c-0.1-53.3-0.1-106.7-0.1-160
												c0-23.7,13.1-41.3,34.6-46.5c3-0.7,5.9-0.8,8.9-0.8c16.5,0,33-0.1,49.5,0.1c4.5,0.1,6.1-1.2,6-5.9c-0.2-21.5,0.1-43-0.2-64.5
												c-0.1-8.1,2.3-14.3,9.4-18.4C194.8,2.5,278.8,2.5,362.8,2.5z"/>
											<path class="st0" d="M131.8,514.5c-7.5-3.3-10.4-9.1-10.4-17.1c0.1-68.3,0-136.6,0-204.9c0-6.6-0.1-6.6-6.6-6.6
												c-6.3,0-12.7,0-19-0.1c-9.5-0.2-15.6-6.3-15.5-15.2c0.1-8.7,6.2-14.3,15.7-14.3c93.9,0,187.9,0,281.8,0c9.2,0,15.5,6,15.6,14.6
												c0.2,8.6-6.1,14.8-15.3,15c-6.8,0.1-13.7,0.3-20.5,0c-4.3-0.2-5.8,1.1-5.8,5.6c0.2,37.5,0.1,75,0.1,112.4
												c0,31.6-0.1,63.3,0.1,94.9c0,7.4-3.4,12.3-9.4,15.8C272.5,514.5,202.2,514.5,131.8,514.5z M322.5,385.8c0-31.2-0.1-62.3,0.1-93.5
												c0-4.9-1-6.6-6.3-6.6c-53,0.2-106,0.2-158.9,0c-4.7,0-6.3,1.2-6.3,6.1c0.2,62.5,0.2,125,0,187.4c0,5,1.6,6.1,6.3,6.1
												c53-0.1,106-0.1,158.9,0c4.7,0,6.3-1.2,6.3-6.1C322.4,448.1,322.5,416.9,322.5,385.8z"/>
											<path class="st0" d="M104.1,182.7c0,10-8.2,18.1-18.2,18c-9.8-0.1-17.8-8.4-17.7-18.5c0.1-9.7,8.2-17.8,17.9-17.9
												C96,164.3,104.2,172.7,104.1,182.7z"/>
										</g>
									</g>
									</svg>
								</a>
							</div>
							<div class="title">Поделится с друзьями:</div>
							<div class="uSocial-Share" data-pid="f2d468e4c9f2d2dd464e3c801b5d6761" data-type="share" data-options="round-rect,style2,absolute,horizontal,size24,eachCounter1,counter0" data-social="vk,ok,fb,twi,gPlus" data-mobile="vi,wa,telegram,sms"></div>
						</div>
					</div>
					<div class="hidden-sm hidden-xs  col-sm-3 col-md-3 col-lg-3 pull-right">
						<div class="recepts">
							<div class="recepts_slider">
                                <!-- Другие рецепты -->
                                <?$APPLICATION->IncludeComponent(
                            	"bitrix:news.list",
                            	"other-recipes",
                            	Array(
                            		"ACTIVE_DATE_FORMAT" => "d.m.Y",
                            		"ADD_SECTIONS_CHAIN" => "Y",
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
                            		"DETAIL_URL" => "/recipes/#ELEMENT_ID#/",
                            		"DISPLAY_BOTTOM_PAGER" => "Y",
                            		"DISPLAY_DATE" => "Y",
                            		"DISPLAY_NAME" => "Y",
                            		"DISPLAY_PICTURE" => "Y",
                            		"DISPLAY_PREVIEW_TEXT" => "Y",
                            		"DISPLAY_TOP_PAGER" => "N",
                            		"FIELD_CODE" => array("",""),
                            		"FILTER_NAME" => "",
                            		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            		"IBLOCK_ID" => 19,
                            		"IBLOCK_TYPE" => "recipes",
                            		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                            		"INCLUDE_SUBSECTIONS" => "Y",
                            		"MESSAGE_404" => "",
                            		"NEWS_COUNT" => "4",
                            		"PAGER_BASE_LINK_ENABLE" => "N",
                            		"PAGER_DESC_NUMBERING" => "N",
                            		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            		"PAGER_SHOW_ALL" => "N",
                            		"PAGER_SHOW_ALWAYS" => "N",
                            		"PAGER_TEMPLATE" => ".default",
                            		"PAGER_TITLE" => "Рецепты",
                            		"PARENT_SECTION" => "",
                            		"PARENT_SECTION_CODE" => "",
                            		"PREVIEW_TRUNCATE_LEN" => "",
                            		"PROPERTY_CODE" => array("duration","hardship"),
                            		"SET_BROWSER_TITLE" => "Y",
                            		"SET_LAST_MODIFIED" => "N",
                            		"SET_META_DESCRIPTION" => "Y",
                            		"SET_META_KEYWORDS" => "Y",
                            		"SET_STATUS_404" => "N",
                            		"SET_TITLE" => "Y",
                            		"SHOW_404" => "N",
                            		"SORT_BY1" => "ACTIVE_FROM",
                            		"SORT_BY2" => "SORT",
                            		"SORT_ORDER1" => "DESC",
                            		"SORT_ORDER2" => "ASC",
                                    "CURENT_NEW"  => $arResult["ID"]
                            	)
                            );?>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        