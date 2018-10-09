<div class="media-about-us">
    <div class="container">
        <h2 class="title-h2">
            <?php _e('СМИ о нас', 'mossebo') ?>
        </h2>

        <div class="media-about-us__container">
            <div class="row">
                <?php foreach (getMedia() as $media) : ?>
                    <div class="media-about-us__item col-6 col-sm-4 col-lg-3">
                        <a
                            href="<?= $media['link'] ?>"
                            target="_blank"
                            class="media-about-us-card block-ui block-ui--with-hover"
                            rel="nofollow noreferrer noopener"
                        >
                            <img
                                src="<?= $media['srcset'] ?>"
                                srcset="<?= $media['srcset'] ?> 2x"
                                alt="<?= $media['name'] ?>">
                        </a>
                    </div>
                <?php endforeach ?>

            </div>
        </div>
    </div>
</div>


