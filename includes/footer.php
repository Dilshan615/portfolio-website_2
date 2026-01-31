<?php $p = isset($path) ? $path : ''; ?>
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Portfolio Market</h3>
                <p style="color: var(--text-muted); margin-bottom: 1rem;">Premium web projects and templates for
                    developers and businesses. Built for the future.</p>
                <div style="display: flex; gap: 1rem; font-size: 1.5rem;">
                    <a href="#" class="social-link">🐦</a>
                    <a href="#" class="social-link">💼</a>
                    <a href="#" class="social-link">📘</a>
                    <a href="#" class="social-link">📷</a>
                </div>
            </div>

            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="<?php echo $p; ?>index.php">// HOME</a></li>
                    <li><a href="<?php echo $p; ?>shop.php">// MARKET</a></li>
                    <li><a href="<?php echo $p; ?>index.php#features">// SYSTEM</a></li>
                    <li><a href="<?php echo $p; ?>index.php#about">// DATA.LOG</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Categories</h3>
                <ul class="footer-links">
                    <li><a href="<?php echo $p; ?>shop.php?category=web">Web Applications</a></li>
                    <li><a href="<?php echo $p; ?>shop.php?category=app">Mobile Apps</a></li>
                    <li><a href="<?php echo $p; ?>shop.php?category=dashboard">Dashboards</a></li>
                    <li><a href="<?php echo $p; ?>shop.php?category=template">Templates</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Contact Us</h3>
                <ul class="footer-links">
                    <li><a href="<?php echo $p; ?>faq.php">FAQ / Help</a></li>
                    <li><a href="mailto:support@example.com">support@cyber-market.com</a></li>
                    <li><a href="<?php echo $p; ?>admin/index.html">[ ADMIN.ROOT ]</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2030 Portfolio Marketplace. All rights reserved. <span style="color: var(--neon-green)">■ SYSTEM
                    ONLINE</span></p>
        </div>
    </div>
</footer>