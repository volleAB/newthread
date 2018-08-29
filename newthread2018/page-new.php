<?php 
/**
 * template name:新闻中心
 * 
 * 2018.7.27
 * by fig
 * v1.0.0
 */
get_header(  );
?>
<section class="news page-all" id="news">
    <div class="backgrund"></div>
    <main>
        <header>
            <nav class="top">
                <a href="<?php bloginfo( 'url' ); ?>">
                    <?xml version="1.0" standalone="no"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg t="1532224066351" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1922" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32"><defs><style type="text/css"></style></defs><path d="M896 576 512 128 128 576 224 576 224 896 416 896 416 640 608 640 608 896 800 896 800 576Z" p-id="1923" fill="#2c2c2c"></path></svg>
                    首页
                </a>
                <a href="<?php echo curPageURL();?>">新闻中心</a>
                <span class="thisPage"></span>
            </nav>
         
            <ul class="bottom">
                <li class="option on" data-num="one"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path fill-rule="evenodd"  opacity="0.251" fill="rgb(0, 0, 0)"d="M15.037,0.092 C18.916,-0.001 21.617,0.783 24.010,2.144 C24.754,2.567 26.624,3.498 25.095,4.897 C24.303,5.621 23.031,4.433 22.285,4.046 C20.493,3.116 17.526,2.171 14.642,2.694 C8.382,3.832 4.522,7.405 3.055,13.404 C2.584,15.331 2.631,18.043 3.154,19.910 C3.609,21.536 4.356,23.071 5.225,24.314 C7.952,28.217 14.525,31.826 21.003,29.168 C24.153,27.876 26.467,25.745 28.103,22.913 C29.033,21.303 29.368,19.427 29.730,17.207 C29.870,16.350 29.714,15.319 29.596,14.434 C29.527,13.921 29.406,13.457 29.533,13.104 C29.741,12.525 30.617,11.972 31.357,12.403 C33.000,13.360 32.027,19.759 31.505,21.311 C29.749,26.536 26.132,30.065 21.003,31.871 C19.828,32.284 18.527,32.339 17.157,32.571 C14.627,33.000 11.613,31.955 10.007,31.270 C3.943,28.682 -2.000,21.009 0.836,11.652 C2.332,6.719 5.761,3.036 10.303,1.193 C11.256,0.909 12.210,0.626 13.163,0.342 C13.788,0.259 14.412,0.176 15.037,0.092 ZM30.568,4.296 C31.329,4.286 31.605,4.449 31.899,4.897 C32.411,5.674 31.904,6.321 31.245,7.040 C30.804,7.521 30.269,8.144 30.026,8.450 C26.854,11.936 23.681,15.423 20.510,18.909 C20.181,19.322 19.163,20.465 18.264,21.453 C17.593,22.191 17.010,22.864 16.713,22.963 C15.565,23.343 14.805,22.027 14.297,21.511 C12.456,19.727 10.615,17.941 8.775,16.157 C8.242,15.720 7.285,14.756 7.887,13.805 C8.286,13.175 8.895,13.120 9.416,13.340 C9.865,13.530 10.237,13.938 10.500,14.205 C11.947,15.623 13.393,17.041 14.839,18.459 C15.326,18.857 15.684,19.643 16.319,19.860 C17.732,18.292 19.146,16.724 20.559,15.156 C22.498,13.004 24.438,10.852 26.377,8.700 C26.960,7.967 27.906,6.917 28.701,6.026 C29.535,5.092 30.081,4.332 30.568,4.296 Z"/></svg>    
                    团队新闻
                </li>
                <li class="option " data-num="two"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"width="1.164cm" height="1.164cm">
                    <path fill-rule="evenodd"  opacity="0.251" fill="rgb(0, 0, 0)"d="M15.037,0.092 C18.916,-0.001 21.617,0.783 24.010,2.144 C24.754,2.567 26.624,3.498 25.095,4.897 C24.303,5.621 23.031,4.433 22.285,4.046 C20.493,3.116 17.526,2.171 14.642,2.694 C8.382,3.832 4.522,7.405 3.055,13.404 C2.584,15.331 2.631,18.043 3.154,19.910 C3.609,21.536 4.356,23.071 5.225,24.314 C7.952,28.217 14.525,31.826 21.003,29.168 C24.153,27.876 26.467,25.745 28.103,22.913 C29.033,21.303 29.368,19.427 29.730,17.207 C29.870,16.350 29.714,15.319 29.596,14.434 C29.527,13.921 29.406,13.457 29.533,13.104 C29.741,12.525 30.617,11.972 31.357,12.403 C33.000,13.360 32.027,19.759 31.505,21.311 C29.749,26.536 26.132,30.065 21.003,31.871 C19.828,32.284 18.527,32.339 17.157,32.571 C14.627,33.000 11.613,31.955 10.007,31.270 C3.943,28.682 -2.000,21.009 0.836,11.652 C2.332,6.719 5.761,3.036 10.303,1.193 C11.256,0.909 12.210,0.626 13.163,0.342 C13.788,0.259 14.412,0.176 15.037,0.092 ZM30.568,4.296 C31.329,4.286 31.605,4.449 31.899,4.897 C32.411,5.674 31.904,6.321 31.245,7.040 C30.804,7.521 30.269,8.144 30.026,8.450 C26.854,11.936 23.681,15.423 20.510,18.909 C20.181,19.322 19.163,20.465 18.264,21.453 C17.593,22.191 17.010,22.864 16.713,22.963 C15.565,23.343 14.805,22.027 14.297,21.511 C12.456,19.727 10.615,17.941 8.775,16.157 C8.242,15.720 7.285,14.756 7.887,13.805 C8.286,13.175 8.895,13.120 9.416,13.340 C9.865,13.530 10.237,13.938 10.500,14.205 C11.947,15.623 13.393,17.041 14.839,18.459 C15.326,18.857 15.684,19.643 16.319,19.860 C17.732,18.292 19.146,16.724 20.559,15.156 C22.498,13.004 24.438,10.852 26.377,8.700 C26.960,7.967 27.906,6.917 28.701,6.026 C29.535,5.092 30.081,4.332 30.568,4.296 Z"/></svg>    
                    例会动态
                </li>
                <li class="option " data-num="three"><svg xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink"width="1.235cm" height="1.235cm">
                    <path fill-rule="evenodd"  opacity="0.251" fill="rgb(0, 0, 0)"d="M17.501,34.999 C7.851,34.999 -0.000,27.149 -0.000,17.500 C-0.000,7.850 7.851,-0.000 17.501,-0.000 C27.150,-0.000 35.000,7.850 35.000,17.500 C35.000,27.149 27.150,34.999 17.501,34.999 ZM17.501,2.386 C9.167,2.386 2.386,9.166 2.386,17.500 C2.386,25.833 9.167,32.613 17.501,32.613 C25.834,32.613 32.614,25.833 32.614,17.500 C32.614,9.166 25.834,2.386 17.501,2.386 ZM18.330,18.237 L12.057,25.109 C12.057,25.109 11.267,25.860 10.530,25.187 C9.793,24.514 10.451,23.644 10.451,23.644 L16.425,17.099 L16.425,4.550 C16.425,4.550 16.503,3.449 17.501,3.453 C18.498,3.457 18.599,4.550 18.599,4.550 L18.599,17.340 C18.644,17.820 18.330,18.237 18.330,18.237 Z"/></svg>
                    文化活动
                </li>
                <li class="option " data-num="four"><svg xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink"width="1.164cm" height="1.164cm">
                    <path fill-rule="evenodd"  opacity="0.251" fill="rgb(0, 0, 0)"d="M15.037,0.092 C18.916,-0.001 21.617,0.783 24.010,2.144 C24.754,2.567 26.624,3.498 25.095,4.897 C24.303,5.621 23.031,4.433 22.285,4.046 C20.493,3.116 17.526,2.171 14.642,2.694 C8.382,3.832 4.522,7.405 3.055,13.404 C2.584,15.331 2.631,18.043 3.154,19.910 C3.609,21.536 4.356,23.071 5.225,24.314 C7.952,28.217 14.525,31.826 21.003,29.168 C24.153,27.876 26.467,25.745 28.103,22.913 C29.033,21.303 29.368,19.427 29.730,17.207 C29.870,16.350 29.714,15.319 29.596,14.434 C29.527,13.921 29.406,13.457 29.533,13.104 C29.741,12.525 30.617,11.972 31.357,12.403 C33.000,13.360 32.027,19.759 31.505,21.311 C29.749,26.536 26.132,30.065 21.003,31.871 C19.828,32.284 18.527,32.339 17.157,32.571 C14.627,33.000 11.613,31.955 10.007,31.270 C3.943,28.682 -2.000,21.009 0.836,11.652 C2.332,6.719 5.761,3.036 10.303,1.193 C11.256,0.909 12.210,0.626 13.163,0.342 C13.788,0.259 14.412,0.176 15.037,0.092 ZM30.568,4.296 C31.329,4.286 31.605,4.449 31.899,4.897 C32.411,5.674 31.904,6.321 31.245,7.040 C30.804,7.521 30.269,8.144 30.026,8.450 C26.854,11.936 23.681,15.423 20.510,18.909 C20.181,19.322 19.163,20.465 18.264,21.453 C17.593,22.191 17.010,22.864 16.713,22.963 C15.565,23.343 14.805,22.027 14.297,21.511 C12.456,19.727 10.615,17.941 8.775,16.157 C8.242,15.720 7.285,14.756 7.887,13.805 C8.286,13.175 8.895,13.120 9.416,13.340 C9.865,13.530 10.237,13.938 10.500,14.205 C11.947,15.623 13.393,17.041 14.839,18.459 C15.326,18.857 15.684,19.643 16.319,19.860 C17.732,18.292 19.146,16.724 20.559,15.156 C22.498,13.004 24.438,10.852 26.377,8.700 C26.960,7.967 27.906,6.917 28.701,6.026 C29.535,5.092 30.081,4.332 30.568,4.296 Z"/></svg>    
                    项目快报
                </li>
                <li class="option " data-num="five"><svg xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink"width="1.164cm" height="1.164cm">
                    <path fill-rule="evenodd"  opacity="0.251" fill="rgb(0, 0, 0)"d="M15.037,0.092 C18.916,-0.001 21.617,0.783 24.010,2.144 C24.754,2.567 26.624,3.498 25.095,4.897 C24.303,5.621 23.031,4.433 22.285,4.046 C20.493,3.116 17.526,2.171 14.642,2.694 C8.382,3.832 4.522,7.405 3.055,13.404 C2.584,15.331 2.631,18.043 3.154,19.910 C3.609,21.536 4.356,23.071 5.225,24.314 C7.952,28.217 14.525,31.826 21.003,29.168 C24.153,27.876 26.467,25.745 28.103,22.913 C29.033,21.303 29.368,19.427 29.730,17.207 C29.870,16.350 29.714,15.319 29.596,14.434 C29.527,13.921 29.406,13.457 29.533,13.104 C29.741,12.525 30.617,11.972 31.357,12.403 C33.000,13.360 32.027,19.759 31.505,21.311 C29.749,26.536 26.132,30.065 21.003,31.871 C19.828,32.284 18.527,32.339 17.157,32.571 C14.627,33.000 11.613,31.955 10.007,31.270 C3.943,28.682 -2.000,21.009 0.836,11.652 C2.332,6.719 5.761,3.036 10.303,1.193 C11.256,0.909 12.210,0.626 13.163,0.342 C13.788,0.259 14.412,0.176 15.037,0.092 ZM30.568,4.296 C31.329,4.286 31.605,4.449 31.899,4.897 C32.411,5.674 31.904,6.321 31.245,7.040 C30.804,7.521 30.269,8.144 30.026,8.450 C26.854,11.936 23.681,15.423 20.510,18.909 C20.181,19.322 19.163,20.465 18.264,21.453 C17.593,22.191 17.010,22.864 16.713,22.963 C15.565,23.343 14.805,22.027 14.297,21.511 C12.456,19.727 10.615,17.941 8.775,16.157 C8.242,15.720 7.285,14.756 7.887,13.805 C8.286,13.175 8.895,13.120 9.416,13.340 C9.865,13.530 10.237,13.938 10.500,14.205 C11.947,15.623 13.393,17.041 14.839,18.459 C15.326,18.857 15.684,19.643 16.319,19.860 C17.732,18.292 19.146,16.724 20.559,15.156 C22.498,13.004 24.438,10.852 26.377,8.700 C26.960,7.967 27.906,6.917 28.701,6.026 C29.535,5.092 30.081,4.332 30.568,4.296 Z"/></svg>    
                    交流合作
                </li>
               
            </ul>
        </header>
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
                $posts=get_posts(array('category' =>$cat_id ,'numberposts' =>4 )); 
                $i=0;
                // print_r($posts);
                while ($posts[$i]) {?>

                    <div class="box">
                        <div class="img-box">
                             <img src="<?php echo getImgUrl($posts[$i]->post_content);?>">
                        </div>
                        <span class="time"><?php echo substr($posts[$i]->post_date,0,10); ?></span>
                        <h3><?php echo  $posts[$i]->post_title;?></h3>


                        <a href="<?php echo $posts[$i]->guid; ?>"></a> 
                    </div>
                                      
                <?php $i++;} ?>
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
                $posts=get_posts(array('category' =>$cat_id ,'numberposts' =>4 )); 
                $i=0;
                while ($posts[$i]) {?>

                    <div class="box">
                        <div class="img-box">
                             <img src="<?php echo getImgUrl($posts[$i]->post_content);?>">
                        </div>
                        <div class="txt-box">
                            <h3><?php echo  $posts[$i]->post_title;?></h3>
                            <p><?php echo  $posts[$i]->post_excerpt;?></p>
                        </div>

                        <a href="<?php echo $posts[$i]->guid; ?>"><span>></span></a> 
                    </div>
                                      
                <?php $i++;} ?>
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
                $posts=get_posts(array('category' =>$cat_id ,'numberposts' =>-1 )); 
                $i=0;?>
                <div class="page-box page-box-three"  isHide="false">
                <?php while ($posts[$i]) {?>

                            <div class="box">
                                <div class="img-box">
                                    <img src="<?php echo getImgUrl($posts[$i]->post_content);?>">
                                </div>
                                <div class="txt-box">
                                    <h3><?php echo  $posts[$i]->post_title;?></h3>
                                    <p class="time"><?php echo substr($posts[$i]->post_date,0,10);  ?></p>
                                </div>

                                <a href="<?php echo $posts[$i]->guid; ?>"><span></span></a> 
                            </div>
                                 
                            
                            <?php  if (($i+1)%4==0 && ($i+1)!=count($posts)) {?>
                            </div>
                            <div class="page-box page-box-three" isHide="true">
                        <?php  } ?>
                    <?php $i++;} ?>
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
                $posts=get_posts(array('category' =>$cat_id ,'numberposts' =>-1 )); 
                $i=0;?>
                <div class="page-box page-box-four"  isHide="false">
                <?php while ($posts[$i]) {?>

                            <div class="box">
                                <div class="img-box"></div>
                                <div class="txt-box">
                                    <a href="<?php echo $posts[$i]->guid; ?>">
                                        <h3><?php echo  $posts[$i]->post_title;?></h3>
                                    </a> 
                                </div>
                            </div>
                            
                        <?php  if (($i+1)%18==0 && ($i+1)!=count($posts)) {?>
                            </div>
                            <div class="page-box page-box-four" isHide="true">
                        <?php  } ?>

                    <?php $i++;} ?>
                </div>

                <div class="btn-box">
                    <span class="before" id="before-four"><</span>
                    <span class="after" id="after-four">></span>
                </div>
            </section>
        </section>
