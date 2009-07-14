<?
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>


<div class="comments">
	<a name="comments"></a>	

	<h3><? comments_number(); ?></h3>

		<?php if ( have_comments() ) : ?>
		<ol>
				<?php wp_list_comments(); ?>
			
			<?// wp_list_comments(); ?>
		</ol>

		<? endif; ?>

</div><!--comments-->

