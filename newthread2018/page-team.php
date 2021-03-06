<?php
/*
Template Name: 团队简介
*/

get_header();
?>

<section class="team page-all" id="team">

    <div class="backgrund"></div>
    <main class="main" id="main">
        <header>
            <nav class="top">
                <a href="<?php bloginfo( 'url' ); ?>">
                    <svg t="1532224066351" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1922" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32"><defs><style type="text/css"></style></defs><path d="M896 576 512 128 128 576 224 576 224 896 416 896 416 640 608 640 608 896 800 896 800 576Z" p-id="1923" fill="#2c2c2c"></path></svg>
                    首页
                </a>
                <a href="<?php echo curPageURL();?>">团队简介</a>
                <span class="thisPage"></span>
            </nav>
         
            <ul class="bottom">
                <li class="option on" data-num="one"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1.199cm" height="1.199cm">
                    <path fill-rule="evenodd"  fill="rgb(60, 64, 66)"
                    d="M33.320,21.758 L29.240,21.758 C28.864,21.758 28.560,21.454 28.560,21.078 C28.560,20.702 28.864,20.398 29.240,20.398 L33.320,20.398 C33.695,20.398 34.000,20.702 34.000,21.078 C34.000,21.454 33.695,21.758 33.320,21.758 ZM33.320,14.958 L26.520,14.958 C26.144,14.958 25.839,14.654 25.839,14.278 C25.839,13.903 26.144,13.598 26.520,13.598 L33.320,13.598 C33.695,13.598 34.000,13.903 34.000,14.278 C34.000,14.654 33.695,14.958 33.320,14.958 ZM33.320,8.158 L26.520,8.158 C26.144,8.158 25.839,7.853 25.839,7.478 C25.839,7.103 26.144,6.798 26.520,6.798 L33.320,6.798 C33.695,6.798 34.000,7.103 34.000,7.478 C34.000,7.853 33.695,8.158 33.320,8.158 ZM26.349,33.241 C26.349,33.241 26.034,33.996 13.599,33.996 C1.164,33.996 0.854,33.241 0.854,33.241 C-0.712,30.980 0.077,27.208 1.643,25.700 C2.424,24.947 7.657,22.915 9.795,22.104 C6.252,20.135 4.080,15.565 4.080,11.279 C4.080,5.621 5.810,-0.005 13.597,-0.005 C21.383,-0.005 23.114,5.621 23.114,11.279 C23.114,15.426 21.077,19.833 17.738,21.899 C19.158,22.501 24.749,24.901 25.572,25.700 C27.126,27.208 27.903,30.980 26.349,33.241 ZM17.142,23.119 L16.320,23.119 L16.320,23.118 L16.320,21.148 C19.715,19.583 21.752,15.223 21.752,11.298 C21.752,6.414 20.393,1.348 13.597,1.348 C6.800,1.348 5.441,6.414 5.441,11.298 C5.441,15.225 7.481,19.589 10.880,21.151 L10.880,23.118 L10.863,23.151 C7.282,24.487 3.169,26.187 2.548,26.702 C1.539,27.675 0.851,30.379 1.750,32.125 C2.514,32.286 5.160,32.636 13.599,32.636 C22.033,32.636 24.683,32.286 25.451,32.125 C26.343,30.375 25.663,27.670 24.647,26.683 C24.089,26.198 20.367,24.478 17.142,23.119 ZM30.600,27.199 L33.320,27.199 C33.695,27.199 34.000,27.503 34.000,27.878 C34.000,28.254 33.695,28.558 33.320,28.558 L30.600,28.558 C30.224,28.558 29.920,28.254 29.920,27.878 C29.920,27.503 30.224,27.199 30.600,27.199 Z"></path>
                    </svg>

                    团队介绍
                </li>
                <li class="option " data-num="two"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1.235cm" height="1.094cm">
                    <path fill-rule="evenodd"  fill="rgb(60, 64, 66)"
                    d="M34.199,27.525 C34.199,27.525 33.742,27.909 28.187,28.085 C28.327,27.641 28.412,27.176 28.425,26.700 C31.405,26.599 32.729,26.441 33.276,26.346 C33.958,24.969 33.387,22.873 32.550,22.083 C32.154,21.857 30.286,21.197 25.605,20.068 L23.155,19.478 L24.950,17.750 C26.829,15.943 28.042,12.726 28.042,9.558 C28.042,3.674 26.264,1.383 21.698,1.383 C20.905,1.383 20.226,1.480 19.596,1.625 C18.896,1.381 18.088,1.228 17.166,1.170 C18.289,0.450 19.735,0.004 21.698,0.004 C28.049,0.004 29.461,4.281 29.461,9.558 C29.461,12.990 28.149,16.612 25.947,18.731 C28.214,19.276 32.803,20.437 33.468,21.028 C34.931,22.328 35.663,25.576 34.199,27.525 ZM21.061,12.375 C21.061,15.808 19.749,19.430 17.547,21.548 C19.814,22.095 24.403,23.256 25.068,23.847 C26.531,25.146 27.263,28.394 25.799,30.343 C25.799,30.343 25.068,30.992 13.357,30.992 C1.646,30.992 0.805,30.343 0.805,30.343 C-0.670,28.394 0.072,25.146 1.547,23.847 C2.234,23.242 6.753,22.113 9.066,21.565 C6.853,19.449 5.534,15.818 5.534,12.375 C5.534,7.099 6.945,2.823 13.297,2.823 C19.649,2.823 21.061,7.099 21.061,12.375 ZM13.297,4.201 C8.731,4.201 6.953,6.493 6.953,12.375 C6.953,15.554 8.173,18.775 10.061,20.583 L11.876,22.320 L9.402,22.905 C4.716,24.015 2.855,24.674 2.464,24.901 C1.620,25.688 1.039,27.781 1.722,29.159 C2.591,29.310 5.339,29.613 13.357,29.613 C21.314,29.613 24.024,29.313 24.876,29.164 C25.558,27.786 24.987,25.693 24.150,24.901 C23.754,24.674 21.887,24.015 17.205,22.887 L14.754,22.296 L16.550,20.568 C18.429,18.761 19.642,15.544 19.642,12.375 C19.642,6.493 17.863,4.201 13.297,4.201 Z"></path>
                    </svg>
                    
                    小组介绍
                </li>
                <li class="option " data-num="three"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1.129cm" height="1.164cm">
                    <path fill-rule="evenodd"  fill="rgb(60, 64, 66)"
                    d="M31.019,31.992 L30.056,32.977 L27.165,30.023 L24.274,32.977 L23.311,31.992 L26.201,29.038 L23.311,26.084 L24.274,25.099 L27.165,28.053 L30.056,25.099 L31.019,26.084 L28.129,29.038 L31.019,31.992 ZM18.222,21.167 C18.680,21.324 20.277,21.873 21.981,22.508 L21.666,23.795 C20.453,23.340 19.125,22.865 17.870,22.438 L17.607,22.438 L17.310,20.943 L17.310,20.229 C20.259,18.440 22.012,14.213 22.012,10.385 C22.012,5.371 20.718,1.308 14.245,1.308 C7.773,1.308 6.478,5.371 6.478,10.385 C6.478,14.743 8.748,19.626 12.472,20.829 L12.472,20.943 L12.177,22.438 L11.808,22.438 C7.827,23.597 3.180,25.145 2.490,25.670 C1.515,26.631 0.838,29.339 1.702,31.114 C2.577,31.286 5.515,31.678 14.208,31.678 C16.403,31.678 18.230,31.653 19.753,31.613 L19.428,32.940 C17.958,32.976 16.249,32.998 14.208,32.998 C2.003,32.998 0.859,32.240 0.859,32.240 C-0.678,29.973 0.096,26.196 1.634,24.684 C2.404,23.926 8.280,22.117 10.641,21.410 C7.277,19.411 5.214,14.766 5.214,10.409 C5.214,4.658 6.856,-0.004 14.245,-0.004 C21.635,-0.004 23.277,4.658 23.277,10.409 C23.277,14.601 21.363,19.055 18.222,21.167 Z"></path>
                    </svg>
                    
                    组织架构
                </li>
                <li class="option " data-num="four"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1.129cm" height="1.164cm">
                        <path fill-rule="evenodd"  fill="rgb(60, 64, 66)"
                        d="M32.000,10.310 C32.000,10.311 31.999,10.311 31.999,10.312 L31.999,31.942 C31.999,32.524 31.522,32.995 30.933,32.995 L1.066,32.995 C0.477,32.995 -0.000,32.524 -0.000,31.942 L-0.000,1.049 C-0.000,0.467 0.477,-0.004 1.066,-0.004 L30.933,-0.004 C31.522,-0.004 31.999,0.467 31.999,1.049 L31.999,10.310 C31.999,10.310 32.000,10.310 32.000,10.310 ZM2.464,31.618 L29.535,31.618 C30.126,31.618 30.605,31.144 30.605,30.559 L30.605,10.998 L1.394,10.998 L1.394,30.559 C1.394,31.144 1.873,31.618 2.464,31.618 ZM29.535,1.374 L2.464,1.374 C1.873,1.374 1.394,1.848 1.394,2.431 L1.394,9.623 L30.605,9.623 L30.605,2.431 C30.605,1.848 30.126,1.374 29.535,1.374 ZM15.327,4.126 L18.113,4.126 L18.113,6.881 L15.327,6.881 L15.327,4.126 ZM9.754,4.126 L12.540,4.126 L12.540,6.881 L9.754,6.881 L9.754,4.126 ZM4.181,4.126 L6.967,4.126 L6.967,6.881 L4.181,6.881 L4.181,4.126 Z"></path>
                        </svg>
                        
                        里程碑
                </li>
                <!-- <li class="option " data-num="four"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1.164cm" height="1.164cm">
                    <path fill-rule="evenodd"  fill="rgb(60, 64, 66)"
                    d="M16.500,32.997 C7.387,32.997 -0.000,25.610 -0.000,16.497 C-0.000,7.385 7.387,-0.004 16.500,-0.004 C25.612,-0.004 33.000,7.385 33.000,16.497 C33.000,25.610 25.612,32.997 16.500,32.997 ZM26.072,28.204 C26.007,27.253 25.696,26.326 25.282,25.868 C22.436,23.797 18.830,23.365 18.830,23.365 L18.727,22.690 L18.727,21.330 C20.777,20.069 21.995,17.168 21.995,14.538 C21.995,11.061 21.079,8.243 16.497,8.243 C11.916,8.243 11.000,11.061 11.000,14.538 C11.000,17.171 12.222,20.077 14.278,21.335 L14.278,22.690 L14.150,23.536 C11.371,24.403 8.340,25.468 7.717,25.883 C7.304,26.344 6.995,27.263 6.928,28.205 C9.535,30.339 12.867,31.622 16.500,31.622 C20.133,31.622 23.465,30.339 26.072,28.204 ZM16.500,1.373 C8.146,1.373 1.375,8.144 1.375,16.497 C1.375,20.624 3.033,24.362 5.713,27.092 C5.919,26.191 6.286,25.382 6.768,24.884 C7.325,24.308 11.333,22.986 13.345,22.348 C11.043,20.756 9.634,17.567 9.634,14.541 C9.634,10.306 10.882,6.871 16.497,6.871 C22.113,6.871 23.361,10.306 23.361,14.541 C23.361,17.449 22.054,20.497 19.912,22.147 C21.301,22.651 25.644,24.258 26.244,24.884 C26.722,25.382 27.085,26.190 27.288,27.089 C29.968,24.360 31.624,20.623 31.624,16.497 C31.624,8.144 24.853,1.373 16.500,1.373 Z"></path>
                    
                    </svg>

                    导师力量
                </li> -->
                <li class="option " data-num="five">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1.199cm" height="1.164cm">
                    <path fill-rule="evenodd"  fill="rgb(60, 64, 66)"
                    d="M26.520,28.873 C26.520,28.873 25.529,27.377 24.272,25.275 C24.525,24.817 24.776,24.354 25.030,23.878 C25.532,24.738 26.036,25.579 26.520,26.352 C29.246,21.996 32.640,15.760 32.640,13.290 C32.640,10.870 31.340,8.784 29.449,7.691 C29.266,7.064 29.028,6.464 28.749,5.890 C31.783,6.883 34.000,9.801 34.000,13.290 C34.000,17.594 26.520,28.873 26.520,28.873 ZM6.800,10.998 C6.800,4.923 11.366,-0.002 17.000,-0.002 C22.632,-0.002 27.200,4.923 27.200,10.998 C27.200,17.074 17.000,32.999 17.000,32.999 C17.000,32.999 6.800,17.074 6.800,10.998 ZM17.000,1.373 C12.126,1.373 8.160,5.690 8.160,10.998 C8.160,15.100 13.773,25.141 17.000,30.423 C20.226,25.141 25.840,15.100 25.840,10.998 C25.840,5.690 21.874,1.373 17.000,1.373 ZM12.240,11.686 C12.240,9.027 14.371,6.872 17.000,6.872 C19.628,6.872 21.759,9.027 21.759,11.686 C21.759,14.344 19.628,16.498 17.000,16.498 C14.371,16.498 12.240,14.344 12.240,11.686 ZM20.399,11.686 C20.399,9.787 18.877,8.248 17.000,8.248 C15.122,8.248 13.600,9.787 13.600,11.686 C13.600,13.582 15.122,15.122 17.000,15.122 C18.877,15.122 20.399,13.582 20.399,11.686 ZM1.360,13.290 C1.360,15.760 4.753,21.996 7.480,26.352 C7.963,25.579 8.467,24.738 8.970,23.878 C9.223,24.354 9.475,24.817 9.727,25.275 C8.470,27.377 7.480,28.873 7.480,28.873 C7.480,28.873 -0.000,17.594 -0.000,13.290 C-0.000,9.801 2.216,6.883 5.251,5.890 C4.971,6.464 4.734,7.064 4.551,7.691 C2.659,8.784 1.360,10.870 1.360,13.290 Z"></path>
                    </svg>
                                        
                    团队分站
                </li>
                
            </ul>
        </header>
