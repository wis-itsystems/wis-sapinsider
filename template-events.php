<?php /* Template Name: Events */ ?>
<?php $mh_magazine_options = mh_magazine_theme_options(); ?>
<?php get_header(); ?>
<div class="mh-wrapper clearfix" role="main" itemprop="mainContentOfPage"><?php
	while (have_posts()) : the_post();
     the_content();
	endwhile; ?>
</div>
<?php get_footer(); ?>