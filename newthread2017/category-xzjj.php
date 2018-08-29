
<?php
/*
Archive Template: category-xzjj
*/
?>

<?php get_header(); ?>
<div class="c-bg"><img src="<?php bloginfo('template_directory'); ?>/images/banner.png"></div>
<div class="c-link">
	<?php  
	    $cat=get_category_by_slug('t-0'); 
	    $cat_links=get_category_link($cat->term_id); 
	    $id=$cat->term_id;
	    $args = array(
	        'child_of'     => $id,
	        'orderby'      => id,
	        'show_count'   => 0,
	        'title_li'     => ''
	    );
	?>
	<ul id="c-list">
	<?php wp_list_categories($args); ?>
	</ul>
	<div class="form">
		<?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?>
	</div>
	<div class="c-line"></div>
</div>
<div class="c-content">
	<div class="l_head">
        <h1>小组简介</h1>
        <div class="line-l"></div><div class="line-r"></div>
        <p>Group Profile</p>
        <div class="underline"></div>
    </div>
	<div class="c-main">
		<div class="group_content">
	        	<div class="group_nav">
	        		<ul>
	        			<li><a href="#">FeWeb组</a></li>
			    		<li><a href="#">Android组</a></li>
			    		<li><a href="#">J2EE组</a></li>
			    		<li><a href="#">搜索引擎组</a></li>
			    		<li><a href="#">DataBase组</a></li>
			    		<li><a href="#">Cpp组</a></li>
			    		<li><a href="#">iOS组</a></li>
			    		<li><a href="#">.Net组</a></li>
			    		<li><a href="#">设计组</a></li>
			    		<li><a href="#">企划部</a></li>
			    		<li><a href="#">宣传部</a></li>
			    		<li><a href="#">财务部</a></li>
			    		<li><a href="#">产品组</a></li>
	        		</ul>
	        	</div>
	        	<div class="group_news">
	        		<div class="group_new">
	        			<img src="<?php bloginfo('template_directory'); ?>/images/FeWeb.jpg" alt="">
	        			<div class="group_introduce">
		        			<h1>FeWeb组</h1>
		        			<h2>这里是小组的一句口号</h2>
		        			<p>网酷前端组，负责网酷工作室的全部客户端界面设计，主要分为网站页面布局，页面整体架构，页面效果制作等工作。目前前端组以接实验室内各个小组的页面设计为主要工作，在实验室里有专门的组员讨论会议室，便于各组员之间的学习与交流。组里对新成员的发展十分重视，有特定的考核机制，通过考核的学员便能顺利进入组内工作。前端组最近的工作作品有计算机导论精品课程网站，操作系统精品课程网站，颐雅珍珠商业网站等，我们组一直以“精心制作，让用户有最好体验”作为宗旨，力求在客户端让网站更出彩。</p>
		        			<a href="#">更多>></a>
		        		</div>
	        		</div>
	        		<div class="group_new">
	        			<img src="<?php bloginfo('template_directory'); ?>/images/Android.jpg" alt="">
	        			<div class="group_introduce">
		        			<h1>Android组</h1>
		        			<h2>这里是小组的一句口号</h2>
		        			<p>Newthread团队Android小组，主要进行Android手机应用的开发工作。 小组成立两年来，组员完成了肥羊地图、蓝牙签到、RoundMe、人在民大等应用，获得过中国大学生服务 外包国家二等奖、蓝桥杯软件大赛国家二等奖等各种奖项。在这里，我们开拓进取，积极向上； 在这里 ，我们一起奋斗，一起代码； 在这里，我们一起蛋疼，一起Happy； 在这里，我们一起求知，一起游戏；在追寻梦想的路上，我们一步一个脚印，不离不弃， 因为， 我们知道， Android组的每一步， 都凝 聚了每个人的力量与汗水。 </p>
		        			<a href="#">更多>></a>
		        		</div>
	        		</div>
	        		<div class="group_new">
	        			<img src="<?php bloginfo('template_directory'); ?>/images/j2ee.jpg" alt="">
	        			<div class="group_introduce">
		        			<h1>J2EE组</h1>
		        			<h2>这里是小组的一句口号</h2>
		        			<p>JavaEE团队隶属于新思路团队，组建于2012年6月，由一群热衷于JavaEE的同学组成，并有开发经验丰富的指导老师指导。 团队主要专注于系统平台的开发，面向校内外企事业单位需求设计开发功能完备的应用系统，与其他团队合作联合开发大型综合多用途性系统，参与相关赛事并获得一定成果。团队成员中拥有实际开发中所用到的各种技能，队员们学习工作认真，接受新知识的能力强，在一些项目开发中已积累了一定的项目经验。团队队员之间相互学习、并肩奋进、协同合作，以服务学校和社会为宗旨，同时加强团队和个人的技能水平为目标，用青春和激情编写着他们的今天。 团队口号：我们思考是因为我们想改变。</p>
		        			<a href="#">更多>></a>
		        		</div>
	        		</div>
	        		<div class="group_new">
	        			<img src="<?php bloginfo('template_directory'); ?>/images/sousuo.jpg" alt="">
	        			<div class="group_introduce">
		        			<h1>搜索引擎组</h1>
		        			<h2>这里是小组的一句口号</h2>
		        			<p>网酷前端组，负责网酷工作室的全部客户端界面设计，主要分为网站页面布局，页面整体架构，页面效果制作等工作。目前前端组以接实验室内各个小组的页面设计为主要工作，在实验室里有专门的组员讨论会议室，便于各组员之间的学习与交流。组里对新成员的发展十分重视，有特定的考核机制，通过考核的学员便能顺利进入组内工作。前端组最近的工作作品有计算机导论精品课程网站，操作系统精品课程网站，颐雅珍珠商业网站等，我们组一直以“精心制作，让用户有最好体验”作为宗旨，力求在客户端让网站更出彩。</p>
		        			<a href="#">更多>></a>
		        		</div>
	        		</div>
	        		<div class="group_new">
	        			<img src="<?php bloginfo('template_directory'); ?>/images/DB.jpg" alt="">
	        			<div class="group_introduce">
		        			<h1>Database组</h1>
		        			<h2>这里是小组的一句口号</h2>
		        			<p>网酷前端组，负责网酷工作室的全部客户端界面设计，主要分为网站页面布局，页面整体架构，页面效果制作等工作。目前前端组以接实验室内各个小组的页面设计为主要工作，在实验室里有专门的组员讨论会议室，便于各组员之间的学习与交流。组里对新成员的发展十分重视，有特定的考核机制，通过考核的学员便能顺利进入组内工作。前端组最近的工作作品有计算机导论精品课程网站，操作系统精品课程网站，颐雅珍珠商业网站等，我们组一直以“精心制作，让用户有最好体验”作为宗旨，力求在客户端让网站更出彩。</p>
		        			<a href="#">更多>></a>
		        		</div>
	        		</div>
	        		<div class="group_new">
	        			<img src="<?php bloginfo('template_directory'); ?>/images/CPP.jpg" alt="">
	        			<div class="group_introduce">
		        			<h1>Cpp组</h1>
		        			<h2>这里是小组的一句口号</h2>
		        			<p>网酷前端组，负责网酷工作室的全部客户端界面设计，主要分为网站页面布局，页面整体架构，页面效果制作等工作。目前前端组以接实验室内各个小组的页面设计为主要工作，在实验室里有专门的组员讨论会议室，便于各组员之间的学习与交流。组里对新成员的发展十分重视，有特定的考核机制，通过考核的学员便能顺利进入组内工作。前端组最近的工作作品有计算机导论精品课程网站，操作系统精品课程网站，颐雅珍珠商业网站等，我们组一直以“精心制作，让用户有最好体验”作为宗旨，力求在客户端让网站更出彩。</p>
		        			<a href="#">更多>></a>
		        		</div>
	        		</div>
	        		<div class="group_new">
	        			<img src="<?php bloginfo('template_directory'); ?>/images/iOS.jpg" alt="">
	        			<div class="group_introduce">
		        			<h1>iOS组</h1>
		        			<h2>这里是小组的一句口号</h2>
		        			<p>网酷前端组，负责网酷工作室的全部客户端界面设计，主要分为网站页面布局，页面整体架构，页面效果制作等工作。目前前端组以接实验室内各个小组的页面设计为主要工作，在实验室里有专门的组员讨论会议室，便于各组员之间的学习与交流。组里对新成员的发展十分重视，有特定的考核机制，通过考核的学员便能顺利进入组内工作。前端组最近的工作作品有计算机导论精品课程网站，操作系统精品课程网站，颐雅珍珠商业网站等，我们组一直以“精心制作，让用户有最好体验”作为宗旨，力求在客户端让网站更出彩。</p>
		        			<a href="#">更多>></a>
		        		</div>
	        		</div>
	        		<div class="group_new">
	        			<img src="<?php bloginfo('template_directory'); ?>/images/.NET.jpg" alt="">
	        			<div class="group_introduce">
		        			<h1>.Net组</h1>
		        			<h2>这里是小组的一句口号</h2>
		        			<p>网酷前端组，负责网酷工作室的全部客户端界面设计，主要分为网站页面布局，页面整体架构，页面效果制作等工作。目前前端组以接实验室内各个小组的页面设计为主要工作，在实验室里有专门的组员讨论会议室，便于各组员之间的学习与交流。组里对新成员的发展十分重视，有特定的考核机制，通过考核的学员便能顺利进入组内工作。前端组最近的工作作品有计算机导论精品课程网站，操作系统精品课程网站，颐雅珍珠商业网站等，我们组一直以“精心制作，让用户有最好体验”作为宗旨，力求在客户端让网站更出彩。</p>
		        			<a href="#">更多>></a>
		        		</div>
	        		</div>
	        		<div class="group_new">
	        			<img src="<?php bloginfo('template_directory'); ?>/images/sheji.jpg" alt="">
	        			<div class="group_introduce">
		        			<h1>设计组</h1>
		        			<h2>这里是小组的一句口号</h2>
		        			<p>网酷前端组，负责网酷工作室的全部客户端界面设计，主要分为网站页面布局，页面整体架构，页面效果制作等工作。目前前端组以接实验室内各个小组的页面设计为主要工作，在实验室里有专门的组员讨论会议室，便于各组员之间的学习与交流。组里对新成员的发展十分重视，有特定的考核机制，通过考核的学员便能顺利进入组内工作。前端组最近的工作作品有计算机导论精品课程网站，操作系统精品课程网站，颐雅珍珠商业网站等，我们组一直以“精心制作，让用户有最好体验”作为宗旨，力求在客户端让网站更出彩。</p>
		        			<a href="#">更多>></a>
		        		</div>
	        		</div>
	        		<div class="group_new">
	        			<img src="<?php bloginfo('template_directory'); ?>/images/chanping.jpg" alt="">
	        			<div class="group_introduce">
		        			<h1>产品组</h1>
		        			<h2>这里是小组的一句口号</h2>
		        			<p>网酷前端组，负责网酷工作室的全部客户端界面设计，主要分为网站页面布局，页面整体架构，页面效果制作等工作。目前前端组以接实验室内各个小组的页面设计为主要工作，在实验室里有专门的组员讨论会议室，便于各组员之间的学习与交流。组里对新成员的发展十分重视，有特定的考核机制，通过考核的学员便能顺利进入组内工作。前端组最近的工作作品有计算机导论精品课程网站，操作系统精品课程网站，颐雅珍珠商业网站等，我们组一直以“精心制作，让用户有最好体验”作为宗旨，力求在客户端让网站更出彩。</p>
		        			<a href="#">更多>></a>
		        		</div>
	        		</div>
	        		<div class="group_new">
	        			<img src="<?php bloginfo('template_directory'); ?>/images/qihua.jpg" alt="">
	        			<div class="group_introduce">
		        			<h1>企划部</h1>
		        			<h2>这里是小组的一句口号</h2>
		        			<p>网酷前端组，负责网酷工作室的全部客户端界面设计，主要分为网站页面布局，页面整体架构，页面效果制作等工作。目前前端组以接实验室内各个小组的页面设计为主要工作，在实验室里有专门的组员讨论会议室，便于各组员之间的学习与交流。组里对新成员的发展十分重视，有特定的考核机制，通过考核的学员便能顺利进入组内工作。前端组最近的工作作品有计算机导论精品课程网站，操作系统精品课程网站，颐雅珍珠商业网站等，我们组一直以“精心制作，让用户有最好体验”作为宗旨，力求在客户端让网站更出彩。</p>
		        			<a href="#">更多>></a>
		        		</div>
	        		</div>
	        		<div class="group_new">
	        			<img src="<?php bloginfo('template_directory'); ?>/images/xuanchuan.jpg" alt="">
	        			<div class="group_introduce">
		        			<h1>宣传部</h1>
		        			<h2>这里是小组的一句口号</h2>
		        			<p>网酷前端组，负责网酷工作室的全部客户端界面设计，主要分为网站页面布局，页面整体架构，页面效果制作等工作。目前前端组以接实验室内各个小组的页面设计为主要工作，在实验室里有专门的组员讨论会议室，便于各组员之间的学习与交流。组里对新成员的发展十分重视，有特定的考核机制，通过考核的学员便能顺利进入组内工作。前端组最近的工作作品有计算机导论精品课程网站，操作系统精品课程网站，颐雅珍珠商业网站等，我们组一直以“精心制作，让用户有最好体验”作为宗旨，力求在客户端让网站更出彩。</p>
		        			<a href="#">更多>></a>
		        		</div>
	        		</div>
	        		<div class="group_new">
	        			<img src="<?php bloginfo('template_directory'); ?>/images/caiwu.jpg" alt="">
	        			<div class="group_introduce">
		        			<h1>财务部</h1>
		        			<h2>这里是小组的一句口号</h2>
		        			<p>网酷前端组，负责网酷工作室的全部客户端界面设计，主要分为网站页面布局，页面整体架构，页面效果制作等工作。目前前端组以接实验室内各个小组的页面设计为主要工作，在实验室里有专门的组员讨论会议室，便于各组员之间的学习与交流。组里对新成员的发展十分重视，有特定的考核机制，通过考核的学员便能顺利进入组内工作。前端组最近的工作作品有计算机导论精品课程网站，操作系统精品课程网站，颐雅珍珠商业网站等，我们组一直以“精心制作，让用户有最好体验”作为宗旨，力求在客户端让网站更出彩。</p>
		        			<a href="#">更多>></a>
		        		</div>
	        		</div>
	        	</div>
	        </div>
	</div>
</div>
<!-- footer.php -->
<?php get_footer(); ?>



