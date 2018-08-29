
<?php
/*
Archive Template: category-kyxm
*/
?>

<?php get_header(); ?>
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
        <h1>科研项目</h1>
        <div class="line-l"></div><div class="line-r"></div>
        <p>Research Project</p>
        <div class="underline"></div>
    </div>
	<div class="c-main">
		<div class="re_middle">
			<div class="row">
				<div class="re_box">
				<img src="<?php bloginfo('template_directory'); ?>/images/data.png" alt="">
				<div class="article">
					<p>湖北恩施市鹤峰县农业大数据平台</p>
				</div>
			</div>
			<div class="re_box">
				<img src="<?php bloginfo('template_directory'); ?>/images/data.png" alt="">
				<div class="article">
					<p>湖北恩施市鹤峰县农业大数据平台</p>
				</div>
			</div>
			<div class="re_box">
				<img src="<?php bloginfo('template_directory'); ?>/images/data.png" alt="">
				<div class="article">
					<p>湖北恩施市鹤峰县农业大数据平台</p>
				</div>
			</div>
			</div>
			<div class="row">
				<div class="re_box">
				<img src="<?php bloginfo('template_directory'); ?>/images/data.png" alt="">
				<div class="article">
					<p>湖北恩施市鹤峰县农业大数据平台</p>
				</div>
			</div>
			<div class="re_box">
				<img src="<?php bloginfo('template_directory'); ?>/images/data.png" alt="">
				<div class="article">
					<p>湖北恩施市鹤峰县农业大数据平台</p>
				</div>
			</div>
			<div class="re_box">
				<img src="<?php bloginfo('template_directory'); ?>/images/data.png" alt="">
				<div class="article">
					<p>湖北恩施市鹤峰县农业大数据平台</p>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
<!-- footer.php -->
<?php get_footer(); ?>