<?php get_header(); ?>
		<!--内容页开始-->
		<div id="container">
			<div id="leftbox">
			<?php if(have_posts()): ?> <!--检查是否有文章如果有，继续执行，没有就跳到  else 那里--> 
			<?php while(have_posts()) : the_post(); ?><!--开始准备文章内容，开始循环，每次循环输出一篇文章--> 
			<div class="wz post-<?php the_ID(); ?>">
				<div class="entry">
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?> </a></h2><!--日志标题-->
				<!--文章缩略图开始-->
				 <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				 	<!--文章缩略图大小推荐200*110-->
				 	<?php if ( has_post_thumbnail() ) { 
				  	the_post_thumbnail(array(220,110));
					}?>
				</a>
				<!--文章缩略图结束-->
					<?php if(!is_single()) {the_excerpt();} else {the_content(__('(more…)'));} ?><!--日志内容且显示摘要-->
					<p class="postmetadata"><!--日志元数据-->
					<?php _e('分类目录&#58;'); ?>
					<?php the_category(', ') ?><!--调用日志所在类的php函数-->
					<?php _e('作者:'); ?> <?php  the_author(); ?>
					<?php the_time('Y年n月j日'); ?>
					<?php comments_popup_link('评论 &#187;', '一 条评论&#187;', '% 评论 &#187;'); ?><!--显示评论数-->
					<?php edit_post_link('编辑', ' &#124; ', ''); ?><!--显示一个可以用来编辑当前日志的编辑链接，这样就可以让我们不必去管理界面搜寻该日志就能直接编辑。-->
					</p>
				</div>
			</div>
			<?php endwhile ; ?>	 <!-- while 循环结束--> 
				<div class="navigation">
				<?php posts_nav_link('中间','上一页','下一页'); ?><!--调用后一页和前一页的链接。-->
				</div>
			<?php else : ?>
				<div class="post">
				<h2><?php _e('找不到内容啦'); ?></h2><!--当没有任何日志或者当找不到任何日志的时候显示-->
				</div>  
			<?php endif ; ?><!--if结束-->
				</div>
				<div id="rightbox">
		<!--内容页结束-->
		<!--侧边栏sidebar开始-->
		<?php get_sidebar(); ?>
		</div>
		<!--侧边栏结束-->

		<!--底部开始-->
		<?php get_footer(); ?>
		<!--底部结束-->
	</body>
</html>