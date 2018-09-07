<?php 
/**
 * 搜索框模板
 * 
 * 2018.7.17
 * by fig 
 * v1.0.1
 */
?>   
<form id="searchform" action="<?php bloginfo( 'url' ); ?>/" method="get">
    <div class="input-box">
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" /><span>/</span>
        <!-- <input type="submit" value="搜索"> -->
        <input type="hidden" name="cat" value="<?php echo get_category_by_slug('news')->term_id;  ?>" />
        <input type="image" alt="搜索" src="<?php bloginfo( 'template_url' ); ?>/assets/image/search.png" />
    </div>
</form>