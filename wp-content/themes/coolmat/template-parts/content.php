<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coolmat
 */

//  if we say global here, it allows us to share this variable between all of our files
global $item_number
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	
<!-- Title on the left  -->
<h1 class="entry-title">
<?php 
the_title();?>
</h1>	
<!-- here we grab our food menu item number -->
<div class="entry-number">
<span>
<?php echo $item_number; ?>
</span>
</div>
<!-- Price on the right -->
<div class="entry-price">
<?php 
the_content();?>
</div>	

	</header><!-- .entry-header -->

	<?php coolmat_post_thumbnail(); ?>


</article><!-- #post-<?php the_ID(); ?> -->
