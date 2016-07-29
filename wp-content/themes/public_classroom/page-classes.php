<?php
/**
 * Template Name: Classes
 *
 * @package WordPress
 * @subpackage Public_Classroom
 * @since Public Classroom 2016 1.0
 */

get_header(); ?>

  <?php /* The loop */ ?>
  <?php while ( have_posts() ) : the_post();
  ?>
    
  <main>

  </main>
  <?php endwhile; ?>

 <?php get_footer(); ?>