<div class="sidebar">


<?php
//widgetize the sidebar
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) :

//default contents?>

<div class="sidebar-item" id="sidebar-categories">
		<div class="sidebar-title">
			<h2>
			categories
			</h2>
		</div>
			<ul class="sidebar-list">
				<? wp_list_categories ('orderby=count&title_li='); ?>
			</ul>
	</div>

	<div class="sidebar-item" id="sidebar-followme">
		<div class="sidebar-title">
			<h2>
			follow me	
			</h2>
		</div>
			<ul class="sidebar-list">
				<li><a href="<? bloginfo('rss2_url'); ?>">subscribe [rss]</a></li>
				<!--need to set up a way to fill in these values via control panel-
				<li><a href="#">twitter</a></li>
				<li><a href="#">facebook</a></li>
				<li><a href="#">skype</a></li>
				-->
			</ul>
	</div>

	<div class="sidebar-item" id="sidebar-links">
		<div class="sidebar-title">
			<h2>
			links	
			</h2>
		</div>
			<ul class="sidebar-list">
				<? wp_list_bookmarks('title_li=') ?>
			</ul>
	</div>


<?php endif; ?>


</div><!--sidebar-->