<!-- 5交流合作 -->
        <section class="five" id="js_five">
            <div class="title">
                <?php $cat_id = get_category_by_slug('news-1')->term_id; 
                echo get_cat_name($cat_id); 
                echo category_description($cat_id);
                ?>
            </div>
            <div class="content">
                
                <?php
                        $posts=get_posts(array('category' =>$cat_id ,'numberposts' =>-1 )); 
                        $i=0;
                        // print_r($posts);
                        ?> 
                <div class="page-box page-box-five"  isHide="false">

                <?php while ($posts[$i]) {?>
                        
                        <div class="box">
                            <div class="top">
                                <span class="time-1"><?php echo substr($posts[$i]->post_date,5,5);  ?></span>
                                <span class="time-2"><?php echo substr($posts[$i]->post_date,0,4);  ?></span>
                            </div>
                            <div class="txt-box">
                            <a href="<?php echo $posts[$i]->guid; ?>">
                                <h3><?php  echo $posts[$i]->post_title;?></h3></a>
                                <p><?php  if($posts[$i]->post_excerpt){
                                                    echo $posts[$i]->post_excerpt;
                                            }else {
                                                echo substr($posts[$i]->post_content,0,144);
                                                echo "...";
                                            }?>
                                </p>
                            </div>
                        </div>

                        <?php  if (($i+1)%3==0 && ($i+1)!=count($posts)) {?>
                            </div>
                            <div class="page-box page-box-five" isHide="true">
                        <?php  } ?>

                <?php  $i++; } ?>
                </div><!-- postLis-->

                <div class="dots">
                    <div id="previous"> < </div>   
                    <span class="dot dot-five" isHide="false"></span> 

                    <?php for ($k=0; $k < $i; $k++) { 
                    if (($k+1)%3==0&& ($k+1)!=count($posts) ) {echo "<span class=\"dot dot-five\" isHide=\"true\"></span>"; }
                    }?>
                
                    <div id="next"> > </div>
                </div><div id="backTop">>></div>
                </section>
                
        </section>

    </main>
</section>


<?php get_footer(  ); ?>