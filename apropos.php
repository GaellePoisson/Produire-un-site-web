<?php
    $couleur_bulle_classe = "turquoise";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>à propos</title>

    <link rel="stylesheet" href="apropos.css">
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
        <main class="conteneur-principal" >
        <div class="box">
        <a href="#presentation">Présentation</a> <!-- ancre de la partie presentation -->
        <a href="#SAE">SAÉ</a> <!-- ancre de la partie SAE -->
        <a href="#exemples">Exemples de SAÉ</a>  <!-- ancre de la partie exemples -->
        </div>
<h1 id="presentation" class="titre"></h1>  <!-- id permet de relier la partie à l'ancre et une classe pour changer que cette partie -->
       <p class="corps"> Le BUT metiers du multimedia et de l'internet (MMI) remplace le DUT MMI a partir de la rentree 2021, auparavant appele DUT SRC
(services et réseaux de communication) jusqu'en mai 2013, qui était lancé à la rentrée universitaire 1994 par les IUT de Vélizy, Marne-la-
Vallée, Saint-Raphaël et Verdun. Ce BUT offre une alternative aux anciens diplômes Bac+3, tels que la licence professionnelle en activités
et techniques de communication et la licence professionnelle en systèmes informatiques et logiciels.</p>

<p class="corps">Lorsque cette formation était proposée sous la forme d'un Diplôme Universitaire Technologique (DUT), elle se déroulait sur deux années
(1 800 heures). En théorie, elle est accessible à tous les bacheliers, quelle que soit leur série. En moyenne, il y a de 30 à 35 heures de
cours par semaine. Cette formation se divise en trois grands pôles, auxquels il faut ajouter le projet tutoré (300 heures) et les stages (420
heures). Les trois grands axes sont les suivants :</p>
<ul class="corps">
    <li>• La culture contemporaine et langues étrangères (500 heures)</li>  <!--liste d'éléments -->
    <li>• La culture scientifique et technique (700 heures)</li>
    <li>• La culture communicationnelle (600 heures)</li>
</ul>
<img src="./ressources/images/SAE.jpg" alt="image présentation"> <!-- mettre une image -->

<p class="corps">A CY Cergy Paris Université, il est donné la possibilité aux étudiants de passer un semestre au Québec à l'Université du Québec à
Chicoutimi (UQAC) dans une formation dont le contenu est proche de celui proposé à l'IUT. Il est également possible d'effectuer ce
semestre après avoir été diplômé.<span class="warning"> Attention : les cours sont dispensés en langue française.</span></p> <!-- span pour changer l'esthétisme d'une partie du texte  -->

<h1 id="SAE"class="titre">Situation d'Apprentissage et d'Évaluation</h1>  

<p class="corps">Dans l'optique de préparer au mieux les étudiants à leur future vie professionnelle, les étudiants sont regroupés en agences de
communication de 3 à 7 personnes dans des projets appelés "SAÉ" ou Situation d'Apprentissage et d'Évaluation. Ces agences ont pour
but d'encourager le travail d'équipe dans un cadre reprenant l'environnement du travail en entreprise.</p>

<p class="corps">La situation d'apprentissage et d'évaluation ou simplement SAÉ est la situation didactique que privilégie, au Québec, le Ministère de
l'Éducation, Enseignement supérieur et Recherche (MEESR) par le biais du Programme de formation de l'école québécoise (PFEQ). Une
SAÉ se définit comme un ensemble constitué d'une ou plusieurs tâches à réaliser par l'élève en vue d'atteindre le but fixé. Elle permet : à
l'élève, de développer et d'exercer une ou plusieurs compétences disciplinaires et transversales; à l'enseignant, d'assurer le suivi du
développement des compétences dans une perspective d'aide à l'apprentissage. Elle est donc centrée sur l'élève et préconise une
approche constructiviste ou socioconstructiviste à l'école.</p>

<p class="corps">Les SAÉ sont une nouveauté des diplômes BUT,<span class="warning"> elles visent à remplacer les Devoirs Sur Table et les notes à terme</span>, en proposant une
approche plus "ingénieure" de la scolarité avec des étudiants qui apprennent à résoudre des problèmes et non plus apprendre par cœur
leurs cours.</p>
<h1 id="exemples"  class="titre">Exemples de projets réalisés en SAÉ</h1>
<div class="bloc-groupe">
    <div class="bloc">
      <img src="./ressources/images/SAE101.jpg" alt="image présentation" class="bloc-image">
      <div class="bloc-texte">
        <h2>Auditer une communication numérique • SAÉ 101</h2>
        <p>Comprendre les écosystèmes, les besoins des utilisateurs et les dispositifs de communication numérique</p>
      </div>
    </div>

    <div class="bloc">
      <img src="./ressources/images/SAE102.png" alt="image présentation" class="bloc-image">
      <div class="bloc-texte">
        <h2>Concevoir une recommandation de communication numérique • SAÉ 102</h2>
        <p>Concevoir ou co-concevoir une réponse stratégique pertinente à une problématique complexe</p>
      </div>
    </div>

    <div class="bloc">
      <img src="./ressources/images/SAE103.png" alt="image présentation" class="bloc-image">
      <div class="bloc-texte">
        <h2>Produire les éléments d'une communication visuelle • SAÉ 103</h2>
        <p>Exprimer un message avec les médias numériques pour informer et communique</p>
      </div>
    </div>

    <div class="bloc">
      <img src="./ressources/images/SAE104.jpg" alt="image présentation" class="bloc-image">
      <div class="bloc-texte">
        <h2>Produire un contenu audio et vidéo • SAÉ 104</h2>
        <p>Exprimer un message avec les médias numériques pour informer et communiquer.</p>
      </div>
    </div>

    <div class="bloc">
      <img src="./ressources/images/SAE105.png" alt="image présentation" class="bloc-image">
      <div class="bloc-texte">
        <h2>Produire un site Web • SAÉ 105</h2>
        <p>Développer pour le web et les médias numériques</p>
      </div>
    </div>

    <div class="bloc">
      <img src="./ressources/images/SAE106.png" alt="image présentation" class="bloc-image">
      <div class="bloc-texte">
        <h2>Gérer un projet de communication numérique • SAÉ 106</h2>
        <p> Entreprendre dans le secteur du numérique</p>
      </div>
    </div>
  </div>
<!-- à continuer ici. Mettre le code respectif de chaque page ici -->
        </main>
    </section>
<?php require_once('./ressources/includes/footer.php'); ?>  <!-- relier la page du footer à cette page -->
</body>
</html>