<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <div class="nav-btns">
        <button class="aside-btn"><i class="fa fa-bars"></i></button>
        <button class="search-btn"><i class="fa fa-search"></i></button>
        <div class="search-form">
            <input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
            <button class="search-close"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="sidebar-module sidebar-module-inset">
        <h4>À Propos</h4>
        <p><?php the_author_meta( 'description' ); ?> </p>
        <h4>Archives</h4>
        <ol class="list-unstyled">
            <?php wp_get_archives( 'type=monthly' ); ?>
        </ol>
    </div>
</div>