<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Task Management App - React-based task manager with drag-and-drop">
    <title>Task Management App - Portfolio Marketplace</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Klee+One:wght@400;600&family=Orbitron:wght@400;500;600;700;800;900&family=Share+Tech+Mono&family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/anime-style.css">

    <style>
        /* SINGLE PRODUCT CYBER STYLES */
        .product-hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 60vh;
            background: radial-gradient(circle at 70% 30%, rgba(188, 19, 254, 0.15), transparent 60%);
            z-index: -1;
            pointer-events: none;
        }

        .cyber-breadcrumb {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-family: var(--font-code);
            color: var(--neon-blue);
            margin-bottom: 2rem;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
        }

        .cyber-image-container {
            position: relative;
            padding: 10px;
            border: 1px solid rgba(188, 19, 254, 0.3);
            background: rgba(0, 0, 0, 0.5);
            clip-path: polygon(0 0, 100% 0, 100% calc(100% - 30px), calc(100% - 30px) 100%, 0 100%);
            margin-bottom: 3rem;
        }

        .cyber-image-container img {
            width: 100%;
            display: block;
            filter: contrast(1.1) brightness(0.9);
        }

        .scan-line {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: rgba(188, 19, 254, 0.5);
            box-shadow: 0 0 10px var(--neon-pink);
            animation: scan 3s linear infinite;
            z-index: 2;
            pointer-events: none;
            opacity: 0.6;
        }

        @keyframes scan {
            0% {
                top: 0;
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                top: 100%;
                opacity: 0;
            }
        }

        .cyber-title {
            font-family: var(--font-cyber);
            font-size: 3rem;
            margin-bottom: 1rem;
            text-shadow: 0 0 10px rgba(188, 19, 254, 0.3);
            line-height: 1.1;
        }

        .cyber-price-large {
            font-family: var(--font-code);
            font-size: 3rem;
            color: var(--neon-green);
            text-shadow: 0 0 15px rgba(10, 255, 10, 0.4);
            font-weight: 700;
        }

        .sidebar-card {
            background: rgba(15, 15, 30, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 2rem;
            backdrop-filter: blur(10px);
            position: sticky;
            top: 120px;
        }

        .hover-glow:hover {
            box-shadow: 0 0 20px rgba(188, 19, 254, 0.2);
            border-color: var(--neon-pink);
        }
    </style>
</head>

<body>
    <?php $page = 'shop'; $path = '../'; include '../includes/navbar.php'; ?>

    <div class="product-hero-bg"></div>

    <!-- Product Section -->
    <section class="section" style="padding-top: 10rem;">
        <div class="container">
            <div class="cyber-breadcrumb">
                <span>// SHOP</span>
                <span>/</span>
                <span>MOBILE APPS</span>
                <span>/</span>
                <span style="color: #fff;">TASK MANAGEMENT APP</span>
            </div>

            <div class="row" style="display: grid; grid-template-columns: 1.5fr 1fr; gap: 4rem;">
                <!-- Left Column -->
                <div>
                    <h1 class="cyber-title">Task Management App <span
                            style="font-size: 1rem; vertical-align: super; color: var(--neon-pink);">BETA</span></h1>
                    <p style="font-size: 1.2rem; margin-bottom: 3rem; color: var(--text-secondary); max-width: 600px;">
                        React-based task manager with drag-and-drop, team collaboration, and real-time updates.
                    </p>

                    <div class="cyber-image-container">
                        <div class="scan-line"></div>
                        <img src="https://placehold.co/800x500/050510/bc13fe?text=APP+PREVIEW" alt="Project Preview">
                    </div>

                    <div class="mb-5">
                        <h3 class="anime-header mb-4" data-text="System Modules">System Modules</h3>
                        <div class="grid grid-2">
                            <div class="feature-card">
                                <div style="color: var(--neon-blue); font-size: 1.5rem; margin-bottom: 0.5rem;">⚡</div>
                                <h4 style="color: #fff; margin-bottom: 0.5rem;">Real-Time Sync</h4>
                                <p style="font-size: 0.9rem;">Instant updates across all devices using Firebase.</p>
                            </div>
                            <div class="feature-card">
                                <div style="color: var(--neon-pink); font-size: 1.5rem; margin-bottom: 0.5rem;">🖱️
                                </div>
                                <h4 style="color: #fff; margin-bottom: 0.5rem;">Drag & Drop</h4>
                                <p style="font-size: 0.9rem;">Intuitive Kanban board interface for task management.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div>
                    <div class="sidebar-card hover-glow">
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                            <div class="cyber-price-large">$149.99</div>
                        </div>

                        <button class="btn btn-primary w-100 mb-3" onclick="addToCartFromPage()"
                            style="height: 50px; font-size: 1.1rem; letter-spacing: 1px;">
                            INITIALIZE PURCHASE [ + ]
                        </button>

                        <a href="#" class="btn w-100 mb-4"
                            style="border: 1px solid var(--neon-blue); color: var(--neon-blue); height: 50px; display: flex; align-items: center; justify-content: center;">
                            VIEW LIVE DEMO >
                        </a>

                        <h3 class="anime-header" data-text="Contents" style="font-size: 1.2rem; margin-bottom: 1rem;">
                            Contents</h3>
                        <ul style="list-style: none; padding: 0; color: var(--text-secondary); line-height: 2;">
                            <li>> Source Code (Zip)</li>
                            <li>> Setup Instructions</li>
                            <li>> 3 Months Support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Projects -->
    <section class="section" style="background: var(--bg-card);">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title anime-header" data-text="Related Systems">Related Systems</h2>
            </div>
            <div class="grid grid-3" id="related-projects"></div>
        </div>
    </section>

    <?php include '../includes/footer.php'; ?>

    <script src="../assets/js/main.js"></script>
    <script>
        const currentProject = {
            id: 2,
            title: "Task Management App",
            price: 149.99,
            image: "https://placehold.co/600x400/050510/bc13fe?text=Task+Manager"
        };

        function addToCartFromPage() {
            if (window.portfolioMarketplace) {
                window.portfolioMarketplace.addToCart(currentProject);
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            if (window.shopFunctions) {
                const relatedProjects = window.shopFunctions.PROJECTS_DATA
                    .filter(p => p.id !== currentProject.id)
                    .slice(0, 3);
                window.shopFunctions.renderProjects(relatedProjects, 'related-projects', '../');
            }
        });
    </script>
</body>

</html>