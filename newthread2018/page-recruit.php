<?php 
/**
 * template name: 团队招新
 * 
 * 2018.8.15
 * by fig
 */
get_header(  );
?>

<section class="recruit  page-all" id="recruit">
    <div class="backgrund"></div>
    <main id="main">
         <header>
            <nav class="top">
                <a href="<?php bloginfo( 'url' ); ?>">
                    <?xml version="1.0" standalone="no"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg t="1532224066351" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1922" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32"><defs><style type="text/css"></style></defs><path d="M896 576 512 128 128 576 224 576 224 896 416 896 416 640 608 640 608 896 800 896 800 576Z" p-id="1923" fill="#2c2c2c"></path></svg>
                    首页
                </a>
                <a class="hide" href="<?php echo curPageURL();?>">团队招新</a>
                <span class="thisPage"></span>
            </nav>
         
            <ul class="bottom">
                <li class="option " data-num="three"><svg 
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="1.164cm" height="1.164cm">
                    <path fill-rule="evenodd"  fill="rgb(60, 64, 66)"
                    d="M32.340,29.039 C31.975,29.039 31.680,28.743 31.680,28.378 L31.680,1.318 L4.620,1.318 C4.255,1.318 3.960,1.023 3.960,0.659 C3.960,0.294 4.255,-0.001 4.620,-0.001 L32.340,-0.001 C32.704,-0.001 33.000,0.294 33.000,0.659 L33.000,28.378 C33.000,28.743 32.704,29.039 32.340,29.039 ZM29.040,6.599 L29.040,30.359 C29.040,31.817 27.858,32.998 26.400,32.998 L2.640,32.998 C1.182,32.998 -0.000,31.817 -0.000,30.359 L-0.000,6.599 C-0.000,5.141 1.182,3.958 2.640,3.958 L26.400,3.958 C27.858,3.958 29.040,5.141 29.040,6.599 ZM1.320,6.599 L1.320,30.359 C1.320,31.088 1.911,31.679 2.640,31.679 L26.400,31.679 C27.129,31.679 27.720,31.088 27.720,30.359 L27.720,6.599 C27.720,5.870 27.129,5.279 26.400,5.279 L2.640,5.279 C1.911,5.279 1.320,5.870 1.320,6.599 Z"/>
                    </svg>

                    报名表
                </li>
                
                <li class="option" data-num="one"><svg 
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="1.023cm" height="1.199cm">
                    <path fill-rule="evenodd"  fill="rgb(60, 64, 66)"
                    d="M-0.000,33.999 L-0.000,4.078 L6.905,4.078 L6.905,2.719 L9.666,2.719 L9.666,2.264 C9.666,1.012 10.594,-0.004 11.738,-0.004 L17.261,-0.004 C18.406,-0.004 19.333,1.012 19.333,2.264 L19.333,2.719 L22.095,2.719 L22.095,4.078 L29.000,4.078 L29.000,33.999 L-0.000,33.999 ZM20.714,4.078 L17.952,4.078 L17.952,2.491 C17.952,1.863 17.488,1.356 16.916,1.356 L12.083,1.356 C11.511,1.356 11.047,1.863 11.047,2.491 L11.047,4.078 L8.286,4.078 L8.286,8.159 L20.714,8.159 L20.714,4.078 ZM27.619,5.438 L22.095,5.438 L22.095,9.518 L6.905,9.518 L6.905,5.438 L1.381,5.438 L1.381,32.639 L27.619,32.639 L27.619,5.438 ZM8.178,20.592 L13.092,25.432 L22.343,15.125 C22.601,14.857 23.018,14.857 23.276,15.125 C23.533,15.394 23.533,15.829 23.276,16.098 L13.550,26.984 C13.407,27.133 13.221,27.187 13.034,27.176 C12.837,27.178 12.639,27.107 12.488,26.958 L7.100,21.653 C6.803,21.360 6.803,20.884 7.100,20.592 C7.398,20.298 7.881,20.298 8.178,20.592 Z"/>
                    </svg>
        
                   招新流程  
                </li>
                <li class="option " data-num="two"><svg 
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="1.235cm" height="1.235cm">
                    <path fill-rule="evenodd"  fill="rgb(60, 64, 66)"
                    d="M34.300,22.398 L30.100,22.398 C29.713,22.398 29.400,22.085 29.400,21.699 C29.400,21.312 29.713,20.998 30.100,20.998 L34.300,20.998 C34.686,20.998 35.000,21.312 35.000,21.699 C35.000,22.085 34.686,22.398 34.300,22.398 ZM34.300,15.398 L27.300,15.398 C26.913,15.398 26.600,15.086 26.600,14.699 C26.600,14.312 26.913,13.999 27.300,13.999 L34.300,13.999 C34.686,13.999 35.000,14.312 35.000,14.699 C35.000,15.086 34.686,15.398 34.300,15.398 ZM34.300,8.399 L27.300,8.399 C26.913,8.399 26.600,8.085 26.600,7.698 C26.600,7.312 26.913,6.999 27.300,6.999 L34.300,6.999 C34.686,6.999 35.000,7.312 35.000,7.698 C35.000,8.085 34.686,8.399 34.300,8.399 ZM27.124,34.219 C27.124,34.219 26.800,34.997 14.000,34.997 C1.198,34.997 0.879,34.219 0.879,34.219 C-0.733,31.891 0.079,28.008 1.692,26.457 C2.496,25.681 7.882,23.590 10.083,22.755 C6.436,20.728 4.200,16.023 4.200,11.611 C4.200,5.786 5.981,-0.005 13.997,-0.005 C22.012,-0.005 23.794,5.786 23.794,11.611 C23.794,15.880 21.698,20.417 18.259,22.544 C19.721,23.164 25.477,25.634 26.325,26.457 C27.924,28.008 28.724,31.891 27.124,34.219 ZM17.646,23.800 L16.800,23.800 L16.800,23.798 L16.800,21.771 C20.295,20.160 22.392,15.671 22.392,11.631 C22.392,6.603 20.993,1.388 13.997,1.388 C7.000,1.388 5.601,6.603 5.601,11.631 C5.601,15.673 7.701,20.165 11.200,21.773 L11.200,23.798 L11.183,23.833 C7.496,25.208 3.262,26.958 2.623,27.487 C1.585,28.490 0.876,31.273 1.801,33.071 C2.588,33.236 5.312,33.597 14.000,33.597 C22.681,33.597 25.409,33.236 26.200,33.071 C27.118,31.269 26.418,28.484 25.372,27.468 C24.798,26.969 20.966,25.198 17.646,23.800 ZM31.500,27.999 L34.300,27.999 C34.686,27.999 35.000,28.312 35.000,28.699 C35.000,29.085 34.686,29.398 34.300,29.398 L31.500,29.398 C31.113,29.398 30.800,29.085 30.800,28.699 C30.800,28.312 31.113,27.999 31.500,27.999 Z"/>
                    </svg>

                    小组介绍
                </li>           
            </ul>
        </header>
