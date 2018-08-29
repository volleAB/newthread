<?php
function cat_temp_menus() {
add_menu_page('模板选择器', '模板选择器', 'manage_options', basename(__FILE__), 'cat_temp_options_page');
}
function cat_temp_meta() {
global $wpdb,$post_ID;
$templates = cat_temp_get_page_templates();
$current = cat_temp_post_template($post_ID);
$out = '<select name="cat_temp_template" style="width:100%">';
$out .= '<option value="none"';
if ($post_ID == 0 ||!$current) $out .= ' selected="selected"';
$out .= '>请选择</option>';
$out .= '<option value="/single.php"';
if ($current == "/single.php") $out .= ' selected="selected"';
$out .= '>默认模板</option>';
foreach ($templates as $template =>$file) {
$out .= '<option value="'.$file.'"';
if ($current == $file) $out .= ' selected="selected"';
$out .= '>'.$template.'</option>';
}
$out .= "</select>";
$out .= "<p>选择文章模板</p>";
echo $out;
}
function cat_temp_post_submit($post_ID) {
global $wpdb;
if ($_POST['cat_temp_template']) {
$templates =  (get_option("cat_temp_post"));
if ($_POST['cat_temp_template'] != 'none') {
$templates[$post_ID] = $_POST['cat_temp_template'];
}else {
if ($templates[$post_ID]) {
unset($templates[$post_ID]);
}
}
update_option("cat_temp_post",($templates));
}
}
function cat_temp_post_template($ID) {
$templates =  (get_option("cat_temp_post"));
return $templates[$ID];
}
function cat_temp($template) {
global $wp_query;
$post_obj = $wp_query->get_queried_object();
if (is_single()) {
$data = cat_temp_get_data();
$categories = get_the_category($post_obj->ID);
}else if (is_category()) {
$data = cat_temp_get_data(true);
$categories[0] = &get_category($post_obj->cat_ID);
}
$temp_data;
foreach((array)$categories as $category) {
if ($data[$category->term_id]['template'] != '0') {
$temp_data[$data[$category->term_id]['template']] = $data[$category->term_id]['priority']+($category->term_id/80000);
}
}
foreach((array)$data as $key =>$cat) {
if ($cat['all'] == "all"&&$cat['template'] != "0") {
$id = (is_single()) ?(int)$cat['id'] : $key;
$descendants = get_term_children($id,'category');
if ($descendants &&in_category($descendants)) {
$temp_data[$cat['template']] = $cat['priority']+($cat['id']/80000);
}
}
}
if (is_array($temp_data)) {
asort($temp_data);
$template = array_shift(array_keys($temp_data));
}
if (is_single()) {
$overRule = cat_temp_post_template($post_obj->ID);
if ($overRule) $template = $overRule;
}
if (!empty($template)) {
if (file_exists(TEMPLATEPATH.$template)) {
include(TEMPLATEPATH.$template);
exit;
}
}
}
function cat_temp_is_cat($cat,$_post = null) {
if (in_category($cat,$_post)) {
return true;
}else {
$descendants = get_term_children((int)$cat,'category');
if ($descendants &&in_category($descendants,$_post)) return true;
}
return false;
}
function cat_temp_get_page_templates($str = "Template Name") {
$themes = get_themes();
$theme = get_current_theme();
$templates = $themes[$theme]['Template Files'];
$page_templates = array();
if (is_array($templates)) {
foreach((array)$templates as $template) {
if (!file_exists($template)) $template = WP_CONTENT_DIR.$template;
$template_data = implode('',file($template));
$name = '';
if (preg_match('|'.$str.':(.*)$|mi',$template_data,$name))
$name = $name[1];
if (!empty($name)) {
$page_templates[trim($name)] = str_replace($themes[$theme]['Template Dir'],"",$template);
}
}
}
return $page_templates;
}
function cat_temp_cats($item,$current,$archive=false) {
if ($archive) {
$templates = cat_temp_get_page_templates('Archive Template');
$default = '/archive.php';
}else {
$templates = cat_temp_get_page_templates();
$default = '/single.php';
}
$out = '<select title="Template" class="ct_template" name="data';
if ($archive) $out .= '[archive]';
$out .= '['.$item.'][template]">';
$out .= '<option value="0"';
if ($current == "0") $out .= ' selected="selected"';
$out .= '>未指定</option>';
$out .= '<option value="'.$default.'"';
if ($current == $default) $out .= ' selected="selected"';
$out .= '>默认模板</option>';
foreach ($templates as $template =>$file) {
$out .= '<option value="'.$file.'"';
if ($current == $file) $out .= ' selected="selected"';
$out .= '>'.$template.'</option>';
}
$out .= "</select>";
return $out;
}
function cat_temp_categories($child = 0) {
$data = array(
"hide_empty"=>false,
"child_of"=>$child,
"pad_count"=>false,
);
$categories = get_categories($data);
$list = array();
foreach ((array)$categories as $cat) {
if ($cat->parent == $child) {
$list[] = array(
"name"=>$cat->name,
"id"=>$cat->cat_ID,
"count"=>cat_temp_getALLposts($cat->cat_ID),
"acount"=>$cat->category_count,
"child"=>cat_temp_categories($cat->cat_ID),
);
}
}
return $list;
}
function cat_temp_li_fun($data) {
$out = "<ul class=\"cat-temp\">";
foreach ((array)$data as $root) {
$out .= "<li>".$root['name']." (".$root['count'].")</li>";
if (count($root['child']) >0) {
$out .= cat_temp_li_fun($root['child']);
}
}
$out .= "</ul>";
return $out;
}
function cat_temp_priority($item,$current,$archive) {
$pri = array("最低","低","中等","高","最高");
$out = '<select class="ct_priority" title="Template Priority" name="data';
if ($archive) $out .= '[archive]';
$out .= '['.$item.'][priority]">';
$t = 0;
for ($i = 10;$i >= 1;$i = $i-2) {
$out .= '<option value="'.$i.'"';
if (intval($current) == $i) $out .= ' selected="selected"';
$out .= '>'.$pri[$t].'</option>';
$t++;
}
$out .= "</select>";
return $out;
}
function cat_temp_getALLposts($ID) {
$td = array(
'numberposts'=>-1,
'category'=>$ID,
);
return count(get_posts($td));
}
function cat_temp_get_data($archive=false,$id=false) {
$t = (!$archive) ?(get_option('cat_temp_data')) :  (get_option('cat_arch_data'));
return (!$id) ?$t : $t[$id];
}
function cat_temp_update($data) {
$archive = $data['archive'];
unset($data['archive']);
update_option('cat_temp_data',($data));
update_option('cat_arch_data',($archive));
}
function cat_temp_delete() {
delete_option('cat_temp_data');
delete_option('cat_temp_post');
delete_option('cat_arch_data');
}
function cat_temp_sub_cats($id,$data,$archive=false) {
$out .= ' <input type="checkbox"';
if ($data == "all") $out .= ' checked="checked"';
$out .= ' name="data';
if ($archive) $out .= "[archive]";
$out .= '['.$id.'][all]" value="all" title="Apply to sub-categories" /> <small>用于子分类</small>';
return $out;
}
function cat_temp_templates($id,$archive) {
if ($archive) {
$title = "分类";
$class = " class=\"noborder\"";
$class2 = " noborder";
}else {
$title = "文章";
}
$data = cat_temp_get_data($archive,$id);
$out .= "<td class=\"r$class2\" >$title:</td>";
$out .= "<td $class><div>".cat_temp_cats($id,$data['template'],$archive);
$out .= cat_temp_sub_cats($id,$data['all'],$archive).'</div></td>';
$out .= "<td $class><div>".cat_temp_priority($id,$data['priority'],$archive)."</div></td>";
return $out;
}
function cat_temp_td_fun($data,$padding = 5) {
$out = "";
foreach ((array)$data as $root) {
$out .= '<tr>';
$out .= '<td class="c" rowspan="2">'.$root['id'];
$out .= '<input type="hidden" name="data['.$root['id'].'][id]" value="'.$root['id'].'" />';
$out .= '</td>';
$out .= '<td class="wide" style="padding-left:'.$padding.'px;" rowspan="2">'.$root['name'].'</td>';
$out .= cat_temp_templates($root['id'],true);
$out .= '<td rowspan="2">'.$root['acount'].' ('.$root['count'].')</td>';
$out .= "</tr><tr>";
$out .= cat_temp_templates($root['id'],false);
$out .= '</tr>';
if (count($root['child']) >0) {
$out .= cat_temp_td_fun($root['child'],$padding+10);
}
}
return $out;
}
function cat_temp_options_page() {
$_GET['lang'] = 'all';
;echo '
<div class="wrap cat-template">
<div class="icon32" id="icon-themes"><br/>
</div>
<h2>模板选择器</h2>
';
if ($_POST['update_theme']) {
cat_temp_update($_POST['data']);
echo '<div id="message" class="updated"><p>成功保存.</p></div>';
}
;echo '  <p>请选择分类和页面模板</p>
<form method="post" action="';echo $_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING'];;echo '">
';
if(function_exists('settings_fields')){
settings_fields('cat-temp-options');
}else {
wp_nonce_field('update-options');
;echo '    <input type="hidden" name="action" value="update" />
';
}
;echo '    <table>
<tr>
<td style="vertical-align:top" width="70%"><table width="100%" class="widefat" id="cat_temps">
<thead>
<tr>
<th width="2%" class="c">ID</th>
<th>分类</th>
<th colspan="2">模板</th>
<th width="4%">等级</th>
<th>文章数</th>
</tr>
</thead>
<tbody>
';echo cat_temp_td_fun(cat_temp_categories());;echo '            </tbody>
</table></td>
<td style="vertical-align:top"><table width="100%" class="widefat">
<thead>
<tr>
<th>说明</th>
</tr>
<tr>
<td>按照以下说明制作模板:</td>
</tr>
<tr>
<td>
分类模板:
<pre style="direction:ltr">
<?php
/**
Archive Template: 分类模板名
**/
?>
</pre>
</td>
</tr>
<tr>
<td>
文章模板:
<pre style="direction:ltr">
<?php
/**
Template Name: 文章模板名
**/
?>
</pre>
</td>
</tr>
</thead>
</table></td>
</tr>
</table>
<p class="submit">
<input type="submit" class="button-primary autowidth" name="update_theme" value="保存" />
</p>
</form>
</div>
';
}
add_action('admin_menu','cat_temp_menus');
add_action('save_post','cat_temp_post_submit');
add_filter('template_redirect','cat_temp');
?>