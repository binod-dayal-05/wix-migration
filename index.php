<?php
// Template Name: Home Page
// Description: Custom template for the front/landing page.

get_header();

// hero section settings
$hero_video_url = function_exists('get_field') ? get_field('hero_video_url') : 'https://video.wixstatic.com/video/11062b_985fc3d340b04ef583eeb20943f22ab8/720p/mp4/file.mp4';
$hero_title = function_exists('get_field') ? get_field('hero_title') : 'WAHEGURU JI KA KHALSA,<br>WAHEGURU JI KI FATEH!';
$hero_subtext = function_exists('get_field') ? get_field('hero_subtext') : 'Join our community in prayer, seva, and spiritual learning.';
$watch_online_url = function_exists('get_field') ? get_field('watch_online_url') : (function_exists('get_field') ? get_field('live_stream_url', 'option') : 'https://www.youtube.com/user/gurdwarasukhsagar');
$youtube_url = function_exists('get_field') ? get_field('youtube_url', 'option') : 'https://www.youtube.com/user/gurdwarasukhsagar';
$instagram_url = function_exists('get_field') ? get_field('instagram_url', 'option') : 'https://www.instagram.com/gurdwara_sukh_sagar/';


// welcome text and mission text
$welcome_title = function_exists('get_field') ? get_field('welcome_title') : 'Welcome to our Gurdwara!';
$welcome_text_default = "A Gurdwara is the place where Sikhs come together for congregational worship. The literal meaning of the Punjabi word Gurdwara is 'the residence of the Guru', or 'the door that leads to the Guru'. In a modern Gurdwara, the Guru is not a person but the book of Sikh scriptures called the Sri Guru Granth Sahib.\n\nWe welcome everyone, all genders, race and all faiths to come visit us and learn more about us.";
$welcome_text = function_exists('get_field') ? get_field('welcome_text') : $welcome_text_default;

$mission_title = function_exists('get_field') ? get_field('mission_title') : 'Our Mission';
$mission_text = function_exists('get_field') ? get_field('mission_text') : 'To connect and grow the community through spiritual, educational, social and sports programs with a focus on youth and families.';

// homepage grid cards
$card_1_link = function_exists('get_field') ? get_field('card_1_link') : '#';
$card_1_img = function_exists('get_field') ? get_field('card_1_image') : 'https://static.wixstatic.com/media/11062b_308dbaa37c744be982851c6e87135522~mv2.jpg/v1/fill/w_362,h_539,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/11062b_308dbaa37c744be982851c6e87135522~mv2.jpg';
$card_1_title = function_exists('get_field') ? get_field('card_1_title') : 'Daily<br>Schedule';

$card_2_link = function_exists('get_field') ? get_field('card_2_link') : '#';
$card_2_img = function_exists('get_field') ? get_field('card_2_image') : 'https://static.wixstatic.com/media/11062b_39ef5df3c7f24a6e990836f542aa56ec~mv2_d_5184_3456_s_4_2.jpg/v1/fill/w_362,h_539,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/11062b_39ef5df3c7f24a6e990836f542aa56ec~mv2_d_5184_3456_s_4_2.jpg';
$card_2_title = function_exists('get_field') ? get_field('card_2_title') : 'Education<br>(Vidiaa)';

$card_3_link = function_exists('get_field') ? get_field('card_3_link') : '#';
$card_3_img = function_exists('get_field') ? get_field('card_3_image') : 'https://static.wixstatic.com/media/11062b_532bdfe0394b41af9571cf0c692c0ea4~mv2.jpeg/v1/fill/w_362,h_539,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/11062b_532bdfe0394b41af9571cf0c692c0ea4~mv2.jpeg';
$card_3_title = function_exists('get_field') ? get_field('card_3_title') : 'Spiritual<br>Knowledge';

$card_4_link = function_exists('get_field') ? get_field('card_4_link') : '#';
$card_4_img = function_exists('get_field') ? get_field('card_4_image') : 'https://static.wixstatic.com/media/11062b_f68ce489130a47c59b8de76b5b20b78b~mv2.jpg/v1/fill/w_362,h_539,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/11062b_f68ce489130a47c59b8de76b5b20b78b~mv2.jpg';
$card_4_title = function_exists('get_field') ? get_field('card_4_title') : 'Vand<br>Chakna';
?>

