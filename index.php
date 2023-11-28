<?php 
    //récupère le contenu du fichier header.php
    get_header(); ?>
    
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h1>Qui-suis-je</h1>
                    <p>Je suis une jeune passionnée du monde numérique, une fille déterminée à explorer les mystères du code et à la conquête du royaume du développement web. Mon voyage commence avec les langages fondamentaux tels qu'HTML, CSS et JavaScript, où chaque ligne de code que j'écris est une étape vers la création de quelque chose d'extraordinaire.</p>
                    <a class="btn btn-primary" href="a-propos.html">En savoir plus</a>
                </div> 
                <div class="col-12 col-md-6">
                    <img class="cover rounded-2" src="../Image/me1223.png" alt="placeholder">
                </div>           
            </div>
        </div>
    </section>
    <section class="competences">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Compétences</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JS</li>
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <ul>
                        <li>Bootsrapt</li>
                        <li>Git-Hub</li>
                        <li>Figma</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="projet">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Projet</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="#" class="card-img-top" alt="jeux de carte qu'il faut retourner pour trouver des paires">
                        <div class="card-body">
                          <h5 class="card-title">Mémory</h5>
                          <p class="card-text">Un mémory fait en Js .</p>
                          <a href="#" class="btn btn-primary">En voir plus</a>                
                        </div>
                    </div>                
                </div>
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="../Image/Capture d'écran 2023-11-16 151623.png" class="card-img-top" alt="Convertissuer de money euro-franc">
                        <div class="card-body">
                          <h5 class="card-title">Convertisseur</h5>
                          <p class="card-text">Un Convertisseur franc-euros fonctionnel en Java scripts.</p>
                          <a href="#" class="btn btn-primary">En voir plus</a>                
                        </div>
                    </div>                
                </div>
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="../Image/Desktop - 1.png" class="card-img-top" alt="Maquette d'un acceuil de site web très naturelle">
                        <div class="card-body">
                          <h5 class="card-title">Maquette</h5>
                          <p class="card-text">Maquette d'acceuil dans un style fantasy.</p>
                          <a href="#" class="btn btn-primary">En voir plus</a>                
                        </div>
                    </div>                
                </div>
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="../Image/Desktop - 2.png" class="card-img-top" alt="Maquette d'un acceuil de site web très naturelle">
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
