<form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	
	<div class="form-control search-form-inline has-icon has-icons-right">
		<label class="screen-reader-text" for="s">Search for:</label>
		<input type="search" placeholder="<?php _e( 'Search', 'schoolsUOL' ); ?>" name="s" id="s" />
		<button class="icon is-right" type="submit" id="searchsubmit">
			<i class="far fa-search"></i>
		</button>
	</div>
	
</form>