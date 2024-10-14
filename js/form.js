$(document).ready(function() {
    $('#contactForm').on('submit', function(e) {
        e.preventDefault(); // Empêche la redirection par défaut

        $.ajax({
            type: 'POST',
            url: 'php/contact.php', // Chemin vers le fichier PHP
            data: $(this).serialize(), // Sérialiser les données du formulaire
            success: function(response) {
                // Afficher la réponse avec une largeur limitée (max-w-md) et centrée (mx-auto)
                $('#response').html(`
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded relative text-sm max-w-md mx-auto" role="alert">
                        <span class="block sm:inline">` + response + `</span>
                    </div>
                `);
                $('#contactForm')[0].reset(); // Réinitialiser le formulaire après envoi
            },
            error: function() {
                // Afficher un message d'erreur avec une largeur limitée
                $('#response').html(`
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded relative text-sm max-w-md mx-auto" role="alert">
                        <span class="block sm:inline">Une erreur est survenue, veuillez réessayer.</span>
                    </div>
                `);
            }
        });
    });
});
