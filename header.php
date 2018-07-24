<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?> 
<!DOCTYPE html>	
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi" lang="vi">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />

<?
$detect = new Mobile_Detect;
// Any tablet device.
if( $detect->isMobile() && !$detect->isTablet() ):?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?endif;?>

<title><?$APPLICATION->ShowTitle()?></title>

<!-- Google font: Roboto-->
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Roboto:400,700&amp;subset=vietnamese" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />

<link href="/bitrix/templates/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- fancybox : CSS -->
<link rel="stylesheet" type="text/css" href="/bitrix/templates/libs/fancybox/jquery.fancybox.min.css">
   
<script  type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/compress.js"></script>




<!-- fancybox : JS -->
<script src="/bitrix/templates/libs/fancybox/jquery.fancybox.min.js"></script>
 
<?$APPLICATION->ShowHead();?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110173880-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110173880-2');
</script>


</head>
<?
global $USER;
$bodyClass ="";
if ($USER->IsAdmin()){
  $bodyClass = "is-admin";
}

$page ="";
if (defined("IS_PAGE_HOME") ){
  $page="home";
}
if (defined("IS_PAGE_TINHNANG") ){
  $page .=" tinh-nang";
}

?>
<body class="<?=$bodyClass?> <?=$page?>">
  <div id="panel"><?$APPLICATION->ShowPanel();?></div>
  <h1 style="position:absolute;left:-99999px;"><?$APPLICATION->ShowTitle()?></h1>
  <h2 style="position:absolute;left:-99999px;"><?=getMessage("SLOGAN")?></h2>

