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
//摘要修改
function new_excerpt_more($more) {
global $post;
return "...";
// return "<a style=\"color:#0000ff;\" href=". get_permalink($post->ID) . ">更多</a>";
}
add_filter("excerpt_more", "new_excerpt_more");
/*控制摘要字数*/
function new_excerpt_length($length) {
return 51;
}
add_filter("excerpt_length", "new_excerpt_length");


function catch_that_image() {
global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
 
//获取文章中第一张图片的路径并输出
$first_img = $matches[1][0];
 
//如果文章无图片，获取自定义图片
 
if(empty($first_img)){ //Defines a default image
$first_img =  bloginfo( 'template_url' )."/assets/image/daiti.svg";
 
//请自行设置一张default.jpg图片
}
 
return $first_img;
}

function getImgUrl($str=""){
    $url= substr($str,stripos($str,"src=")+5,stripos($str,"alt")-stripos($str,"src=")-7);
    if (stripos($str,"http")) {
        return $url;
    }else {
        return bloginfo( 'template_url' )."/assets/image/daiti.svg";
    }
    
}

//阅读量 
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
//阅读量 end


//评论 添加字段 
add_action('wp_insert_comment','wp_insert_tel',10,2);
function wp_insert_tel($comment_ID,$commmentdata) {
    


    // $name= isset($_POST['name']) ? $_POST['name'] : false; 
    // $gender= isset($_POST['gender']) ? $_POST['gender'] : false; 
    // $ethnic= isset($_POST['ethnic']) ? $_POST['ethnic'] : false; 
    // $birthday= isset($_POST['birthday']) ? $_POST['birthday'] : false;
    // $birthplace= isset($_POST['birthplace']) ? $_POST['birthplace'] : false;
    // $college= isset($_POST['college']) ? $_POST['college'] : false;
    // $profession= isset($_POST['profession']) ? $_POST['profession'] : false;
    $tel = isset($_POST['tel']) ? $_POST['tel'] : false;
    // $qq= isset($_POST['qq']) ? $_POST['qq'] : false;
    // $team= isset($_POST['team']) ? $_POST['team'] : false;
    // $hobby= isset($_POST['hobby']) ? $_POST['hobby'] : false;
    // $reason= isset($_POST['reason']) ? $_POST['reason'] : false;


    // update_comment_meta($comment_ID,'name',$name);
    // update_comment_meta($comment_ID,'gender',$gender);
    // update_comment_meta($comment_ID,'ethnic',$ethnic);
    // update_comment_meta($comment_ID,'birthday',$birthday);
    // update_comment_meta($comment_ID,'birthplace',$birthplace);
    // update_comment_meta($comment_ID,'college',$college);
    // update_comment_meta($comment_ID,'profession',$profession);
    update_comment_meta($comment_ID,'tel',$tel);//tel 是存储在数据库里的字段名字
//     update_comment_meta($comment_ID,'qq',$qq);
//     update_comment_meta($comment_ID,'team',$team);
//     update_comment_meta($comment_ID,'hobby',$hobby);
//     update_comment_meta($comment_ID,'reason',$reason);


}


add_filter( 'manage_edit-comments_columns', 'my_comments_columns' );
add_action( 'manage_comments_custom_column', 'output_my_comments_columns', 10, 2 );
function my_comments_columns( $columns ){
    // $columns[ 'name' ] = __( '姓名' ); 
    // $columns[ 'gender' ] = __( '性别' ); 
    // $columns[ 'ethnic' ] = __( '民族' ); 
    // $columns[ 'birthday' ] = __( '出生年月' ); 
    // $columns[ 'birthplace' ] = __( '籍贯' ); 
    // $columns[ 'college' ] = __( '学院' ); 
    // $columns[ 'profession' ] = __( '年级专业' ); 
    $columns[ 'tel' ] = __( '电话' );        //电话是代表列的名字
    // $columns[ 'qq' ] = __( 'QQ' ); 
    // $columns[ 'team' ] = __( '小组' ); 
    // $columns[ 'hobby' ] = __( '爱好特长' ); 
    // $columns[ 'reason' ] = __( '理由' ); 
    return $columns;
}
function output_my_comments_columns( $column_name, $comment_id ){
    switch( $column_name ) {
        // case "name" :
		// echo get_comment_meta( $comment_id, 'name', true );
        // break;
        // case "gender" :
		// echo get_comment_meta( $comment_id, 'gender', true );
        // break;
        // case "ethnic" :
		// echo get_comment_meta( $comment_id, 'ethnic', true );
        // break;
        // case "birthday" :
		// echo get_comment_meta( $comment_id, 'birthday', true );
        // break;
        // case "birthplace" :
		// echo get_comment_meta( $comment_id, 'birthplace', true );
        // break;
        // case "college" :
		// echo get_comment_meta( $comment_id, 'college', true );
        // break;
        // case "profession" :
		// echo get_comment_meta( $comment_id, 'profession', true );
        // break;
		case "tel" :
		echo get_comment_meta( $comment_id, 'tel', true );
        break;
        // case "qq" :
		// echo get_comment_meta( $comment_id, 'qq', true );
        // break;
        // case "team" :
		// echo get_comment_meta( $comment_id, 'team', true );
        // break;
        // case "hobby" :
		// echo get_comment_meta( $comment_id, 'hobby', true );
        // break;
        // case "reason" :
		// echo get_comment_meta( $comment_id, 'reason', true );
		// break;
		
	}
}
//评论 添加字段  end


// // 允许重复评论
// function enable_duplicate_comments_preprocess_comment($comment_data)
// {
//     //add some random content to comment to keep dupe checker from finding it
//     $random = md5(time()); 
//     $comment_data['comment_content'] .= "disabledupes{" . $random . "}disabledupes";   
  
//     return $comment_data;
// }
// add_filter('preprocess_comment', 'enable_duplicate_comments_preprocess_comment');
  
// function enable_duplicate_comments_comment_post($comment_id)
// {
//     global $wpdb;
  
//     //remove the random content
//     $comment_content = $wpdb->get_var("SELECT comment_content FROM $wpdb->comments WHERE comment_ID = '$comment_id' LIMIT 1");   
//     $comment_content = preg_replace("/disabledupes\{.*\}disabledupes/", "", $comment_content);
//     $wpdb->query("UPDATE $wpdb->comments SET comment_content = '" . $wpdb->escape($comment_content) . "' WHERE comment_ID = '$comment_id' LIMIT 1");
  
//     /*
//         add your own dupe checker here if you want
//     */
// }
// add_action('comment_post', 'enable_duplicate_comments_comment_post');
// // 允许重复评论  end


 ?>
