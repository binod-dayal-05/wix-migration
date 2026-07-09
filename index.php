<?php
/**
 * Main index template
 */
get_header();
?>

<!-- Hero Video Section -->
<section id="comp-mk9lx0bm" class="hero-video-section">
    
    <!-- Video Background Layer -->
    <div class="video-background-layer">
        <video autoplay muted loop playsinline class="hero-video-bg">
            <source src="https://video.wixstatic.com/video/11062b_985fc3d340b04ef583eeb20943f22ab8/720p/mp4/file.mp4" type="video/mp4">
        </video>
    </div>

    <!-- Content Overlay -->
    <div class="hero-content-container">
        <!-- Semi-transparent overlay to ensure readable typography -->
        <div class="hero-overlay-box"></div>
        
        <div class="hero-inner-content">
            <!-- Main Heading -->
            <div class="hero-heading-wrapper">
                <h1 class="hero-title-text">
                    WAHEGURU JI KA KHALSA,<br>WAHEGURU JI KI FATEH!
                </h1>
            </div>

            <!-- Subtext -->
            <div class="hero-subtext-wrapper">
                <p class="hero-subtext-text">
                    Join our community in prayer, seva, and spiritual learning.
                </p>
            </div>

            <!-- Call to Action Button -->
            <div class="hero-btn-wrapper">
                <a href="https://www.youtube.com" class="btn-watch-online" target="_blank" rel="noopener noreferrer">
                    Watch Online
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Welcome & Mission Section -->
<section class="welcome-mission-section">
    <div class="welcome-mission-container">
        
        <!-- Welcome Block -->
        <div class="welcome-block">
            <h2 class="section-heading">Welcome to our Gurdwara!</h2>
            <div class="section-divider-line"></div>
            <p class="section-paragraph">
                A Gurdwara is the place where Sikhs come together for congregational worship. The literal meaning of the Punjabi word Gurdwara is 'the residence of the Guru', or 'the door that leads to the Guru'. In a modern Gurdwara, the Guru is not a person but the book of Sikh scriptures called the Sri Guru Granth Sahib.
            </p>
            <p class="section-paragraph">
                We welcome everyone, all genders, race and all faiths to come visit us and learn more about us.
            </p>
        </div>

        <!-- Mission Block -->
        <div class="mission-block">
            <h2 class="section-heading">Our Mission</h2>
            <div class="section-divider-line"></div>
            <p class="section-paragraph">
                To connect and grow the community through spiritual, educational, social and sports programs with a focus on youth and families.
            </p>
        </div>

    </div>
</section>

<!-- Welcome & Mission Grid Cards Section -->
<section class="home-cards-section">
    <div class="home-cards-container">
        
        <!-- Card 1: Daily Schedule -->
        <a href="#" class="home-card-item">
            <img src="https://static.wixstatic.com/media/09d5c1e4485445d7a3f8557da554399d.jpg" alt="Daily Schedule">
            <div class="home-card-overlay"></div>
            <div class="home-card-content">
                <span class="home-card-title">Daily<br>Schedule</span>
            </div>
        </a>

        <!-- Card 2: Education (Vidiaa) -->
        <a href="#" class="home-card-item">
            <img src="https://static.wixstatic.com/media/de08ede422e848f799ce578001128e0d.jpg" alt="Education (Vidiaa)">
            <div class="home-card-overlay"></div>
            <div class="home-card-content">
                <span class="home-card-title">Education<br>(Vidiaa)</span>
            </div>
        </a>

        <!-- Card 3: Spiritual Knowledge -->
        <a href="#" class="home-card-item">
            <img src="https://static.wixstatic.com/media/nsplsh_4f4254692d786746664567~mv2.jpg" alt="Spiritual Knowledge">
            <div class="home-card-overlay"></div>
            <div class="home-card-content">
                <span class="home-card-title">Spiritual<br>Knowledge</span>
            </div>
        </a>

        <!-- Card 4: Vand Chakna -->
        <a href="#" class="home-card-item">
            <img src="https://static.wixstatic.com/media/nsplsh_7559544b7a5670386c6f51~mv2.jpg" alt="Vand Chakna">
            <div class="home-card-overlay"></div>
            <div class="home-card-content">
                <span class="home-card-title">Vand<br>Chakna</span>
            </div>
        </a>

    </div>
</section>