<div id="site-container">
	
  <div id="header" class="hidden-xs">
	<div class="header-content fix-width hidden-xs">
	  <div class="row">
		<!-- Hieu ung may bay-->
		<div class="header-b-clouds-area">
		  <ul class="b-clouds" style="z-index: 1;">
			
			  <li class="n3 m-type-1" style="cursor: pointer;" onclick="window.open('<?=DOMAIN_VITRANET24_VIVI?>', '_blank')"></li>
			  <li class="n1 m-type-3" style="cursor: pointer;" onclick="window.open('<?=DOMAIN_VITRANET24_VIVI?>', '_blank')" ></li>
			
		  </ul>
		</div> <!-- header-b-clouds-area-->
		
		<div class="col-md-8 left-part">
		  <div class="lang"><a target="_blank"  href="http://vitranet24.com/en/"><img src="<?=SITE_TEMPLATE_PATH?>/images/icon_us.png" />Tiếng Anh</a></div>
		  <div class="phone">
			<?$APPLICATION->IncludeFile("/include/phone.php"
		   , Array(), Array("MODE"=>"html")   );?>
		  </div>
		  <div class="website">
			<?$APPLICATION->IncludeFile("/include/website.php"
		   , Array(), Array("MODE"=>"html")   );?>
		  </div>
		</div>
		<div class="col-md-4 right-part">
		  <?$APPLICATION->IncludeComponent(
			"vportal:search.form",
			"b24",
			Array(
				"USE_SUGGEST" => "N",
				"PAGE" => URL_TIM_KIEM
			),
		false
		);?>
		</div>
	  
		
	  </div> <!-- row-->
	</div> <!-- header-content-->
	
  </div> <!-- header-->
  
  
  <div class="header-mobile visible-xs">
	<button type="button" class="" data-toggle="collapse" data-target="#top-menu-id">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
	</button>
	<div class="m-logo">
		<a href="<?=URL_LANG?>">
		  <img src="<?=SITE_TEMPLATE_PATH?>/images/mobile/logo.png" />
		</a>
	</div> <!-- m-logo-->
	<div class="m-search">
	  <a href="<?=URL_TIM_KIEM?>"><img src="<?=SITE_TEMPLATE_PATH?>/images/icon_search.png" /></a>
	</div>
	
  </div>
  
  <div class="logo-area fix-width hidden-xs">
	  <div class="cloud-static-0">
		  <img src="<?=SITE_TEMPLATE_PATH?>/images/cloud_static_0.png" />
	  </div>
	
	  <div class="cloud-static-1">
		  <img src="<?=SITE_TEMPLATE_PATH?>/images/cloud_static_1.png" />
	  </div>
	  <div class="cloud-static-2">
		 <img src="<?=SITE_TEMPLATE_PATH?>/images/cloud_static_2.png" />
	  </div>
	  <div class="cloud-static-3">
		 <img src="<?=SITE_TEMPLATE_PATH?>/images/cloud_static_3.png" />
	  </div>
	  <div class="cloud-static-4">
		 <img src="<?=SITE_TEMPLATE_PATH?>/images/cloud_static_4.png" />
	  </div>
	 
	  
	  <div class="logo-inner">
		<a href="<?=URL_LANG?>"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" /></a>
	  </div>
	  
  </div>
  
  <!-- visible phone , language-->
  <div class="container phone-lang  visible-xs">
	  <div class="phone-xs">
		<a href="tel:<?=GetMessage("PHONE_MOBI")?>">
		   <img src="<?=SITE_TEMPLATE_PATH?>/images/icon-phone.png" alt="">
		  <span><?=GetMessage("PHONE_MOBI");?></span>
		</a>
		 
	  </div>
	  <div class="lang-xs-en">
			  <a href="http://www.vitranet24.com/en/" title=""><img src="<?=SITE_TEMPLATE_PATH?>/images/icon-en.png" alt=""></a>
	  </div>
	  <div class="lang-xs-vn">
			  <a href="/" title=""><img src="<?=SITE_TEMPLATE_PATH?>/images/icon-vn.png" alt=""></a>
	  </div>
	  
  </div>

  
  <div class="home-page-title-area">
	 <div class="fix-width">
	  <div class="title">
		<?$APPLICATION->IncludeFile("/include/home_page_title.php"
			 , Array(), Array("MODE"=>"text")   );?>
	  </div>
	  <div class="sub-title">
		<?$APPLICATION->IncludeFile("/include/home_page_subtitle.php"
			 , Array(), Array("MODE"=>"text")   );?>
	  </div>
	  
	</div><!-- fix-width-->
  </div>
  
  <div class="top-menu-area collapse" id="top-menu-id">
	<div class="fix-width">
	  <?$APPLICATION->IncludeComponent("vportal:menu", "b24", array(
		  "ROOT_MENU_TYPE" => "top",
		  "MENU_CACHE_TYPE" => "N",
		  "MENU_CACHE_TIME" => "604800",
		  "MENU_CACHE_USE_GROUPS" => "Y",
		  "MENU_CACHE_GET_VARS" => array(
		  ),
		  "MAX_LEVEL" => "1",
		  "CHILD_MENU_TYPE" => "right",
		  "USE_EXT" => "N",
		  "DELAY" => "N",
		  "ALLOW_MULTI_SELECT" => "N",
		  "CACHE_TYPE" => "N",
		  "MENU_CACHE_TYPE" => "N",
		  ),
		  false
	  );?>
	  <?if (defined("IS_PAGE_HOME") ):?>
		<div class="left-banner hidden-xs">
		  
			<?$APPLICATION->IncludeFile("/include/banner/left.php"
			 , Array(), Array("MODE"=>"html")   );?>
	  
		</div>
		<div class="right-banner hidden-xs">
		  <a href=""><?$APPLICATION->IncludeFile("/include/banner/right.php"
			 , Array(), Array("MODE"=>"html")   );?></a>
		</div>
	  <?endif;?>
	</div> <!-- fix-width-->
  </div> <!-- top-menu-area-->
  
  
  <!-- mobile - dang ky demo-->
  <?if (defined("IS_SHOW_TOP_BUTTONS") ):?>
  <div class="top-button visible-xs">
		<div class="top-button-dangky">
			<a href="<?=URL_DANG_KY?>"><?=getMessage("T_DANGKY_DEMO")?></a>
		</div>
   </div>
  <?endif;?>
  
  <div class="main-content-area">
	<div class="bg-img">
	  <img src="<?=SITE_TEMPLATE_PATH?>/images/bg_main.jpg" />
	</div>
  