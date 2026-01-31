<?php $p = isset($path) ? $path : ''; ?>
<!-- HUD Frame Overlay -->
<div class="hud-frame"></div>

<!-- Navigation -->
<nav class="navbar">
    <div class="nav-container">
        <a href="<?php echo $p; ?>index.php" class="logo">
            <span>⚡</span>
            <span>Portfolio Market</span>
        </a>

        <button class="mobile-toggle" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <ul class="nav-links">
            <li><a href="<?php echo $p; ?>index.php" class="<?php echo ($page == 'home') ? 'active' : ''; ?>">//
                    HOME</a></li>
            <li><a href="<?php echo $p; ?>shop.php" class="<?php echo ($page == 'shop') ? 'active' : ''; ?>">//
                    MARKET</a></li>
            <li><a href="<?php echo $p; ?>index.php#features">// SYSTEM</a></li>
            <li><a href="<?php echo $p; ?>index.php#about">// DATA.LOG</a></li>
            <li><a href="<?php echo $p; ?>checkout.php">
                    <div class="cart-icon">
                        🛒
                        <span class="cart-count">0</span>
                    </div>
                </a></li>
            <li><a href="<?php echo $p; ?>admin/index.html" class="btn btn-primary btn-sm">[ ADMIN.ROOT ]</a></li>
        </ul>
    </div>
</nav>