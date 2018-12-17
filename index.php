<?php get_header(); ?>
        <div class="col-sm-8 blog-main">

            <div class="section-title text-center">
                <h2>Les Derniers Articles</h2>
            </div>

            <?php
                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post(); get_template_part('content', get_post_format());
                    endwhile;
                endif;
            ?>
        </div>
        <?php get_sidebar(); ?>
<?php get_footer(); ?>