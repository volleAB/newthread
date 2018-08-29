<?php
/*
Archive Template: category-lcb
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
        <h1>里程碑</h1>
        <div class="line-l"></div><div class="line-r"></div>
        <p>Landmark</p>
        <div class="underline"></div>
    </div>
	<div class="c-main">
		<div class="journey">
        	<h2>我们的故事还在继续...</h2>
        	<div class="journey_content">
        		<div class="road"></div>
        		<div class="journey_left">
        			<p>New Thread团队在人民大会堂接受“小平科技创新团队”授牌<span>2014-08-29</span></p>
        			<img src="<?php bloginfo('template_directory'); ?>/images/first.jpg" alt=""/>
        		</div>
        		<div class="journey_right">
        			<p>New Thread入选“2014年度湖北省大学生创业扶持项目”<span>2014-08-29</span></p>
        			<img src="<?php bloginfo('template_directory'); ?>/images/first.jpg" alt=""/>
        		</div>
        		<div class="journey_left">
        			<p>New Thread荣登湖北金融网<span>2014-07-24</span></p>
        			<img src="<?php bloginfo('template_directory'); ?>/images/first.jpg" alt=""/>
        		</div>
        		<div class="journey_right">
        			<p>New Thread团队入选全国首批大学生“小平科技创新团队”<span>2014-02-24</span></p>
        			<img src="<?php bloginfo('template_directory'); ?>/images/first.jpg" alt=""/>
        		</div>
        	</div>
        </div>
	</div>
</div>
<!-- footer.php -->
<?php get_footer(); ?>

