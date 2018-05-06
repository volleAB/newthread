<?php get_header(); ?>
<!-- index.php -->
<?php $cat_ids = get_all_category_ids(); ?>
<div class="js-silder">
   <div class="silder-scroll">
		<div class="silder-main">	<!-- 从后台获取 -->
				<?php
					// 定义查询1的参数
					$args1 = array(
					    'post_type' => 'post',
					    'posts_per_page' => '3',
					    'category_name' => 'bg'
					);
					// 自定义查询1
					$query1 = new WP_Query( $args1 );
					// 判断是否有文章.
					if ( $query1->have_posts() ) {
					    // 开始循环往复的查询结果.
					while ( $query1->have_posts() ) {
					        $query1->the_post();
				?>
				<div class="silder-main-img">
					<?php if ( has_post_thumbnail() ) : ?>
					    <?php the_post_thumbnail( 'full' ); ?>
						<?php else: ?>
					    	//显示默认图片
					<?php endif; ?>		
				</div>
					<?php
					    }
					}
					// 重置请求数据.
					wp_reset_postdata();
					?>
		</div>
	</div>
</div>
<div class="t-i">
    <div class="l_head">
        <h1>团队介绍</h1>
        <div class="line-l"></div><div class="line-r"></div>
        <p>Team  Introduction</p>
        <div class="underline"></div>
    </div>
	<div class="main">
		<?php
		// 定义查询1的参数
		$args1 = array(
		    'post_type' => 'post',
		    'posts_per_page' => '1',
		    'category_name' => 't-0-0'
		);
		// 自定义查询1
		$query1 = new WP_Query( $args1 );
		// 判断是否有文章.
		if ( $query1->have_posts() ) {
		    // 开始循环往复的查询结果.
		    while ( $query1->have_posts() ) {
		        $query1->the_post();
		        ?>
		        <div class="m-l"><img src="<?php bloginfo('template_directory'); ?>/images/introduce.png"><div class="bor"></div></div>	<!-- 从后台获取 -->
				<div class="m-r">
					<h2><?php the_title(); ?></h2>
					<p>新思路团队成立于2009年。本团队始终坚持“钻研、协作、创新、服务”的理念，并以培养学生的 “自主学习精神、相互协作能力以及服务社会的责任”为目标，聚集着一群有激情、有活力、有创造力 的年轻人……</p>
					<a class="more" href="<?php the_permalink(); ?>">More&gt</a>
				</div>
		        <?php
		    }
		}
		// 重置请求数据.
		wp_reset_postdata(); ?>
	</div>
</div>
<div class="t-d">
    <div class="l_head">
        <h1>团队动态</h1>
        <p>Team  Dynamics</p>
        <div class="underline"></div>
    </div>
	<div class="main">
		<?php
		// 定义查询1的参数
		$args1 = array(
		    'post_type' => 'post',
		    'posts_per_page' => '4',
		    'category_name' => 't-d'
		);
		// 自定义查询1
		$query1 = new WP_Query( $args1 );
		// 判断是否有文章.
		if ( $query1->have_posts() ) {
		    // 开始循环往复的查询结果.
		    while ( $query1->have_posts() ) {
		        $query1->the_post();
		        ?>
        <div class="part">
        	<?php if ( has_post_thumbnail() ) : ?>
     		<?php the_post_thumbnail( 'thumbnail' ); ?>
			<?php else: ?>
    			<img src="<?php echo get_template_directory_uri();  ?>/images/news.png">
			<?php endif; ?>
        	<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <!-- <?php the_title(); ?> --><?php echo wp_trim_words( get_the_title(), 15 ); ?>
            </a></h3>
            <!-- <?php the_excerpt(); ?> --><p><?php echo wp_trim_words( get_the_excerpt(), 300 ); ?></p>
            <div class="time">
            	<h2><?php the_time('m-d'); ?></h2>
            	<p><?php the_time('Y'); ?></p>
            	<img class="n" src="<?php bloginfo('template_directory'); ?>/images/next-p.png">
            	<img class="n2" src="<?php bloginfo('template_directory'); ?>/images/next-p2.png">
            </div>
        </div>
        <?php
    }
}
// 重置请求数据.
wp_reset_postdata();
?>
	</div>
</div>
<div class="t-g">
	<div class="l_head">
        <h1>团队分组</h1>
        <div class="line-l"></div><div class="line-r"></div>
        <p>Team Grouping</p>
        <div class="underline"></div>
    </div>
	<div class="group_w">
		<div id="group">
			<div id="list2">	<!-- 从后台获取 -->
	
				<?php
					// 定义查询1的参数
					$args1 = array(
					    'post_type' => 'post',
					    'posts_per_page' => '24',
					    'category_name' => 't-4-2'
					);
					// 自定义查询1
					$query1 = new WP_Query( $args1 );
					// 判断是否有文章.
					if ( $query1->have_posts() ) {
					    // 开始循环往复的查询结果.
					while ( $query1->have_posts() ) {
					        $query1->the_post();
				?>
				<div class="part2">
					<?php if ( has_post_thumbnail() ) : ?>
					    <?php the_post_thumbnail( 'thumbnail' ); ?>
						<?php else: ?>
					    	//显示默认图片
					<?php endif; ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?><span>></span></a>
				</div>
					<?php
					    }
					}
					// 重置请求数据.
					wp_reset_postdata();
					?>
			</div>
		</div>
		<div id="team_prev" class="button"><</div>
    	<div id="team_next" class="button">></div>
	</div>
</div>
<script src="<?php echo get_template_directory_uri();  ?>/js/index.js"></script>
<script src="<?php echo get_template_directory_uri();  ?>/js/jquery-3.1.0.min.js"></script>
<script src="<?php echo get_template_directory_uri();  ?>/js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri();  ?>/js/wySilder.min.js" type="text/javascript"></script>
<script>
	$(function (){
		$(".js-silder").silder({
			auto: true,//自动播放，传入任何可以转化为true的值都会自动轮播
			speed: 20,//轮播图运动速度
			sideCtrl: true,//是否需要侧边控制按钮
			bottomCtrl: true,//是否需要底部控制按钮
			defaultView: 0,//默认显示的索引
			interval: 3000,//自动轮播的时间，以毫秒为单位，默认3000毫秒
			activeClass: "active",//小的控制按钮激活的样式，不包括作用两边，默认active
		});
	});
</script>
<!-- footer.php -->
<?php get_footer(); ?>