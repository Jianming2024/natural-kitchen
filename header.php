<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
</head>

<body>
    <div class="bg-image"></div>
    <header class="my-5 text-align-center">
        <h1 class="text-center">
            <a href="<?php echo site_url() ?>"><?php bloginfo("name") ?></a>
        </h1>
    </header>

    <div class="container my-5">
        <div class="row">
            <div class="col-3">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kinds</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php $terms = get_terms("kind") ?>
                        <?php foreach ($terms as $term) : ?>
                            <li class="list-group-item"><a href="<?php echo get_term_link($term) ?>"><?php echo $term->name ?></a></li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Colors</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php $terms = get_terms("color") ?>
                        <?php foreach ($terms as $term) : ?>
                            <li class="list-group-item"><a href="<?php echo get_term_link($term) ?>"><?php echo $term->name ?></a></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>