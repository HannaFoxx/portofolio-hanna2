<?php 
    //récupère le contenu du fichier header.php
    get_header(); ?>
     <video id="background-video" autoplay loop muted poster="http://localhost/wordpress/wp-content/uploads/2023/11/poster.png"> <source src="http://localhost/wordpress/wp-content/uploads/2023/11/video.mp4" type="video/mp4"> </video>
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="pseudoheader col-12 animate__animated animate__slideInDown">
                <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'main-menu',
                                            'menu_id'     => 'primary-menu',
                                        )
                                    );
                                    ?>
                </div>
                <body>
   <div class="container">
       <img src="<?php echo bloginfo('template_directory')."/image/me1223.png"?>" alt="Photo de anna" class="profile-pic animate__animated animate__slideInDown">
       <p class="animate__animated animate__slideInRight">Je suis Annaëlle Rouly, une développeuse web en devenir, passionnée par la création d'expériences en ligne captivantes et fonctionnelles. Actuellement en formation, je me spécialise dans les langages fondamentaux du développement web : HTML, CSS et JavaScript.</p>
       

       <div class="history">
           <h2 class="fancy-text animate__animated animate__slideInLeft">Mes projets</h2>
           <p class="animate__animated animate__slideInLeft">En parallèle de ma formation, je travaille sur divers projets pour appliquer mes connaissances nouvellement acquises. Cela inclut la création de sites web personnels, des pages de portfolio et des mini-applications qui mettent en valeur mes compétences croissantes.</p>
       </div>
   </div>
            <div class="row animate__animated animate__slideInUp">
                <div class="col-12 col-md-3">
                    <div class="card">
                    <img src="<?php echo bloginfo('template_directory')."/image/memo.png"?>" alt="Photo de memory">
                        <div class="card-body">
                          <h5 class="card-title">Mémory</h5>
                          <p class="card-text">Un mémory fait en Js .</p>
                          <a href="#" class="btn btn-primary">En voir plus</a>                
                        </div>
                    </div>                
                </div>
                <div class="col-12 col-md-3">
                    <div class="card">
                    <img src="<?php echo bloginfo('template_directory')."/image/conv.png"?>" alt="Photo de convertisseur">
                        <div class="card-body">
                          <h5 class="card-title">Convertisseur</h5>
                          <p class="card-text">Un Convertisseur franc-euros fonctionnel en Java scripts.</p>
                          <a href="#" class="btn btn-primary">En voir plus</a>                
                        </div>
                    </div>                
                </div>
                <div class="col-12 col-md-3">
                    <div class="card">
                    <img src="<?php echo bloginfo('template_directory')."/image/Desktop - 1.png"?>" alt="Photo de maquette très naturelle">
                        <div class="card-body">
                          <h5 class="card-title">Maquette</h5>
                          <p class="card-text">Maquette d'acceuil dans un style fantasy.</p>
                          <a href="#" class="btn btn-primary">En voir plus</a>                
                        </div>
                    </div>                
                </div>
                <div class="col-12 col-md-3">
                    <div class="card">
                    <img src="<?php echo bloginfo('template_directory')."/image/Desktop - 2.png"?>" alt="Photo de maquette très naturelle">
                        <div class="card-body">
                          <h5 class="card-title">Maquette</h5>
                          <p class="card-text">Maquette de contact dans un style fantasy.</p>
                          <a href="#" class="btn btn-primary">En voir plus</a>                
                        </div>
                    </div>                
                </div>
            </div>
        </div>
    </section>
    
        <?php wp_link_pages(); ?>
    <?php 
    //récupère le contenu du fichier footer.php
    get_footer(); ?>
    </footer>
