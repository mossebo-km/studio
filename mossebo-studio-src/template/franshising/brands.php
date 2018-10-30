

<div class="container">
    <div class="brands">
        <div class="brands__row row row--half">
            <?php foreach (getMedia() as $media) : ?>
            <div class="col-auto">
                <img
                    src="<?= $media['src'] ?>"
                    srcset="<?= $media['srcset'] ?> 2x"
                    alt="<?= $media['name'] ?>"
                    class="brand-image"
                >
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
