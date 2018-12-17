<div class="section section-grey">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>Les Derniers Post</h2>
                </div>
            </div>

            <!-- post -->
            <div class="col-md-4">
                <div class="post">
                    <a class="post-img" href="blog-post.html"><img src="<?php bloginfo('template_directory')?>/image/post-4.jpg" alt=""></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-2" href="#">JavaScript</a>
                            <span class="post-date"><?php the_date(); ?></span>
                        </div>
                        <h3 class="post-title"><a href="#"><?php the_title();?></a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
























<div class="blog-post">
    <h2 class="blog-post-title"><?php the_title(); ?> </h2>
    <p class="blog-post-meta">
        <?php the_date(); ?> par <a href="#"><?php the_author(); ?></a>
    </p>
</div>