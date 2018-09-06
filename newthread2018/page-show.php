<?php 
/**
 * template name: 团队风采
 * 
 * 2018.8.30
 * by fig
 * v1.0.0
 */
get_header();
?>


<section class="show page-all" id="show">
    <div class="backgrund"></div>
    <main>
        <header>
            <nav class="top">
                <a href="<?php bloginfo( 'url' ); ?>">
                    <svg t="1532224066351" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1922" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32"><defs><style type="text/css"></style></defs><path d="M896 576 512 128 128 576 224 576 224 896 416 896 416 640 608 640 608 896 800 896 800 576Z" p-id="1923" fill="#2c2c2c"></path></svg>
                    首页
                </a>
                <a href="<?php echo curPageURL();?>" class="hide">新闻中心</a>
                <span class="thisPage"></span>
            </nav>
         
            <ul class="bottom">
                <li class="option" data-num="one">
                <svg t="1535603871997" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2180" xmlns:xlink="http://www.w3.org/1999/xlink" width="64" height="64"><defs><style type="text/css"></style></defs><path d="M630.8 697.1l-219-267.7-309.4 256-29.5-35.6 345.3-285.6L635.6 630l287.1-265.8 31.2 34.1z" fill="#333333" p-id="2181"></path><path d="M699.9 456.3c-56.2 0-101.9-45.7-101.9-101.9s45.7-101.9 101.9-101.9 101.9 45.7 101.9 101.9-45.7 101.9-101.9 101.9z m0-157.6c-30.7 0-55.7 25-55.7 55.7 0 30.7 25 55.7 55.7 55.7 30.7 0 55.7-25 55.7-55.7 0-30.7-25-55.7-55.7-55.7z" fill="#333333" p-id="2182"></path><path d="M797.7 119.1H226.3c-89.2 0-161.8 72.6-161.8 161.8v462.2c0 89.2 72.6 161.8 161.8 161.8h571.3c89.2 0 161.8-72.6 161.8-161.8V280.9c0.1-89.2-72.5-161.8-161.7-161.8z m115.5 624c0 63.7-51.8 115.6-115.6 115.6H226.3c-63.7 0-115.6-51.8-115.6-115.6V280.9c0-63.7 51.8-115.6 115.6-115.6h571.3c63.7 0 115.6 51.8 115.6 115.6v462.2z" fill="#333333" p-id="2183"></path></svg>
                    团队照片
                </li>
                <li class="option " data-num="two">
                <svg t="1535603902345" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2994" xmlns:xlink="http://www.w3.org/1999/xlink" width="64" height="64"><defs><style type="text/css"></style></defs><path d="M960 192h-28.384c-16.8 0-32.928 6.624-44.928 18.432L800 295.936V256a96 96 0 0 0-96-96H96C43.072 160 0 203.04 0 256v512a96 96 0 0 0 96 96h608c52.992 0 96-43.008 96-96v-39.072l86.688 85.504c12 11.808 28.128 18.432 44.928 18.432H960a64 64 0 0 0 64-64V256a64 64 0 0 0-64-64zM96 800c-17.664 0-32-14.368-32-32V256a32 32 0 0 1 32-32h608c17.632 0 32 14.336 32 32v512c0 17.632-14.368 32-32 32H96z m864-31.136h-32l-128-128V640l-32-32v-192l160-160h32v512.864z" fill="#333333" p-id="2995"></path></svg>
                    团队视频
                </li>
            </ul>

        </header>
<!-- 1团队相片 -->
        <section class="one" id="one">
             <div class="title">
                <?php $cat_id = get_category_by_slug('show-1')->term_id; 
                echo get_cat_name($cat_id); 
                echo category_description($cat_id);
                ?>
            </div>
           <main> 
                <?php
                    $posts = new WP_Query(array(
                    'cat' => $cat_id,
                    'post_type' => 'post',
                    'posts_per_page' =>3  
                    ));
                    if ( $posts->have_posts() ) {
                    while ( $posts->have_posts() ) {
                        $posts->the_post();
                ?>
                <div class="post">

                    <div class="time-title">
                        <span class="post-title"> <?php the_title();?></span>
                        <span class="hr"></span>
                        <span class="time"><?php echo get_the_date("Y-m-d"); ?></span>
                        
                    </div>

                        <?php echo get_the_content();?>
                            
                </div>
               <?php }}?>
           </main>
        </section>
<!-- 2团队视频 -->
        <section class="two" id="two">
        <div class="title">
                <?php $cat_id = get_category_by_slug('show-2')->term_id; 
                echo get_cat_name($cat_id); 
                echo category_description($cat_id);
                ?>
            </div>
           <main>

                <video src="<?php  bloginfo( 'template_url' ); ?>/assets/image/movie.ogg" controls="controls" loop="loop" preload="Metadata" width="100%">
                    浏览器不支持该功能。
                </video>
                
           </main>
        </section>
    </main>
</section>



<?php get_footer( );?>