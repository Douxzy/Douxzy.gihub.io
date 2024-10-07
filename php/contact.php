<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    // Valider les données du formulaire
    $errors = [];

    if (empty($name)) {
        $errors[] = "Le nom est requis.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Un email valide est requis.";
    }
    if (empty($message)) {
        $errors[] = "Le message ne peut pas être vide.";
    }

    // Si pas d'erreurs, envoyer l'email
    if (empty($errors)) {
        $to = "votre-adresse-email@example.com"; // Remplace par ton adresse email
        $subject = "Nouveau message de $name via le formulaire de contact";
        $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";
        
        if (mail($to, $subject, $body, $headers)) {
            $successMessage = "Votre message a été envoyé avec succès.";
        } else {
            $errors[] = "L'envoi du message a échoué. Veuillez réessayer.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-moi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <section id="contact" class="py-20 bg-white section">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-6 section-item">Contactez-moi</h2>

            <!-- Message de succès ou erreurs -->
            <?php if (!empty($successMessage)): ?>
                <p class="text-green-500 mb-6"><?php echo $successMessage; ?></p>
            <?php endif; ?>

            <?php if (!empty($errors)): ?>
                <ul class="text-red-500 mb-6">
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <form id="contactForm" class="max-w-lg mx-auto section-item" method="POST" action="">
                <div class="mb-4">
                    <input type="text" name="name" id="name" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Votre nom" value="<?php echo isset($name) ? $name : ''; ?>">
                </div>
                <div class="mb-4">
                    <input type="email" name="email" id="email" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Votre email" value="<?php echo isset($email) ? $email : ''; ?>">
                </div>
                <div class="mb-4">
                    <textarea name="message" id="message" rows="5" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Votre message"><?php echo isset($message) ? $message : ''; ?></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition duration-300">Envoyer</button>
            </form>
        </div>
    </section>
</body>
</html>
