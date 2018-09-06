<?php
/**
 * template name: 首页
 *
 * 2018.7.19
 * v1.0.0
 */
get_header();
?>
<section class="home page-all" id="home">
    <div class="carousel">
        <div class="carousel-img-box" style="transition: transform .75s;transform: translate(0, -200%);">
        <?php  
            $posts = new WP_Query(array(
                    'category_name' => 'home-0',
                    'post_type' => 'post',
                    'posts_per_page' => 4
                    
                ));
          $i=1;
            if ( $posts->have_posts() ) {
            while ( $posts->have_posts() ) {$posts->the_post();
        ?>
<!-- 4 -->
            <?php if ($i==4) {?>
                <div><img src="<?php echo catch_that_image() ?>"></div>
            <?php } ?>
        <?php $i++; }} ?>
<!-- 1-4 -->
        <?php  $i=1;
            if ( $posts->have_posts() ) {
            while ( $posts->have_posts() ) {$posts->the_post();
        ?>
                <div><img src="<?php echo catch_that_image() ?>"></div>

        <?php $i++; }} ?>
<!-- 1 -->
        <?php  $i=1;
            if ( $posts->have_posts() ) {
            while ( $posts->have_posts() ) {$posts->the_post();
        ?>
            <?php if ($i==1) {?>
                <div><img src="<?php echo catch_that_image() ?>"></div>
            <?php } ?>
        <?php $i++; }} ?>
        </div>
        <div class="btn-box">
            <div class="dot-box">
                <span data-num="1" class="dot-l "></span>
                <span data-num="2" class="dot-l on"></span>
                <span data-num="3" class="dot-l "></span>
                <span data-num="4" class="dot-l "></span>
            </div>
            <div class="left"></div>
            <div class="right"></div>
            <div class="text">
                <p class="h0">新思路，新想法，新力量！</p>
                <p class="h2">Careful studying,Cooperative,Innovative,Serviceability</p>
                <p class=""></p>
            </div>
        </div>
    </div>
    <main>
<!-- 1团队介绍 -->
    <section class="one" id="one">
        
        <div class="title">
            <?php $cat_id =  get_category_by_slug('home-1')->term_id; 
            echo category_description($cat_id);
            echo get_cat_name($cat_id); 
            ?>
        </div>
        
        <section class="content">
                 <?php
                $posts = new WP_Query(array(
                    'cat' => $cat_id,
                    'post_type' => 'post',
                    'posts_per_page' => 1
                    
                ));
                if ( $posts->have_posts() ) {
                     while ( $posts->have_posts() ) {
                        $posts->the_post();
                ?>

                    <div class="img-box">
                        <img src="<?php echo catch_that_image() ?>">
                    </div>

                    <div class="txt-box">
                        <a href="<?php bloginfo( "url" ); ?>/?page_id=1757#one">
                            <h2><?php the_title(); ?></h2>
                        </a>
                        <?php the_content( );?>
                    </div>
                                      
                <?php $i++;}} ?>
        </section>
    </section>
<!-- 2团队动态 -->
    <section class="two" id="two">
        <div class="title">
            <?php $cat_id =  get_category_by_slug('news')->term_id; 
            echo get_cat_name($cat_id); 
            echo category_description($cat_id);
            ?>
        </div>

        <section class="content">

                <?php
                $posts = new WP_Query(array(
                    'cat' => $cat_id ,
                    'post_type' => 'post',
                    'posts_per_page' => 18//前3页
                    
                ));
                $count=18;//获取文章数
                $i=0;
                ?>

            <div class="page-box page-box-two"  isHide="false">

                <?php   if ( $posts->have_posts() ) {
                            
                            while ( $posts->have_posts() ) {
                                $posts->the_post();
                    
                ?>
                    <div class="box">

                        <div class="img-box">
                            <img src="<?php echo catch_that_image() ?>"> 
                            <!-- 上线时取消注释 -->
                        </div>

                        <div class="txt-box">
                            <a href="<?php the_permalink( ); ?>">
                                <h4><?php the_title( ); ?></h4>
                            </a>
                            
                            <div class="p"><?php the_excerpt(  ); ?></div>
                            <span class="time"><?php echo get_the_date("Y-m-d") ; ?></span>
                        </div>

                    </div>
                    
                <?php  if (($i+1)%6==0 && ($i+1)!=$count) {?>
                    </div>
                    <div class="page-box page-box-two" isHide="true">
                <?php }$i++;} }?>
            </div>
            <div class="dots">
                    <div id="previous"> < </div>   
                    <span class=" dot-two " isHide="false"></span> 

                    <?php for ($k=0; $k < $i; $k++) { 
                    if (($k+1)%6==0&& ($k+1)!=$count ) {echo "<span class=\" dot-two \" isHide=\"true\"></span>"; }
                    }?>
                
                <div id="next"> > </div>
                </div>
        </section>
    </section>
<!-- 3小组介绍 -->
        <!-- <section class="three" id="three">
            <div class="title-three">
                <h2>
                <?php// $cat_id = get_category_by_slug('home-3')->term_id; 
               // echo get_cat_name($cat_id); ?>
                </h2>
                <?php// echo category_description($cat_id); ?>
            </div>
            <main>
                <?php
                // $posts = new WP_Query(array(
                //     'category_name' => 'team-4',
                //     'post_type' => 'post',
                //     'posts_per_page' => -1
                    
                // ));
                // $count=get_category_by_slug('team-4')->count;//获取文章数
                // $i=0;
                ?>

                <div class="page-box page-box-three"  isHide="false"> 

                    <?php 
                        // if ( $posts->have_posts() ) {
                            
                        //     while ( $posts->have_posts() ) {
                        //         $posts->the_post();
                    ?>

                        <div class="box">
                            
                            <div class="img-box">
                                <a href="<?php//  the_permalink();?>">
                                <img src="<?php// echo catch_that_image() ?>">
                            </a>
                                    
                            </div>
                            <div class="p"><?php// the_title();?></div>
                        </div>
                        <?php // if (($i+1)%4==0 && ($i+1)!=$count) {?>
                                </div>
                                <div class="page-box page-box-three" isHide="true">
                        <?php//  } ?>
                    <?php// $i++; }}?>
                </div>
         
                <div class="btn-box">
                    <span class="before-three" id="before-three"><</span>
                    <span class="after-three" id="after-three">></span>
                </div>                
            </main>
        </section> -->
   
</main>


</section>



<?php get_footer(); ?>
