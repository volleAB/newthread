<?php 
/**
 * template name: 报名表
 * 
 * 2018.8.15
 * by fig
 */

get_header(  );
?>
<section class="apply page-all" id="apply">
    <div class="backgrund"></div>
    <main id="main">
         <header>
            <nav class="top">
                <a href="<?php bloginfo( 'url' ); ?>">
                    <svg t="1532224066351" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1922" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32"><defs><style type="text/css"></style></defs><path d="M896 576 512 128 128 576 224 576 224 896 416 896 416 640 608 640 608 896 800 896 800 576Z" p-id="1923" fill="#2c2c2c"></path></svg>
                    首页
                </a>
                <a class="hide" href="<?php echo curPageURL();?>">报名表</a>
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
        <div class="box">
            <form action="<?php bloginfo( "url" ); ?>/wp-comments-post.php" method="post" id="apply_form">

            <input type="hidden" name="comment_post_ID" value="182" id="comment_post_ID">
            <input type="hidden" name="email" value="123@email.com" >
            <input type="hidden" name="author" value="****" >
            <input type="hidden" name="comment" value="..." >


            <table border="1" cellspacing='0'>
                <tr>
                    <td>
                        <label for="name">姓名</label>
                        <input type="text" name="name" id="name">
                    </td>
                    <td>
                        <label for="gender">姓别</label>
                        <input type="text" name="gender" id="gender">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="ethnic">民族</label>
                        <input type="text" name="ethnic" id="ethnic">
                    </td>
                    <td>
                        <label for="birthday">出生年月</label>
                        <input type="text" name="birthday" id="birthday">
                    </td>
                </tr> 
                <tr>
                    <td class="w-100" colspan="2">
                        <label for="birthplace">籍贯</label>
                        <input type="text" name="birthplace" id="birthplace">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="college">学院</label>
                        <input type="text" name="college" id="college">
                    </td>
                    <td>
                        <label for="profession">年级专业</label>
                        <input type="text" name="profession" id="profession">
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label for="tel">联系电话</label>
                        <input type="text" name="tel" id="tel">
                    </td>
                    <td>
                        <label for="qq">QQ</label>
                        <input type="text" name="qq" id="qq">
                    </td>
                </tr>
                <tr class="team">
                    <td class="w-100" colspan="2">
                        <label for="team">志愿小组：</label>
                        <div class="span-box">
                            <span>FeWeb组<input type="radio" name="team" value="FeWeb组"></span>
                            <span>搜索引擎组<input type="radio" name="team" value="搜索引擎组"></span>
                            <span>ios组<input type="radio" name="team" value="ios组"></span>
                            <span>产品组<input type="radio" name="team" value="产品组"></span>
                            <span>Android组<input type="radio" name="team" value="Android组"></span>
                            <span>Database组<input type="radio" name="team" value="Database组"></span>
                            <span>.Net组<input type="radio" name="team" value="Net组"></span>
                            <span>宣传部<input type="radio" name="team" value="宣传部"></span>
                            <span>J2EE组<input type="radio" name="team" value="J2EE组"></span>
                            <span>CPP组<input type="radio" name="team" value="CPP组"></span>
                            <span>设计组<input type="radio" name="team" value="设计组"></span>
                            <span>财务部<input type="radio" name="team" value="财务部"></span>  
                        </div>
                                              
                   </td> 
                </tr> 
                <tr class="h">
                    <td class="w-100" colspan="2">
                        <label for="hobby">爱好特长：</label>
                        <textarea name="hobby" id="hobby" ></textarea>
                    </td>
                </tr>
                <tr class="r">
                    <td class="w-100" colspan="2">
                        <label for="reason">选择新思路的理由：</label>
                        <textarea name="reason" id="reason" placeholder=""></textarea>
                    </td>
                </tr>
                <!-- <tr>
                    <td class="w-100" colspan="2">
                        
                    </td>
                </tr> -->
           </table> 
           <span class="submit">提交</span>
        </form>
        </div>
        </section>
    </main>
</section>



<?php get_footer( );

?>