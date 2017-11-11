<?php
/*
Archive Template: category-zzjg
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
        <h1>组织架构</h1>
        <div class="line-l"></div><div class="line-r"></div>
        <p>Organizational Structure</p>
        <div class="underline"></div>
    </div>
    <div class="c-main">
    	<div class="structure">
        	<div class="p_structure">
        		<h1>新思路人事架构图</h1>
        		<div>总负责人</div>
        		<div class="tea_left">导师团队</div><div class="border_hr"></div><div class="border_h"></div><div class="tea_right">理事长</div>
        		<div class="hr_float"></div>
        		<div class="hr_float"></div>
        		<div class="hr_float br_right"></div>
        		<div class="fl_left">
        			<div>技术总监</div>
            		<div>横向项目总监</div>
            		<div>纵向项目总监</div>
            		<div>行政总监</div>
        		</div>
        	</div>
        	<div class="p_structure">
        		<h1>新思路组织架构图</h1>
        		<div class="vertical">新思路团队</div>
        		<div class="vertical_h">
        			<div>理事会</div>
        			<div></div>
        			<div>行政组
                        <div class="border_bottom"></div>
                        <div class="border-height"></div>
                        <div class="div_right">企划部</div>
                        <div class="div_right">宣传部</div>
                        <div class="div_right">财务部</div>
                    </div>
                    <div id="IT"></div>
                    <div class="Technology_Group">技术组
                        <div class="border-height">
                            <div class="div_right">FeWeb组</div>
                            <div></div>
                            <div class="div_right">Android组</div>
                            <div></div>
                            <div class="div_right">J2EE组</div>
                            <div></div>
                            <div class="div_right">SearchEngine组</div>
                            <div class="border_bottom"></div>
                            <div class="div_right">Database组</div>
                            <div></div>
                            <div class="div_right">Cpp组</div>
                            <div></div>
                            <div class="div_right">iOS组</div>
                            <div></div>
                            <div class="div_right">.Net组</div>
                            <div class="div_right">Design组</div>
                        </div>
                    </div>
                    <div class="wangku_w"></div>
                    <div>网酷公司</div>
                    <div id="jiaodian">焦点工作室</div>
        		</div>
        	</div>
        </div>
    </div>
</div>
<!-- footer.php -->
<?php get_footer(); ?>

