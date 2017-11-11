<?php get_header(); ?>
<div class="c-header">
    <div class="l_head">
        <h1><?php the_category(); ?></h1>
        <div class="line-l"></div><div class="line-r"></div>
        <p></p>
        <div class="underline"></div>
    </div>
</div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="news-single-content">
    <div class="single-header">
        <h2><?php the_title(); ?></h2>
        <!-- 文章时间 -->
        <div id="news-single-time"><?php the_time('Y-m-j'); ?></div>
    </div>
    <div class="single-body">
        <?php the_content(); ?>
        <!-- 可把一篇日志分成多个子日志，用nextpage隔开 -->
        <?php link_pages('<p><strong>Pages:</strong>', '</p>', 'number'); ?>
    </div>
</div>
<?php endwhile; else: ?>
<div class="post-no-artical">
    <div class="post-header">
        <h2 class="post-title">Sorry :(</h2>
        <div class="post-info">there are no news here</div>
    </div>
</div>
<?php endif; ?>
<?php get_footer(); ?>