<!-- Hero Video Section -->
<section id="comp-mk9lx0bm" class="hero-video-section">

    <!-- Video Background Layer -->
    <div class="video-background-layer">
        <video autoplay muted loop playsinline class="hero-video-bg">
            <source src="<?php echo esc_url( $hero_video_url ); ?>" type="video/mp4">
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
                    <?php echo wp_kses_post( $hero_title ); ?>
                </h1>
            </div>

            <!-- Subtext -->
            <div class="hero-subtext-wrapper">
                <p class="hero-subtext-text">
                    <?php echo esc_html( $hero_subtext ); ?>
                </p>
            </div>

            <!-- Call to Action Button -->
            <div class="hero-btn-wrapper">
                <a href="<?php echo esc_url( $watch_online_url ); ?>" class="btn-watch-online" target="_blank"
                    rel="noopener noreferrer">
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
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php if ( get_the_content() ) : ?>
                    <h2 class="section-heading"><?php the_title(); ?></h2>
                    <div class="section-divider-line"></div>
                    <div class="section-paragraph">
                        <?php the_content(); ?>
                    </div>
                <?php else : ?>
                    <h2 class="section-heading"><?php echo esc_html( $welcome_title ); ?></h2>
                    <div class="section-divider-line"></div>
                    <div class="section-paragraph">
                        <?php echo wpautop( esc_html( $welcome_text ) ); ?>
                    </div>
                <?php endif; ?>
            <?php endwhile; endif; ?>
        </div>

        <!-- Mission Block -->
        <div class="mission-block">
            <h2 class="section-heading"><?php echo esc_html( $mission_title ); ?></h2>
            <div class="section-divider-line"></div>
            <p class="section-paragraph">
                <?php echo esc_html( $mission_text ); ?>
            </p>
        </div>

    </div>
</section>

