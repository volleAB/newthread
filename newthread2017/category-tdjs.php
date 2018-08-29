<?php
/*
Archive Template: category-tdjs
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
        <h1>团队介绍</h1>
        <div class="line-l"></div><div class="line-r"></div>
        <p>Team  Introduction</p>
        <div class="underline"></div>
    </div>
	<div class="p-main">
		<?php
				global $post;
			if( have_posts() ){
				while( have_posts() ){
					the_post();
					?>
			<div class="c-page"><?php the_content(); ?></div>	
				<?php
			}
		}else{
			echo'没有文章可以显示';
			}
			// 重置请求数据.
		wp_reset_postdata();
		?>
	<!-- 从后台获取 -->
	</div>
</div>
<!-- footer.php -->
<?php get_footer(); ?>