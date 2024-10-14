document.addEventListener('DOMContentLoaded', () => {
    // Initialisation de GSAP, ScrollTrigger et ScrollSmoother
    gsap.registerPlugin(ScrollTrigger, ScrollSmoother, ScrollToPlugin);

    // Initialisation du scroll lisse
    const smoother = ScrollSmoother.create({
        wrapper: '#smooth-wrapper',
        content: '#smooth-content',
        smooth: 1.5, // Ajustez pour plus ou moins de fluidité
        effects: true // Activer des effets supplémentaires comme le parallaxe
    });

    // Animation des éléments du menu de navigation
    gsap.from('.nav-item', {
        opacity: 0,
        y: -20,
        duration: 1,
        stagger: 0.3,
        ease: 'power3.out'
    });

    // Animation des textes du header
    gsap.from('.animate-header', {
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 0.5,
        ease: 'power3.out',
        stagger: 0.2
    });

    // Animation des sections au scroll
    const sections = document.querySelectorAll('.section');
    sections.forEach(section => {
        gsap.from(section.querySelectorAll('.section-item'), {
            scrollTrigger: {
                trigger: section,
                start: 'top 80%', // Début de l'animation quand l'élément est visible à 80% dans la vue
                toggleActions: 'play none none none',
            },
            opacity: 0,
            y: 30,
            duration: 1,
            stagger: 0.2,
            ease: 'power3.out'
        });
    });

    // Animation des diplômes
    const diplomas = document.querySelectorAll('.diploma-item');
    gsap.from(diplomas, {
        scrollTrigger: {
            trigger: '#diplomas',
            start: 'top 80%',
            toggleActions: 'play none none none',
        },
        opacity: 0,
        y: 30,
        duration: 1,
        stagger: 0.2,
        ease: 'power3.out'
    });

    // Scroll fluide pour les liens de navigation
    document.querySelectorAll('#menu a').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault(); // Empêche le comportement par défaut des ancres

            const targetId = this.getAttribute('href'); // Récupère l'ID de la section cible
            const targetElement = document.querySelector(targetId); // Sélectionne l'élément cible

            if (targetElement) {
                // Scroll fluide vers l'élément cible
                gsap.to(window, {
                    duration: 1.5, // Durée du scroll
                    scrollTo: {
                        y: targetElement, // Cible la section
                        offsetY: 50 // Ajustez en fonction de votre header fixe
                    },
                    ease: 'power3.out' // Ease pour la fluidité
                });
            }
        });
    });
});
