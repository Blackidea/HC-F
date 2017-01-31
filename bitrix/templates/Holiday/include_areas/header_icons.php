
<?
$page = $APPLICATION->GetCurPage();
$page_a = explode("/",$page);
//echo $page_a[1];
?>

<ul class="stores">
							<li class="item_5 <?=($page_a[1]=="sibiriada") ?'active':'';?>"><a href="/sibiriada"><img src="<?=$APPLICATION->GetTemplatePath("")?>img/logo_sibiriada.svg" alt=""></a></li>
							<li class="item_4 <?=($page_a[1]=="holiday-super") ?'active':'';?>"><a href="/holiday-super"><img src="<?=$APPLICATION->GetTemplatePath("")?>img/logo_super.svg" alt=""></a></li>
							<li class="item_3 <?=($page_a[1]=="planeta-holiday") ?'active':'';?>"><a href="/planeta-holiday"><img src="<?=$APPLICATION->GetTemplatePath("")?>img/logo_planet.svg" alt=""></a></li>
							<li class="item_2 <?=($page_a[1]=="kora") ?'active':'';?>"><a href="/kora"><img src="<?=$APPLICATION->GetTemplatePath("")?>img/logo_kopa.svg" alt=""></a></li>
							<li class="item_1 <?=($page_a[1]=="") ?'active':'';?>"><a href="/"><img src="<?=$APPLICATION->GetTemplatePath("")?>img/logo.svg" alt=""></a></li>
						</ul>