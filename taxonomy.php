<?php $taxonomy = get_taxonomy(get_query_var("taxonomy")) ?>
<?php get_header() ?>

    <div class="col-8">
        <?php get_template_part("partials/tax-header", null, array("header-background" => "linear-gradient(90deg, rgba(255,0,0,1) 0%, rgba(255,154,0,1) 10%, rgba(208,222,33,1) 20%, rgba(79,220,74,1) 30%, rgba(63,218,216,1) 40%, rgba(47,201,226,1) 50%, rgba(28,127,238,1) 60%, rgba(95,21,242,1) 70%, rgba(186,12,248,1) 80%, rgba(251,7,217,1) 90%, rgba(255,0,0,1) 100%);")) ?>
        <p class="my-3"><?php echo get_queried_object()->description ?></p>
        <ul>
            <?php while (have_posts()) : the_post() ?>
                <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
            <?php endwhile ?>
        </ul>
    </div>
    
<?php get_footer() ?>