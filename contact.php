<?php
    $couleur_bulle_classe = "jaune";
?>
<?php
// Vérifiez que le formulaire a été soumis via POST
// define variables and set to empty values
$prenomErr = $nomErr = $emailErr = $messageErr = "";
$prenom = $nom = $email = $message ="" ;

$prenom = isset($_POST['prenom']) ? htmlspecialchars(trim($_POST['prenom'])) : '';
$nom = isset($_POST['nom']) ? htmlspecialchars(trim($_POST['nom'])) : '';
$email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
$message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';
$role = isset($_POST['role']) ? htmlspecialchars(trim($_POST['role'])) : '';


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["prenom"])) {
    header("Location: contact.php?status=error");
  } else {
    $prenom = test_input($_POST["prenom"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$prenom)) {
      $prenomErr = "Seules les lettres et les espaces blancs sont autorisés";
      header("Location: contact.php?status=error");
    }

  }
  if (empty($_POST["nom"])) {
    header("Location: contact.php?status=error");
  } else {
    $nom = test_input($_POST["nom"]);
    // check if e-mail address is well-formed
    if (!filter_var($nom, FILTER_VALIDATE_EMAIL)) {
      $nomErr = "Nom de famille incorrect";
      header("Location: contact.php?status=error");
    }
  }
  if (empty($_POST["email"])) {
    header("Location: contact.php?status=error");
  } else {
    $email = test_input($_POST["email"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$email)) 
      header("Location: contact.php?status=error");
  }

  if (empty($_POST["message"])) {
    header("Location: contact.php?status=error");
  } else {
    $message = test_input($_POST["message"]);
  }

  if (empty($_POST["role"])) {
    header("Location: contact.php?status=error");
  } else {
    $role = test_input($_POST["role"]);
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: contact.php?status=error");
    exit;
}
 // Adresse e-mail destinataire
 $to = "gaelle.poisson@orange.fr";  // adresse e-mail de réception
 $subject = "Nouveau message  de $prenom $nom $role";
 
 // Contenu de l'e-mail
 $email_body = "$prenom $nom est $role\n";
 $email_body .= "Peut être contacté via cette adresse mail: $email\n";
 
 $email_body .= "Vous envoie un message:\n$message\n";


 // En-têtes de l'email
 $headers = "From: $email\r\n";
 $headers .= "Reply-To: $email\r\n";
 $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Envoi de l'e-mail
if (mail($to, $subject, $email_body, $headers)) {
  header("Location: contact.php?status=success");
  exit;
}
else {
  header("Location: contact.php?status=error");
  exit;
}
}

// Message de confirmation ou d'erreur
if (isset($_GET['status'])) {
  if ($_GET['status'] === 'success') {
      echo '<div class="message success">Message envoyé !</div>';
  } elseif ($_GET['status'] === 'error') {
      echo '<div class="message error">Votre message possède une erreur !</div>';
  }
}
 ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/includes/footer.css">
    <link rel="stylesheet" href="ressources/includes/header.css">
</head>

<body>
        <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php');?>
        

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal">
        
        <h1 class="titre-page">
          Plus d'infos sur la formation ? <br/>
          Contactez-nous !
        </h1>
        <p class="corps">
            <span class="warning">La formation s’ouvre à tous les bacheliers.</span> pour rappel. Avoir des connaissances en programmation, design ou encore audiovisuel n'est pas obligatoire mais reste un bon atout, car il faut aimer la curiosité dans cette formation pluridisciplinaire. 
            <span class="warning">Il est également possible de faire la formation après une reprise d'études ou une réorientation.</span>
        </p>
        <h2 class="titre">Nous contacter en ligne</h2>
        <form action="contact.php" method="post">
            <label for="prenom">Prénom</label><p class="asterix">*</p>
            <input type="text" id="prenom" name="prenom" >

            <label for="nom">Nom de famille</label><p class="asterix">*</p>
            <input type="text" id="nom" name="nom"  >

            <label for="email">Adresse e-mail</label><p class="asterix">*</p>
            <input type="email" id="email" name="email" >

            <label for="message">Message</label><p class="asterix">*</p>
            <textarea id="message" name="message"  rows="6" ></textarea>

            <label>Je suis :</label><p class="asterix">*</p>
            <div class="radio-group">
                <input type="radio" id="pas preciser" name="role" value="aucun" >
                <label for="aucun">Je ne souhaite pas le préciser</label>

                <input type="radio" id="etudiant" name="role" value="etudiant">
                <label for="etudiant">Étudiant/Étudiante</label>

                <input type="radio" id="parent" name="role" value="parent" >
                <label for="parent">Parent</label>

                <input type="radio" id="autre" name="role" value="autre">
                <label for="autre">Autre</label>
            </div>

            <button type="submit" value="Envoyer">Envoyer</button>
        </form>
        <div>
             <h2 class="titre">Nous contacter par courrier</h2>
             <p class="corps">IUT de Cergy-Pontoise,</p>
             <p class="corps"> Département Métiers du Multimédia et de l’Internet (MMI)</p>
             <p class="corps">34 Bis Boulevard Henri Bergson</p>
             <p class="corps">95200 Sarcelles</p>
        </div>

            <!-- à continuer ici. Mettre le code respectif de chaque page ici -->

</main>
</section>
<?php require_once('./ressources/includes/footer.php');?>

</body>
</html>

