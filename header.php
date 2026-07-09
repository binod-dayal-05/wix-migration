<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Wix Native Typography Mappings preload/link -->
    <link rel="preload" href="//static.parastorage.com/fonts/v2/74290729-59ae-4129-87d0-2eec3974dce1/v1/avenir-lt-w05_85-heavy.woff2" as="font" type="font/woff2" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="SITE_HEADER" class="site-header">
    <!-- Main Header Top Bar (Branding, Socials, Buttons) -->
    <div class="header-main-bar">
        <div class="header-main-container">
            
            <!-- Branding: Logo and Title -->
            <div class="header-branding">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link">
                    <img class="logo-img" src="https://static.wixstatic.com/media/07134b_552e4e21b4574c4496aaa2df2157b9d7~mv2.png/v1/fill/w_80,h_79,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Untitled%20design.png" alt="Gurdwara Sahib Sukh Sagar Logo" width="80" height="79">
                </a>
                <div class="header-title">
                    <h3 class="brand-heading">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            GURDWARA SAHIB<br><span class="brand-subheading">SUKH SAGAR</span>
                        </a>
                    </h3>
                </div>
            </div>

            <!-- Header Actions: Social Icons + Buttons -->
            <div class="header-actions">
                <!-- Social Bar -->
                <div class="social-bar">
                    <!-- YouTube -->
                    <a href="https://www.youtube.com" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
                        <svg viewBox="0 0 24 24" class="social-svg"><path d="M23.498 6.163a3.003 3.003 0 0 0-2.11-2.11C19.53 3.545 12 3.545 12 3.545s-7.53 0-9.388.508a3.003 3.003 0 0 0-2.11 2.11C0 8.03 0 12 0 12s0 3.97.502 5.837a3.003 3.003 0 0 0 2.11 2.11c1.858.508 9.388.508 9.388.508s7.53 0 9.388-.508a3.003 3.003 0 0 0 2.11-2.11C24 15.97 24 12 24 12s0-3.97-.502-5.837zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <!-- SoundCloud -->
                    <a href="https://soundcloud.com" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="SoundCloud">
                        <svg viewBox="0 0 24 24" class="social-svg"><path d="M10.37 15.63a.56.56 0 0 0 .56-.56V9.06a.56.56 0 0 0-.56-.56.56.56 0 0 0-.56.56v6.01a.56.56 0 0 0 .56.56zm-1.87-.56V9.81a.56.56 0 0 0-.56-.56.56.56 0 0 0-.56.56v5.26a.56.56 0 0 0 .56.56.56.56 0 0 0 .56-.56zm3.75.56a.56.56 0 0 0 .56-.56V8.31a.56.56 0 0 0-.56-.56.56.56 0 0 0-.56.56v6.76a.56.56 0 0 0 .56.56zm1.88-.38a.56.56 0 0 0 .56-.56v-6.2a.56.56 0 0 0-.56-.56.56.56 0 0 0-.56.56v6.2a.56.56 0 0 0 .56.56zm5.63.38c1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92c-.17 0-.33.02-.5.06a3.64 3.64 0 0 0-6.93-.94.56.56 0 0 0-.56.56v6.16c0 .31.25.56.56.56h7.43zM6.63 14.5a.56.56 0 0 0 .56-.56v-4.13a.56.56 0 0 0-.56-.56.56.56 0 0 0-.56.56v4.13c0 .31.25.56.56.56zm-1.88-.75V10.56a.56.56 0 0 0-.56-.56.56.56 0 0 0-.56.56v3.19a.56.56 0 0 0 .56.56.56.56 0 0 0 .56-.56zm-1.87-.75v-1.69a.56.56 0 0 0-.56-.56.56.56 0 0 0-.56.56v1.69a.56.56 0 0 0 .56.56.56.56 0 0 0 .56-.56zM.94 13v-.37a.56.56 0 0 0-.56-.56.56.56 0 0 0-.56.56V13a.56.56 0 0 0 .56.56c.31 0 .56-.25.56-.56z"/></svg>
                    </a>
                    <!-- Instagram -->
                    <a href="https://instagram.com" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                        <svg viewBox="0 0 24 24" class="social-svg"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg>
                    </a>
                    <!-- Facebook -->
                    <a href="https://facebook.com" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                        <svg viewBox="0 0 24 24" class="social-svg"><path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.75z"/></svg>
                    </a>
                    <!-- TikTok -->
                    <a href="https://tiktok.com" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="TikTok">
                        <svg viewBox="0 0 24 24" class="social-svg"><path d="M12.525.02c1.31 0 2.569.345 3.666.953V0h3.29a6.452 6.452 0 0 0 2.932 4.556v3.297a9.697 9.697 0 0 1-4.887-1.32v7.924a7.447 7.447 0 0 1-7.447 7.447 7.447 7.447 0 0 1-7.447-7.447 7.447 7.447 0 0 1 7.447-7.447c.365 0 .723.029 1.074.086V10.1c-.352-.047-.709-.071-1.074-.071a4.444 4.444 0 0 0-4.444 4.444 4.444 4.444 0 0 0 4.444 4.444 4.444 4.444 0 0 0 4.444-4.444V.02z"/></svg>
                    </a>
                    <!-- X (Twitter) -->
                    <a href="https://x.com" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="X">
                        <svg viewBox="0 0 24 24" class="social-svg"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                </div>

                <!-- Call to Action Buttons -->
                <a href="#" class="btn-live-stream">Live Stream</a>
                <a href="#" class="btn-donate-now">Donate Now</a>
            </div>

        </div>
    </div>

    <!-- Navigation Menu Bar -->
    <nav class="header-nav-bar" aria-label="Main Navigation">
        <div class="header-nav-container">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'main-menu',
                'container'      => false,
                'menu_class'     => 'nav-menu-list',
                'fallback_cb'    => 'wix_migration_fallback_menu'
            ) );
            ?>
        </div>

        <!-- Slide-down Search Bar -->
        <div id="search-overlay-bar" class="search-overlay-bar">
            <div class="search-bar-container">
                <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <input type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" autocomplete="off" />
                    <button type="submit" class="search-submit" aria-label="Submit Search">
                        <svg class="search-icon-svg" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
                    </button>
                </form>
                <button id="search-close-btn" class="search-close-btn" aria-label="Close Search">&times;</button>
            </div>
        </div>
    </nav>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Select all elements with the toggle class (works for both dynamic menu and fallback menu)
    const toggleSearch = function(e) {
        e.preventDefault();
        const searchOverlay = document.getElementById('search-overlay-bar');
        const searchInput = searchOverlay ? searchOverlay.querySelector('.search-field') : null;
        if (searchOverlay) {
            searchOverlay.classList.toggle('active');
            if (searchOverlay.classList.contains('active') && searchInput) {
                searchInput.focus();
            }
        }
    };

    // Use event delegation on document to handle dynamically generated elements
    document.addEventListener('click', function(e) {
        const toggleBtn = e.target.closest('.search-toggle-btn');
        if (toggleBtn) {
            toggleSearch(e);
        }
    });

    const searchCloseBtn = document.getElementById('search-close-btn');
    if (searchCloseBtn) {
        searchCloseBtn.addEventListener('click', function() {
            const searchOverlay = document.getElementById('search-overlay-bar');
            if (searchOverlay) {
                searchOverlay.classList.remove('active');
            }
        });
    }

    // Close on ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const searchOverlay = document.getElementById('search-overlay-bar');
            if (searchOverlay && searchOverlay.classList.contains('active')) {
                searchOverlay.classList.remove('active');
            }
        }
    });
});
</script>