<!-- 1 报名表 -->
       <section class="one" id="one">
            <div class="title">
                <?php $cat_id = get_category_by_slug('recruit-1')->term_id; 
                echo get_cat_name($cat_id); 
                echo category_description($cat_id);
                ?>
            </div>
           <main>
               <div class="btn">

                    <?php
                    $posts=get_posts(array('category' =>$cat_id ,'numberposts' =>1 )); 
                    $i=0;
                    while ($posts[$i]) { 
                         echo $posts[$i]->post_content;
                    $i++;}?>
                    
               </div>
           </main>
       </section>
<!-- 2招新流程 -->
        <section class="two" id="two">
            <div class="title">
                <?php $cat_id = get_category_by_slug('recruit-2')->term_id; 
                echo get_cat_name($cat_id); 
                echo category_description($cat_id);
                ?>
            </div>
           <main>
               <div class="img-box">

                    <?php
                    $posts=get_posts(array('category' =>$cat_id ,'numberposts' =>1 )); 
                    $i=0;
                    while ($posts[$i]) { 
                         echo $posts[$i]->post_content;
                    $i++;}?>
                    
               </div>
           </main>
       </section>
<!-- 3小组介绍 -->
        <section class="three" id="three">
            <div class="title">
                <?php $cat_id = get_category_by_slug('team-4')->term_id; 
                echo get_cat_name($cat_id); 
                echo category_description($cat_id);
                ?>
            </div>
            <main>
                <?php
                $posts=get_posts(array('category' =>$cat_id ,'numberposts' =>-1 )); 
                $i=0;?>

                <div class="page-box"  isHide="false"> 

                    <?php while ($posts[$i]) { ?>
                        <div class="box">
                            
                            <div class="img-box">
                                    <img src="<?php echo getImgUrl($posts[$i]->post_content);?>">
                            </div>
                            <p><?php echo $posts[$i]->post_title ?></p>
                        </div>
                        <?php  if (($i+1)%4==0 && ($i+1)!=count($posts)) {?>
                                </div>
                                <div class="page-box" isHide="true">
                        <?php  } ?>
                    <?php $i++;}?>
                </div>
         
                <div class="btn-box">
                    <span class="before" id="before"><</span>
                    <span class="after" id="after">></span>
                </div>                
            </main>
        </section>
    </main>
</section>


<?php get_footer(); ?>