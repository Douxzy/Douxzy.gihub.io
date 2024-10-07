document.addEventListener('DOMContentLoaded', () => {
    // Initialisation de ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);

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
});
