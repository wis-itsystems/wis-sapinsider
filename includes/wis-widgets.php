<?php

/***** Register Widgets *****/

function wis_magazine_register_widgets() {
	// register_widget('wis_magazine_facebook_page');
	register_widget('wis_magazine_custom_posts');
	register_widget('wis_magazine_custom_pages');
	register_widget('wis_magazine_posts_grid');
	register_widget('wis_magazine_posts_large');
	register_widget('wis_magazine_posts_list');
	register_widget('wis_magazine_posts_stacked');
	register_widget('wis_magazine_posts_horizontal');
	register_widget('wis_magazine_posts_digest');
	register_widget('wis_magazine_posts_focus');
	register_widget('wis_magazine_posts_lineup');
	register_widget('wis_magazine_nip');
	register_widget('wis_magazine_recent_comments');
	register_widget('wis_magazine_slider');
	register_widget('wis_magazine_custom_slider');
	register_widget('wis_magazine_spotlight');
	register_widget('wis_magazine_carousel');
	register_widget('wis_magazine_authors');
	register_widget('wis_magazine_social');
	register_widget('wis_magazine_author_bio');
	register_widget('wis_magazine_youtube');
	register_widget('wis_magazine_tabbed');
	register_widget('wis_magazine_category_columns');
}
add_action('widgets_init', 'wis_magazine_register_widgets');

/***** Include Widgets *****/

// require_once('wis-widgets/mh-facebook-page.php');
require_once('wis-widgets/mh-custom-posts.php');
require_once('wis-widgets/mh-custom-pages.php');
require_once('wis-widgets/mh-posts-grid.php');
require_once('wis-widgets/mh-posts-large.php');
require_once('wis-widgets/mh-posts-list.php');
require_once('wis-widgets/mh-posts-stacked.php');
require_once('wis-widgets/mh-posts-horizontal.php');
require_once('wis-widgets/mh-posts-digest.php');
require_once('wis-widgets/mh-posts-focus.php');
require_once('wis-widgets/mh-posts-lineup.php');
require_once('wis-widgets/mh-nip.php');
require_once('wis-widgets/mh-recent-comments.php');
require_once('wis-widgets/mh-slider.php');
require_once('wis-widgets/mh-custom-slider.php');
require_once('wis-widgets/mh-spotlight.php');
require_once('wis-widgets/mh-carousel.php');
require_once('wis-widgets/mh-authors.php');
require_once('wis-widgets/mh-social.php');
require_once('wis-widgets/mh-author-bio.php');
require_once('wis-widgets/mh-youtube.php');
require_once('wis-widgets/mh-tabbed.php');
require_once('wis-widgets/mh-category-columns.php');

?>