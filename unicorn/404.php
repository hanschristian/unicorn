<?php get_header(); ?>

<body>

<div class="container_12">
    <div id="blog_name" class="grid_8 prefix_2">
        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
    </div>   
    <div class="clear"></div> 
</div>

<div class="container_12">

<div id="content">

<div class="post grid_8 prefix_2">
    <h2><?php _e('404: Not found', 'unicorn'); ?></h2>
    
    <div>
		<p><?php _e('The page you requested could not be found', 'unicorn'); ?></p>
	</div>
</div>

<div class="clear"></div> 
<?php get_footer(); ?>