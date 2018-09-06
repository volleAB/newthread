<!-- 1团队新闻 -->
       <section id="js_one" class="one">
            <div class="title">
                <?php $cat_id =  get_category_by_slug('news-3')->term_id; 
                echo get_cat_name($cat_id); 
                echo category_description($cat_id);
                ?>
            </div>
            <section class="content">
                <?php
                $posts = new WP_Query(array(
                    'cat' => $cat_id,
                    'post_type' => 'post',
                    'posts_per_page' => 4
                    
                ));
                if ( $posts->have_posts() ) {
                    while ( $posts->have_posts() ) {
                        $posts->the_post();
                ?>

                    <div class="box">
                        <div class="img-box">
                             <img src="<?php echo catch_that_image() ?>">
                        </div>
                        <span class="time"><?php echo get_the_date("Y-m-d"); ?> </span>
                        <h3><?php the_title();?></h3>

                        <a href="<?php the_permalink( ); ?>"></a> 
                    </div>
                                      
                <?php }} ?>
            </section>
        </section>
<!-- 2例会动态 -->
        <section class="two" id="js_two">
            <div class="title">
                <?php $cat_id = get_category_by_slug('news-2')->term_id; 
                echo get_cat_name($cat_id); 
                echo category_description($cat_id);
                ?>
            </div>

            <section class="content">
                <?php
                $posts = new WP_Query(array(
                    'cat' => $cat_id,
                    'post_type' => 'post',
                    'posts_per_page' => 4
                    
                ));
                if ( $posts->have_posts() ) {
                    while ( $posts->have_posts() ) {
                        $posts->the_post();
                ?>

                    <div class="box">
                        <div class="img-box">
                            <img src="<?php echo catch_that_image() ?>">
                        </div>
                        <div class="txt-box">
                            <h3><?php the_title();?></h3>
                            <div class="p"><?php the_excerpt();?></div>
                        </div>

                        <a href="<?php the_permalink(  ); ?>"><span>></span></a> 
                    </div>
                                      
                <?php }} ?>
            </section>

        </section>
<!-- 3文化活动 -->
        <section class="three" id="js_three">
            <div class="title">
                <?php $cat_id = get_category_by_slug('news-4')->term_id; 
                echo get_cat_name($cat_id); 
                echo category_description($cat_id);
                ?>
            </div>

            <section class="content">
                 <div class="btn-box">
                    <span class="before" id="before-three"><</span>
                    <span class="after" id="after-three">></span>
                </div>
                 <?php
                $posts = new WP_Query(array(
                    'cat' => $cat_id ,
                    'post_type' => 'post',
                    'posts_per_page' => -1
                    
                ));
                $count=get_category($cat_id)->count;//获取文章数
                $i=0;
                ?>
                <div class="page-box page-box-three"  isHide="false">
                <?php   if ( $posts->have_posts() ) {
                    while ( $posts->have_posts() ) {
                        $posts->the_post();                   
                ?>
                    <div class="box">
                                <div class="img-box">
                                    <img src="<?php echo catch_that_image() ?>">
                                </div>
                                <div class="txt-box">
                                    <h3><?php the_title();?></h3>
                                    <p class="time"><?php echo get_the_date("Y-m-d");  ?></p>
                                </div>
                                <a href="<?php the_permalink(  ); ?>"><span></span></a> 
                            </div>
                                 
                            
                            <?php  if (($i+1)%4==0 && ($i+1)!=$count) {?>
                            </div>
                            <div class="page-box page-box-three" isHide="true">
                        <?php  } ?>
                    <?php $i++;}} ?>
                </div>
               
            </section>

        </section>
<!-- 4项目快报 -->
        <section class="four" id="js_four">
            <div class="title">
                <?php $cat_id =get_category_by_slug('news-5')->term_id; 
                echo get_cat_name($cat_id); 
                echo category_description($cat_id);
                ?>
            </div>
            <section class="content">
                <?php
                $posts = new WP_Query(array(
                    'cat' => $cat_id ,
                    'post_type' => 'post',
                    'posts_per_page' => -1
                    
                ));
                $count=get_category($cat_id)->count;//获取文章数
                $i=0;
                ?>
                <div class="page-box page-box-four"  isHide="false">
                <?php   if ( $posts->have_posts() ) {
                    while ( $posts->have_posts() ) {
                        $posts->the_post();                   
                ?>

                            <div class="box">
                                <div class="img-box"></div>
                                <div class="txt-box">
                                    <a href="<?php the_permalink(  ); ?>">
                                        <h3><?php the_title();?></h3>
                                    </a> 
                                </div>
                            </div>
                            
                        <?php  if (($i+1)%18==0 && ($i+1)!=$count) {?>
                            </div>
                            <div class="page-box page-box-four" isHide="true">
                        <?php  } ?>

                    <?php $i++;}} ?>
                </div>

                <div class="btn-box">
                    <span class="before" id="before-four"><</span>
                    <span class="after" id="after-four">></span>
                </div>
            </section>
        </section>