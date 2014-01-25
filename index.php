<!DOCTYPE html>
<html>
<!-- GET HEADER -->
<?php get_header(); ?>
<!-- END OF THE HEADER -->
<div id="bg"></div>
	<div id="container">
		<?php if(have_posts()) : $count = 0;
	      	while(have_posts()) :
	            the_post();
	            $count++;
	            if($count == 1): ?>
	                  <!-- 第一篇文章特殊待遇 開始 -->
					<article id="post-<?php the_ID(); ?>" class="first-blood ox-blur"><!-- ←媽媽,Class Name賣萌.. -->
						<div class="post-info">
							<a href="<?php the_permalink() ?>" target="_blank" title><h3 class="post-title"><?php the_title(); ?></h3></a>
							<div class="post-meta">
							<div class="post-time-ring-1"></div>
							<div class="post-time-ring-2"></div>
							<div class="post-time">發佈時間:<?php the_time(Y); ?>年-<?php the_time(F); ?>-<?php the_time(j); ?>號</div>
							<div class="post-day-b ox-fix-a"><?php the_time(j); ?></div>
							<div class="post-tags-div">
								<?php the_tags( 'Tags:<span class="post-tags">', '</span><span class="post-tags">', '</span>' ); ?>
							</div>
							<div class="post-caregory-div">
								Caregory:<span class="post-caregory-span"><?php the_category('</span><span class="post-caregory-span">')?></span>
							</div>
							<!-- <div class="post-author"><p>這篇文章是<?php the_author(); ?>寫的!</p></div> -->
							<div class="post-edit-btn"><?php edit_post_link('Edit'); ?></div>
							<div id="ox-frist-post-text">新鮮出爐<br>Latest Article</div>
							</div>
						</div>
						<div class="frist-entry">
							<?php the_content(); ?>
						</div>
					</article>
				<!-- 第一篇文章特殊待遇 結束 -->
				<?php $count++; ?>
				<!-- OX結界 張開 -->
				<div id="double-kill">
	        	<?php endif ?>
					<?php if($count ==2) {
						echo "<div class='fuck-off'>";
					} ?>
					<article id="post-<?php the_ID(); ?>" class="ox-blur">
					<h3 class="post-title"><a href="<?php the_permalink() ?>" target="_blank" title><?php the_title(); ?></a></h3>
					<div class="post-info">
							<div class="post-time-ring-1"></div>
							<div class="post-time-ring-2"></div>
							<div class="post-time">發佈時間:<?php the_time(Y); ?>年-<?php the_time(F); ?>-<?php the_time(j); ?>號</div>
							<div class="post-day-b"><?php the_time(j); ?></div>
						<div class="post-meta">
							<div class="post-tags-div">
								<?php the_tags( 'Tags:<span class="post-tags">', '</span><span class="post-tags">', '</span>' ); ?>
							</div>
							<div class="post-caregory-div">
								Caregory:<span class="post-caregory-span"><?php the_category('</span><span class="post-caregory-span">')?></span>
							</div>
							<!-- <div class="post-author"><p>這篇文章是<?php the_author(); ?>寫的!</p></div> -->
						</div>
					</div>
					<div class="entry">
						<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 150,"..."); ?>
						<!-- <?php the_content(); ?> -->
					</div>
					<div class="post-edit-btn"><?php edit_post_link('Edit'); ?></div>
				</article>
				<?php if($count ==2) {
					echo "</div>";
				} ?>

			<?php endwhile; ?>
			<?php else : ?>
			<article id="nothing">
				<h3>えぇぇ——!什么东西都没有找到呢……</h3>
				<h3>什么?!你是想说数据库醬傲娇了?!</h3>
				<h1>不会吧?!</h1>
				<?php
				date_default_timezone_set("Etc/GMT-8");
				$systemtime = date("Y-m-d H:i:s",time());
				echo "<table align=center cellspacing=0 cellpadding=0 id='sys-info'>";
				echo "<caption> <h2> SYS INFO </h2> </caption>";
				echo "<tr> <td> 服务器时间 ==> $systemtime </td> </tr>";
				$array = array(
               "REMOTE_ADDR",
               "DOCUMENT_ROOT",
               "GATEWAY_INTERFACE",
               "SERVER_SOFTWARE",
               "SERVER_NAME",
               "SERVER_PROTOCOL",
               "SERVER_PORT",
               "SERVER_SIGNATURE",
               "REQUEST_METHOD",
               "REQUEST_URI",
               "PATH_INFO",
               "PATH_TRANSLATED",
               "SCRIPT_NAME",
               "SCRIPT_FILENAME",
               "QUERY_STRING",
               "REMOTE_HOST",
               "REMOTE_ADDR",
               "REMOTE_USER",
               "REMOTE_IDENT",
               "CONTENT_TYPE",
               "CONTENT_LENGTH",
               "HTTP_ACCEPT",
               "HTTP_ACCEPT_CHARSET",
               "HTTP_ACCEPT_LANGUAGE",
               "HTTP_ENCODING",
               "HTTP_USER_AGENT",
               "HTTP_CONNECTION",
               "HTTP_HOST",
               "HTTP_REFERER",
               "AUTH_TYPE",
               'HTTP_USER_AGENT'
              );

			$count = count($array);
			for($i=0;$i<$count;$i++)
			{
			   $value = getenv($array[$i]);
			   if($value)
			   {
			      echo "<tr> <td>  $array[$i] ==> " . $value . "</td> </tr>";
			   }
			}
			echo "</table>";
			?>
			</article>
	</div>
	<?php endif; ?>
			<!-- ########################## -->
	<?php if (is_home()) : ?>
	<article id="page-link-btn">		
		<p>你可以使用"左箭頭"和"右箭頭"这两个键来访问上一页或下一页.<!-- </br>
		You can go to the Previous Page or Next Page by pressing "PageUp" key or "PageDown" key. --></p>
		<a href="<?php echo get_previous_posts_page_link(); ?>">
			<span class="ox-btn-1">上一页|Previous Page</span>
		</a>
		<a href="<?php echo get_next_posts_page_link(); ?>">
			<span class="ox-btn-1">下一页|Next Page</span>
		</a>
	</article>
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