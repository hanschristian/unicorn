<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 

<title><?php wp_title('|',true,'right'); ?>
<?php bloginfo('name'); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />

<style type="text/css" media="all">
@import "<?php echo get_bloginfo('template_directory').'/css/reset.css'; ?>";
@import "<?php echo get_bloginfo('template_directory').'/css/text.css'; ?>";
@import "<?php echo get_bloginfo('template_directory').'/css/960.css'; ?>";
@import "<?php echo get_bloginfo('stylesheet_url'); ?>";
</style>

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('url'); ?>/feed/" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>

<!-- No deberias mirar estas cosas, son para nenes grandes -->
