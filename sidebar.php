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
                <?php wp_get_archives(array('type' => 'monthly', 'limit' => 12, 'order' => 'ASC')); ?>
            </ul>
        </div>
        <?php dynamic_sidebar('widget-home-one'); ?>

        <div class="siderbar-widget">
            <h4 class="sidebar-widget-title">Freelancing Catagory Post</h4>
            <?php
            $freelancing_category_posts = new WP_Query(array(
                'post_type'       => 'post',
                'posts_per_page'  => 5,
                'orderby'         => 'title',
                'order'           => 'DESC',
                'category_name'   => 'Freelancing'
            ));
            ?>
            
            <?php if (have_posts()) : while ($freelancing_category_posts->have_posts()) : $freelancing_category_posts->the_post() ?>
                    <div class="widget-news">
                        <a href="#"><?php the_post_thumbnail('feature_image_one', array('class' => 'post-thumb')); ?></a>
                        <div class="news-text">
                            <p><?php the_title()?></p>
                            <a class="" href="<?php the_permalink() ?>">Read More</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="siderbar-widget">
            <h4 class="sidebar-widget-title">Slug Catagory Post</h4>
         <?php
         $slug_category_posts = new WP_Query(array(
             'post_type'   => 'post',
             'posts_per_page' => 5,
             'orderby'         => 'title',
             'order'          => 'DESC',
             'category_name'  => 'Uncategorized'
          ));
         ?>
          <?php if(have_posts()) : while($slug_category_posts->have_posts()) : $slug_category_posts->the_post()?>
                    <div class="widget-news">
                        <a href="#"><?php the_post_thumbnail('feature_image_one', array('class' => 'post-thumb')); ?></a>
                        <div class="news-text">
                            <p><?php the_title()?></p>
                            <a class="" href="<?php the_permalink() ?>">Read More</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="siderbar-widget">
            <h4 class="sidebar-widget-title">Random Post</h4>
         <?php
         $random_posts = new WP_Query(array(
             'post_type'   => 'post',
             'posts_per_page' => 4,
             'orderby'         => 'rand',
             'order'          => 'DESC',
          ));
         ?>
          <?php if(have_posts()) : while($random_posts->have_posts()) : $random_posts->the_post()?>
                    <div class="widget-news">
                        <a href="#"><?php the_post_thumbnail('feature_image_one', array('class' => 'post-thumb')); ?></a>
                        <div class="news-text">
                            <p><?php the_title()?></p>
                            <a class="" href="<?php the_permalink() ?>">Read More</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

