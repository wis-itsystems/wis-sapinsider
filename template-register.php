<?php /*
Template Name: Register
Template Post Type: post, page
*/ ?>
<?php get_header(); ?>
<div class="mh-wrapper clearfix" role="main" itemprop="mainContentOfPage"><?php
	while (have_posts()) : the_post();
     the_content();
	endwhile; ?>
</div>
<?php get_footer(); ?>