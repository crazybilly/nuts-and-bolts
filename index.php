<? 
//grab header.php
get_header() 
?>

<? 

/*
 ---- need to get the title function in place here
*/

/* 
 -- Start the Loop ----
*/

<?php if ( $posts ) : foreach ( $posts as $post ) : start_wp(); ?>

	<div class="post">

		<div class="one-post">

			<div class="post-head">
				<h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>

				<div class="post-meta">
					<span class="post-date"><? the_Time('l, F j, Y'); ?></span>
					<span class="post-comments-link"><a href="<? comments_link(); ?>"><? comments_number() ?></a></span>
				</div><!--post-meta-->
			</div><!--post-head-->

			<div class="post-content">
				<? the_content(); ?>
			</div><!--post-content-->

			<div class="post-foot">
				<h4>tags</h4>
					<? the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
			</div><!--post-foot-->

		</div><!--one-post-->

	</div><!--post-->


<?
/* end the Loop */
<?php endforeach; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p> 
<?php endif; ?>


<?
	//grab sidebar.php
	get_sidebar();

	//grab footer.php
	get_footer() 
?>
