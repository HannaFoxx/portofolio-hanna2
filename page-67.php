<?php 
    //récupère le contenu du fichier header.php
    get_header(); ?>
    <video id="background-video" autoplay loop muted poster="http://localhost/wordpress/wp-content/uploads/2023/11/poster.png"> <source src="http://localhost/wordpress/wp-content/uploads/2023/11/video.mp4" type="video/mp4"> </video>
    <div class="pseudoheader col-12">
    
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
    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-6">
                    <form id="forme">
                        <div class="mb-3">
                          <label for="InputName1" class="form-label">Nom de famille</label>
                          <input type="text" class="form-control" id="Name1" placeholder="Nom">
                        </div>
                        <div class="mb-3">
                            <label for="InputName2" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="name2" placeholder="Prénom">
                        </div>
                        <div class="mb-3">
                            <label for="InputNuméro" class="form-label">Numéro</label>
                            <input type="number" class="form-control" id="Numéro" placeholder="+33">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Adresse email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Exemple@gmail.com">
                        <div id="emailHelp" class="form-text" >Nous ne partagerons jamais votre email avec des tiers</div>
                        </div>
                        <input type="checkbox" name="acceptecgu" required> J'accepte les <a href="lien vers les cgu">CGU</a><br>
                        <div class="btnconnect"><br>
                            <button type="submit" class="btn btn-primary" onclick="verify()" >Se contacter</button>
                        </div>
                        <div id="messageerreur" class="alert" role="alert"></div>
                    </form>
                        <div class="linkcontact">
                            <a href="../PageContact/contact.html">Retour</a>
                        </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php wp_link_pages(); ?>
    <?php 
    //récupère le contenu du fichier footer.php
    get_footer(); ?>
    </footer>
</html>