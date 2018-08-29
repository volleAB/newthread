<?php
/*
Archive Template: category-contactus
*/
?>

<?php get_header(); ?>
<div class="c-bg"><img src="<?php bloginfo('template_directory'); ?>/images/banner6.png"></div>
<div class="c-link">
	<?php  
	    $cat=get_category_by_slug('t-5'); 
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
                <h1>联系我们</h1>
                <div class="line-l"></div><div class="line-r"></div>
                <p>Contact Us</p>
                <div class="underline"></div>
        </div>
        <div class="c-main">
        	<div class="contact_us">
                	<div class="contact_QW">
                		<h2>官方QQ</h2>
                		<img src="<?php bloginfo('template_directory'); ?>/images/qq2.png">
                		<div class="contact_pic">
                			<h2>昵称：新思路团队</h2>
                			<p>QQ号码：3553633708</p>
                			<img src="<?php bloginfo('template_directory'); ?>/images/qun.png">
                		</div>
                	</div>
                	<div class="contact_QW contact_width">
                		<h2>官方微博</h2>
                		<img src="<?php bloginfo('template_directory'); ?>/images/blog2.png">
                		<div class="contact_pic">
                			<h2>微博名：新思路团队</h2>
                			<img src="<?php bloginfo('template_directory'); ?>/images/qun.png">
                		</div>
                	</div>
                	<div class="contact_QW">
                		<h2>负责人联系方式</h2>
                		<p class="contact_main">实验室负责人：田曌华</p>
                		<p>13297078794</p>
                		<p>625931548</p>
                		<p>13297078794</p>
                	</div>
                </div>
        </div>
</div>
<!-- footer.php -->
<?php get_footer(); ?>
