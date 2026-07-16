<?php
// Template Name: Naam Japna Page
// Description: Custom page template for the Naam Japna page.

get_header();

// acf variables with fallback defaults
$hero_bg_img = function_exists('get_field') ? get_field('hero_bg_image') : 'https://static.wixstatic.com/media/nsplsh_b4b4dd451d5b44759fd2a1207d498e3b~mv2.jpg/v1/fill/w_1581,h_831,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/nsplsh_b4b4dd451d5b44759fd2a1207d498e3b~mv2.jpg';
$quote_gurmukhi = function_exists('get_field') ? get_field('quote_gurmukhi') : 'Nanak naam jahaz hai, charhe so utre paar, Jo sharda kar sevde, gur paar utaran haar.';
$quote_english_1 = 'O Nanak, the name of God is a ship, one boards to alight across the ocean (this world is akin to an ocean).';
$quote_english_2 = 'Whosoever serves with devotion, the Guru assists (him/her) in alighting across (the ocean).';
$quote_english = function_exists('get_field') ? get_field('quote_english') : "<p>{$quote_english_1}</p><p>{$quote_english_2}</p>";

$page_subtitle = function_exists('get_field') ? get_field('page_subtitle') : '3 Pillars of Sikhi';
$landscape_img_1 = function_exists('get_field') ? get_field('landscape_image_1') : 'https://static.wixstatic.com/media/nsplsh_4e6d50707a316a415f4a45~mv2_d_2746_1819_s_2.jpg/v1/fill/w_1960,h_682,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Image%20by%20Cherry%20Laithang.jpg';
$landscape_img_2 = function_exists('get_field') ? get_field('landscape_image_2') : 'https://static.wixstatic.com/media/nsplsh_15db761879cf4192a97990bd03bae124~mv2.jpg/v1/fill/w_1960,h_682,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Image%20by%20Agata%20Create.jpg';
?>

<!-- main page banner -->
<section id="comp-mkj8wluq3" class="page-hero-strip naam-japna-hero">
    <div class="hero-bg-container">
        <img class="hero-bg-img" src="<?php echo esc_url( $hero_bg_img ); ?>" alt="Sunset Ocean">
    </div>
    
    <!-- quote overlay block -->
    <div class="quote-box-container">
        <div class="quote-box-content">
            <blockquote class="quote-text-gurmukhi">
                <?php echo esc_html( $quote_gurmukhi ); ?>
            </blockquote>
            <div class="quote-text-english">
                <?php echo wp_kses_post( $quote_english ); ?>
            </div>
        </div>
    </div>
</section>

