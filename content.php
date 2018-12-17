

<div class="row">
    <!-- post -->
    <div class="col-md-4">
        <div class="post">
            <a class="post-img" href="#"><img src="<?php the_post_thumbnail()?>" alt=""></a>
            <div class="post-body">
                <div class="post-meta">
                    <a class="post-category cat-1" href="#"><?php the_author()?></a>
                    <span class="post-date"><?php the_date(); ?></span>
                </div>
             <a href="<?php the_permalink();?>">   <h3 class="post-title"><?php the_title();?></h3></a>
            </div>
        </div>
    </div>
</div>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if( ! is_single() ) : ?>
        <header class="entry-header">
            <?php the_post_thumbnail(); ?>

            <h2 class="entry-title">
                <a href="<?php the_permalink(); // Lien vers l'article ?>">
                    <?php the_title(); // Permet d'afficher le titre de l'article. ?>
                </a>
            </h2>
            <p class="entry-meta"><?php select_meta(); ?></p>
        </header>
    <?php endif; ?>

    <div class="entry-content">
        <?php
        /**
         *  Permet d'afficher tout le contenu de l'article.
         */
        the_content();
        /**
         * Si le contenu est divisé en plusieurs pages, il faut en afficher la navigation.
         * On fait ça avec la fonction wp_link_pages().
         * Elle prend un tableau de paramètre, qui permetent de personnaliser pas mal de choses.
         * Il y a aussi un filtre qu'on peut utiliser pour personnaliser l'HTML rendu.
         * Mais pour notre exemple, on va faire simple et utiliser les paramètres par défaut.
         */
        wp_link_pages();
        ?>
    </div>

</article>