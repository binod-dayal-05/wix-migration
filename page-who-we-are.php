<?php
// Template Name: Who We Are Page
// Description: Custom page template for the Who We Are page.

get_header();

// acf variables with default wix fallbacks
$hero_bg_img = function_exists('get_field') ? get_field('hero_bg_image') : 'https://static.wixstatic.com/media/nsplsh_e72a23763616465ebbd658fc1c908b85~mv2.jpg/v1/fill/w_2378,h_705,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/nsplsh_e72a23763616465ebbd658fc1c908b85~mv2.jpg';
$page_subtitle = function_exists('get_field') ? get_field('page_subtitle') : 'Khalsa Diwan Society ~ Gurdwara Sahib Sukh Sagar, New Westminster B.C.';

$story_img_1 = function_exists('get_field') ? get_field('story_image_1') : 'https://static.wixstatic.com/media/nsplsh_8829c626772b459f8fd599a0f5c87623~mv2.jpg/v1/fill/w_1960,h_800,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Image%20by%20Camille%20Brodard.jpg';
$story_img_2 = function_exists('get_field') ? get_field('story_image_2') : 'https://static.wixstatic.com/media/nsplsh_495f493952566a442d654d~mv2_d_2500_1667_s_2.jpg/v1/fill/w_1960,h_800,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Image%20by%20Spencer%20%20Watson.jpg';
$story_img_3 = function_exists('get_field') ? get_field('story_image_3') : 'https://static.wixstatic.com/media/nsplsh_50a92bcfe7fe40d7b10c6fbad9db9f81~mv2.jpg/v1/fill/w_1960,h_800,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Image%20by%20Tesson%20Thaliath.jpg';
$story_img_4 = function_exists('get_field') ? get_field('story_image_4') : 'https://static.wixstatic.com/media/nsplsh_60822863f4b24ee9a0543d66635d1d1a~mv2.jpg/v1/fill/w_1960,h_800,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Image%20by%20Sandie%20Peters.jpg';
?>

<!-- main page banner -->
<section class="page-hero-strip no-text-overlay">
    <div class="hero-bg-container">
        <img class="hero-bg-img" src="<?php echo esc_url( $hero_bg_img ); ?>" alt="Who We Are Banner">
    </div>
</section>

