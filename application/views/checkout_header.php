<?php defined('SYSTEM_INIT') or die('Invalid Usage'); global $loggedin_user; ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta charset="utf-8">
<?php Utilities::writeMetaTags();  ?>
<?php echo Settings::getSetting("CONF_SITE_TRACKER_CODE") ?>
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<? if (strpos($_SERVER['HTTP_HOST'],"yo-kart.com")!== false){?>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<? } ?>
<!-- CSS
  ================================================== -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<?php echo Syspage::getCssIncludeHtml(true); ?>
<link rel="stylesheet" href="<?php echo CONF_WEBROOT_URL?>css/theme-color.php">
<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
<!-- All JavaScript at the bottom, except for Modernizr and Respond.
Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<?php echo Syspage::getJsIncludeHtml(true); ?>
<script type="text/javascript">
	jQuery.Validation.setMessages(<?php echo json_encode( $validation_messages ) ?>)	
</script>
<!-- Favicons ================================================== -->
<?php if (Settings::getSetting("CONF_FAVICON")!="") {?>
<link rel="shortcut icon" href="<?php echo Utilities::generateUrl('image', 'site_favicon',array(Settings::getSetting("CONF_FAVICON")), CONF_WEBROOT_URL)?>">
<?php }?>
<?php if (Settings::getSetting("CONF_APPLE_TOUCH_ICON")!="") {?>
<link rel="apple-touch-icon" href="<?php echo Utilities::generateUrl('image', 'apple_touch_icon',array(Settings::getSetting("CONF_APPLE_TOUCH_ICON")), CONF_WEBROOT_URL)?>">
<?php } ?>
</head>
