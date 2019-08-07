<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package timberwolf
 */
?>


<article class="project-archive-item teaser-project" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
<div class="project-img">
            <?php timberwolf_post_thumbnail(); ?>  
                          
</div>


<div class="project-details">
<a href="<?php echo get_permalink(); ?>">    <?php
                the_title( '<h2 class="entry-title">', '</h2>' );
            ?>
        </a>   
     <?php the_excerpt() ?>   
     <a class="btn btn--default" href="<?php echo get_permalink(); ?>">View Project</a>        
</div>




    



   
    
</article>


<!-- #post-<?php the_ID(); ?> -->
