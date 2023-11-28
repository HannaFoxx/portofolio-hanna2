
<?php 
    //récupère le contenu du fichier header.php
    get_header(); ?>
    <h1 class="maintitle"><?php bloginfo( 'name' ); ?></h1>
    <h2>Ceci est un article</h2>
    
    <?php if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); ?>
                <h3><?php the_title(); ?></h3>
                <div class="maincontent">
                    <?php the_content(); ?>
                    <div class="container text-center">
                        <div class="row">
                            <div class="col">
                            Column A
                            </div>
                            <div class="col">
                            Column B
                            </div>
                            <div class="col">
                            Column C
                            </div>
                        </div>
                    </div>
                </div>
                <?php wp_link_pages(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php 
    //récupère le contenu du fichier footer.php
    get_footer(); ?>

