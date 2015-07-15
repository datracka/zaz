<?php
/**
 * Portfolio post content
 *
 * @package vogue
 * @since 1.0.0
 */

// File Security Check
if ( ! defined( 'ABSPATH' ) ) { exit; }

$config = Presscore_Config::get_instance();
?>

<div class="project-list-content">

<?php if ( $config->get( 'show_titles' ) && get_the_title() ) : ?>
    <?php

    ?>
	<p class="vf-title-portfolio-project entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo the_title_attribute( 'echo=0' ); ?>" rel="bookmark"><?php the_title(); ?></a></p>

<?php endif; ?>

<?php if ( $config->get('show_excerpts') ) : ?>

	<?php the_excerpt(); ?>

<?php endif; ?>

<?php //vicens fix removed title in post ?>
<?php //echo presscore_new_posted_on( 'dt_portfolio' ); ?>

<?php echo presscore_post_edit_link(); ?>

</div>