<!-- 1 团队介绍-->
        <section class="pageOfNum one" id="one" isHide="true">
            <div class="title">
                <?php $cat_id =  get_category_by_slug('team-1')->term_id; 
                echo get_cat_name($cat_id); 
                echo category_description($cat_id);
                ?>
            </div>
            <div class="content">
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
                <?php the_content( );?>
                <?php }}?>
            </div>
        </section>
<!-- 6 小组介绍-->
        <section class="pageOfNum two" id="two" isHide="true">
            <div class="title">
                <?php $cat_id =get_category_by_slug('team-4')->term_id; 
                echo get_cat_name($cat_id); 
                echo category_description($cat_id);
                ?>
            </div>
            <div class="content">
                <ul>
                    <?php
                    $posts = new WP_Query(array(
                    'cat' => $cat_id,
                    'post_type' => 'post',
                    'posts_per_page' =>-1  
                    ));
                    $i=0;
                    if ( $posts->have_posts() ) {
                    while ( $posts->have_posts() ) {
                        $posts->the_post();
                ?>
                    <li class="list" data-num="<?php echo  $i;?>">
                        <div class="img-box">
                            <!-- <img src="<?php//bloginfo( "template_url" ) ?>/assets/image/logo.png"> -->
                        </div>
                        <div class="txt">
                            <h5><?php the_title();?></h5>
                            <div class="p"><?php the_excerpt();?></div>
                        </div>
                    </li>
                     <?php $i++;}}?>
                </ul>
                <div class="post-box">
                     <?php
                    $j=0;
                    if ( $posts->have_posts() ) {
                    while ( $posts->have_posts() ) {
                        $posts->the_post();
                    ?>
                        <div class="post" data-num="<?php echo  $j;?>" isOn="false">
                            <div class="img-box">
                                <?php
                                    $cat_id_team = get_category_by_slug('logo-team')->term_id; 
                                    $posts_team=get_posts(  array('numberposts'=> 1 , 'category'=>$cat_id_team));
                                    if ( $posts_team ) {
                                        $i=0;
                                    while ( $posts_team[$i] ) {
                                ?>
                                    
                                    <img src="<?php echo getImgUrl($posts_team[$i]->post_content); ?>">
                                    
                                <?php 
                                    $i++; }}
                                    // $i=NULL;
                                ?>
                            </div>
                            <div class="txt-box">
                                <h3><?php the_title();?></h3>
                                <div class="excerpt"><?php the_excerpt();?></div>
                                <div class="cont">
                                    <?php the_content();?>
                                </div>
                            </div>
                        </div>
                     <?php $j++;}}?>
                </div>           
            </div>
        </section>
