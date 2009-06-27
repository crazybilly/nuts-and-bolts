<?php
if ( function_exists('register_sidebar') )
register_sidebar(array(
'before_widget' => '<div clas="sidebar-item" id="sidebar-%1$s">',
'after_widget' => '</div><!--sidebar-item-->',
'before_title' => '<div class="sidebar-title"><h2>',
'after_title' => '</h2></div>',
));
?>
