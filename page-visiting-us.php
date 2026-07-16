<?php
// Template Name: Visiting Us Page
// Description: Custom page template for the Visiting Us page.

get_header();

// acf variables with fallback defaults
$hero_bg_img = function_exists('get_field') ? get_field('hero_bg_image') : 'https://static.wixstatic.com/media/11062b_ade08d73d5a54a8bab0c6d549ef04a95~mv2.jpeg/v1/fill/w_1581,h_669,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/11062b_ade08d73d5a54a8bab0c6d549ef04a95~mv2.jpeg';
$quote_gurmukhi = function_exists('get_field') ? get_field('quote_gurmukhi') : 'ਸਚੁ ਸਾਲਾਹੀ ਧੰਨੁ ਗੁਰਦੁਆਰੁ ॥';
$quote_english = function_exists('get_field') ? get_field('quote_english') : 'Blessed is that Gurdwara, the Guru\'s Gate, where the Praises of the True Lord are sung.';
$quote_attribution = function_exists('get_field') ? get_field('quote_attribution') : 'Guru Arjan Dev Ji in Raag Bhairao - 1142';

$landscape_img_1 = function_exists('get_field') ? get_field('landscape_image_1') : 'https://static.wixstatic.com/media/11062b_fcc67ab2b060424fad9ea44851f2b067~mv2.jpg/v1/fill/w_1960,h_880,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Long%20Road.jpg';
$landscape_img_2 = function_exists('get_field') ? get_field('landscape_image_2') : 'https://static.wixstatic.com/media/11062b_ba6ed7b00a194d0294dd4e14524dae2e~mv2.jpg/v1/fill/w_1960,h_880,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Lake%20Sunset%20View.jpg';
$contact_img = function_exists('get_field') ? get_field('contact_image') : 'https://static.wixstatic.com/media/11062b_fb4edb4cc6f94a2eabbc76fbca4eebfa~mv2.jpg/v1/fill/w_926,h_900,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Sand.jpg';
$contact_form_shortcode = function_exists('get_field') ? get_field('contact_form_shortcode') : null;
?>

<!-- main banner -->
<section id="comp-mkj6ux28" class="page-hero-strip">
    <div class="hero-bg-container">
        <img class="hero-bg-img" src="<?php echo esc_url( $hero_bg_img ); ?>" alt="Golden Temple">
    </div>
    
    <!-- quote overlay block -->
    <div id="comp-mkj6vd9a" class="quote-box-container">
        <div class="quote-box-content">
            <blockquote class="quote-text-gurmukhi">
                <?php echo esc_html( $quote_gurmukhi ); ?>
            </blockquote>
            <blockquote class="quote-text-english">
                <?php echo esc_html( $quote_english ); ?>
            </blockquote>
            <p class="quote-attribution">
                <?php echo esc_html( $quote_attribution ); ?>
            </p>
        </div>
    </div>
</section>

