    <!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="Portfolio de Romain Deschaseaux - Développeur Web Full Stack">
            <title>Portfolio - Romain Deschaseaux</title>
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
            <link rel="stylesheet" href="css/styles.css">
            <!-- Font Awesome CDN -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
            <!-- GSAP CDN -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>            
        </head>
        
        
        <body class="bg-gray-100 text-gray-800">
            <!-- Navigation -->
            <nav class="bg-gray-800 text-white p-4 fixed w-full top-0 shadow-lg z-50">
                <div class="container mx-auto flex justify-between items-center">
                    <h1 class="text-2xl font-bold nav-item">Romain Deschaseaux</h1>
                    <ul class="flex space-x-6">
                        <li>
                            <a href="#about" class="hover:text-blue-500 transition duration-300 flex items-center nav-item">
                                <i class="fas fa-user mr-2"></i>À propos
                            </a>
                        </li>
                        <li>
                            <a href="#projects" class="hover:text-blue-500 transition duration-300 flex items-center nav-item">
                                <i class="fas fa-code mr-2"></i>Projets
                            </a>
                        </li>
                        <li>
                            <a href="#contact" class="hover:text-blue-500 transition duration-300 flex items-center nav-item">
                                <i class="fas fa-envelope mr-2"></i>Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        
            <!-- Header Section -->
            <header class="h-screen flex items-center justify-center bg-cover bg-center bg-no-repeat" style="background-image: linear-gradient(to bottom, rgba(59, 130, 246, 0.8), rgba(30, 58, 138, 0.8)), url('background.jpg');">
                <div class="text-center text-white">
                    <h2 class="text-5xl font-extrabold animate-header">Développeur Web Full Stack</h2>
                    <p class="text-lg mt-4 animate-header delay-2s">HTML | CSS | PHP | JS | SQL | lua | Bootstrap | Tailwind | laravel | Symfony | GIT | Scrum</p>
                </div>
            </header>
            
            
            
        
            <!-- About Section -->
            <section id="about" class="py-20 bg-white section">
                <div class="container mx-auto text-center">
                    <h2 class="text-4xl font-bold mb-6 section-item">À propos de moi</h2>
                    <p class="text-lg mb-4 section-item">Je suis Romain Deschaseaux, un développeur web passionné par la création de sites web dynamiques et réactifs. je crée des expériences utilisateurs modernes et performantes.</p>
                    <p class="text-lg section-item">Ma spécialité est de transformer des idées en solutions web complètes, optimisées et animées.</p>
                </div>
            </section>
        
            <!-- Projects Section -->
            <section id="projects" class="py-20 bg-gray-100 section">
                <div class="container mx-auto">
                    <h2 class="text-4xl font-bold text-center mb-10 section-item">Mes projets</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 section-item">
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300 animate-project">
                            <img src="assets/img/portfolio/amidon.png" alt="Projet 1" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-bold mb-2">AmiDon</h3>
                                <p class="text-gray-700">La nouvelle plateforme de dons d'objets entre amis, simple et pratique !</p>
                                <a style="color: #b45309;" href="https://amidonapp.dev-me.fr" target="_blank">AmiDon</a>
                            </div>
                        </div>
            
                        <!-- Ajoutez d'autres projets ici -->
                    </div>
                </div>
            </section>
            
            
        <!-- Diplômes Section -->
        <section id="diplomas" class="py-20 bg-white section">
            <div class="container mx-auto">
                <h2 class="text-4xl font-bold text-center mb-10 section-item">Mes Diplômes</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 section-item">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-graduation-cap text-3xl text-blue-500 mr-4"></i>
                            <h3 class="text-2xl font-semibold">Développeur Web et Web Mobile Fullstack - Bac+3</h3>
                        </div>
                        <p class="text-gray-700">Coding-Factory by ESIEE-IT - Ecole de Développement Web 16/09 2024 - à ce jour Bachelor Développeur de solutions numériques sécurisées Niveau VI (bac+3) RNCP 37778 NSF 326</p>
                    </div>
        
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-graduation-cap text-3xl text-blue-500 mr-4"></i>
                            <h3 class="text-2xl font-semibold">Développeur Web et Web Mobile Fullstack - Bac+2</h3>
                        </div>
                        <p class="text-gray-700">O’clock - Ecole de Développement Web 29/01 2024 - 22/07/2024 formation Développeur Web Fullstack Niveau V (bac+2) RNCP 37674 - 798h théorique + 420h entreprise</p>
                    </div>
        
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-briefcase text-3xl text-green-500 mr-4"></i>
                            <h3 class="text-2xl font-semibold">Stage Entreprise - Chez Guersan Marketing</h3>
                        </div>
                        <p class="text-gray-700">Guersan Marketing 2024</p>
                    </div>
        
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-code text-3xl text-green-500 mr-4"></i>
                            <h3 class="text-2xl font-semibold">Créez votre site web avec HTML5 et CSS3</h3>
                        </div>
                        <p class="text-gray-700">OpenClassrooms, 2023</p>
                    </div>
        
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-database text-3xl text-green-500 mr-4"></i>
                            <h3 class="text-2xl font-semibold">Concevez votre site web avec PHP et MySQL</h3>
                        </div>
                        <p class="text-gray-700">OpenClassrooms, 2023</p>
                    </div>
                </div>
            </div>
        </section>
        
            <!-- Contact Section -->
            <section id="contact" class="py-20 bg-white section">
                <div class="container mx-auto text-center">
                    <h2 class="text-4xl font-bold mb-6 section-item">Contactez-moi</h2>
            
                    <!-- Affichage du message de succès ou d'erreurs -->
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
            
                    <!-- Formulaire avec action vers la même page et méthode POST -->
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
            
            
        
            <!-- Footer -->
            <footer class="bg-gray-800 text-white py-6">
                <div class="container mx-auto text-center">
                    <p>&copy; 2024 Romain Deschaseaux. Tous droits réservés.</p>
                </div>
            </footer>
        
            <script src="js/app.js"></script>
        </body>    
    </html>
