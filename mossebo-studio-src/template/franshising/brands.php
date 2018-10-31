<div class="container">
    <div class="brands">
        <div class="brands__row">
            <?php foreach (getMedia() as $media) : ?>
            <div class="brands__item">
                <div
                    style="background-image: url(<?= $media['srcset'] ?>)"
                    class="brand-image"
                ></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