<!-- page content section -->
<article class="page-content-section">
    <div class="page-content-container">
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if ( get_the_content() ) : ?>
                <!-- If the WP Admin Editor has content, output it dynamically -->
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
                <!-- Fallback to the original static Wix migration layout -->
                <header class="page-content-header">
                    <h1 class="page-title-main"><?php the_title(); ?></h1>
                    <h2 class="page-subtitle-main"><?php echo esc_html( $page_subtitle ); ?></h2>
                </header>
                
                <!-- Paragraph 1 & 2 -->
                <p class="page-paragraph">
                    Naam Simran is the only way to attain unity with God. Guru Nanak Dev established God's golden rules for leading a pure and pious life. He preached the concepts in his life and are a great reminder to us on a daily basis that life is a gift and there is a reason we are here and by remembering that reason we should also be thankful!
                </p>
                
                <p class="page-paragraph">
                    The Gurus led the Sikhs directly to practise <em>Simran</em> and <em>Naam Japna</em> - meditation on God through reciting, chanting, singing and constant remembrance followed by deep study &amp; comprehension of God's Name and virtues (Gurbani the Compendium of ETERNAL truth). The inner voice of the Sikh thus stays immersed in praises and appreciation of the Creator and the ONE ETERNAL GOD Waheguru and his WILL. The Sikh is to intuitively practice and stay focussed on the True Path through every breath throughout his life. Various ways were gifted to the Sikhs to remember and tread on this path of righteousness. To begin with and as a social habit, recite the <em>Nitnem</em> <em>banis</em> daily in remembrance of the grace and <em>Kirpa</em> (blessing) of the Almighty. ‘Early to bed &amp; early to rise…’ is the FIRST STEP towards the Gate to Sikhism.
                </p>
                
                <!-- Devotional Landscape Image -->
                <div class="page-landscape-image">
                    <img src="<?php echo esc_url( $landscape_img_1 ); ?>" alt="Focus on God">
                </div>

                <!-- Remaining Body Copy -->
                <p class="page-paragraph">
                    A great stress is given on Naam Simran in Sikhism. A Sikh is required to lead a virtuous, pure and pious life. This virtue can be attained by always remembering and repeating name of God with full concentration, breath by breath. Nam will create love and affection for all those who are created by God. It is strongly believed that a pious person would be compassionate and contended. He will aspire to serve the needy. He will have no enmity with any one as he knows that God lives in every human being. Hurting of humanity would hurt God. So serve His Creation to serve God and remember Name of God day and night. The mortal can attain God by living in Him, by dying in Him, by Naming Him and in loving Him. Sikhism believes in worshipping One God (Puja Akal Ki) who lives everywhere and in hearts of all. Every Sikh is required to worship Shabad and adore God's Name. The Name of God washes away the dirt of mind. Sikhism believes in observance of both Bani and Bana.
                </p>
                
                <p class="page-paragraph">
                    Higher truth is not experienced through the normal process by an average person. Higher truth is not mere fantasy or hallucination of philosophical speculation that comes into the mind of a person but it is in fact an experience undergone through practice of psychosomatic discipline, Simran and regulated Saadhna.
                </p>

                <p class="page-paragraph">
                    “Recognize thyself O’ vicious mammon worshipper recognize thy origin. This body is made from blood and semen and shall be taken to fire. According to true mark on the brow (fate), the body is in the power of breath.”ਸਾਕਤ ਨਿਰਗੁਣਿਆਰਿਆ ਆਪਣਾ ਮੂਲੁ ਪਛਾਣੁ ॥ਰਕਤੁ ਬਿੰਦੁ ਕਾ ਇਹੁ ਤਨੋ ਅਗਨੀ ਪਾਸਿ ਪਿਰਾਣੁ ॥ਪਵਣੈ ਕੈ ਵਸਿ ਦੇਹੁਰੀ ਮਸਤਕਿ ਸਚੁ ਨੀਸਾਣੁ ॥” (63)
                </p>

                <!-- Second Landscape Image -->
                <div class="page-landscape-image">
                    <img src="<?php echo esc_url( $landscape_img_2 ); ?>" alt="Focus on God - Spiritual">
                </div>
                
                <p class="page-paragraph">
                    Sikhs are directed to concentrate their minds on God, to reflect on God's virtues such as love, benevolence, and kindness. Sikhs practice this to inculcate such virtues into their own character. This can be done by reciting Gurbani, by listening to the singing of hymns from Gurbani, or by sitting in a quiet place and attentively thinking of God, forgetting all else.
                </p>
                
                <p class="page-paragraph">
                    Through this constant meditation, and not simply the repeating of a mantra, Sikhs develop a feeling of affection and love for humanity. Such a person does not merely talk about the brotherhood of humanity but actually tries to feel it continuously throughout their life. The thought of being a member of this human family becomes stronger and stronger and soon this fact is reflected in the daily behaviour of the devotee. Such a Sikh derives immense pleasure and satisfaction by observing the presence of God in every human being.
                </p>

                <p class="page-paragraph">
                    This achievement or realization changes the thinking and behavior of such persons and instead of hurting others, they enjoy utilizing their life serving society. They cannot think of doing any act to harm others, because they “see” the living God inside every human being. This is why Nam is given the highest priority in the Sikh faith.
                </p>
            <?php endif; ?>
        <?php endwhile; endif; ?>
    </div>
</article>

<?php
get_footer();
