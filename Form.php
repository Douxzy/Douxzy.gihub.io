<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);

    // Validation basique
    if (!empty($nom) && !empty($email)) {
        // Affichage des données
        echo "<h2>Merci pour votre soumission</h2>";
        echo "Nom: " . $nom . "<br>";
        echo "Email: " . $email . "<br>";

        // Envoi par email avec PHPMailer
        $mail = new PHPMailer(true);
        try {
            // Paramètres du serveur
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com'; // Remplacez par votre serveur SMTP
            $mail->SMTPAuth   = true;
            $mail->Username   = 'romain.descha2006@gmail.com'; // Remplacez par votre adresse email SMTP
            $mail->Password   = 'Romain.desG75'; // Remplacez par votre mot de passe SMTP
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Destinataires
            $mail->setFrom('webmaster@example.com', 'Webmaster');
            $mail->addAddress('votre_email@example.com', 'Vous'); // Ajoutez votre adresse email

            // Contenu de l'email
            $mail->isHTML(true);
            $mail->Subject = 'Nouvelle soumission de formulaire';
            $mail->Body    = "Nom: " . $nom . "<br>Email: " . $email;
            $mail->AltBody = "Nom: " . $nom . "\nEmail: " . $email;

            $mail->send();
            echo "<p>Email envoyé avec succès.</p>";
        } catch (Exception $e) {
            echo "<p>Échec de l'envoi de l'email. Erreur: {$mail->ErrorInfo}</p>";
            error_log("Erreur de PHPMailer: {$mail->ErrorInfo}");
        }
    } else {
        echo "<p>Veuillez remplir tous les champs.</p>";
    }
} else {
    echo "<p>Méthode de requête non valide.</p>";
}
?>
