<?php
/**
 * Template part for displaying market teaser on category page
 * @package timberwolf
 */
?>

<?php 

$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>

<article 
    id="post-<?php the_ID(); ?>" 
    class="teaser-market" 
    <?php post_class(); ?>
    
>

<div class="image-cropper-market">
<?php timberwolf_post_thumbnail(); ?>  

</div>
    
    <a class="teaser-market__link-wrap" href="<?php echo get_permalink(); ?>">    
        <?php the_title( '<h1 class="entry-title">', '</h2>' );?>  
        <?php the_excerpt() ?>
    </a>  

</article>



