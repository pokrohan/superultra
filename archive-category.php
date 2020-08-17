<?php
/* 
Template Name: Archives
*/
get_header(); ?>
 
<div id="primary" class="site-content">
<div id="content" role="main">
 
<?php while ( have_posts() ) : the_post(); ?>
                 
<h1 class="entry-title"><?php the_title(); ?></h1>
 
<div class="entry-content">
 
<?php the_content(); ?>
 
<p><strong>Categories:</strong></p>
<ul class="bycategories">
	<?php wp_list_categories('title_li='); ?>
</ul> 
</div><!-- .entry-content -->
 
<?php endwhile; // end of the loop. ?>
 
</div><!-- #content -->
</div><!-- #primary -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>