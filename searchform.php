<!-- <li id="search">
    <form id="searchform" method="get" action="<?php echo home_url();?>" style="padding:-5px;">
        <div >
            <input type="text" name="s" id="s" size="15" placeholder="Search"><br>
        </div>
</li> -->

<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>"
        name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
</form>