<?php 
/**
 * 通用头
 * 
 * logo+列表 +搜索
 * 
 * 2018.7.16 
 * by fig
 * V1.1.0
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(  );?> >
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php
        if (is_home()||is_search()) { echo "新思路"; } 
        else{the_title(); echo ' <- '; echo "新思路";}  
    ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" media="screen" href="<?php  bloginfo( 'template_url' ); ?>/assets/css/style.css" />

    <?php wp_head(  ); ?> 

    <?php 
    //根据不同的页面加载css  
            //在页面或文章的下方的 自定义栏目（默认关闭在右上方 显示选项 处打开）处修改
            $_ = get_post_meta($post->ID, 'name', true); 
            if (!empty($_)) {
                echo "<link rel=\"stylesheet\" href=\"";
                echo bloginfo( 'template_url' );
                echo "/assets/css/$_.css\">";

                echo "<script src=\"";
                echo bloginfo( 'template_url' );
                echo "/assets/js/$_.js\"  defer=\"defer\"></script>";

            }?>

</head>
<body>
<div id="main-page-all" class="site">

<header class="header" id="header">
    <div class="search">
    <?php get_search_form(); ?>
    <p><a href="http://www.scuec.edu.cn">民大官网</a> <span>/</span> <a href="###">回到旧版</a></p>
</div>

<nav class="nav" id="nav">
<!-- 1 -->
    <div class="logo">  
    <a href="<?php bloginfo( 'url' ) ?>">
            <?php
            $cat_id_top = get_category_by_slug('logo-top')->term_id; 
            $posts_top=get_posts(  array('numberposts'=> 1 , 'category'=>$cat_id_top));
                    if ( $posts_top ) {
                        $i=0;
                    while ( $posts_top[$i] ) {
                ?>
                       
                     <img src="<?php echo getImgUrl($posts_top[$i]->post_content); ?>">
                    
                <?php 
                    $i++; }}
                    // $i=NULL;
                ?>
    </a>
    </div>
<!-- 2 -->
    <?php wp_nav_menu(array('menu' =>'NT-top')); ?>

</nav>
<div class="_nav" id="_nav" style="display: none;"></div>


</header>