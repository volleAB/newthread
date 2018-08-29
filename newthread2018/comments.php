<form action="<?php bloginfo( "url" ); ?>/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
<input type="hidden" name="comment_post_ID" value="<?php echo $_post->ID ?>" id="comment_post_ID">


<input placeholder="姓名" type="text" name="author" id="author" class="text" value="" tabindex="1" >
<input placeholder="电子邮件"  type="text" name="email" class="text" id="email" value="" tabindex="2">
<input placeholder="联系电话"  type="text" name="url" class="text" value="" tabindex="3">
<textarea placeholder="请输入您的留言"  id="comment" name="comment" cols="45" rows="8" ></textarea>

<input name="submit" type="submit" id="submit" class="submit" value="提交留言">


</form>



