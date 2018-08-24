<?php get_header(); ?>
	
		<!--内容页开始-->
			<div id="leftbox">
				<!--图片轮播区-->
    <div id="com_box" class="com_box ftl">
	    <?php 
	    $sticky = get_option('sticky_posts'); 
	    rsort( $sticky );//对数组逆向排序，即大ID在前 
	    $sticky = array_slice( $sticky, 0, 5);//输出置顶文章数，请修改5，0不要动，如果需要全部置顶文章输出，可以把这句注释掉 
	    query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1 ) ); 
	    if (have_posts()) :while (have_posts()) : the_post();     
		?> 
		<div class="img dpn">
			<a href="<?php the_permalink(); ?>" target="_blank"  title="<?php the_title(); ?>"><img class="img_directly_load" src="<?php
			$array_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(300,150));
			echo $array_image_url[0];
			?>" alt="<?php the_title(); ?>" /></a>
		</div> 
		<?php endwhile; endif; ?> 
		 <ul id="com_txt" class="title">
		     <?php 
		    $sticky = get_option('sticky_posts'); 
		    rsort( $sticky );//对数组逆向排序，即大ID在前 
		    $sticky = array_slice( $sticky, 0, 5);//输出置顶文章数，请修改5，0不要动，如果需要全部置顶文章输出，可以把这句注释掉 
		    query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1 ) ); 
		    if (have_posts()) :while (have_posts()) : the_post();     
		?> 
		 <li></li>
		<?php endwhile; endif; ?> 
		</ul>
	</div>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/lunbotu.js"></script><!--加载首页轮播效果Js文件-->
	<!--图片轮播结束-->
				<h2 class="wztitle"><span id="zxwz">最新文章</span></h2>
			<?php if(have_posts()): ?> <!--检查是否有文章如果有，继续执行，没有就跳到  else 那里--> 
			<?php while(have_posts()) : the_post(); ?><!--开始准备文章内容，开始循环，每次循环输出一篇文章--> 
			<div class="wz post-<?php the_ID(); ?>">
				<div class="entry">
				<!--文章缩略图开始-->
				<div class="wzimg">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				 	<!--文章缩略图大小推荐220*140-->
				 	<?php if ( has_post_thumbnail() ) { 
				  	the_post_thumbnail(array(220,140));
					}?>
				</a>
				</div>
				<!--文章缩略图结束-->
				<!--文章左侧开始-->
				<div class="post-right">
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?> </a></h2><!--日志标题-->
				<div class="post-con">
					<a href="<?php the_permalink(); ?>">
					<?php if(!is_single()) {the_excerpt();} else {the_content(__('(more…)'));} ?><!--日志内容且显示摘要-->
					</a>
				</div>
					<p class="postmetadata"><!--日志元数据-->
					<span class="fas fa-align-justify"></span>
					<?php the_category(', ') ?><!--调用日志所在类的php函数-->
						&nbsp;&nbsp;
					<span class="fas fa-calendar-alt"></span>
					<?php the_time('Y年n月j日'); ?>
						&nbsp;&nbsp;
					<span class="fas fa-comment-dots"></span>
					<?php comments_popup_link('评论 ', '一 条评论', '% 评论 '); ?><!--显示评论数-->
						&nbsp;&nbsp;
					<?php edit_post_link('编辑', ''); ?><!--显示一个可以用来编辑当前日志的编辑链接，这样就可以让我们不必去管理界面搜寻该日志就能直接编辑。-->
						<a class="post-yd" href="<?php the_permalink(); ?>">阅读全文</a>
					</p>
				</div>
				
				<!--文章左侧结束-->
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
					<!--侧边栏sidebar开始-->
					<?php get_sidebar(); ?>
					<!--侧边栏结束-->
				</div>
				
		
		<!--内容页结束-->
		<!--底部开始-->
		<?php get_footer(); ?>
		<!--底部结束-->
	</body>
</html>