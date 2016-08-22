<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<label class="hidden" for="s"><?php _e('Search for:'); ?></label>
	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
	<button class="button blue" type="submit" id="searchsubmit" value="Search">Search</button>
</form>
