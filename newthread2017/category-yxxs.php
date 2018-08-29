
<?php
/*
Archive Template: category-yxxs
*/
?>

<?php get_header(); ?>
<style type="text/css">
	.re_box{
		box-shadow: 1px 1px 30px #999999;
	}
	.re_box img{
		border-bottom: 1px solid black;
	}
</style>
<div class="c-bg"><img src="<?php bloginfo('template_directory'); ?>/images/banner.png"></div>
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
        <h1>优秀学生</h1>
        <div class="line-l"></div><div class="line-r"></div>
        <p>Excellent Students</p>
        <div class="underline"></div>
    </div>
	<div class="c-main">
		<div class="re_middle">
			<div class="row">
				<div class="re_box">
				<img src="<?php bloginfo('template_directory'); ?>/images/g.png" alt="">
				<div class="article_1">
					<p>"黑客网管" 郭本天</p>
					<p>【2012级】.Net组</p>
				</div>
			</div>
			<div class="re_box">
				<img src="<?php bloginfo('template_directory'); ?>/images/w.png" alt="">
				<div class="article_1">
					<p>"以恒维持" 陈奇</p>
					<p>【2012级】 数据库组</p>
				</div>
			</div>
			<div class="re_box">
				<img src="<?php bloginfo('template_directory'); ?>/images/c.png" alt="">
				<div class="article_1">
					<p>"暖心学姐" 翁晏伊黎</p>
					<p>【2012级】 企划部</p>
				</div>
			</div>
			</div>
			<div class="row">
				<div class="re_box">
				<img src="<?php bloginfo('template_directory'); ?>/images/cao.png" alt="">
				<div class="article_1">
					<p>"闪闪 '红兵' 曹红兵"</p>
					<p>【2012级】 javaEE组</p>
				</div>
			</div>
			<div class="re_box">
				<img src="<?php bloginfo('template_directory'); ?>/images/l.png" alt="">
				<div class="article_1">
					<p>"感恩才子" 李钲</p>
					<p>【2012级】 Feweb组</p>
				</div>
			</div>
			<div class="re_box">
				<img src="<?php bloginfo('template_directory'); ?>/images/d.png" alt="">
				<div class="article_1">
					<p>"步步高升" 邓李维</p>
					<p>【2012级】 Cpp组</p>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
<!-- footer.php -->
<?php get_footer(); ?>