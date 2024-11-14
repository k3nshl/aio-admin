document.addEventListener('DOMContentLoaded', function () {

    const particles = document.querySelectorAll('.particle');
    let particleCount = 0;
    const minParticles = 100;
    const maxParticles = 150;
    const sections = document.querySelectorAll('.section-authentication-signin, .authentication-forgot, .bg-login, .bg-particles');

   
    for (let i = 0; i < minParticles; i++) {
        createParticle();
    }

    
    function createParticle() {
        if (particleCount >= maxParticles) return;

        const particle = document.createElement('div');
        particle.classList.add('particle');
        particle.style.left = `${Math.random() * 100}%`;
        particle.style.top = `${Math.random() * 100}%`;
        particle.style.width = `${Math.random() * 5}px`;
        particle.style.height = particle.style.width;
        particle.style.animation = 'animateParticle 3s linear infinite';

        
        const randomSection = sections[Math.floor(Math.random() * sections.length)];
        randomSection.appendChild(particle);

        particleCount++;
    }
    
    setInterval(createParticle, 100);


});