<?php
    $couleur_bulle_classe = "bleu";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lieuxdevie.css">
    <title>Lieux de vie</title>

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
<h1 class="titre-page">Lieux de vie</h1>
<p class="corps"> Entre les cours, l’université et ses IUT proposent de nombreux lieux de convivialité ou d’idéation. Divers et variés, ils permettent aux étudiants, de toute formation, de découvrir de nouveaux horizons et surtout de rencontrer les étudiants d’autres BUT.</p>


<div class="lieux">        <!--bloc des différents lieux -->
<div class="spot">        <!--bloc d'un lieux -->
<img src="./ressources/images/BU.jpg" alt="Photo de la Bibiliotèque">
<div >        <!--bloc de texte d'un lieux -->
<h2 class="sous-titre">Bibliothèque universitaire</h1>
<p class="corps"> La bibliothèque universitaire est un atout indispensable à votre réussite. Elle met à votre disposition des collections (livres, revues, ressources numériques accessibles sur place et à distance) ainsi que des postes informatiques et des espaces de travail.</p>
</div>
</div>


<div class="spot-reverse">
<img src="./ressources/images/Caffet.png" alt="Caffet">
<div>
<h2 class="sous-titre">Se restaurer</h1>
<p class="corps">Les restaurants du CROUS vous permettent de déjeuner pour un tarif social, fixé au plus à 3,30€. Pour bénéficier de ce tarif, il vous suffit de présenter votre carte d’étudiant multiservices.</p>
<p class="corps-gras">Si vous êtes étudiant boursier, vous bénéficiez automatiquement lors de votre passage en caisse du tarif à 1€ pour un repas complet.</p><!--texte en gras-->
</div>
</div>


<div class="spot">
<img src="./ressources/images/fablab.jpg" alt="Photo du Fablab">
<div>
<h2 class="sous-titre">Réseau des fablabs de CY Cergy Paris Université</h1>
<p class="corps">Accédez à des espaces collaboratifs pour développer vos projets personnels ou académiques. Ces lieux vous offrent des outils et ressources innovants pour concevoir et créer.</p>
</div> 
</div>
</div>
             <!-- à continuer ici. Mettre le code respectif de chaque page ici -->
            </main>
    </section>
<?php require_once('./ressources/includes/footer.php'); ?>  <!-- relier la page du footer à cette page -->
</body>
</html>