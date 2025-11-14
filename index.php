<?php
    $couleur_bulle_classe = "rose";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="ressources/includes/footer.css">
    <link rel="stylesheet" href="ressources/includes/header.css">

    <!-- Vous n'avez pas besoin de ce fichier sur les autres pages. Ca allège le temps de chargement et diminue la consommation d'électricité -->
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-accueil.css">
    
</head>

<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal">
            <h1 class="titre-page">Articles sur le BUT MMI</h1> 

            <section class="colonne">
                <section class="liste-articles"> <!-- regroupement des trois articles-->
                <div class="article">     <!-- pour chaque article-->
                   <img src="./ressources/images/Dev.jpg" alt="developpement" class="article-image">    
                   <div class="article-text">  <!-- séparer les réglages des paarties images et texte-->
                <h2> Développement Web </h2>
                      
                <p> Le développement web est un domaine clé dans les formations MMI, qui visent à préparer les étudiants aux multiples facettes du numérique. Dans ce cadre, les compétences en développement web permettent de créer et de gérer des sites internet, des applications mobiles et des solutions interactives. L’apprentissage du HTML, CSS, JavaScript et des frameworks modernes comme React ou Vue.js est essentiel pour répondre aux besoins variés des entreprises et des utilisateurs. En MMI, l’accent est mis sur la polyvalence, car les futurs
                     professionnels doivent comprendre non seulement la programmation mais aussi l’expérience utilisateur, 
                     l’ergonomie et la sécurité des systèmes. </p>
</div>
</div>
<div class="article">
                   <img src="./ressources/images/Comm.jpg" alt="Communication" class="article-image"> 
                   <div class="article-text">
                <h2> Communication </h2>
                      
                <p> Dans le monde numérique d’aujourd’hui, la communication a évolué pour intégrer des outils innovants et interactifs qui permettent une plus grande proximité entre les marques et leur public. Les professionnels de la communication doivent désormais maîtriser à la fois les méthodes traditionnelles et les nouvelles plateformes en ligne, telles que les réseaux sociaux, les blogs, les podcasts ou les newsletters. Dans un contexte de MMI, les étudiants apprennent à adapter leurs messages en fonction des différents supports numériques et des attentes de leurs audiences. La création de contenu visuel, écrit ou audio est au cœur des stratégies de communication modernes, 
                    tout comme l’analyse des retours d'expérience des utilisateurs.  </p>
          </div>
          </div>
          <div class="article">
                   <img src="./ressources/images/Crea.jpg" alt="Création numérique" class="article-image">   
                   <div class="article-text">
                <h2>Création numérique</h2>
                      
                <p> Le design graphique est une discipline essentielle dans l'univers numérique, car il permet de donner une identité visuelle cohérente et attrayante aux projets numériques. Dans le cadre des MMI, les étudiants apprennent à concevoir des interfaces utilisateur (UI) qui sont à la fois esthétiques et fonctionnelles, tout en respectant les principes de l'expérience utilisateur (UX). Ils maîtrisent des outils comme Photoshop, Illustrator, Figma ou Sketch pour créer des visuels modernes et impactants qui répondent aux besoins des utilisateurs.  Le design graphique ne se limite pas seulement à la création de logos ou d'illustrations, il englobe également la mise en page de sites web,
                     la conception d’animations ou encore le design d’interfaces mobiles. </p>
          </div>
          </div>
                </section>
                <a class="jpo-banniere" title="Ouverture dans un nouvel onglet" href="https://www.cyu.fr/salons-journee-portes-ouvertes">
                    <img src="ressources/images/logo-cyu-blanc.png" width="200" class="logo" alt="">
                    
                    <section class="textes">
                        <p class="txt-petit">Journée portes ouvertes</p>
                        <p class="txt-grand">
                            27/01/2024, <br />
                            de 10h à 17h
                        </p>
                        <p class="en-savoir-plus">EN SAVOIR PLUS</p>
                    </section>
                </a>
            </section>
        </main>

    </section>
</body>
<?php require_once('./ressources/includes/footer.php'); ?>  <!-- relier la page du footer à cette page -->
</html>
