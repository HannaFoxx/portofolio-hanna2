<?php 
    //récupère le contenu du fichier header.php
    get_header(); ?>
     <video id="background-video" autoplay loop muted poster="http://localhost/wordpress/wp-content/uploads/2023/11/Capture-decran-2023-11-30-162150.png"> <source src="http://localhost/wordpress/wp-content/uploads/2023/11/video2-2.mp4" type="video/mp4"> </video>
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
   <div class="container">
       <img src="<?php echo bloginfo('template_directory')."/image/me1223.png"?>" alt="Photo de anna" class="profile-pic animate__animated animate__slideInDown">
       <div class="history">
           <h2 class="animate__animated animate__tada fancy-text">A propos de moi</h2><br>
           <h4 class="animate__animated animate__bounceInUp">👩‍💻 Bonjour à tous !

Je suis Annaëlle rouly mais on m'appelle aussi Hanna, une développeuse web rousse passionnée par l'art du code et l'univers infini des possibilités digitales. Entre deux lignes de code, vous me trouverez plongée dans l'univers des jeux vidéo, où chaque aventure virtuelle stimule ma créativité.<br><br>

💃 Danseuse acharnée :<br><br>

Quand je ne jongle pas avec les balises HTML, je danse avec grâce sur des rythmes variés. La danse, c'est ma façon de décompresser et de trouver l'équilibre entre la rigueur du code et la fluidité de l'expression corporelle.<br><br>

🎻 Mélodies ensorcelantes :<br><br>

En plus de mon amour pour le développement, je m'évade en jouant du violon. Les notes m'emportent dans un autre monde, tout comme le code crée des mondes numériques.<br><br>

🎮 Gamer dans l'âme :<br><br>

Que ce soit dans l'univers pixelisé des jeux rétro ou dans les graphismes époustouflants des jeux modernes, je trouve une source d'inspiration infinie. Les jeux vidéo sont pour moi une école de créativité et d'innovation.<br><br>

🌐 Connectée en permanence :<br><br>

En tant que passionnée de technologie, je ne peux pas me passer des réseaux sociaux. C'est là que je me connecte avec d'autres esprits créatifs, partage mes projets et découvre de nouvelles idées qui nourrissent ma curiosité.<br><br>

Voilà un petit aperçu de qui je suis, entre lignes de code, pas de danse, mélodies enchanteresses et aventures virtuelles. Prête à explorer de nouveaux horizons numériques et à partager cette passion qui fait battre mon cœur de développeuse !<br><br>

🚀 Let's code, dance, play, and connect!</h4><br>
       </div>
   </div>
        
    
        <?php wp_link_pages(); ?>
    <?php 
    //récupère le contenu du fichier footer.php
    get_footer(); ?>
    </footer>