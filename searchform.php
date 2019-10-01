<form  action="<?php echo home_url( '/' ); ?>">
 <input type="search" placeholder="<?php echo esc_attr_x('Search....','placeholder','carnews')?>" class="search-field" value="<?php echo get_search_query() ?>" name="s" />
	 <button type="submit">Search</button>
</form>
