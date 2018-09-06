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
                    <span class="author">作者：管理员</span>
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

            <li class="list" >
                <div class="img-box" >
                    <img src="<?php echo getImgUrl(get_previous_post()->post_content) ?>">
                </div>
               <div class="txt-box">
                    <a href="<?php echo get_previous_post()->guid; ?>"> <h3><?php echo get_previous_post()->post_title;?></h3> </a>
                    <p><?php echo get_previous_post()->post_excerpt;?></p>
               </div>
            </li>

             <li class="list" >
                <div class="img-box" >
                    <img src="<?php echo getImgUrl(get_next_post()->post_content) ?>">
                </div>
               <div class="txt-box">
                    <a href="<?php echo get_next_post()->guid; ?>"> <h3><?php echo get_next_post()->post_title;?></h3> </a>
                    <p><?php echo get_next_post()->post_excerpt;?></p>
               </div>
            </li>


<!-- <p><?php// print_r(get_next_post())  ?></p>
            <?php// if (get_previous_post()) { previous_post_link("上一篇: %link");} else {echo "没有了，已经是最后文章";} ?>
<?php// if (get_next_post()) { next_post_link("下一篇: %link");} else {echo" 没有了，已经是最新文章";} ?> -->
        </ul>
 
    </div>
</section>



<?php get_footer(); ?>