<!DOCTYPE html>
<html>
<!-- GET HEADER -->
<?php get_header(); ?>
<!-- END OF THE HEADER -->
<!-- ########## -->
<!-- SINGLE.PHP -->
<!-- ########## -->
<div id="bg"></div>
	<div id="container">
		<?php if(have_posts()) : $count = 0;
	      	while(have_posts()) :
	            the_post();
	            $count++;
	            if($count == 1): ?>
	                  <!-- 第一篇文章特殊待遇 開始 -->
					<article id="post-<?php the_ID(); ?>" class="single">
						<div class="post-info">
							<a href="<?php the_permalink() ?>" target="_blank" title><h3 class="post-title"><?php the_title(); ?></h3></a>
							<div class="post-meta">
							<div class="post-time-ring-1"></div>
							<div class="post-time-ring-2"></div>
							<div class="post-time">發佈時間:<?php the_time(Y); ?>年-<?php the_time(F); ?>-<?php the_time(j); ?>號</div>
							<div class="post-day-b"><?php the_time(j); ?></div>
							<div class="post-tags-div">
								<?php the_tags( 'Tags:<span class="post-tags">', '</span><span class="post-tags">', '</span>' ); ?>
							</div>
							<div class="post-caregory-div">
								Caregory:<span class="post-caregory-span"><?php the_category('</span><span class="post-caregory-span">')?></span>
							</div>
							<!-- <div class="post-author"><p>這篇文章是<?php the_author(); ?>寫的!</p></div> -->
							<div class="post-edit-btn"><?php edit_post_link('Edit'); ?></div>
							<div id="ox-frist-post-text">Post ID:<br><?php the_ID(); ?></div>
							</div>
						</div>
						<div class="entry" id="single-entry">
							<?php the_content(); ?>
						</div>
					</article>
				<!-- 第一篇文章特殊待遇 結束 -->
	        	<?php endif ?>
			<?php endwhile; ?>
			<?php else : ?>
			<article id="nothing">
				<h3>えぇぇ——!什么东西都没有找到呢……</h3>
				<h3>什么?!你是想说数据库醬傲娇了?!</h3>
				<h1>不会吧?!</h1>
			</article>
	</div>
	<?php endif; ?>
	<!-- OX結界 收合 -->
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
</body>
</html>
<!--
 * @authors OX(AuZeonfung,EoZenfung,Oujunfeng,OuTakashiMine) (OX@OOXX.dk)
 * @date    2014-01-21 12:42:35
 * @version $Id$ 
 * @Website http://i.ooxx.dk 
 -->