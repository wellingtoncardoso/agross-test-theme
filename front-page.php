 <?php 
/*
*Template Name: Front Page
*/
get_header(); ?>
<main>
  <?php get_template_part( 'template-parts/content', 'sidebar' ); ?>
  <?php get_template_part( 'template-parts/content', 'streaming' ); ?>
  <?php get_template_part( 'template-parts/content', 'video' ); ?>
  <?php get_template_part( 'template-parts/content', 'list-videos' ); ?>
  <?php get_template_part( 'template-parts/content', 'about' ); ?>
</main>
<?php get_footer(); ?>