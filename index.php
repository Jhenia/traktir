<?php

/**
 * Template for Joomla! CMS, created with Artisteer.
 * See readme.txt for more details on how to use the template.
 */

defined('_JEXEC') or die;

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';

// Create alias for $this object reference.
$document = & $this;

// Shortcut for template base url.
$templateUrl = $document->baseurl . '/templates/' . $document->template;

// Initialize version-specific view.
$view = $this->artx = ('1.6' == $GLOBALS['version']->RELEASE) ? new ArtxPage16($this) : new ArtxPage15($this);

// Decorate component with Artisteer style.
$view->componentWrapper();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $document->language; ?>" lang="<?php echo $document->language; ?>" >
<head>
 <jdoc:include type="head" />

 <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/system.css" type="text/css" />
 <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/general.css" type="text/css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>/css/template.css" media="screen" />
 <!--[if IE 6]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie6.css" type="text/css" media="screen" /><![endif]-->
 <!--[if IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" type="text/css" media="screen" /><![endif]-->
 <script type="text/javascript" src="<?php echo $templateUrl; ?>/script.js"></script>

  <script type="text/javascript" src="/media/system/js/jquery.js"></script>
<link rel="stylesheet" href="/prettyPhoto/css/prettyPhoto.css" type="text/css">
<script type="text/javascript" src="/prettyPhoto/js/jquery.prettyPhoto.js"></script>
</head>
<body class="<?php echo $view->bodyClass(); ?>">
<div id="art-page-background-glare">
    <div id="art-page-background-glare-image"></div>
</div>
<div id="art-main">
<div class="art-sheet">
    <div class="art-sheet-tl"></div>
    <div class="art-sheet-tr"></div>
    <div class="art-sheet-bl"></div>
    <div class="art-sheet-br"></div>
    <div class="art-sheet-tc"></div>
    <div class="art-sheet-bc"></div>
    <div class="art-sheet-cl"></div>
    <div class="art-sheet-cr"></div>
    <div class="art-sheet-cc"></div>
    <div class="art-sheet-body">
    
<div class="art-header">    
<div class="art-header-jpeg"></div> 

<div id="logo" onClick="window.location='http://traktir-bc.com.ua/'" style="cursor:pointer">
<jdoc:include type="modules" name="logo" />
</div>

<!--// <div id="slogan-text" class="art-logo-text"></div> -->
</div>


<?php echo $view->position('banner1', 'art-nostyle'); ?>
<?php echo $view->positions(array('top1' => 33, 'top2' => 33, 'top3' => 34), 'art-block'); ?>
<div class="art-content-layout">
    <div class="art-content-layout-row">
<div class="art-layout-cell art-<?php echo $view->contentCellClass(array('content' => 'content')); ?>">

<?php
  echo $view->position('banner2', 'art-nostyle');
  if ($view->containsModules('breadcrumb'))
    echo artxPost($view->position('breadcrumb'));
  echo $view->positions(array('user1' => 50, 'user2' => 50), 'art-article');
  echo $view->position('banner3', 'art-nostyle');
  if ($view->hasMessages())
    echo artxPost('<jdoc:include type="message" />');
  echo '<jdoc:include type="component" />';
  echo $view->position('banner4', 'art-nostyle');
  echo $view->positions(array('user4' => 50, 'user5' => 50), 'art-article');
  echo $view->position('banner5', 'art-nostyle');
?>

</div>

    </div>
</div>
<div class="cleared"></div>

<?php echo $view->positions(array('bottom1' => 33, 'bottom2' => 33, 'bottom3' => 34), 'art-block'); ?>
<?php echo $view->position('banner6', 'art-nostyle'); ?>
<div class="art-footer">
    <div class="art-footer-t"></div>
    <div class="art-footer-body">
         <?php echo $view->position('syndicate'); ?>
        <div class="art-footer-text">
  <?php if ($view->containsModules('copyright')): ?>
  <?php echo $view->position('copyright', 'art-nostyle'); ?>
  <?php else: ?>
    <?php ob_start(); ?>
<p>"Трактиръ" &copy; 2012.<br />
Разработка и поддержка - <a href="http://www.am-studio.com.ua" style="text-decoration: none;">АМ Студия</a>. Все права защищены.</p>

    <?php echo str_replace('%YEAR%', date('Y'), ob_get_clean()); ?>
  <?php endif; ?>
        </div>
        <div class="cleared"></div>
    </div>
</div>

		<div class="cleared"></div>
    </div>
</div>
<div class="cleared"></div>
<p class="art-page-footer"></p>

</div>

<?php echo $view->position('debug'); ?>
<script type="text/javascript">
<!--
function PreloadImages()
{
   var imageObj = new Image();
   var images = new Array();
   images[0]="./images/cook.png";
   images[1]="./images/pivo.png";
   images[2]="./images/sito_piano.png";
   images[3]="./images/contact_01.png";
   images[4]="./images/events.jpg";
   images[5]="./images/interior.jpg";
   images[6]="./images/3d.png";
   images[7]="./images/quest.png";
   images[8]="./images/nomera.jpg";
   images[9]="./images/vakan.png";
   images[10]="./images/logo_.png";
   for (var i=0; i<=8; i++)
   {
      imageObj.src = images[i];
   }
}
// -->
</script>
<script type="text/javascript">
$(document).ready(function()
{
   $("#RollOver1 a").hover(function()
   {
      $(this).children("span").stop().fadeTo(300, 0);
   }, function()
   {
      $(this).children("span").stop().fadeTo(300, 1);
   })
   $("#RollOver2 a").hover(function()
   {
      $(this).children("span").stop().fadeTo(300, 0);
   }, function()
   {
      $(this).children("span").stop().fadeTo(300, 1);
   })
   $("#RollOver3 a").hover(function()
   {
      $(this).children("span").stop().fadeTo(300, 0);
   }, function()
   {
      $(this).children("span").stop().fadeTo(300, 1);
   })
   $("#RollOver4 a").hover(function()
   {
      $(this).children("span").stop().fadeTo(300, 0);
   }, function()
   {
      $(this).children("span").stop().fadeTo(300, 1);
   })
   $("#RollOver5 a").hover(function()
   {
      $(this).children("span").stop().fadeTo(300, 0);
   }, function()
   {
      $(this).children("span").stop().fadeTo(300, 1);
   })
   $("#RollOver6 a").hover(function()
   {
      $(this).children("span").stop().fadeTo(300, 0);
   }, function()
   {
      $(this).children("span").stop().fadeTo(300, 1);
   })
   $("#RollOver7 a").hover(function()
   {
      $(this).children("span").stop().fadeTo(300, 0);
   }, function()
   {
      $(this).children("span").stop().fadeTo(300, 1);
   })
   $("#RollOver8 a").hover(function()
   {
      $(this).children("span").stop().fadeTo(300, 0);
   }, function()
   {
      $(this).children("span").stop().fadeTo(300, 1);
   })
   $("#RollOver9 a").hover(function()
   {
      $(this).children("span").stop().fadeTo(300, 0);
   }, function()
   {
      $(this).children("span").stop().fadeTo(300, 1);
   })
       $("#RollOver10 a").hover(function()
   {
      $(this).children("span").stop().fadeTo(300, 0);
   }, function()
   {
      $(this).children("span").stop().fadeTo(300, 1);
   })
   
});
</script>
</body>
</html>