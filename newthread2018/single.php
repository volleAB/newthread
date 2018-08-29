<?php 
/**
 * template name :文章展示页面
 * 2018.8.6
 * by fig 
 * v1.0.0
 */
get_header( );
?>

<section class="single" id="single">
    <div class="background"></div>
    <main>
<?php /* Start the Loop */
        while ( have_posts() ):the_post();?>

        <header>
            <h1><?php the_title(); ?></h1>
            <div class="note-box">
               <div>
                    <span class="author"><?php the_author()?></span>
                    <span> | </span>
                    <?php the_date( "Y-m-d", "<span class='time'>","</span>" ) ;?>
                </div>

                <span class="num">阅读量： <?php get_post_views($post ->ID); ?></span>
            </div>
        </header>
        <section>
            <div class="ex">
                <?php echo wpautop( the_excerpt(  ) );?>
            </div>
            <?php echo wpautop( the_content() );?>
        </section>
            <?php 
                // the_post_navigation(
                //     array(
                //         'prev_text' => '<span class="screen-reader-text">上一篇</span>',
                //         'next_text' => '<span class="screen-reader-text">下一篇</span>',
                //         'screen_reader_text'=> ' '
                //     )
                // );
            endwhile; // End of the loop.
            ?>
    </main>

    <div class="sidebar">
        <div class="title">
                <?php $cat_id = the_category_ID(false);  // 分类目录ID 可在编辑页的URL处查看
                // echo get_cat_name($cat_id); 
                // echo category_description($cat_id);
                ?>
                <p class="h1">相关阅读</p>
        </div>
        <ul>
            <?php
            $posts=get_posts(array('category' =>$cat_id ,'numberposts' =>2 )); 
            $i=0;
            while ($posts[$i]) {?>
            <li class="list" >
                <div class="img-box" >
                    <img src="<?php echo getImgUrl($posts[$i]->post_content) ?>" alt="">
                </div>
               <div class="txt-box">
                    <a href="<?php echo  $posts[$i]->guid; ?>"> <h3><?php echo  $posts[$i]->post_title;?></h3> </a>
                    <p><?php echo  $posts[$i]->post_excerpt ;?></p>
               </div>
            </li>
            <?php $i++;}?>
        </ul>
 
    </div>
</section>



<?php get_footer(); ?>