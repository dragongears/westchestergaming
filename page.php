<?php get_header(); ?>

  <div id="pages" class="span-18">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="prefix-1 span-16 suffix-1">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
		</div>
		<?php endwhile; endif; ?>
	</div>
  <div id="side" class="span-5 suffix-1 last">
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>