<!-- page content section -->
<article class="page-content-section">
    <div class="page-content-container">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if ( get_the_content() ) : ?>
                <!-- show post editor content if it's there -->
                <header class="page-content-header">
                    <h1 class="page-title-main"><?php the_title(); ?></h1>
                    <?php if ( $page_subtitle ) : ?>
                        <h2 class="page-subtitle-main"><?php echo esc_html( $page_subtitle ); ?></h2>
                    <?php endif; ?>
                </header>
                <div class="entry-content page-paragraph-wrapper">
                    <?php the_content(); ?>
                </div>
            <?php else : ?>
                <!-- show the static wix layout if editor is empty -->
                <header class="page-content-header">
                    <h1 class="page-title-main"><?php the_title(); ?></h1>
                    <h2 class="page-subtitle-main"><?php echo esc_html( $page_subtitle ); ?></h2>
                </header>

                <p class="page-paragraph">
                    The history of Khalsa Diwan Society, New Westminster goes back to 1919. During those days some of the Sikhs worked at the Fraser Saw Mills. Bhai Bishan Singh was amongst them. He lived a bachelor’s life and owned a house at 344 Boyne Street, New Westminster. He was a dedicated practicing Sikhs. In his house he had installed the Holy scripture Sri Guru Granth Sahib Ji and held congregations on Sundays. Sikhs living in the nearest vicinity of his house also gathered there for worship on regular basis.
                </p>

                <p class="page-paragraph">
                    On 4th March, 1919 Bhai Bishan Singh of village Tallewal bought a lot adjacent to his house for $250.00. He donated it to Khalsa Diwan Society, Vancouver in exchange of $1.00 as a registration fee on 19th August, 1919. Later on he also donated his house to the Society.
                </p>

                <!-- Image 1: Camille Brodard -->
                <div class="page-landscape-image">
                    <img src="<?php echo esc_url( $story_img_1 ); ?>" alt="Our Story - Bhai Bishan Singh donation">
                </div>

                <p class="page-paragraph">
                    There is a fascinating story that once Bhai Bishan Singh fell sick. He was admitted to the hospital for treatment. He had saved $900.00. Before he went to the hospital for treatment he gave the money to his friend Bhai Sunder Singh and asked him for its safe keep. He further told him that should he recover from his illness and return healthy from the hospital he will collect his money from him otherwise instructed Bhai Sunder Singh to spend the money for the improvement of the Gurdwara. Luckily Bhai Bishan Singh recovered from his illness and upon returning home asked Bhai Sunder Singh for his money. However during his lengthy absence Bhai Sunder Singh had already spent $900.00 on the improvement of the Gurdwara building. Upon learning this Bhai Bishan Singh felt very happy and in return thanked Bhai Sunder Singh for carrying out his wish.
                </p>

                <!-- Image 2: Spencer Watson -->
                <div class="page-landscape-image">
                    <img src="<?php echo esc_url( $story_img_2 ); ?>" alt="Our Story - Improvements">
                </div>

                <p class="page-paragraph">
                    By this time the old Gurdwara building was already renovated on three different times. The number of Sikhs living in New Westminster rapidly increased. It was felt that the old building was in a poor condition and there was a need for a new place of worship. Therefore two lots on Wood Street were bought at the cost of $1,500.00 during 1964 and $3,400.00 during 1970 . Foundation of a new Gurdwara was laid and the construction of a new building started during 1974. The Society fell short of funds and approached a bank for a loan to complete the building. It was then discovered that the Society was yet to be incorporated under the Societies’ Act. Consequently the Khalsa Diwan Society, New Westminster was incorporated during 1974.
                </p>

                <!-- Image 3: Tesson Thaliath -->
                <div class="page-landscape-image">
                    <img src="<?php echo esc_url( $story_img_3 ); ?>" alt="Our Story - Foundation">
                </div>

                <p class="page-paragraph">
                    The present Gurdwara building was completed and opened for worship during the winter of 1975. In addition the Society also bought another house at 338 Boyne Street, New Westminster for $4,700.00. The present Gurdwara building was extended with an adjoining hall to provide extra facilities for religious services for the community.
                </p>

                <p class="page-paragraph">
                    From 2009 to 2015, additional adjoining properties were purchased to expand the Gurdwara Sahib building and parking lots. A renovation and expansion project was also started in 2009 that has completed in 2016, that further extended Prayer Halls and provide additional facilities for programs and services.
                </p>

                <!-- Image 4: Sandie Peters -->
                <div class="page-landscape-image">
                    <img src="<?php echo esc_url( $story_img_4 ); ?>" alt="Our Story - Renovations">
                </div>

                <!-- Section 2: Centennial Celebrations -->
                <header class="page-content-header" style="margin-top: 60px;">
                    <h1 class="page-title-main">Centennial Celebrations in 2020</h1>
                </header>

                <p class="page-paragraph">
                    Centennial Celebrations in 2020, celebrating 100 Years of contributions.
                </p>

                <p class="page-paragraph">
                    We partnered with New Westminster Museum and Archives and South Asian Canadian Histories Association (SACHA) to create an interactive exhibition at the Anvil Centre in New Westminster.
                </p>

                <p class="page-paragraph">
                    We were honoured to have local dignitaries and many members of the community, both young and old attend this exhibition.
                </p>

                <p class="page-paragraph">
                    Below are some images from the opening night of the exhibition.
                </p>
            <?php endif; ?>
        <?php endwhile; endif; ?>
    </div> <!-- Close page-content-container -->

    <!-- Exhibition Carousel Section -->
    <div class="exhibition-carousel-wrapper">
        <button class="carousel-arrow arrow-left" id="exhibit-prev-btn" aria-label="Previous images">
            <svg viewBox="0 0 24 24">
                <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
            </svg>
        </button>

        <div class="exhibition-carousel-container" id="exhibit-scroll-container">
            <div class="exhibition-grid">
                <!-- Column 1 -->
                <div class="exhibit-column">
                    <div class="exhibit-card tall">
                        <img src="https://static.wixstatic.com/media/11062b_fb4edb4cc6f94a2eabbc76fbca4eebfa~mv2.jpg/v1/fill/w_926,h_900,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Sand.jpg"
                            alt="Sand texture">
                    </div>
                    <div class="exhibit-card short">
                        <img src="https://static.wixstatic.com/media/11062b_39ef5df3c7f24a6e990836f542aa56ec~mv2_d_5184_3456_s_4_2.jpg/v1/fill/w_362,h_539,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/11062b_39ef5df3c7f24a6e990836f542aa56ec~mv2_d_5184_3456_s_4_2.jpg"
                            alt="Desert dunes">
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="exhibit-column">
                    <div class="exhibit-card tall">
                        <img src="https://static.wixstatic.com/media/11062b_4869ca98e0004bc493baddee41f0593a~mv2.jpeg/v1/fill/w_796,h_1118,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Golden%20Bokeh%20Background.jpeg"
                            alt="Golden bokeh">
                    </div>
                    <div class="exhibit-card short">
                        <img src="https://static.wixstatic.com/media/11062b_532bdfe0394b41af9571cf0c692c0ea4~mv2.jpeg/v1/fill/w_362,h_539,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/11062b_532bdfe0394b41af9571cf0c692c0ea4~mv2.jpeg"
                            alt="Glitter gold texture">
                    </div>
                </div>

                <!-- Column 3 -->
                <div class="exhibit-column">
                    <div class="exhibit-card tall">
                        <img src="https://static.wixstatic.com/media/11062b_308dbaa37c744be982851c6e87135522~mv2.jpg/v1/fill/w_362,h_539,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/11062b_308dbaa37c744be982851c6e87135522~mv2.jpg"
                            alt="Exhibition opening">
                    </div>
                    <div class="exhibit-card short">
                        <img src="https://static.wixstatic.com/media/nsplsh_15db761879cf4192a97990bd03bae124~mv2.jpg/v1/fill/w_1960,h_682,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Image%20by%20Agata%20Create.jpg"
                            alt="Abstract gold curves">
                    </div>
                </div>

                <!-- Column 4 -->
                <div class="exhibit-column">
                    <div class="exhibit-card tall">
                        <img src="https://static.wixstatic.com/media/11062b_f68ce489130a47c59b8de76b5b20b78b~mv2.jpg/v1/fill/w_362,h_539,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/11062b_f68ce489130a47c59b8de76b5b20b78b~mv2.jpg"
                            alt="Visitors listening">
                    </div>
                    <div class="exhibit-card short">
                        <img src="https://static.wixstatic.com/media/11062b_fcc67ab2b060424fad9ea44851f2b067~mv2.jpg/v1/fill/w_1960,h_880,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Long%20Road.jpg"
                            alt="Sand ripples landscape">
                    </div>
                </div>

                <!-- Extra set for scrollable content -->
                <!-- Column 5 -->
                <div class="exhibit-column">
                    <div class="exhibit-card tall">
                        <img src="https://static.wixstatic.com/media/11062b_fb4edb4cc6f94a2eabbc76fbca4eebfa~mv2.jpg/v1/fill/w_926,h_900,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Sand.jpg"
                            alt="Sand texture">
                    </div>
                    <div class="exhibit-card short">
                        <img src="https://static.wixstatic.com/media/11062b_39ef5df3c7f24a6e990836f542aa56ec~mv2_d_5184_3456_s_4_2.jpg/v1/fill/w_362,h_539,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/11062b_39ef5df3c7f24a6e990836f542aa56ec~mv2_d_5184_3456_s_4_2.jpg"
                            alt="Desert dunes">
                    </div>
                </div>

                <!-- Column 6 -->
                <div class="exhibit-column">
                    <div class="exhibit-card tall">
                        <img src="https://static.wixstatic.com/media/11062b_4869ca98e0004bc493baddee41f0593a~mv2.jpeg/v1/fill/w_796,h_1118,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Golden%20Bokeh%20Background.jpeg"
                            alt="Golden bokeh">
                    </div>
                    <div class="exhibit-card short">
                        <img src="https://static.wixstatic.com/media/11062b_532bdfe0394b41af9571cf0c692c0ea4~mv2.jpeg/v1/fill/w_362,h_539,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/11062b_532bdfe0394b41af9571cf0c692c0ea4~mv2.jpeg"
                            alt="Glitter gold texture">
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-arrow arrow-right" id="exhibit-next-btn" aria-label="Next images">
            <svg viewBox="0 0 24 24">
                <path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12z" />
            </svg>
        </button>
    </div>

    <!-- Lightbox Modal -->
    <div id="exhibition-lightbox" class="exhibit-lightbox" aria-hidden="true" role="dialog">
        <button class="lightbox-close" id="lightbox-close-btn" aria-label="Close Lightbox">&times;</button>
        <div class="lightbox-content">
            <img id="lightbox-image" src="" alt="Exhibition Full View">
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const container = document.getElementById('exhibit-scroll-container');
            const prevBtn = document.getElementById('exhibit-prev-btn');
            const nextBtn = document.getElementById('exhibit-next-btn');

            // Scroll by one column width + gap (240px + 14px)
            const scrollAmount = 254;

            if (prevBtn && nextBtn && container) {
                prevBtn.addEventListener('click', function () {
                    container.scrollBy({
                        left: -scrollAmount,
                        behavior: 'smooth'
                    });
                });

                nextBtn.addEventListener('click', function () {
                    container.scrollBy({
                        left: scrollAmount,
                        behavior: 'smooth'
                    });
                });
            }

            // lightbox overlay popups
            const lightbox = document.getElementById('exhibition-lightbox');
            const lightboxImg = document.getElementById('lightbox-image');
            const closeBtn = document.getElementById('lightbox-close-btn');
            const cards = document.querySelectorAll('.exhibit-card img');

            cards.forEach(img => {
                img.style.cursor = 'pointer';
                img.addEventListener('click', function() {
                    if (lightboxImg && lightbox) {
                        lightboxImg.src = this.src;
                        lightboxImg.alt = this.alt;
                        lightbox.classList.add('open');
                        lightbox.setAttribute('aria-hidden', 'false');
                        document.body.style.overflow = 'hidden'; // freeze page scroll
                    }
                });
            });

            function closeLightbox() {
                if (lightbox && lightboxImg) {
                    lightbox.classList.remove('open');
                    lightbox.setAttribute('aria-hidden', 'true');
                    document.body.style.overflow = ''; // let page scroll again
                    setTimeout(() => {
                        lightboxImg.src = '';
                    }, 300);
                }
            }

            if (closeBtn) {
                closeBtn.addEventListener('click', closeLightbox);
            }
            if (lightbox) {
                lightbox.addEventListener('click', function(e) {
                    if (e.target === lightbox || e.target.classList.contains('lightbox-content')) {
                        closeLightbox();
                    }
                });
            }
        });
    </script>

</article>

<?php
get_footer();
?>