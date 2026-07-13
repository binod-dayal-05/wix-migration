<?php
/**
 * Template Name: Guru Sahibaan Page
 * Description: Custom page template for the Guru Sahibaan page.
 */

get_header();
?>

<!-- Hero Section with Golden Temple Cover -->
<section id="comp-mkj6ux28" class="page-hero-strip">
    <div class="hero-bg-container">
        <img class="hero-bg-img"
            src="https://static.wixstatic.com/media/11062b_ade08d73d5a54a8bab0c6d549ef04a95~mv2.jpeg/v1/fill/w_1581,h_669,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/11062b_ade08d73d5a54a8bab0c6d549ef04a95~mv2.jpeg"
            alt="Golden Temple">
    </div>

    <!-- Centered Quote Box Overlay -->
    <div id="comp-mkj6vd9a" class="quote-box-container">
        <div class="quote-box-content">
            <blockquote class="quote-text-gurmukhi">
                ਗੁਰ ਜੈਸਾ ਨਾਹੀ ਕੋ ਦੇਵ ॥
            </blockquote>
            <blockquote class="quote-text-english">
                There is no deity equal to the Guru.
            </blockquote>
            <p class="quote-attribution">
                Guru Arjan Dev Ji in Raag Bhairao - 1142
            </p>
        </div>
    </div>
</section>

<!-- Gurus Slider Carousel Section -->
<section class="gurus-carousel-section">
    <div class="gurus-carousel-container">

        <!-- Left Slider Arrow -->
        <button class="gurus-carousel-arrow arrow-left" id="guru-prev-btn" aria-label="Previous Guru">
            <svg viewBox="0 0 24 24">
                <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
            </svg>
        </button>

        <!-- Main Display Card Wrapper -->
        <div class="guru-display-card" id="guru-display-card">
            <!-- Left Side: Guru Portrait Image -->
            <div class="guru-image-column">
                <img id="guru-portrait-img" src="" alt="Guru Portrait">
            </div>

            <!-- Right Side: Guru Text Details -->
            <div class="guru-details-column">
                <h2 class="guru-name-heading" id="guru-name-title"></h2>
                <div class="guru-biography-text" id="guru-bio-container">
                    <!-- Dynamic paragraphs will go here -->
                </div>
            </div>
        </div>

        <!-- Right Slider Arrow -->
        <button class="gurus-carousel-arrow arrow-right" id="guru-next-btn" aria-label="Next Guru">
            <svg viewBox="0 0 24 24">
                <path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12z" />
            </svg>
        </button>

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Gurus Data List - Easily add, edit or remove Gurus here
        const gurusData = [
            {
                name: "Guru Nanak Dev Ji (1469 - 1539)",
                image: "https://static.wixstatic.com/media/11062b_4869ca98e0004bc493baddee41f0593a~mv2.jpeg/v1/fill/w_796,h_1118,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Golden%20Bokeh%20Background.jpeg",
                paragraphs: [
                    "Guru Nanak Dev Ji, born in 1469 in Talwandi (now Nankana Sahib, Pakistan), was the founder and first Guru of Sikhism. From a young age, he displayed remarkable spiritual wisdom and compassion for all living beings. Throughout his life, he embarked on several transformative journeys, undertaking long travels across South Asia to spread his message of love, equality, and devotion to the one Supreme Being, regardless of caste, creed, or gender.",
                    "During his travels, Guru Nanak engaged in profound discussions with religious leaders of various faiths, challenging the prevailing social norms and advocating for the unity of humanity. His teachings emphasized the importance of meditation, selfless service, and the rejection of rituals and superstitions. Instead, he emphasized the significance of living an honest, virtuous life centered on the love and remembrance of the divine.",
                    "Guru Nanak Dev Ji's profound spiritual experiences culminated in the composition of the Guru Granth Sahib's sacred scripture, which contains his divine revelations and the works of other enlightened saints. These teachings formed the foundation of Sikhism, a religion that seeks to uphold the principles of equality, humility, and devotion."
                ]
            }
            // To add next Gurus (e.g. Guru Angad Dev Ji), simply append them here as objects:
            /*
            ,{
                name: "Guru Angad Dev Ji (1504 - 1552)",
                image: "https://static.wixstatic.com/media/...",
                paragraphs: [
                    "Guru Angad Dev Ji was the second of the ten Sikh Gurus...",
                    "Paragraph 2...",
                    "Paragraph 3..."
                ]
            }
            */
        ];

        let currentIndex = 0;

        const portraitImg = document.getElementById('guru-portrait-img');
        const nameTitle = document.getElementById('guru-name-title');
        const bioContainer = document.getElementById('guru-bio-container');
        const prevBtn = document.getElementById('guru-prev-btn');
        const nextBtn = document.getElementById('guru-next-btn');

        function updateGuruDisplay(index) {
            if (gurusData.length === 0) return;

            const guru = gurusData[index];

            // Add fade-out transition effect
            const displayCard = document.getElementById('guru-display-card');
            displayCard.style.opacity = 0;

            setTimeout(() => {
                portraitImg.src = guru.image;
                portraitImg.alt = guru.name;
                nameTitle.textContent = guru.name;

                // Clear and rebuild paragraphs
                bioContainer.innerHTML = '';
                guru.paragraphs.forEach(text => {
                    const p = document.createElement('p');
                    p.className = 'guru-bio-paragraph';
                    p.textContent = text;
                    bioContainer.appendChild(p);
                });

                // Fade-in transition effect
                displayCard.style.opacity = 1;
            }, 200);
        }

        if (prevBtn && nextBtn) {
            prevBtn.addEventListener('click', function () {
                currentIndex = (currentIndex - 1 + gurusData.length) % gurusData.length;
                updateGuruDisplay(currentIndex);
            });

            nextBtn.addEventListener('click', function () {
                currentIndex = (currentIndex + 1) % gurusData.length;
                updateGuruDisplay(currentIndex);
            });
        }

        // Initialize display with the first Guru
        updateGuruDisplay(currentIndex);
    });
</script>

<?php
get_footer();
