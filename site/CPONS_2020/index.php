<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/C-PONS.png">
    <title>Portfolio Clément PONS - Développeur Front-end</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
<?php require("header.inc.php");?>

    <!-- à propos du début de la section -->
    <section class="about" id="about">
        <div class="max-width">
            <div class="about-content">
                <div class="column left">
                    <img src="img/profil.png" alt="image de profil">
                </div>
                <div class="column right">
                    <div class="text">Je m'appelle Clément, <span class="typing-2"></span></div>
                    <p>Passionné d'informatique, je me suis rapproché du développement web au fil du temps. <br>
                       Je me suis spécialisé dans le développement front-end. J'ai aujourd'hui les moyens de faire un métier qui me passionne.<br>
                       J'effectue également une veille quotidienne sur les nouvelles technologies web ce qui me permet de vous proposer les dernières nouveautés pour votre site.</p>
                <!--    <a href="cv/cv.html">Voir mon CV</a>    -->
                </div>
            </div>
        </div>
    </section>

    <!-- début de la section des services -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Des prestations adaptées à vos besoins</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Design de site</div>
                        <p>À partir d'un échange ou d'un cahier des charges, je saurai vous proposer une maquette attractive et intuitive pour vos utilisateurs.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Conception de site</div>
                        <p>En utilisant les langages HTML5, CSS3, Javascript et ses frameworks je serai capable de créer votre site sur-mesure.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Reférencement</div>
                        <p>Je saurai m'adapter pour que votre site puisse correctement être référencé afin d'être vu en priorité par vos utilisateurs.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



    <!-- début de la section des services -->
    <section class="services" id="tarifs">
        <div class="max-width">
            <h2 class="title">Des tarifs adaptés à vos envies</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-desktop"></i>
                        <div class="text">Site vitrine</div>
                        <p>À partir de 500€*<br>
                            Création d'un site vitrine, blog, présentation de produits, corporate.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-credit-card"></i>
                        <div class="text">Site E-Commerce</div>
                        <p>À partir de 800€*<br>
                            Création d'un site de e-commerce, modification d'un site déjà existant.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="far fa-file-code"></i>
                        <div class="text">Développement sur mesure</div>
                        <p>À partir de 250€/jours*<br>
                            Intégration web, modification d'un site existant, ajout de fonctionnalité.
                        </p>
                    </div>
                </div>
            </div>
            <p class="info-tarifs"><B>L'ensemble des tarifs indiqués sont H.T.</B> * Prix à titre informatif : Changement possible selon les demandes et les choix du client.
                <br>Droit d'auteur & propriété intellectuelle : Vous êtes à la fin du projet, propriétaire de l'ensemble des sources (fichiers) composant celui-ci. Paiment possible en plusieurs fois.
            </p>
        </div>
    </section>

    <!-- début de la section du portfolio -->
    <section class="portfolio" id="portfolio">
        <div class="max-width">
            <h2 class="title">Mes créations</h2>
            <div class="carousel owl-carousel">

                <div class="card">
                    <div class="box">
                        <a href="c-pons.php">
                        <img src="img/C-PONS.png" alt="">
                        <div class="text">C-PONS</div>
                        <p>Site vitrine</p>
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <a href="believemy.php">
                        <img src="img/believemy.png" alt="">
                        <div class="text">Believemy</div>
                        <p>Création d'astuces web</p>
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <a href="quiz.php">
                        <img src="img/cyber-quiz.jpg" alt="">
                        <div class="text">Quiz sur les cookies</div>
                        <p>Quiz évaluatif</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- début de la section des compétences-->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">Des compétences à votre service</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Développement web</div>
                    <p>Je saurai créer vos :<br>
                        <br><B>- Site vitrine </B>(Idéal pour présenter vos projets, ou vos produits)
                        <br><B>- Corporate </B>(Idéal pour présenter votre entreprise)
                        <br><b>- Évènementiel </b>(Idéal pour faire connaitre un évènement)
                        <br><b>- E-commerce </b>(Qui permettra de vendre vos produits).
                        <br><b>- Intégration </b>(Je saurai modifier votre site comme vous le souhaitez)
                    </p>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>100% <i class="fab fa-html5"></i></span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>100% <i class="fab fa-css3-alt"></i></span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>90% <i class="fab fa-js"></i></span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>60% <i class="fab fa-php"></i></span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL </span>
                            <span>40% <i class="fas fa-database"></i></span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- début de la section contact -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Une idée, un projet, lancez-vous</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Me retrouver</div>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Nom</div>
                                <div class="sub-title">Clément PONS</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Adresse</div>
                                <div class="sub-title">Toulouse, France</div>
                            </div>
                        </div>
                        <div class="row">
                         <a href="mailto:contact@clement-pons.com"><i class="fas fa-envelope"></i></a>
                            <div class="info">
                                <div class="head">Email</div>
                              <a href="mailto:contact@clement-pons.com"><div class="sub-title">contact@clement-pons.com</div></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Contactez-moi</div>
                   <form method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="nom" placeholder="Nom, Entreprise" required>
                            </div>

                            <div class="field email">
                                <input type="email" name="email" placeholder="Email"  required>
                            </div>
                        </div>

                        <div class="field textarea">
                            <textarea name="message" placeholder="Description du projet.." required></textarea>
                        </div>

                       <div class="button">
                           <button type="submit">Envoyer</button>
                       </div>
                    </form>

                    <?php/*
                    if(isset($_POST['message'])){
                        $entete  = 'MIME-Version: 1.0' . "\r\n";
                        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                        $entete .= 'From: ' . $_POST['email'] . "\r\n";

                        $message = '<h1>Message envoyé depuis la page contact de clement-pons.com</h1>
        <p><b>Nom : </b>' . $_POST['nom'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br> 
        <b>Message : </b>' . $_POST['message'] . '</p>';

                        $retour = mail('site@clement-pons.com', 'Email du site https://clement-pons.com', $message, $entete);
                        if($retour) {
                            echo '<p></p>';
                        }
                    }
                   */ ?>

                </div>
            </div>
        </div>
    </section>
    <?php require("footer.inc.php");?>
    <script src="script.js"></script>
</body>
</html>