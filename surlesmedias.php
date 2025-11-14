<?php
    $couleur_bulle_classe = "rouge";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sur les médias</title>
    <link rel="stylesheet" href="surlesmedias.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/includes/footer.css">
    <link rel="stylesheet" href="ressources/includes/header.css">
</head>

<body>
    <section class="conteneur-1280">
         <?php require_once('./ressources/includes/header.php'); ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal">
        
            
        <h1 class="titre-page">
            Les actualités et les évènements importants <br>
            du BUT et de l'IUT CY Paris Université <br> 
            les médias
        </h1>

        
       
        <!-- Section vidéos -->

        <section class="grille-videos">
        
        <!-- Vidéo 1 -->
        <div class="video">
            <p>La nouvelle réforme : le BUT MMI </p> 
                <iframe width="560" height="315" src="https://www.youtube.com/embed/oiEbQF7qfBU?si=d3OUUOMTIqPkAqQx" 
                    title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" 
                    allowfullscreen></iframe>
        </div>
        
        <!-- Vidéo 2 -->
        <div class="video">
            <p>Pourquoi étudier à l'IUT CYU ? </p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/SyjF4h2Zb7Q?si=zPKjQ0DblbgpWAlk" 
                title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                referrerpolicy="strict-origin-when-cross-origin" 
                allowfullscreen></iframe>       
        </div>
        
        <!-- Vidéo 3 -->
        <div class="video">
            <p>Job interview en anglais au département MMI</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/t72pdxpNjyc?si=XSA7_axzLTjipz3v" 
                    title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" 
                    allowfullscreen></iframe>
        </div>

        <!-- Vidéo 4 -->
         <div class="video">
            <p>L'importance de l'IUT dans les études supérieurs</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/xD4wshE0hEg?si=JYXJ7eae_nCYxSTu" 
                    title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" 
                    allowfullscreen></iframe>
        </div>
        </main>
    </section>
    <?php require_once('./ressources/includes/footer.php'); ?>
</body>
</html>