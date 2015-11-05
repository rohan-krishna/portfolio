<?php
/**
 * Created by PhpStorm.
 * User: Rohan Krishna
 * Date: 11/1/2015
 * Time: 2:18 PM
 */

get_header();

?>

<div class="col-sm-6">
    <a href="<?php the_permalink(); ?>">
    <figure class="entry-figure">
        <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail(); ?>
        <?php endif; ?>
    </figure>
    </a>
    <h2>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>
    <p><?php the_excerpt(); ?></p>
</div>
