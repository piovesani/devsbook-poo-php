<aside class="mt-10">
    <nav>
        <a href="<?php echo $base; ?>">
            <div class="menu-item <?php echo $activeMenu == 'home' ? 'active' : ''; ?>">
                <div class="menu-item-icon">
                    <img src="<?php echo $base; ?>/assets/images/home-run.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    Home
                </div>
            </div>
        </a>
        <a href="<?php echo $base; ?>/profile.php">
            <div class="menu-item <?php echo $activeMenu == 'profile' ? 'active' : ''; ?>">
                <div class="menu-item-icon">
                    <img src="<?php echo $base; ?>/assets/images/user.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    Meu Perfil
                </div>
            </div>
        </a>
        <a href="<?php echo $base; ?>/friends.php">
            <div class="menu-item <?php echo $activeMenu == 'friends' ? 'active' : ''; ?>">
                <div class="menu-item-icon">
                    <img src="<?php echo $base; ?>/assets/images/friends.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    Amigos
                </div>
                <div class="menu-item-badge">
                
                </div>
            </div>
        </a>
        <a href="<?php echo $base; ?>/photos.php">
            <div class="menu-item <?php echo $activeMenu == 'photos' ? 'active' : ''; ?>">
                <div class="menu-item-icon">
                    <img src="<?php echo $base; ?>/assets/images/photo.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    Fotos
                </div>
            </div>
        </a>
        <div class="menu-splitter"></div>
        <a href="<?php echo $base; ?>/settings.php">
            <div class="menu-item <?php echo $activeMenu == 'settings' ? 'active' : ''; ?>">
                <div class="menu-item-icon">
                    <img src="<?php echo $base; ?>/assets/images/settings.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    Configurações
                </div>
            </div>
        </a>
        <a href="<?php echo $base; ?>/logout.php">
            <div class="menu-item">
                <div class="menu-item-icon">
                    <img src="<?php echo $base; ?>/assets/images/power.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    Sair
                </div>
            </div>
        </a>
    </nav>
</aside>