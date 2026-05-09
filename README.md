# DILSHAN.SYS - Premium 3D Portfolio v2.0 🚀

A high-end, immersive 3D developer portfolio built with a minimalist cyberpunk aesthetic. This project transitions from a legacy marketplace into a sleek, professional personal brand interface featuring modern animation engines and high-performance design patterns.

![Design Preview](https://img.shields.io/badge/Design-Premium_Minimalist-FFD700?style=for-the-badge)
![Tech Stack](https://img.shields.io/badge/Stack-Tailwind_GSAP_Tilt-00f3ff?style=for-the-badge)

## ✨ Core Features

### 🌌 Immersive 3D Atmosphere
- **Custom 3D Particle Engine**: A custom-built `<canvas>` background rendering dynamic gold particles for deep atmospheric immersion.
- **Interactive 3D Cards**: All primary UI elements (Hero Image, Skill Nodes) utilize `Vanilla-Tilt.js` for real-time 3D parallax effects.
- **GSAP ScrollTriggers**: Cinematic reveal animations as you navigate through the system.

### 🎨 Design Language
- **Minimalist Cyberpunk**: High-contrast "Cyber-Black" (#050510) background with "Accent-Gold" (#FFD700) highlights.
- **Holographic ID System**: Profile images are rendered as physical "Data Slates" with white backdrops and glowing gold frames.
- **Glassmorphism**: Sophisticated backdrop-blur effects on navigation and card components.

### 🛠️ Technical Architecture
- **Responsive HUD**: A fully fluid layout that adapts from widescreen desktop monitors to mobile devices.
- **Clean Logic**: Modularized `main.js` handling 3D initialization and animation lifecycle.
- **SEO Optimized**: Semantic HTML5 structure with optimized meta-tags and descriptive headings.

## 📁 Project Structure

```text
/portfolio
│
├── /assets                 # Static Media & Core Engine
│   ├── /images             # Profile photos & high-res assets
│   │   └── my_immg.PNG     # Main 3D profile ID
│   ├── /css                
│   │   └── style.css       # Core HUD styles & cyberpunk tokens
│   └── /js                 
│       └── main.js         # 3D Particle Engine & GSAP Logic
│
├── index.html              # Main System Interface (SPA-style)
├── faq.html                # Support & System Documentation
└── README.md               # System Manual (Current)
```

## 🚀 Getting Started

### Prerequisites
- Any modern web server (XAMPP, WAMP, Live Server)
- Internet connection (for Tailwind/GSAP CDN resources)

### Installation

1. **Clone the repository** to your server's root:
   ```bash
   git clone https://github.com/Dilshan615/portfolio-website_2.git
   ```

2. **Access the Interface**:
   - Primary: `http://localhost/portfolio/index.html`
   - Documentation: `http://localhost/portfolio/faq.html`

## 💻 Tech Stack

- **Styling**: Tailwind CSS (CDN-based modular configuration)
- **Animation**: GSAP 3 (ScrollTrigger, Power4 easing)
- **3D Interaction**: Vanilla-Tilt.js (1.8.1)
- **Icons**: Bootstrap Icons v1.11.0
- **Typography**: Orbitron (Cyber), Share Tech Mono (Code), Poppins (Sans)

## 🎨 Customization

### Updating the Profile Image
To update the main visual, replace the file at:
`assets/images/my_immg.PNG`

### Changing Accent Colors
Modify the `tailwind.config` block in `index.html` or the CSS variables in `assets/css/style.css`:
```css
:root {
  --neon-blue: #00f3ff;
  --accent-gold: #ffd700;
  --cyber-black: #050510;
}
```

## 🔒 Status: PRODUCTION_READY
The system is currently fully optimized for the v2.0 release. All 3D modules and animation triggers have been verified for high-performance deployment.

---

**Built with ❤️ by [Dilshan Dinuja](https://github.com/Dilshan615)**  
*"Building secure, high-performance digital architectures."*
