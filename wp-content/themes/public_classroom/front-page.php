<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Public_Classroom_2016
 * @since Public_Classroom 1.0
 */

get_header(); ?>

<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post();
	
?>



<main>
	<h1>Hello, World!</h1>
	
</main>
<?php endwhile; ?>


<?php get_footer(); ?>