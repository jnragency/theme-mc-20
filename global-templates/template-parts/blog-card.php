<?php
/**
 * Case study card
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$theme_path = get_template_directory_uri();
$category = get_the_category();
$cls = '';

$featured_image_position = get_field('featured_image_position');

if ( ! empty( $categories ) ) {
  foreach ( $categories as $cat ) {
    $cls .= $cat->slug . ' ';
  }
}
?>

<div class='blog-card-container <?php echo $card_color; ?>'>
	
	<div class='blog-card-left'>
		<div class='ribbon-container blog-category <?php echo $cls; ?>'>
			<?php the_category(); ?>
		</div>
		
		<div class='blog-card-info'>
			<a class='blog-title' href="<?php the_permalink(); ?>">
				<h2><?php the_title(); ?></h2>
			</a>
			<p class='blog-author'>By <?php the_author(); ?></p>	
			
			<div class='button-navy'>
				<a href="<?php the_permalink(); ?>">Tell me more </a>
			</div>
		</div>
	</div>
	
	<div class='blog-card-right'>
		<a href="<?php the_permalink(); ?>">
			<?php if ( has_post_thumbnail() ) {
		    		echo "<img src=\"" . get_the_post_thumbnail_url() . "\"
		    				style='object-position:".$featured_image_position.";'>";
				} else { 
					echo "<img src='". get_template_directory_uri() ."/assets/images/blog-card-placeholder.jpg'>";
				}
			?>
		</a>
	</div>				     
	
</div>