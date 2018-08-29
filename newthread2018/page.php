<?php
/**
 * templa  te name: 文章页
 * 首页主体
 * 轮播+团队简介+最新文章+组别介绍
 * 
 * 2018.7.17
 * by fig
 * v1.0.0 
 */
get_header( );?>

<link rel="stylesheet" href="<?php bloginfo( 'template_url' ) ?>/assets/css/style-index.css">
<section id="main" class="main">
    <div>page.php<?php the_title(  ); ?></div>
    <div>简介</div>
    <div>最新文章<a href="<?php bloginfo( 'template_url' ); ?>/page-tream.php">111111111</a></div>
    <div>组别li</div>
</section>

<?php get_footer( );?>