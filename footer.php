<?php
// Footer template
$logo_url = function_exists('get_field') ? get_field('site_logo', 'option') : null;
if ( !$logo_url ) {
    $logo_url = 'https://static.wixstatic.com/media/07134b_552e4e21b4574c4496aaa2df2157b9d7~mv2.png/v1/fill/w_254,h_240,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Untitled%20design.png';
}

$address_link = function_exists('get_field') ? get_field('contact_address_link', 'option') : 'https://maps.google.com/?q=347+Wood+St,+New+Westminster,+BC';
$address_text = function_exists('get_field') ? get_field('contact_address_text', 'option') : '347 Wood St<br>New Westminster, BC';
$phone_text = function_exists('get_field') ? get_field('contact_phone', 'option') : '(604) 537-8300';
$phone_clean = preg_replace('/[^0-9+]/', '', $phone_text);
$phone_link = 'tel:' . $phone_clean;

$email_text = function_exists('get_field') ? get_field('contact_email', 'option') : 'info@sukhsagar.ca';
$hours_text = function_exists('get_field') ? get_field('contact_hours', 'option') : 'Open Daily from 5:00am - 8:30pm';

$map_url = function_exists('get_field') ? get_field('contact_map_iframe_url', 'option') : 'https://maps.google.com/maps?q=Gurdwara%20Sahib%20Sukh%20Sagar,%20New%20Westminster,%20BC&t=&z=15&ie=UTF8&iwloc=&output=embed';
?>
<footer id="SITE_FOOTER" class="site-footer">
    
    <!-- Top Content Area (Black) -->
    <div class="footer-main-bar">
        <div class="footer-main-container">
            
            <!-- Column 1: Brand Info -->
            <div class="footer-column footer-brand-col">
                <div class="footer-branding">
                    <img class="footer-logo-img" src="<?php echo esc_url( $logo_url ); ?>" alt="Gurdwara Sahib Sukh Sagar Logo" width="100" height="99">
                    <h3 class="footer-brand-title">Gurdwara Sahib<br>Sukh Sagar</h3>
                </div>
            </div>

            <!-- Column 2: Contact Info -->
            <div class="footer-column footer-contact-col">
                <h3 class="footer-section-title">Contact Us</h3>
                
                <div class="contact-details-list">
                    <!-- Address -->
                    <div class="contact-detail-item">
                        <div class="contact-icon-wrapper">
                            <svg viewBox="0 0 24 24" class="contact-icon-svg"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        </div>
                        <div class="contact-detail-text">
                            <a href="<?php echo esc_url( $address_link ); ?>" target="_blank" rel="noopener noreferrer">
                                <?php echo wp_kses_post( $address_text ); ?>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Phone -->
                    <div class="contact-detail-item">
                        <div class="contact-icon-wrapper">
                            <svg viewBox="0 0 24 24" class="contact-icon-svg"><path d="M6.62 10.79a15.15 15.15 0 0 0 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.01-.24 1.12.37 2.33.57 3.58.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.46.57 3.58.11.35.03.74-.25 1.01l-2.2 2.2z"/></svg>
                        </div>
                        <div class="contact-detail-text">
                            <a href="<?php echo esc_url( $phone_link ); ?>"><?php echo esc_html( $phone_text ); ?></a>
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div class="contact-detail-item">
                        <div class="contact-icon-wrapper">
                            <svg viewBox="0 0 24 24" class="contact-icon-svg"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                        </div>
                        <div class="contact-detail-text">
                            <a href="mailto:<?php echo esc_attr( $email_text ); ?>"><?php echo esc_html( $email_text ); ?></a>
                        </div>
                    </div>
                    
                    <!-- Timing -->
                    <div class="contact-detail-item">
                        <div class="contact-icon-wrapper">
                            <svg viewBox="0 0 24 24" class="contact-icon-svg"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                        </div>
                        <div class="contact-detail-text">
                            <?php echo esc_html( $hours_text ); ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column 3: Google Map -->
            <div class="footer-column footer-map-col">
                <div class="footer-map-wrapper">
                    <iframe title="Google Maps" src="<?php echo esc_url( $map_url ); ?>" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
    </div>

    <!-- Bottom Copyright Bar (Gold) -->
    <div class="footer-copyright-strip">
        <div class="footer-copyright-container">
            <h6 class="copyright-text">
                &copy; <?php echo date('Y'); ?> Gurdwara Sahib Sukh Sagar
            </h6>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>