<!-- 2 组织架构-->
        <section class="pageOfNum three" id="three" isHide="true">
            <div class="title">
                 <?php $cat_id =  get_category_by_slug('team-5')->term_id; 
                echo get_cat_name($cat_id); 
                echo category_description($cat_id);
                ?>
            </div>
            <div class="content">
                <?php
                $posts = new WP_Query(array(
                    'cat' => $cat_id,
                    'post_type' => 'post',
                    'posts_per_page' => 2
                    
                ));
                if ( $posts->have_posts() ) {
                    while ( $posts->have_posts() ) {
                        $posts->the_post();
                ?>
                <p class="the-title"><?php the_title( ); ?></p>

                <div class="img-box">
                    <img src="<?php echo catch_that_image() ?>">
                </div>
                <?php }}?>
            </div>
        </section>
<!-- 3 里程碑-->
        <section class="pageOfNum four" id="four" isHide="true">
            <div class="title">
                <?php $cat_id = get_category_by_slug('team-6')->term_id; 
                    echo get_cat_name($cat_id); 
                    echo category_description($cat_id);
                ?>
            </div>
            <div class="content">
               
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
                    <div class="text">
                        <div class="img-and-title">
                            <div class="img-box">
                                <img src="<?php echo catch_that_image() ?>">
                            </div>
                            <a href="<?php the_permalink(  ); ?>">
                                <h4 class="titl"><?php the_title(); ?></h4>
                            </a>
                        </div>

                        <div class="line-and-dot"></div>

                        <div class="time"><?php the_excerpt();?></div>
                    </div>
                    <?php }} ?>
                

                <div class="line top"></div>
                <div class="line bottom"></div>
            </div>
        </section>
