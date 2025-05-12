<?= loadPartial('head') ?>
<?= loadPartial('navbar') ?>

<main class="main">
    <!-- HERO SECTION -->
    <section
        class="section-hero"
        aria-labelledby="hero-heading">
        <div class="wrapper">
            <h2 id="hero-heading">Fresh Arrivals Online</h2>
            <p>Discover Our Newest Collection Today.</p>
            <a
                href="/listings"
                aria-label="Navigate to collection">
                <span>View Collection</span>
                <svg
                    class="icon icon--arrow-right"
                    aria-hidden="true">
                    <use xlink:href="/images/sprite.svg#icon-arrow-right"></use>
                </svg>
            </a>
        </div>
    </section>

    <!-- BEST SELLING PRODUCTS SECTION -->
    <section
        class="section-bestselling"
        aria-labelledby="bestselling-heading">
        <div class="wrapper">
            <div>
                <p>Shop Now</p>
                <h3 id="bestselling-heading">Best Selling</h3>
            </div>

            <!-- PRODUCT LISTING -->
            <div
                class="product-listing"
                role="list">
                <?php foreach ($bestSelling as $product): ?>
                    <!-- PRODUCT CARD -->
                    <article
                        class="product-card"
                        role="listitem">
                        <!-- PRODUCT IMAGE-->
                        <img
                            src="<?= $product->product_image ?>"
                            alt="<?= $product->name ?? 'Product Image' ?>"
                            class="product-card__image" />

                        <p class="product-card__title"><?= $product->name ?></p>

                        <div class="product-card__meta">
                            <span class="product-card__stock-status">
                                <?= $product->qty_in_stock > 0 ? 'In Stock' : 'Out of Stock' ?>
                            </span>
                            <span class="product-card__price"><?= formatCurrency($product->price) ?></span>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section
        class="section-cta"
        aria-labelledby="cta-heading">
        <div class="wrapper">
            <h3 id="cta-heading">Browse Our Fashion Paradise!</h3>
            <p>Step into a world of style and explore our diverse collection of clothing categories.</p>
            <a
                href="/listings"
                aria-label="Start browsing the fashion collection">
                <span>Start Browsing</span>
                <svg
                    class="icon icon--arrow-right"
                    aria-hidden="true">
                    <use xlink:href="/images/sprite.svg#icon-arrow-right"></use>
                </svg>
            </a>
        </div>
    </section>

    <!-- PRODUCT HIGHLIGHTS SECTION -->
    <section
        class="section-highlights"
        aria-labelledby="highlights-heading">
        <div class="wrapper">
            <h3
                id="highlights-heading"
                class="visually-hidden">
                Product Highlights
            </h3>

            <!-- TAB -->
            <div class="tab">
                <!-- TABS LIST -->
                <div
                    class="tab__list"
                    role="tablist"
                    aria-label="Product highlight categories">
                    <button
                        type="button"
                        class="tab__trigger"
                        role="tab"
                        aria-selected="true"
                        aria-controls="tab-panel-1"
                        id="tab-1">
                        <span>Featured</span>
                    </button>
                    <button
                        type="button"
                        class="tab__trigger"
                        role="tab"
                        aria-selected="false"
                        aria-controls="tab-panel-2"
                        id="tab-2">
                        <span>Latest</span>
                    </button>
                </div>

                <!-- TAB FEATURED PANEL -->
                <div
                    id="tab-panel-1"
                    class="tab__panel"
                    role="tabpanel"
                    tabindex="0"
                    aria-labelledby="tab-1">
                    <!-- PRODUCT LISTING -->
                    <div
                        class="product-listing"
                        role="list">
                        <?php foreach ($featured as $product): ?>
                            <!-- PRODUCT CARD -->
                            <article
                                class="product-card"
                                role="listitem">
                                <!-- PRODUCT IMAGE-->
                                <img
                                    src="<?= $product->product_image ?>"
                                    alt="<?= $product->name ?? 'Product Image' ?>"
                                    class="product-card__image" />

                                <p class="product-card__title"><?= $product->name ?></p>

                                <div class="product-card__meta">
                                    <span class="product-card__stock-status">
                                        <?= $product->qty_in_stock > 0 ? 'In Stock' : 'Out of Stock' ?>
                                    </span>
                                    <span class="product-card__price"><?= formatCurrency($product->price) ?></span>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- TAB LATEST PANEL -->
                <div
                    id="tab-panel-2"
                    class="tab__panel"
                    role="tabpanel"
                    tabindex="0"
                    aria-labelledby="tab-2"
                    hidden>
                    <!-- PRODUCT LISTING -->
                    <div
                        class="product-listing"
                        role="list">
                        <?php foreach ($latest as $product): ?>
                            <!-- PRODUCT CARD -->
                            <article
                                class="product-card"
                                role="listitem">
                                <!-- PRODUCT IMAGE-->
                                <img
                                    src="<?= $product->product_image ?>"
                                    alt="<?= $product->name ?? 'Product Image' ?>"
                                    class="product-card__image" />

                                <p class="product-card__title"><?= $product->name ?></p>

                                <div class="product-card__meta">
                                    <span class="product-card__stock-status">
                                        <?= $product->qty_in_stock > 0 ? 'In Stock' : 'Out of Stock' ?>
                                    </span>
                                    <span class="product-card__price"><?= formatCurrency($product->price) ?></span>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?= loadPartial('footer') ?>