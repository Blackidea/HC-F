<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дисконтные карты");
?>

<section class="discounts_card">
			<div class="container">
				<h2><?echo $APPLICATION->GetTitle();?></h2>
				<div class="discounts_card_content">
					<div class="card_image">
						<img src="<?=$APPLICATION->GetTemplatePath("")?>img/pic/card_holiday.png" alt="">
						<!-- <img src="img/pic/card_kopa.png" alt=""> -->
						<!-- <img src="img/pic/card_sibiriada.png" alt=""> -->
					</div>
					<div class="card_info">
						<div class="icon">
							<svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 360.4 388" style="enable-background:new 0 0 360.4 388;" xml:space="preserve">
							<path d="M102.2,254.7h215.1c23.8,0,43-19.4,43-43V121c0-5.3-4.3-9.6-9.6-9.6c-5.3,0-9.6,4.3-9.6,9.6v90.6
								c0,13.2-10.7,23.8-23.8,23.8H102.2c-13.2,0-23.8-10.7-23.8-23.8v-177c0-0.3,0-0.7-0.1-1v-0.2c0-0.2-0.1-0.5-0.1-0.6
								c0-0.2-0.1-0.4-0.2-0.6c0-0.1-0.1-0.2-0.1-0.3c-0.1-0.2-0.2-0.4-0.2-0.6c0-0.1-0.1-0.2-0.1-0.2c-0.1-0.2-0.2-0.4-0.2-0.6
								c-0.1-0.1-0.1-0.2-0.2-0.3L77,29.6c-0.1-0.2-0.2-0.2-0.2-0.4c-0.1-0.1-0.2-0.2-0.2-0.3c-0.1-0.2-0.2-0.3-0.3-0.4L76,28.2
								c-0.2-0.2-0.2-0.3-0.4-0.5c-0.1-0.1-0.2-0.2-0.2-0.2c-0.2-0.2-0.3-0.3-0.5-0.4l-0.2-0.2c-0.2-0.1-0.3-0.2-0.5-0.3
								c-0.2-0.2-0.4-0.2-0.6-0.4c-0.1,0-0.2-0.1-0.2-0.2l-1-0.5L13.3,0.8C8.4-1.3,2.8,1,0.8,5.9C-1.3,10.7,1,16.4,5.9,18.4l53.2,22.5V279
								c0,22.6,17.4,41,39.4,42.9c-4.5,6.7-7.1,14.8-7.1,23.5c0,23.4,19.1,42.6,42.6,42.6c23.4,0,42.6-19.1,42.6-42.6
								c0-8.6-2.6-16.6-7-23.4h101.8c-4.4,6.7-7,14.7-7,23.4c0,23.4,19.1,42.6,42.6,42.6c23.4,0,42.6-19.1,42.6-42.6
								c0-23.4-19.1-42.6-42.6-42.6H102.2c-13.2,0-23.8-10.7-23.8-23.8v-31.6C85.2,252,93.4,254.7,102.2,254.7L102.2,254.7z M157.3,345.4
								c0,12.9-10.5,23.4-23.4,23.4c-12.9,0-23.4-10.5-23.4-23.4c0-12.9,10.5-23.4,23.4-23.4C146.8,322,157.3,332.5,157.3,345.4
								L157.3,345.4z M330.3,345.4c0,12.9-10.5,23.4-23.4,23.4c-12.9,0-23.4-10.5-23.4-23.4c0-12.9,10.5-23.4,23.4-23.4
								C319.8,322,330.3,332.5,330.3,345.4L330.3,345.4z M330.3,345.4"/>
							<path d="M145.6,185.7c1.8,1.8,4.3,2.8,6.8,2.8c2.5,0,4.9-1,6.8-2.8L271.4,73.6c3.8-3.8,3.8-9.8,0-13.6c-3.8-3.8-9.8-3.8-13.6,0
								L145.6,172.1C141.9,175.9,141.9,182,145.6,185.7L145.6,185.7z M145.6,185.7"/>
							<path d="M228.5,135.5c-13,13-13,34,0,46.9c6.2,6.2,14.6,9.7,23.4,9.7c8.9,0,17.2-3.4,23.4-9.7c13-13,13-34,0-46.9
								c-6.2-6.2-14.6-9.7-23.4-9.7C243.1,125.8,234.8,129.2,228.5,135.5L228.5,135.5z M261.8,168.8c-2.6,2.6-6.2,4.1-9.8,4.1
								c-3.8,0-7.2-1.4-9.8-4.1c-5.4-5.4-5.4-14.3,0-19.8c2.6-2.6,6.2-4.1,9.8-4.1c3.8,0,7.2,1.4,9.8,4.1
								C267.2,154.5,267.2,163.4,261.8,168.8L261.8,168.8z M261.8,168.8"/>
							<path d="M167.6,118c8.9,0,17.2-3.4,23.4-9.7c6.2-6.2,9.7-14.6,9.7-23.4c0-8.9-3.4-17.2-9.7-23.4c-6.2-6.2-14.6-9.7-23.4-9.7
								c-8.9,0-17.2,3.4-23.4,9.7c-6.2,6.2-9.7,14.6-9.7,23.4c0,8.9,3.4,17.2,9.7,23.4C150.4,114.6,158.7,118,167.6,118L167.6,118z
								 M157.7,75c2.6-2.6,6.2-4.1,9.8-4.1c3.7,0,7.2,1.4,9.8,4.1c2.6,2.6,4.1,6.2,4.1,9.8c0,3.8-1.4,7.2-4.1,9.8c-2.6,2.6-6.2,4.1-9.8,4.1
								c-3.7,0-7.2-1.4-9.8-4.1c-2.6-2.6-4.1-6.2-4.1-9.8C153.6,81.2,155.1,77.6,157.7,75L157.7,75z M157.7,75"/>
							</svg>
						</div>
						<div class="text">100 рублей = 1 балл</div>
					</div>
					<div class="card_text">
                     <?$APPLICATION->IncludeFile(
            			$APPLICATION->GetTemplatePath("include_areas/discounts_cards.html"),
            			Array(),
            			Array("MODE"=>"html")
            		);?>
						
					</div>
				</div>
			</div>
		</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>