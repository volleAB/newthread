<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset');  ?>" />
	<title><?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>
" type="text/css" />
	<?php wp_head();?>
</head>
<body>
<!-- hearder.php -->
<header>
	<div class="head-1">
		<div class="h-r">
			<div class="nav"><a href="http://www.scuec.edu.cn/">| 民大官网 |</a></div>
			<div class="nav"><a href="#">| 回到旧版 |</a></div>
			<div class="search">
				<input class="search_input" type="text" name="">
				<input class="search_btn" type="button" name="">
			</div>
		</div>
	</div>
	<div class="head-2">
		<a href="<?php echo get_option('home'); ?>" title="<?php echo $cat->name; ?>"><div class="logo"></div></a>
		<ul class="nav-list">
			<li>
				<a href="<?php echo get_option('home'); ?>/" title="<?php echo $cat->name; ?>">首页</a>
			</li>
			<li>
			<?php  
	            $cat=get_category_by_slug('t-0-0'); 
	            $cat_links=get_category_link($cat->term_id); 
	            $id=$cat->term_id;
	            $args = array(
	                'child_of'     => $id,
	                'orderby'      => id,
	                'show_count'   => 0,
	                'title_li'     => ''
	            );
	        ?>
	        <a href="<?php echo $cat_links; ?>" title="<?php echo $cat->name; ?>">团队简介</a>
	        </li>
	        <li>
			<?php  
	            $cat=get_category_by_slug('t-1-0'); 
	            $cat_links=get_category_link($cat->term_id); 
	            $id=$cat->term_id;
	            $args = array(
	                'child_of'     => $id,
	                'orderby'      => id,
	                'show_count'   => 0,
	                'title_li'     => ''
	            );
	        ?>
	        <a href="<?php echo $cat_links; ?>" title="<?php echo $cat->name; ?>">新闻中心</a>
	        </li>
	        <li>
			<?php  
	            $cat=get_category_by_slug('t-2-0'); 
	            $cat_links=get_category_link($cat->term_id); 
	            $id=$cat->term_id;
	            $args = array(
	                'child_of'     => $id,
	                'orderby'      => id,
	                'show_count'   => 0,
	                'title_li'     => ''
	            );
	        ?>
	        <a href="<?php echo $cat_links; ?>" title="<?php echo $cat->name; ?>">荣誉成果</a>
	        </li>
	        <li>
			<?php  
	            $cat=get_category_by_slug('t-3-0'); 
	            $cat_links=get_category_link($cat->term_id); 
	            $id=$cat->term_id;
	            $args = array(
	                'child_of'     => $id,
	                'orderby'      => id,
	                'show_count'   => 0,
	                'title_li'     => ''
	            );
	        ?>
	        <a href="<?php echo $cat_links; ?>" title="<?php echo $cat->name; ?>">团队风采</a>
	        </li>
	        <li>
			<?php  
	            $cat=get_category_by_slug('t-4-0'); 
	            $cat_links=get_category_link($cat->term_id); 
	            $id=$cat->term_id;
	            $args = array(
	                'child_of'     => $id,
	                'orderby'      => id,
	                'show_count'   => 0,
	                'title_li'     => ''
	            );
	        ?>
	        <a href="<?php echo $cat_links; ?>" title="<?php echo $cat->name; ?>">团队招新</a>
	        </li>
	        <li>
			<?php  
	            $cat=get_category_by_slug('t-5-0'); 
	            $cat_links=get_category_link($cat->term_id); 
	            $id=$cat->term_id;
	            $args = array(
	                'child_of'     => $id,
	                'orderby'      => id,
	                'show_count'   => 0,
	                'title_li'     => ''
	            );
	        ?>
	        <a href="<?php echo $cat_links; ?>" title="<?php echo $cat->name; ?>">联系我们</a>
	        </li>
        </ul>	<!-- 从后台获取 -->
	</div>
</header>