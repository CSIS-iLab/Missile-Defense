<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" role="form">
    <div class="input-group">
    	<label class="screen-reader-text" for="s">Search for:</label>
        <input type="text" value="" name="s" id="s" class="form-control" placeholder="<?php _e('Search', 'missiledefense'); ?>" />
        <span class="input-group-btn">
            <button type="submit"><i class="fa fa-search"></i></button>
        </span>
    </div>
</form>