<?php 


//去头部信息remove_action( 'wp_head', 'wp_enqueue_scripts', 1 );
remove_action( 'wp_head', 'feed_links', 2 );//文章和评论feed
remove_action( 'wp_head', 'feed_links_extra', 3 );// 额外的feed,例如category, tag页
remove_action( 'wp_head', 'rsd_link' );//ML-RPC
remove_action( 'wp_head', 'wlwmanifest_link' );// 外部编辑器
remove_action( 'wp_head', 'index_rel_link' );//当前文章的索引
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );// 父篇
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );// 开始篇
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );//rel=pre
remove_action( 'wp_head', 'locale_stylesheet' );
remove_action( 'publish_future_post', 'check_and_publish_future_post', 10, 1 );
remove_action( 'wp_head', 'noindex', 1 );
remove_action( 'wp_head', 'wp_print_styles', 8 );
remove_action( 'wp_head', 'wp_print_head_scripts', 9 );
remove_action( 'wp_head', 'wp_generator' );//移除WordPress版本
// remove_action( 'wp_head', 'rel_canonical' );//移除Canonical标记
remove_action( 'wp_footer', 'wp_print_footer_scripts' );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action( 'template_redirect', 'wp_shortlink_header', 11, 0 );
add_action('widgets_init', 'my_remove_recent_comments_style');
function my_remove_recent_comments_style() {
global $wp_widget_factory;
remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}
function my_function_admin_bar(){ return false; } add_filter( 'show_admin_bar' ,  'my_function_admin_bar');//剔除两个style


//获取logo
add_theme_support( 'custom-logo', array(
   'height'      => 85,
   'width'       => 160,
   'flex-width' => true,
) );

// 说明：获取无参数URL
function curPageURL()
{
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on")
    {
        $pageURL .= "s";
    }
    $pageURL .= "://";
    $this_page = $_SERVER["REQUEST_URI"];   
    // 只取 ? 前面的内容
    if (strpos($this_page, "?") !== false)
        $this_page = reset(explode("?", $this_page));
 
    if ($_SERVER["SERVER_PORT"] != "80")
    {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $this_page;
    }
    else
    {
        $pageURL .= $_SERVER["SERVER_NAME"] . $this_page;
    }
    return $pageURL;
}




function getImgUrl($str=""){
    $url= substr($str,stripos($str,"src=")+5,stripos($str,"alt")-stripos($str,"src=")-7);
    if (stripos($str,"http")) {
        return $url;
    }else {
        return bloginfo( 'template_url' )."/assets/image/daiti.svg";
    }
    
}


//postviews   
function get_post_views ($post_id) {   
  
    $count_key = 'views';   
    $count = get_post_meta($post_id, $count_key, true);   
  
    if ($count == '') {   
        delete_post_meta($post_id, $count_key);   
        add_post_meta($post_id, $count_key, '0');   
        $count = '0';   
    }   
  
    echo number_format_i18n($count);   
  
}   
  
function set_post_views () {   
  
    global $post;   
  
    $post_id = $post -> ID;   
    $count_key = 'views';   
    $count = get_post_meta($post_id, $count_key, true);   
  
    if (is_single() || is_page()) {   
  
        if ($count == '') {   
            delete_post_meta($post_id, $count_key);   
            add_post_meta($post_id, $count_key, '0');   
        } else {   
            update_post_meta($post_id, $count_key, $count + 1);   
        }   
  
    }   
  
}   
add_action('get_header', 'set_post_views');  

 ?>