<?php $taxonomy = get_taxonomy(get_query_var("taxonomy")) ?>
<?php get_header() ?>

    <div class="col-8">
        <?php get_template_part("partials/tax-header", null, array("header-background" => strtolower(get_queried_object()->name))) ?>
        <p class="my-3"><?php echo get_queried_object()->description ?></p>
        <ul>
            <?php while (have_posts()) : the_post() ?>
                <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
            <?php endwhile ?>
        </ul>
    </div>
    
<?php get_footer() ?>