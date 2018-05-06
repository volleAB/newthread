<footer>	<!-- 从后台获取 -->
	<div class="nav2">
		<div class="nav2-list">
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
	        <div class="link">
	        	<h3><?php echo $cat->name; ?></h3>
	        	<ul>
	        	<?php wp_list_categories($args); ?>
	        	</ul>
	        </div>
		</div>
		<div class="nav2-list">
			<?php  
	            $cat=get_category_by_slug('t-1'); 
	            $cat_links=get_category_link($cat->term_id); 
	            $id=$cat->term_id;
	            $args = array(
	                'child_of'     => $id,
	                'orderby'      => id,
	                'show_count'   => 0,
	                'title_li'     => ''
	            );
	        ?>
	        <div class="link">
	        	<h3><?php echo $cat->name; ?></h3>
	        	<ul>
	        	<?php wp_list_categories($args); ?>
	        	</ul>
	        </div>
		</div>
		<div class="nav2-list">
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
	        <div class="link">
	        	<h3><?php echo $cat->name; ?></h3>
	        	<ul>
	        	<?php wp_list_categories($args); ?>
	        	</ul>
	        </div>
		</div>
		<div class="nav2-list">
			<?php  
	            $cat=get_category_by_slug('t-3'); 
	            $cat_links=get_category_link($cat->term_id); 
	            $id=$cat->term_id;
	            $args = array(
	                'child_of'     => $id,
	                'orderby'      => id,
	                'show_count'   => 0,
	                'title_li'     => ''
	            );
	        ?>
	        <div class="link">
	        	<h3><?php echo $cat->name; ?></h3>
	        	<ul>
	        	<?php wp_list_categories($args); ?>
	        	</ul>
	        </div>
		</div>
		<div class="nav2-list">
			<?php  
	            $cat=get_category_by_slug('t-4'); 
	            $cat_links=get_category_link($cat->term_id); 
	            $id=$cat->term_id;
	            $args = array(
	                'child_of'     => $id,
	                'orderby'      => id,
	                'show_count'   => 0,
	                'title_li'     => ''
	            );
	        ?>
	        <div class="link">
	        	<h3><?php echo $cat->name; ?></h3>
	        	<ul>
	        	<?php wp_list_categories($args); ?>
	        	</ul>
	        </div>
		</div>
		<div class="nav2-list">
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
	        <div class="link">
	        	<h3><?php echo $cat->name; ?></h3>
	        	<ul>
	        	<?php wp_list_categories($args); ?>
	        	</ul>
	        </div>
		</div>
		<div class="contact">
			<img src="<?php bloginfo('template_directory'); ?>/images/left.png">
			<img src="<?php bloginfo('template_directory'); ?>/images/right.png">
		</div>
	</div>
	<div class="about">
		<div class="siteinfo">
			<img src="<?php bloginfo('template_directory'); ?>/images/about_new.jpg">	<!-- 从后台获取 -->
			<div>
				<p>新思路新思路—网酷科技Copyright@2014网酷科技有限公司</p>	<!-- 从后台获取 -->
				<p>技术支持： 新思路团队-网酷科技</p>	<!-- 从后台获取 -->
			</div>
		</div>
		<div class="tool">关于我们 | 网站地图 | 联系我们 | 加入我们</div>	<!-- 从后台获取 -->
	</div>
	<div class="friendlink">
		<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/blog.png"></a>
		<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/qq.png"></a>
		<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/wechat.png"></a>
	</div>	<!-- 从后台获取 -->
</footer>

<?php wp_footer(); ?>
</body>
</html>