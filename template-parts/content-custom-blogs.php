<ul>
 
<?php 
// Define our WP Query Parameters
$the_query = new WP_Query( 'posts_per_page=5' );
?> 
 
<?php 
// Start our WP Query
while ($the_query -> have_posts()) : $the_query -> the_post(); 
$meta = get_post_meta(get_the_ID(), '', true);
// Display the Post Title with Hyperlink
?>
  
 
<li>
    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
    <div class="entry-meta">
				<?php
				superultra_posted_on();
				superultra_posted_by();
				?>
            </div>
    <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
    <?php the_content(); ?>
</li>
  
 
<li><?php 
// Display the Post Excerpt
the_excerpt(__('(Continue Reading…)')); ?></li>
  
 
<?php 

wp_link_pages();
// Repeat the process and reset once it hits the limit
endwhile;
wp_reset_postdata();
?>
</ul>