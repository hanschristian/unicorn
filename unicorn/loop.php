<div class="container_12">

<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post grid_8 prefix_2">
    <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
    
    <div>
	<?php the_content('<p>Leer la entrada completa</p>'); ?>
	</div>
</div>

<div class="clear"></div> 

<div class="grid_4 prefix_2">
	<div class="date"><p><?php the_author(); ?></p><p><?php the_time(__('j/m/Y')) ?></p></div>
</div>

<div class="clear"></div> 

<?php endwhile; else: ?>

    <p>No hay posts.</p>

<?php endif; ?>


<div class="grid_4 prefix_6">
	<div class="next_button"><?php next_posts_link('Leer entradas anteriores'); ?>
</div>
</div>

</div>

</div>

