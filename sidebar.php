<section id="sidebar">

	<ul>
	    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('First_sidebar') ) : ?>
		<li class="sidebar-li">
			<h4>分類什麽的</h4>
        	<ul>
            	<?php wp_list_categories('depth=1&title_li=&orderby=id&show_count=0&hide_empty=1&child_of=0'); ?>
        	</ul>
		</li>
		<?php endif; ?>
	    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('First_sidebar') ) : ?>
		<li class="sidebar-li">
			<h4>新出爐的Post</h4>
        	<ul>
            <?php
                $posts = get_posts('numberposts=6&orderby=post_date');
                foreach($posts as $post) {
                    setup_postdata($post);
                    echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                }
                $post = $posts[0];
            ?>
        	</ul>
		</li>
		<?php endif; ?>
	    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('First_sidebar') ) : ?>
		<li class="sidebar-li">
			<h4>這個博客的大致內容關鍵字</h4>
        	<p><?php wp_tag_cloud('smallest=7&largest=22'); ?></p>
        	</ul>
		</li>
		<?php endif; ?>
	    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('First_sidebar') ) : ?>
		<li class="sidebar-li">
			<h4>放在冰箱里的東西</h4>
	        <ul>
    	        <?php wp_get_archives('limit=10'); ?>
        	</ul>
		</li>
		<?php endif; ?>
	    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('First_sidebar') ) : ?>
		<li>
			<h4><?php _e('Meta'); ?></h2>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
			<?php wp_meta(); ?>
			</ul>
		</li>
	    <?php endif; ?>
    </div>
</section>