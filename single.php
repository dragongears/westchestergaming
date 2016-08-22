<?php get_header(); ?>

<div id="single" class="main span-18">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2 class="prefix-1 span-16 suffix-1 last"><?php the_title(); ?></h2>
			<div class="prefix-1 span-16 suffix-1">

			<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

			<p id="entry-info">
				This entry was posted
				<?php /* This is commented, because it requires a little adjusting sometimes.
					You'll need to download this plugin, and follow the instructions:
					http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
					/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
				on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
				and is filed under <?php the_category(', ') ?>.
			</p>
			</div>
		</div>

		<div class="prefix-1 span-16 suffix-1">
			<?php comments_template(); ?>
		</div>

		<div class="prefix-1 span-16 suffix-1">
			<div id="prev" class="alignleft"><?php previous_post_link('%link', '&laquo; Previous post', TRUE) ?></div>
			<div id="next" class="alignright"><?php next_post_link('%link', 'Next post &raquo;', TRUE) ?></div>
		</div>
	<?php endwhile; else: ?>

		<h2 id="sorry">Sorry, no posts matched your criteria.</h2>

<?php endif; ?>
</div>

<div id="side" class="span-5 last">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
