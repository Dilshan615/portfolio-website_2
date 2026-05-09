const state = {
  cart: [],
};

// === 3D PARTICLE BACKGROUND ===
function init3DBackground() {
    const canvas = document.getElementById('bg-canvas');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    let particles = [];

    function resize() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }

    class Particle {
        constructor() {
            this.reset();
        }
        reset() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;
            this.size = Math.random() * 2;
            this.speedX = (Math.random() - 0.5) * 0.5;
            this.speedY = (Math.random() - 0.5) * 0.5;
            this.opacity = Math.random() * 0.5;
        }
        update() {
            this.x += this.speedX;
            this.y += this.speedY;
            if (this.x < 0 || this.x > canvas.width || this.y < 0 || this.y > canvas.height) {
                this.reset();
            }
        }
        draw() {
            ctx.fillStyle = `rgba(255, 215, 0, ${this.opacity})`; // Gold particles
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fill();
        }
    }

    function init() {
        resize();
        particles = Array.from({ length: 100 }, () => new Particle());
    }

    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        particles.forEach(p => {
            p.update();
            p.draw();
        });
        requestAnimationFrame(animate);
    }

    window.addEventListener('resize', resize);
    init();
    animate();
}

// === GSAP 3D SCROLL ANIMATIONS ===
function initAnimations() {
    gsap.registerPlugin(ScrollTrigger);

    // Hero Content Fade/Slide
    gsap.from('.hero-content', {
        duration: 1.5,
        y: 100,
        opacity: 0,
        ease: 'power4.out'
    });

    // 3D Reveal for Sections
    const sections = ['#about', '#skills', '#experience', '#contact'];
    sections.forEach(sec => {
        gsap.from(sec, {
            scrollTrigger: {
                trigger: sec,
                start: 'top 80%',
            },
            y: 50,
            opacity: 0,
            duration: 1,
            ease: 'power2.out'
        });
    });
}

// === INITIALIZATION ===
document.addEventListener("DOMContentLoaded", () => {
  init3DBackground();
  initAnimations();

  // Mobile menu toggle
  const mobileToggle = document.querySelector(".mobile-toggle");
  const navLinks = document.querySelector(".nav-links");
  if (mobileToggle) {
    mobileToggle.addEventListener("click", () => {
      navLinks.classList.toggle("active");
      mobileToggle.classList.toggle("active");
    });
  }

  // Navbar Scroll
  window.addEventListener("scroll", () => {
    const nav = document.querySelector("nav");
    if (window.scrollY > 50) {
      nav.classList.add("bg-black/90", "py-2");
      nav.classList.remove("bg-cyber-black/80", "py-4");
    } else {
      nav.classList.remove("bg-black/90", "py-2");
      nav.classList.add("bg-cyber-black/80", "py-4");
    }
  });
});

// Expose globals
window.showNotification = (msg, type) => {
    // Basic toast implementation
    console.log(`[${type}] ${msg}`);
};
