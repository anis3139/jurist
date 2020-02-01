<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <span class="screen-reader-text"><?php echo _x( '', 'alpha' ) ?></span>
    <input type="search" class="search-field"
           placeholder="<?php echo esc_attr_x( 'Type Keyword …', 'placeholder' ) ?>"
           value="<?php echo get_search_query() ?>" name="s"
           title="<?php echo esc_attr_x( 'Search for:', 'alpha' ) ?>"/>
    <input type="submit" class="search-submit"
           value="<?php echo esc_attr_x( 'Go', 'submit button' ) ?>"/>
</form>