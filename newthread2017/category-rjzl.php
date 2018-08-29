
<?php
/*
Archive Template: category-rjzl
*/
?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/css/lrtk.css" />
<script src="<?php echo get_template_directory_uri();  ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri();  ?>/js/jquery.imgbox.pack.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".example").imgbox({
				'speedIn'		: 0,
				'speedOut'		: 0,
				'alignment'		: 'center',
				'overlayShow'	: true,
				'allowMultiple'	: false
			});
		});
	</script>
<div class="c-bg"><img src="<?php bloginfo('template_directory'); ?>/images/news_banner.png"></div>
<div class="c-link">
	<?php  
	    $cat=get_category_by_slug('t-2'); 
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
        <h1>软件专利</h1>
        <div class="line-l"></div><div class="line-r"></div>
        <p>Research Project</p>
        <div class="underline"></div>
    </div>
	<div class="c-main">
		<div id="content">
		<div id="images">
			<div class="pa_row">
				<a class="example" href="<?php bloginfo('template_directory'); ?>/images/1.jpg"><img src="<?php bloginfo('template_directory'); ?>/images/1.jpg" alt=""></a>
				<a class="example" href="<?php bloginfo('template_directory'); ?>/images/2.jpg"><img src="<?php bloginfo('template_directory'); ?>/images/2.jpg" alt=""></a>
				<a class="example" href="<?php bloginfo('template_directory'); ?>/images/3.jpg"><img src="<?php bloginfo('template_directory'); ?>/images/3.jpg" alt=""></a>
				<a class="example" href="<?php bloginfo('template_directory'); ?>/images/4.jpg"><img src="<?php bloginfo('template_directory'); ?>/images/4.jpg" alt=""></a>
			</div>
			<div class="pa_row">
				<a class="example" href="<?php bloginfo('template_directory'); ?>/images/5.jpg"><img src="<?php bloginfo('template_directory'); ?>/images/5.jpg" alt=""></a>
				<a class="example" href="<?php bloginfo('template_directory'); ?>/images/6.jpg"><img src="<?php bloginfo('template_directory'); ?>/images/6.jpg" alt=""></a>
				<a class="example" href="<?php bloginfo('template_directory'); ?>/images/7.jpg"><img src="<?php bloginfo('template_directory'); ?>/images/7.jpg" alt=""></a>
				<a class="example" href="<?php bloginfo('template_directory'); ?>/images/8.jpg"><img src="<?php bloginfo('template_directory'); ?>/images/8.jpg" alt=""></a>
			</div>
			<div class="pa_row">
				<a class="example" href="<?php bloginfo('template_directory'); ?>/images/9.jpg"><img src="<?php bloginfo('template_directory'); ?>/images/9.jpg" alt=""></a>
				<a class="example" href="<?php bloginfo('template_directory'); ?>/images/10.jpg"><img src="<?php bloginfo('template_directory'); ?>/images/10.jpg" alt=""></a>
				<a class="example" href="<?php bloginfo('template_directory'); ?>/images/11.jpg"><img src="<?php bloginfo('template_directory'); ?>/images/11.jpg" alt=""></a>
				<a class="example" href="<?php bloginfo('template_directory'); ?>/images/12.jpg"><img src="<?php bloginfo('template_directory'); ?>/images/12.jpg" alt=""></a>
			</div>
		</div>
		<div id="credit"></div>
	</div>
</div>
<!-- footer.php -->
<?php get_footer(); ?>