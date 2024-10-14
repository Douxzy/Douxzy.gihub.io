<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Romain Deschaseaux - Développeur Web Full Stackm">
    <meta name="description" content="Bienvenue sur le portfolio de Romain Deschaseaux, développeur Web Full Stack spécialisé dans la création de sites modernes et performants.">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <title>Romain Deschaseaux - Développeur Web Full Stack</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollToPlugin.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<div id="smooth-wrapper">
    <div id="smooth-content">

        <body class="bg-gray-100 text-gray-800">
            <nav class="bg-gray-800 text-white p-4 fixed w-full top-0 shadow-lg z-50">
                <div class="container mx-auto flex justify-between items-center">
                    <h1 class="text-2xl font-bold nav-item">Romain Deschaseaux</h1>

                    <!-- Bouton menu burger (visible sur mobile) -->
                    <button id="menu-toggle" class="block md:hidden focus:outline-none">
                        <!-- Lignes du burger -->
                        <div id="burger" class="space-y-2">
                            <span class="block w-8 h-0.5 bg-white transition transform duration-300"></span>
                            <span class="block w-8 h-0.5 bg-white transition transform duration-300"></span>
                            <span class="block w-8 h-0.5 bg-white transition transform duration-300"></span>
                        </div>
                    </button>

                    <!-- Menu (hidden par défaut sur mobile, visible à partir de md) -->
                    <ul id="menu" class="nav-item hidden md:flex flex-col md:flex-row space-x-6 absolute md:static top-16 left-0 bg-gray-800 w-full md:w-auto md:space-y-0 space-y-4 p-4 md:p-0">
                        <li>
                            <a href="#about" class="text-white hover:text-orange-500 transition duration-300 flex items-center nav-item">
                                <i class="fas fa-user mr-2"></i>À propos
                            </a>
                        </li>
                        <li>
                            <a href="#projects" class="text-white hover:text-orange-500 transition duration-300 flex items-center nav-item">
                                <i class="fas fa-code mr-2"></i>Projets
                            </a>
                        </li>
                        <li>
                            <a href="#contact" class="text-white hover:text-orange-500 transition duration-300 flex items-center nav-item">
                                <i class="fas fa-envelope mr-2"></i>Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Script pour le bouton burger -->
            <script>
                const menuToggle = document.getElementById('menu-toggle');
                const menu = document.getElementById('menu');
                const burger = document.getElementById('burger');

                menuToggle.addEventListener('click', () => {
                    menu.classList.toggle('hidden');
                    burger.classList.toggle('open'); // Animation du burger

                    // Animation du burger en croix
                    if (burger.classList.contains('open')) {
                        burger.children[0].classList.add('rotate-45', 'translate-y-2');
                        burger.children[1].classList.add('opacity-0');
                        burger.children[2].classList.add('-rotate-45', '-translate-y-2');
                    } else {
                        burger.children[0].classList.remove('rotate-45', 'translate-y-2');
                        burger.children[1].classList.remove('opacity-0');
                        burger.children[2].classList.remove('-rotate-45', '-translate-y-2');
                    }
                });
            </script>



            <header class="h-screen flex items-center justify-center bg-cover bg-center bg-no-repeat" style="background-image: linear-gradient(to bottom, rgba(255, 165, 0, 0.5), rgba(255, 165, 0, 0.5)), url('assets/img/fond/background.jpg');">
                <div class="text-center text-white">
                    <img src="assets/favicon.ico" alt="logo Romain Deschaseaux" class="w-35 h-35 mx-auto rounded-full shadow-lg mb-6 transition-transform duration-300 transform hover:scale-110">
                    <h1 class="text-5xl font-extrabold animate-header">Romain Deschaseaux</h1>
                    <h2 class="text-5xl font-extrabold animate-header">Développeur Web Full Stack</h2>
                    <p class="text-lg mt-4 animate-header delay-2s">HTML | CSS | PHP | JS | SQL | Lua | Bootstrap | Tailwind | Laravel | Symfony | Git | Scrum</p>
                </div>
            </header>

            <section id="about" class="py-20 bg-white section">
                <div class="container mx-auto text-center">
                    <h2 class="text-4xl font-bold mb-6 section-item">À propos de moi</h2>
                    <p class="text-lg mb-4 section-item">Je suis Romain Deschaseaux, un développeur web passionné par la création de sites web dynamiques et réactifs. Je crée des expériences utilisateurs modernes et performantes.</p>
                    <p class="text-lg section-item">Ma spécialité est de transformer des idées en solutions web complètes, optimisées et animées.</p>
                </div>
            </section>

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
                    </div>
                </div>
            </section>

            <section id="diplomas" class="py-20 bg-white section">
                <div class="container mx-auto">
                    <h2 class="text-4xl font-bold text-center mb-10 section-item">Mes Diplômes</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 section-item">
                        <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                            <div class="flex items-center mb-4">
                                <i class="fas fa-graduation-cap text-3xl mr-4" style="color: #f97316;"></i>
                                <h3 class="text-2xl font-semibold">Développeur Web et Web Mobile Fullstack - Bac+3 (en cours)</h3>
                            </div>
                            <p class="text-gray-700">Coding-Factory by ESIEE-IT - Ecole de Développement Web 16/09 2024 - à ce jour Bachelor Développeur de solutions numériques sécurisées Niveau VI (bac+3) RNCP 37778 NSF 326</p>
                        </div>

                        <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                            <div class="flex items-center mb-4">
                                <i class="fas fa-graduation-cap text-3xl mr-4" style="color: #f97316;"></i>
                                <h3 class="text-2xl font-semibold">Développeur Web et Web Mobile Fullstack - Bac+2</h3>
                            </div>
                            <p class="text-gray-700">O’clock - Ecole de Développement Web 29/01 2024 - 22/07/2024 formation Développeur Web Fullstack Niveau V (bac+2) RNCP 37674 - 798h théorique + 420h entreprise</p>
                        </div>

                        <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                            <div class="flex items-center mb-4">
                                <i class="fas fa-briefcase text-3xl mr-4" style="color: #f97316;"></i>
                                <h3 class="text-2xl font-semibold">Stage Entreprise - Chez Guersan Marketing</h3>
                            </div>
                            <p class="text-gray-700">Guersan Marketing 2024</p>
                        </div>

                        <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                            <div class="flex items-center mb-4">
                                <i class="fas fa-code text-3xl mr-4" style="color: #f97316;"></i>
                                <h3 class="text-2xl font-semibold">Créez votre site web avec HTML5 et CSS3</h3>
                            </div>
                            <p class="text-gray-700">OpenClassrooms, 2023</p>
                        </div>

                        <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                            <div class="flex items-center mb-4">
                                <i class="fas fa-database text-3xl mr-4" style="color: #f97316;"></i>
                                <h3 class="text-2xl font-semibold">Concevez votre site web avec PHP et MySQL</h3>
                            </div>
                            <p class="text-gray-700">OpenClassrooms, 2023</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contact" class="py-20 bg-white section">
                <h2 class="text-4xl font-bold text-center mb-10 section-item">Me Contacter</h2>
                <div id="response" class="mt-4 w-full"></div>
                <form id="contactForm" class="max-w-lg mx-auto section-item" method="POST">
                    <div class="mb-4">
                        <input type="text" name="name" id="name" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Votre nom" required>
                    </div>
                    <div class="mb-4">
                        <input type="email" name="email" id="email" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Votre email" required>
                    </div>
                    <div class="mb-4">
                        <textarea name="message" id="message" rows="5" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Votre message" required></textarea>
                    </div>
                    <button type="submit" class="bg-orange-500 border border-gray-300 px-6 py-3 rounded-lg transition duration-300">
                        Envoyer
                    </button>

                </form>
            </section>

            <footer class="bg-gray-800 text-white py-6">
                <div class="container mx-auto text-center">
                    <p>&copy; 2024 Romain Deschaseaux. Tous droits réservés.</p>
                    <div class="flex justify-center space-x-6 mt-4">
                        <a href="https://www.instagram.com/romain.dcs75.pro/" target="_blank" class="hover:text-orange-500">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/romain-deschaseaux" target="_blank" class="hover:text-orange-500">
                            <i class="fab fa-linkedin fa-2x"></i>
                        </a>
                        <a href="https://github.com/Douxzy" target="_blank" class="hover:text-orange-500">
                            <i class="fab fa-github fa-2x"></i>
                        </a>
                        <a href="https://www.youtube.com/@Douxzy" target="_blank" class="hover:text-orange-500">
                            <i class="fab fa-youtube fa-2x"></i>
                        </a>
                        <a href="https://www.twitch.tv/douxzy" target="_blank" class="hover:text-orange-500">
                            <i class="fab fa-twitch fa-2x"></i>
                        </a>
                        <a href="https://comeup.com/fr/@romain-des" target="_blank" class="hover:text-orange-500">
                            <i class="fas fa-briefcase fa-2x"></i>
                        </a>

                    </div>
                </div>
            </footer>
    </div>
</div>
<script src="js/form.js"></script>
<script src="js/app.js"></script>
</body>

</html>