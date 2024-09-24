<?php get_header() ?>

    <?php $cropLoop = new WP_Query(array("post_type" => "crop", "posts_per_page" => -1)) ?>
    <div class="col-8">
        <ul>
            <?php while ($cropLoop->have_posts()) : $cropLoop->the_post() ?>
                <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
            <?php endwhile ?>
        </ul>
    </div>
    
<?php get_footer() ?>