<form role="search" method="get" id="searchform" action="<?php echo home_url('/')?>">
    <div class="form-group">
        <div class="input-group mb-3">
            <input type="text" name="s" value="<?php echo get_search_query()?>" class="form-control" placeholder='<?php _e('Search', 'law') ?>'
                   onfocus="this.placeholder = ''"
                   onblur="this.placeholder = 'Search Keyword'">
            <div class="input-group-append">
                <button class="btn" type="button"><i class="ti-search"></i></button>
            </div>
        </div>
    </div>
    <button class="button rounded-0 primary-bg text-white w-100 btn_4" type="submit">Search</button>
</form>
