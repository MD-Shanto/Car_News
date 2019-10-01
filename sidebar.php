<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="sidebar-wrap">
        <div class="siderbar-widget">
            <h4 class="sidebar-widget-title">Search</h4>
            <div class="search-form">
                <form action="<?php echo home_url('/'); ?>" method="get">
                    <input type="search" class="search-field" value="<?php echo get_search_query() ?>" name="s" />
                    <button type="submit">Search</button>
                </form>
            </div>

        </div>
        <div class="siderbar-widget">
            <h4 class="sidebar-widget-title">Category</h4>
            <ul>
                <?php
                $args = array(
                    'orderby' => 'slug',
                    'parent' => 0
                );

                $categories = get_categories($args);
                foreach ($categories as $category) {
                    echo '<li><a href="' . get_category_link($category->term_id) . '" rel="bookmark"> <i class="glyphicon glyphicon-hand-right"> '  . $category->name . '</i>' . '' . $category->description . '</a></li>';
                }
                ?>
            </ul>
        </div>
        <div class="siderbar-widget">
            <h4 class="sidebar-widget-title">ARCHIVES</h4>
            <ul>
            <?php  wp_get_archives( array( 'type' => 'monthly', 'limit' => 12,'order' => 'ASC' )); ?>
            </ul>
        </div>
        <?php dynamic_sidebar( 'widget-home-one' ); ?>

    </div>
</div>