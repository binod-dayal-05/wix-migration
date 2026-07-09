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