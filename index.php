
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Medelec
 */

?>
<?php get_header(); ?>

    <!--firts carousel Products-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
      <div class="wrapper">
        <?php
      if(have_posts()):  while (have_posts()): the_post();

     get_template_part('content',get_post_format());

       endwhile;endif;
       ?>
</div>
<!--News slider-->
      <?php get_sidebar();?>
<!--Testimonials slider-->
      </div>
    </div>
 <!--footer-->

<?php get_footer(); ?>
