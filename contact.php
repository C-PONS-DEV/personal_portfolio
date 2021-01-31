<!DOCTYPE html>
<html lang="fr">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Clément PONS | Contact</title>
    <meta name="description" content="Portfolio BTS SIO, Development web, developpeur web, front-end">
    <meta name="author" content="Clément PONS">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/vendor.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script defer src="js/fontawesome/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
    <link rel="manifest" href="cpons.webmanifest">

</head>

<body id="top">
        <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

 <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="s-header__logo">
            <a href="index.html">CPONS</a>
        </div>

        <div class="s-header__content">


            <a href="index.html" class="btn btn--primary btn--small">
                <svg><path d="M24 0l-6 22-8.129-7.239 7.802-8.234-10.458 7.227-7.215-1.754 24-12zm-15 16.668v7.332l3.258-4.431-3.258-2.901z"/></svg> Page d'accueil
            </a>

        </div>
        <!-- end header-content -->

        <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>

    </header>
    <!-- end s-header -->


      <!-- heros
    ================================================== -->
    <section id="heros" class="s-heros target-section">
        <h1>Contactez nous</h1>
        <form method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" class="name" name="nom" placeholder="Nom, Entreprise" required>
                            </div>

                            <div class="field email">
                                <input type="email" class="email" name="email" placeholder="Email"  required>
                            </div>
                        </div>

                        <div class="field textarea">
                            <textarea name="message" class="text" placeholder="Description du projet.." required></textarea>
                        </div>

                       <div class="button">
                           <button type="submit">Envoyer</button>
                       </div>
                    </form>

                    <?php
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
                    ?>





    </section>
    <!-- end s-heros -->


        <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>