<?php get_header(); ?>

<body>

<div class="container_12">
    <div id="blog_name" class="grid_8 prefix_2">
        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
    </div>   
    <div class="clear"></div> 
</div>

<?php include('loop.php')?>

<?php get_footer(); ?>