<!-- Welcome & Mission Grid Cards Section -->
<section class="home-cards-section">
    <div class="home-cards-container">

        <!-- Card 1: Daily Schedule -->
        <a href="<?php echo esc_url( $card_1_link ); ?>" class="home-card-item">
            <img src="<?php echo esc_url( $card_1_img ); ?>" alt="<?php echo esc_attr( strip_tags($card_1_title) ); ?>">
            <div class="home-card-overlay"></div>
            <div class="home-card-content">
                <span class="home-card-title"><?php echo wp_kses_post( $card_1_title ); ?></span>
            </div>
        </a>

        <!-- Card 2: Education (Vidiaa) -->
        <a href="<?php echo esc_url( $card_2_link ); ?>" class="home-card-item">
            <img src="<?php echo esc_url( $card_2_img ); ?>" alt="<?php echo esc_attr( strip_tags($card_2_title) ); ?>">
            <div class="home-card-overlay"></div>
            <div class="home-card-content">
                <span class="home-card-title"><?php echo wp_kses_post( $card_2_title ); ?></span>
            </div>
        </a>

        <!-- Card 3: Spiritual Knowledge -->
        <a href="<?php echo esc_url( $card_3_link ); ?>" class="home-card-item">
            <img src="<?php echo esc_url( $card_3_img ); ?>" alt="<?php echo esc_attr( strip_tags($card_3_title) ); ?>">
            <div class="home-card-overlay"></div>
            <div class="home-card-content">
                <span class="home-card-title"><?php echo wp_kses_post( $card_3_title ); ?></span>
            </div>
        </a>

        <!-- Card 4: Vand Chakna -->
        <a href="<?php echo esc_url( $card_4_link ); ?>" class="home-card-item">
            <img src="<?php echo esc_url( $card_4_img ); ?>" alt="<?php echo esc_attr( strip_tags($card_4_title) ); ?>">
            <div class="home-card-overlay"></div>
            <div class="home-card-content">
                <span class="home-card-title"><?php echo wp_kses_post( $card_4_title ); ?></span>
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
                <a href="<?php echo esc_url($youtube_url); ?>" target="_blank" rel="noopener noreferrer"
                    class="youtube-header-icon" aria-label="YouTube Link">
                    <svg viewBox="0 0 24 24" class="youtube-title-svg">
                        <path
                            d="M23.498 6.163a3.003 3.003 0 0 0-2.11-2.11C19.517 3.545 12 3.545 12 3.545s-7.517 0-9.388.508a3.003 3.003 0 0 0-2.11 2.11C0 8.033 0 12 0 12s0 3.967.502 5.837a3.003 3.003 0 0 0 2.11 2.11c1.871.508 9.388.508 9.388.508s7.517 0 9.388-.508a3.003 3.003 0 0 0 2.11-2.11C24 15.967 24 12 24 12s0-3.967-.502-5.837zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                    </svg>
                </a>
            </div>
            <span class="youtube-line"></span>
        </div>

        <!-- Main YouTube Player Frame -->
        <div class="youtube-player-wrapper">
            <iframe id="youtube-main-iframe" src=""
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>

        <!-- Carousel / Grid Thumbnails -->
        <div class="youtube-gallery-slider">
            <button class="carousel-arrow arrow-left" id="yt-scroll-left" aria-label="Previous videos">
                <svg viewBox="0 0 24 24">
                    <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
                </svg>
            </button>

            <div class="youtube-thumbs-scroll" id="yt-thumbs-container">
                <!-- Video 1 -->
                <div class="youtube-thumb-item active" data-video-id="MyvqEECF8kI">
                    <img src="https://img.youtube.com/vi/MyvqEECF8kI/mqdefault.jpg" alt="Nitnem & Asa Di Vaar">
                    <div class="youtube-play-icon-overlay">
                        <svg viewBox="0 0 24 24" class="youtube-play-icon-svg">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="youtube-thumb-item" data-video-id="1k8uu2yzEdA">
                    <img src="https://img.youtube.com/vi/1k8uu2yzEdA/mqdefault.jpg" alt="Gurdwara Live Kirtan">
                    <div class="youtube-play-icon-overlay">
                        <svg viewBox="0 0 24 24" class="youtube-play-icon-svg">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                    </div>
                </div>

                <!-- Video 3 -->
                <div class="youtube-thumb-item" data-video-id="sfkhrv3zFW0">
                    <img src="https://img.youtube.com/vi/sfkhrv3zFW0/mqdefault.jpg" alt="Evening Rehraas Sahib">
                    <div class="youtube-play-icon-overlay">
                        <svg viewBox="0 0 24 24" class="youtube-play-icon-svg">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                    </div>
                </div>

                <!-- Video 4 -->
                <div class="youtube-thumb-item" data-video-id="w4z8HRAVr0I">
                    <img src="https://img.youtube.com/vi/w4z8HRAVr0I/mqdefault.jpg" alt="Sikh Community Program">
                    <div class="youtube-play-icon-overlay">
                        <svg viewBox="0 0 24 24" class="youtube-play-icon-svg">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                    </div>
                </div>

                <!-- Video 5 -->
                <div class="youtube-thumb-item" data-video-id="AC_exwh3Ndw">
                    <img src="https://img.youtube.com/vi/AC_exwh3Ndw/mqdefault.jpg" alt="Nitnem Simran Program">
                    <div class="youtube-play-icon-overlay">
                        <svg viewBox="0 0 24 24" class="youtube-play-icon-svg">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                    </div>
                </div>

                <!-- Video 6 -->
                <div class="youtube-thumb-item" data-video-id="caF9aNat_Os">
                    <img src="https://img.youtube.com/vi/caF9aNat_Os/mqdefault.jpg" alt="Special Diwan Broadcast">
                    <div class="youtube-play-icon-overlay">
                        <svg viewBox="0 0 24 24" class="youtube-play-icon-svg">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                    </div>
                </div>
            </div>

            <button class="carousel-arrow arrow-right" id="yt-scroll-right" aria-label="Next videos">
                <svg viewBox="0 0 24 24">
                    <path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12z" />
                </svg>
            </button>
        </div>

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const mainIframe = document.getElementById('youtube-main-iframe');
        const thumbItems = document.querySelectorAll('.youtube-thumb-item');

        // Set first video active on load
        if (thumbItems.length > 0 && mainIframe) {
            const firstVideoId = thumbItems[0].getAttribute('data-video-id');
            mainIframe.src = `https://www.youtube.com/embed/${firstVideoId}?autoplay=0&rel=0`;
        }

        thumbItems.forEach(item => {
            item.addEventListener('click', function () {
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

        // Horizontal Scrolling (thumbnail width 216px + gap 12px = 228px)
        const container = document.getElementById('yt-thumbs-container');
        const leftBtn = document.getElementById('yt-scroll-left');
        const rightBtn = document.getElementById('yt-scroll-right');

        if (container && leftBtn && rightBtn) {
            leftBtn.addEventListener('click', () => {
                container.scrollBy({ left: -228, behavior: 'smooth' });
            });
            rightBtn.addEventListener('click', () => {
                container.scrollBy({ left: 228, behavior: 'smooth' });
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
                <a href="<?php echo esc_url($instagram_url); ?>" target="_blank" rel="noopener noreferrer"
                    class="instagram-header-icon" aria-label="Instagram Link">
                    <svg viewBox="0 0 24 24" class="instagram-title-svg">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z" />
                    </svg>
                </a>
            </div>
            <span class="instagram-line"></span>
        </div>

        <!-- Live Instagram Feed via shortcode -->
        <?php
        if (shortcode_exists('instagram-feed')) {
            echo do_shortcode('[instagram-feed]');
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