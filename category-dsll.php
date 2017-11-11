
<?php
/*
Archive Template: category-dsll
*/
?>


<?php get_header(); ?>
<div class="c-bg"><img src="<?php bloginfo('template_directory'); ?>/images/banner.png"></div>
<div class="c-link">
	<?php  
	    $cat=get_category_by_slug('t-0'); 
	    $cat_links=get_category_link($cat->term_id); 
	    $id=$cat->term_id;
	    $args = array(
	        'child_of'     => $id,
	        'orderby'      => id,
	        'show_count'   => 0,
	        'title_li'     => ''
	    );
	?>
	<ul id="c-list">
	<?php wp_list_categories($args); ?>
	</ul>
	<div class="form">
		<?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?>
	</div>
	<div class="c-line"></div>
</div>
<div class="c-content">
        <div class="l_head">
                <h1>导师力量</h1>
                <div class="line-l"></div><div class="line-r"></div>
                <p>Mentor Power</p>
                <div class="underline"></div>
        </div>
        <div class="c-main">
                <div class="teacher_power">
                	<div class="mentor_left">
                		<img src="<?php bloginfo('template_directory'); ?>/images/tei.jpg" alt="">
                		<span></span>
                		<div class="teacher_introduce">
                			<h1>帖军</h1>
                			<h2>新思路团队创始人</h2>
                			<p>这里是对老板的简单介绍，这里是对老板的简单介绍，这里是对老板的简单介绍，这里是对老板的简单介绍，这里是对老板的简单介绍，这里是对老板的简单介绍，这里是对老板的简单介绍，</p>
                		</div>
                	</div>
                	<div class="mentor_right">
                		<img src="<?php bloginfo('template_directory'); ?>/images/tie.jpg" alt="">
                		<span></span>
                		<div class="teacher_introduce">
                			<h1>帖军</h1>
                			<h2>新思路团队创始人</h2>
                			<p>这里是对老板的简单介绍，这里是对老板的简单介绍，这里是对老板的简单介绍，这里是对老板的简单介绍，这里是对老板的简单介绍，这里是对老板的简单介绍，这里是对老板的简单介绍，</p>
                		</div>
                	</div>
                	<div class="mentor_left">
                		<img src="<?php bloginfo('template_directory'); ?>/images/tei.jpg" alt="">
                		<span></span>
                		<div class="teacher_introduce">
                			<h1>帖军</h1>
                			<h2>新思路团队创始人</h2>
                			<p>这里是对老板的简单介绍，这里是对老板的简单介绍，这里是对老板的简单介绍，这里是对老板的简单介绍，这里是对老板的简单介绍，这里是对老板的简单介绍，这里是对老板的简单介绍，</p>
                		</div>
                	</div>
                	<div class="mentor_right">
                		<img src="<?php bloginfo('template_directory'); ?>/images/tie.jpg" alt="">
                		<span></span>
                		<div class="teacher_introduce">
                			<h1>帖军</h1>
                			<h2>新思路团队创始人</h2>
                			<p>这里是对老板的简单介绍，这里是对老板的简单介绍，这里是对老板的简单介绍，这里是对老板的简单介绍，这里是对老板的简单介绍，这里是对老板的简单介绍，这里是对老板的简单介绍，</p>
                		</div>
                	</div>
                </div>
        </div>
</div>
<!-- footer.php -->
<?php get_footer(); ?>