<!-- YouTube Feed Gallery Section -->
<section class="youtube-feed-section">
    <div class="youtube-feed-container">
        
        <!-- Header with lines and text -->
        <div class="youtube-header">
            <span class="youtube-line"></span>
            <div class="youtube-title-box">
                <h2 class="youtube-title">Latest posts from Youtube</h2>
                <a href="https://www.youtube.com/@GurdwaraSahibSukhSagar" target="_blank" rel="noopener noreferrer" class="youtube-header-icon" aria-label="YouTube Link">
                    <svg viewBox="0 0 24 24" class="youtube-title-svg"><path d="M23.498 6.163a3.003 3.003 0 0 0-2.11-2.11C19.517 3.545 12 3.545 12 3.545s-7.517 0-9.388.508a3.003 3.003 0 0 0-2.11 2.11C0 8.033 0 12 0 12s0 3.967.502 5.837a3.003 3.003 0 0 0 2.11 2.11c1.871.508 9.388.508 9.388.508s7.517 0 9.388-.508a3.003 3.003 0 0 0 2.11-2.11C24 15.967 24 12 24 12s0-3.967-.502-5.837zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                </a>
            </div>
            <span class="youtube-line"></span>
        </div>

        <!-- Main YouTube Player Frame -->
        <div class="youtube-player-wrapper">
            <iframe id="youtube-main-iframe" src="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <!-- Carousel / Grid Thumbnails -->
        <div class="youtube-gallery-slider">
            <button class="carousel-arrow arrow-left" id="yt-scroll-left" aria-label="Previous videos">
                <svg viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>
            </button>
            
            <div class="youtube-thumbs-scroll" id="yt-thumbs-container">
                <!-- Video 1 -->
                <div class="youtube-thumb-item active" data-video-id="qA0n2kG7Cfs">
                    <img src="https://img.youtube.com/vi/qA0n2kG7Cfs/mqdefault.jpg" alt="Nitnem & Asa Di Vaar">
                    <div class="youtube-play-icon-overlay">
                        <svg viewBox="0 0 24 24" class="youtube-play-icon-svg"><path d="M8 5v14l11-7z"/></svg>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="youtube-thumb-item" data-video-id="Lh3JzM2pLrk">
                    <img src="https://img.youtube.com/vi/Lh3JzM2pLrk/mqdefault.jpg" alt="Gurdwara Live Kirtan">
                    <div class="youtube-play-icon-overlay">
                        <svg viewBox="0 0 24 24" class="youtube-play-icon-svg"><path d="M8 5v14l11-7z"/></svg>
                    </div>
                </div>

                <!-- Video 3 -->
                <div class="youtube-thumb-item" data-video-id="a9j_3R82l_Q">
                    <img src="https://img.youtube.com/vi/a9j_3R82l_Q/mqdefault.jpg" alt="Evening Rehraas Sahib">
                    <div class="youtube-play-icon-overlay">
                        <svg viewBox="0 0 24 24" class="youtube-play-icon-svg"><path d="M8 5v14l11-7z"/></svg>
                    </div>
                </div>

                <!-- Video 4 -->
                <div class="youtube-thumb-item" data-video-id="9vR_7k0k58I">
                    <img src="https://img.youtube.com/vi/9vR_7k0k58I/mqdefault.jpg" alt="Sikh Community Program">
                    <div class="youtube-play-icon-overlay">
                        <svg viewBox="0 0 24 24" class="youtube-play-icon-svg"><path d="M8 5v14l11-7z"/></svg>
                    </div>
                </div>
            </div>

            <button class="carousel-arrow arrow-right" id="yt-scroll-right" aria-label="Next videos">
                <svg viewBox="0 0 24 24"><path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12z"/></svg>
            </button>
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mainIframe = document.getElementById('youtube-main-iframe');
    const thumbItems = document.querySelectorAll('.youtube-thumb-item');
    
    // Set first video active on load
    if (thumbItems.length > 0 && mainIframe) {
        const firstVideoId = thumbItems[0].getAttribute('data-video-id');
        mainIframe.src = `https://www.youtube.com/embed/${firstVideoId}?autoplay=0&rel=0`;
    }
    
    thumbItems.forEach(item => {
        item.addEventListener('click', function() {
            const videoId = this.getAttribute('data-video-id');
            if (mainIframe && videoId) {
                // Set active class
                thumbItems.forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                
                // Load clicked video in main player with autoplay
                mainIframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`;
            }
        });
    });

    // Horizontal Scrolling
    const container = document.getElementById('yt-thumbs-container');
    const leftBtn = document.getElementById('yt-scroll-left');
    const rightBtn = document.getElementById('yt-scroll-right');

    if (container && leftBtn && rightBtn) {
        leftBtn.addEventListener('click', () => {
            container.scrollLeft -= 250;
        });
        rightBtn.addEventListener('click', () => {
            container.scrollLeft += 250;
        });
    }
});
</script>

<!-- Instagram Post Scroller Section -->
<section class="instagram-feed-section">
    <div class="instagram-feed-container">
        
        <!-- Header with lines and text -->
        <div class="instagram-header">
            <span class="instagram-line"></span>
            <div class="instagram-title-box">
                <h2 class="instagram-title">Latest posts from Instagram</h2>
                <a href="https://www.instagram.com/gurdwara_sukh_sagar" target="_blank" rel="noopener noreferrer" class="instagram-header-icon" aria-label="Instagram Link">
                    <svg viewBox="0 0 24 24" class="instagram-title-svg"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg>
                </a>
            </div>
            <span class="instagram-line"></span>
        </div>

        <!-- Live Instagram Feed via shortcode -->
        <?php 
        if ( shortcode_exists( 'instagram-feed' ) ) {
            echo do_shortcode( '[instagram-feed]' );
        } else {
            echo '<div style="text-align: center; padding: 50px 20px; border: 2px dashed #ddd; border-radius: 4px; font-family: var(--font-ui); color: #666; background-color: #fafafa;">
                <p style="margin: 0 0 10px 0; font-weight: 700; font-size: 16px;">Instagram Feed Connection Required</p>
                <p style="margin: 0; font-size: 14px; line-height: 1.4;">Please install and activate the free <strong>Smash Balloon Social Photo Feed</strong> plugin in your WordPress dashboard, then connect your <strong>@gurdwara_sukh_sagar</strong> account to display the live feed.</p>
            </div>';
        }
        ?>
    </div>
</section>

<?php
get_footer();