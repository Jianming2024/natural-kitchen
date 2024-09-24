<?php get_header() ?>

    <div class="col-9">
        <?php while(have_posts()) : the_post() ?>
            <img class="img-fluid rounded" src="<?php the_field("picture") ?>" alt="<?php the_title() ?>">
            <?php $terms = get_the_terms($post, array("kind", "color")) ?>
            <?php if($terms): ?>
                <?php foreach($terms ?? array() as $term): ?>
                    <span class="badge text-bg-secondary">
                        <a class="text-light text-decoration-none" href="<?php echo get_term_link($term) ?>"><?php echo $term->name ?></a>
                    </span>
                <?php endforeach ?>
            <?php endif ?>
        <?php endwhile; ?>

        <?php echo comment_form() ?>
        <?php foreach (get_comments(array("post_id" => get_the_ID())) as $comment): ?>
            <div class="card comment">
                <div class="card-body">
                    <h5 class="card-title">
                        <div>Comment by <?php echo $comment->comment_author ?></div>
                        <small style="font-size: 0.5em;">Posted on: <?php echo $comment->comment_date; ?></small>
                    </h5>
                    <p class="card-text"><?php echo $comment->comment_content ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

<?php get_footer() ?>