<?= loadPartial('head') ?>
<?= loadPartial('navbar') ?>

<main class="main">
    <!-- PRODUCT LISTING -->
    <div
        class="product-listing"
        role="list">
        <?php foreach ($products as $product): ?>
            <!-- PRODUCT CARD -->
            <a
                href="/listings?id=<?= $product->id ?>"
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
            </a>
        <?php endforeach; ?>
    </div>
</main>

<?= loadPartial('footer') ?>