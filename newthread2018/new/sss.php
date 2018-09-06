     <div>


	<div class="main">
		<?php
		$query1 = new WP_Query( array(
            'post_type' => 'post',
		    'posts_per_page' => -1,
		    'category_name' => 'home-2'
		) );
		if ( $query1->have_posts() ) {
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