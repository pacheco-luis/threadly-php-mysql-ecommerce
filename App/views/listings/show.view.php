<?= loadPartial('head') ?>
<?= loadPartial('navbar') ?>

<main class="main">
    <section>
        <div class="wrapper">
            <h3><?= $listing->name ?></h3>
            <p><?= $listing->description ?></p>
            <p>Price: <?= formatCurrency($listing->price) ?></p>
            <p>Stock: <?= $listing->qty_in_stock > 0 ? 'In Stock' : 'Out of Stock' ?></p>
            <img
                src="<?= $listing->product_image ?>"
                alt="<?= $listing->name ?>" />
        </div>
    </section>
</main>

<?= loadPartial('footer') ?>