<!-- Content Block -->
<article class="page-content-section">
    <div class="page-content-container">
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if ( get_the_content() ) : ?>
                <!-- If the WP Admin Editor has content, output it dynamically -->
                <header class="page-content-header">
                    <h1 class="page-title-main"><?php the_title(); ?></h1>
                </header>
                <div class="entry-content page-paragraph-wrapper">
                    <?php the_content(); ?>
                </div>
            <?php else : ?>
                <!-- Fallback to the original static Wix migration layout -->
                <header class="page-content-header">
                    <h1 class="page-title-main"><?php the_title(); ?></h1>
                </header>

                <p class="page-paragraph">
                    Services in a Sikh Gurdwara (pronounced Gurd-WAH-rah, the name for Sikh Temples) are open to everyone. When attending such services, remove your shoes and cover your head before entering. We sit on the floor, so dress accordingly; pantsuits are better than tight skirts, for instance. (If you are crippled or infirm, reach out to a volunteer and accommodations will be provided.)Gurdwara Sukh Sagar First Time Visitors Vancouver Sikh.
                </p>

                <p class="page-paragraph">
                    Men sit to the right as you enter, and women sit on the left; children may sit with either parent or with friends. When sitting on the floor, please sit in such a way that the bottoms of your feet do not point directly towards the Siri Guru Granth Sahib, the Sikh Guru, which is always under a canopy.
                </p>

                <p class="page-paragraph">
                    Before sitting down, you may make an offer to the Guru if you wish.
                </p>

                <!-- Image 1: Long Road -->
                <div class="page-landscape-image">
                    <img src="<?php echo esc_url( $landscape_img_1 ); ?>" alt="First Time Visitors - Long Road">
                </div>

                <p class="page-paragraph">
                    Our services consist primarily of singing Shabads (pronounced SHUH-buds, literally hymns) from the Siri Guru Granth Sahib and other approved works by Sikh saints and poets. Feel free to sing along.
                </p>

                <p class="page-paragraph">
                    At the end of each service, we all stand while one person gives an Ardas (pronounced AHR-dass), a prayer or supplication for the whole Sangat (pronounced SUNG-gut; it means congregation) . Then one person reads a random passage from the Siri Guru Granth Sahib out loud.
                </p>

                <p class="page-paragraph">
                    After this, we cup our hands to receive a sweet–similar to warm cookie dough–to remind us of the sweetness of the Guru’s word. And then we all sit down together and share langar (pronounced LUN-gar), the meal from the Guru’s kitchen. Though men and women sit on opposite sides of the room during a Sikh service, we sit together during langar.
                </p>

                <!-- Image 2: Lake Sunset View -->
                <div class="page-landscape-image">
                    <img src="<?php echo esc_url( $landscape_img_2 ); ?>" alt="First Time Visitors - Lake Sunset View">
                </div>

                <!-- Section 2: Educational Visits -->
                <header class="page-content-header" style="margin-top: 60px;">
                    <h1 class="page-title-main">Educational Visits</h1>
                </header>

                <p class="page-paragraph">
                    Educating our community and those around us, with different beliefs and customs, all contributes immensely in building a stronger future.
                </p>

                <p class="page-paragraph">
                    We undertake educational visits to schools, senior homes, hospitals and community events.
                </p>

                <p class="page-paragraph">
                    Our current curriculum for school visits includes:
                </p>

                <ul class="page-list">
                    <li>A brief introduction into the history of Sikhism and our Gurus</li>
                    <li>The purpose of the Gurdwara (Sikh Temple)</li>
                    <li>The Sikh way of Life</li>
                    <li>An understanding of the Sikh Beliefs.</li>
                    <li>Sikh Identity – How to recognise a Sikh.</li>
                    <li>An overview of Sikh customs and religious symbols.</li>
                    <li>An outline of the major Sikh Festivals.</li>
                    <li>Show you how a Sikh ties his turban.</li>
                    <li>Hymn singing and playing on the musical Sikh instrument called the Harmonium (Waja)</li>
                    <li>A question and answer session</li>
                </ul>

                <p class="page-paragraph" style="margin-top: 30px;">
                    We look forward to helping you make the best use of the educational resources available to yourselves. Hope to see you soon and further your knowledge of Sikhism.
                </p>
                
                <!-- Contact Form Section -->
                <section class="visiting-contact-section">
                    <div class="visiting-contact-grid">
                        <!-- Left: Sand Image -->
                        <div class="visiting-contact-image">
                            <img src="<?php echo esc_url( $contact_img ); ?>" alt="Have a Question">
                        </div>
                        <!-- Right: Contact Form -->
                        <div class="visiting-contact-form-container">
                            <h2 class="visiting-contact-heading">Have a Question?</h2>
                            <?php
                            if ( $contact_form_shortcode && shortcode_exists( 'contact-form-7' ) ) {
                                echo do_shortcode( $contact_form_shortcode );
                            } else {
                                ?>
                                <form action="#" class="visiting-contact-form" method="post">
                                    <div class="form-row-double">
                                        <div class="form-field-group">
                                            <label for="first-name">First Name</label>
                                            <input type="text" id="first-name" name="first-name">
                                        </div>
                                        <div class="form-field-group">
                                            <label for="last-name">Last Name</label>
                                            <input type="text" id="last-name" name="last-name">
                                        </div>
                                    </div>
                                    <div class="form-field-group">
                                        <label for="email">Email *</label>
                                        <input type="email" id="email" name="email" required>
                                    </div>
                                    <div class="form-field-group">
                                        <label for="message">Message</label>
                                        <textarea id="message" name="message" rows="4"></textarea>
                                    </div>
                                    <button type="submit" class="btn-submit-question">Send</button>
                                </form>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
        <?php endwhile; endif; ?>

    </div>
</article>

<?php
get_footer();
