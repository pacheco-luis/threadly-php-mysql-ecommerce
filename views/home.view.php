<?= loadPartial('head') ?>
<?= loadPartial('navbar') ?>

<main class="main">
    <!-- HERO SECTION -->
    <section class="section-hero" aria-labelledby="hero-heading">
        <div class="wrapper">
            <h2 id="hero-heading">Fresh Arrivals Online</h2>
            <p>Discover Our Newest Collection Today.</p>
            <a href="/listings" aria-label="Navigate to collection">
                <span>View Collection</span>
                <svg class="icon icon--arrow-right" aria-hidden="true">
                    <use xlink:href="/images/sprite.svg#icon-arrow-right"></use>
                </svg>
            </a>
        </div>
    </section>

    <!-- BEST SELLING PRODUCTS SECTION -->
    <section class="section-bestselling">
        <div class="wrapper">
            Best Selling
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="section-cta" aria-labelledby="cta-heading">
        <div class="wrapper">
            <h3 id="cta-heading">Browse Our Fashion Paradise!</h3>
            <p>Step into a world of style and explore our diverse collection of clothing categories.</p>
            <a href="/listings" aria-label="Start browsing the fashion collection">
                <span>Start Browsing</span>
                <svg class="icon icon--arrow-right" aria-hidden="true">
                    <use xlink:href="/images/sprite.svg#icon-arrow-right"></use>
                </svg>
            </a>
        </div>
    </section>

    <!-- PRODUCT HIGHLIGHTS SECTION -->
    <section class="section-highlights">
        <div class="wrapper">
            Highlights
        </div>
    </section>
</main>

<?= loadPartial('footer') ?>