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

<!-- Placeholder container for subsequent homepage content blocks -->
<div class="homepage-content-placeholder" style="background-color: var(--color-white); height: 100px;"></div>

<?php
get_footer();