<!-- 4 导师力量-->
        <!-- <section class="pageOfNum four" id="four" isHide="true">
            <div class="title">
                <?php 
                // $cat_id =get_category_by_slug('team-3')->term_id; 
                // echo get_cat_name($cat_id); 
                // echo category_description($cat_id);
                ?>
            </div>
            <div class="content">
                <ul>
                    <?php
                    // $posts = new WP_Query(array(
                    // 'cat' => $cat_id,
                    // 'post_type' => 'post',
                    // 'posts_per_page' =>-1  
                    // ));
                    // $i=0;
                    // if ( $posts->have_posts() ) {
                    // while ( $posts->have_posts() ) {
                    //     $posts->the_post();
                ?>
                    <li class="list" data-num="<?php// echo  $i;?>">
                        <div class="img-box">
                            <img src="<?php// echo catch_that_image() ?>">
                        </div>
                        <div class="txt">
                            <h5><?php //the_title();?></h5>
                            <div class="p"><?php// the_excerpt();?></div>
                        </div>
                    </li>
                     <?php// $i++;}}?>
                </ul>
                <div class="post-box">
                     <?php
                    // $j=0;
                    // if ( $posts->have_posts() ) {
                    // while ( $posts->have_posts() ) {
                    //     $posts->the_post();
                    ?>
                        <div class="post" data-num="<?php// echo  $j;?>">
                            <div class="img-box">
                                <img src="<?php// echo catch_that_image() ?>">
                            </div>
                            <div class="txt-box">
                                <h3><?php// the_title();?></h3>
                                <div class="excerpt"><?php// the_excerpt();?></div>
                                <div class="cont">
                                    <?php// the_content();?>
                                </div>
                            </div>
                        </div>
                     <?php// $j++;}}?>
                </div>           
        </section> -->
<!-- 5 团队分站-->
        <section class="pageOfNum five" id="five" isHide="true">
            <div class="title">
                <?php $cat_id =get_category_by_slug('team-2')->term_id; 
                echo get_cat_name($cat_id); 
                echo category_description($cat_id);
                ?>
            </div>
            <div class="content">
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
                 <img src="<?php echo catch_that_image() ?>">
                <?php //the_content( );?>

                <?php }}?>
            </div>
        </section>

    </main>
</section>



<?php get_footer( ); ?>
