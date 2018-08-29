<?php 
/**
 * templ  ate name:搜索结果页
 * 
 * 2018.7.26
 * by fig 
 * v1.0.0
 */
get_header(  );
?>


	<section id="primary" class="page-search">
        <div class="backgrund"></div>

        <div class="sous">

                    <form id="searchform-header" action="<?php bloginfo( 'url' ); ?>/" method="get">
                        <div class="input-box">
                            <input type="text" name="s" id="search-header" value="" />
                            <!-- <input type="submit" value="搜索"> -->
                            <input type="hidden" name="cat" value="169" />
                            <input type="submit" value="搜索" id="sub">
                        </div>
                    </form>  
                    <div class="xxx-box">
                        <span class="xxx-d">第一</span>
                        <span class="xxx-d">第二</span>
                        <span class="xxx-d">第三</span>
                        <span class="xxx-d">第四</span>
                        <span class="xxx-d">第五</span>
                    </div> 
        </div>
		<main id="main" class="site-main" role="main">
<section>

            <?php if ( have_posts() ) : ?>

                <header class="page-search-header">
                    <!-- <h1 class="page-search-title"><?php //printf("搜索 \" %s \" 的结果 ↓", get_search_query() ); ?></h1> -->




                </header>
                
                <?php
                while ( have_posts() ) : the_post(); 

                if('post' == get_post_type()){ ?>

  
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <div class="img-box">
                                <img src="<?php echo getImgUrl($posts[$j]->post_content);?>">
                    </div>

                    <div   class="txt-box">

                        <header class="entry-header">
                            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                        </header>

                        <div class="entry-summary">
                            <?php the_excerpt();//简介 有填写简介就输出没填写就截取正文 ?>
                        </div>

                        <footer class="entry-footer">
                            <span class="author"><?php the_author();?></span>
                        <span> | </span>
                        <?php the_date( "Y-m-d", "<span class='time'>","</span>" ) ;?>
                        </footer>

                    </div>

                </article>

            <?php }  endwhile;?>
            
                
                
                <?php the_posts_pagination( array(//上下页
                    'prev_text'          =>"上一页",
                    'next_text'          =>"下一页",
                    'before_page_number' => '<span class="meta-nav screen-reader-text">    </span>',
                    'screen_reader_text'=> ' '
                ) );?>
                </section>
            <div class="slid">
                <p class="h2">相关搜索</p>
                    <ul>
                    <?php $post_query = new WP_Query('showposts=5');
                    while ($post_query->have_posts()) : $post_query->the_post();
                    $do_not_duplicate = $post->ID; ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php endwhile;?>
                    </ul>
                </div>
           <?php else :?>
               

                <section class="no-results not-found">
                    <header class="page-search-header">
                        <h1 class="page-search-title">没有这样的文章呀。</h1>
                    </header>
                    <div>
                        <p>你可以再试试别的 ↓</p>
                        <?php get_search_form(); ?>
                    </div>
                </section>

            <?php endif;?>

		</main>
	</section>



<?php get_footer(  ); ?>