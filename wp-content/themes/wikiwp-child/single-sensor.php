<?php
get_header();
get_template_part('navigation');
?>

<div class="postContainer">
	<?php 
	// get content format
	get_template_part( 'content', 'sensor' );

	// comments
	comments_template( '', true );
	?>

<!--
	<div class="last-posts-list postinfo clearfix">
		<hr>
		<h4 class="lastPostsListTitle">
			<?php //echo __('Latest articles', 'wikiwp'); ?>
		</h4>

		<ul>
			<?php //wp_get_archives('type=postbypost&limit=10'); ?>
		</ul>
	</div>
-->
</div>

<?php
// sidebar
//get_sidebar();

// footer
get_footer();