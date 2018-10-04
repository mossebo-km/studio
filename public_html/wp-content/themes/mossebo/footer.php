<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="footer__left">
                    <a href="/" class="logo">
                        <svg class="symbol-logo">
                            <use xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#logo-header"></use>
                        </svg>
                    </a>

                    <div class="social-links">
                        <div class="social-links__container">
                            <div class="social-links__item">
                                <a
                                    href="#"
                                    class="social-links__link"
                                    target="_blank"
                                    rel="nofollow noreferrer noopener"
                                >
                                    <svg class="social-links__icon symbol-icon">
                                        <use xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#social-in"></use>
                                    </svg>
                                </a>
                            </div>

                            <div class="social-links__item">
                                <a
                                    href="#"
                                    class="social-links__link"
                                    target="_blank"
                                    rel="nofollow noreferrer noopener"
                                >
                                    <svg class="social-links__icon symbol-icon">
                                        <use xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#social-vk"></use>
                                    </svg>
                                </a>
                            </div>

                            <div class="social-links__item">
                                <a
                                    href="#"
                                    class="social-links__link"
                                    target="_blank"
                                    rel="nofollow noreferrer noopener"
                                >
                                    <svg class="social-links__icon symbol-icon">
                                        <use xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#social-fb"></use>
                                    </svg>
                                </a>
                            </div>

                            <div class="social-links__item">
                                <a
                                    href="#"
                                    class="social-links__link"
                                    target="_blank"
                                    rel="nofollow noreferrer noopener"
                                >
                                    <svg class="social-links__icon symbol-icon">
                                        <use xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#social-ok"></use>
                                    </svg>
                                </a>
                            </div>

                            <div class="social-links__item">
                                <a
                                    href="#"
                                    class="social-links__link"
                                    target="_blank"
                                    rel="nofollow noreferrer noopener"
                                >
                                    <svg class="social-links__icon symbol-icon">
                                        <use xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#social-zen"></use>
                                    </svg>
                                </a>
                            </div>

                            <div class="social-links__item">
                                <a
                                    href="#"
                                    class="social-links__link"
                                    target="_blank"
                                    rel="nofollow noreferrer noopener"
                                >
                                    <svg class="social-links__icon symbol-icon">
                                        <use xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#social-pi"></use>
                                    </svg>
                                </a>
                            </div>

                            <div class="social-links__item">
                                <a
                                    href="#"
                                    class="social-links__link"
                                    target="_blank"
                                    rel="nofollow noreferrer noopener"
                                >
                                    <svg class="social-links__icon symbol-icon">
                                        <use xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#social-you"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="footer-company-info">
                        <?php _e('Услуги, условия оказания которых описываются на страницах данного сайта, предоставляются компанией ООО "Моссэбо КМ". Компания зарегистрирована в качестве бренда, под регистрационным номером 138,716 в г. Санкт-Петербург', 'mossebo') ?>
                    </div>

                    <div class="footer-buttons">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-9 col-md-6">
                                <a href="#popup-call" class="button button-light button-long js-form-popup">
                                    <?php _e('Позвонить', 'mossebo') ?>
                                </a>
                            </div>

                            <div class="col-9 col-md-6">
                                <a href="#popup-feedback" class="button button-light button-long js-form-popup">
                                    <?php _e('Написать', 'mossebo') ?>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <div class="col-md-6">
                <div class="row footer-nav">
                    <div class="col-md-6">
                        <nav>
                            <div class="footer-nav__title">
                                Mossebo.Studio
                            </div>

                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer_menu'
                            ));
                            ?>

                        </nav>
                    </div>

                    <div class="col-md-6">
                        <nav>
                            <div class="footer-nav__title">
                                Mossebo.Market
                            </div>

                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer_menu_market'
                            ));
                            ?>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="rcopy">
                        &copy; 2014-<?php echo date("Y"); ?> Mossebo.Studio
                    </div>
                </div>
                <div class="col-md-5 footer-bottom__links">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="#">
                                <?php _e('Правила пользования', 'mossebo') ?>
                            </a>
                        </div>

                        <div class="col-lg-6">
                            <a href="#">
                                <?php _e('Политика конфиденциальности', 'mossebo') ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

</div>
<!-- /APP -->

<script src="<?php echo mix('assets/js/manifest.js') ?>" defer></script>
<script src="<?php echo mix('assets/js/vendor.js') ?>" defer></script>
<script src="<?php echo mix('assets/js/app.js') ?>" defer></script>


<?php wp_footer(); ?>

</body>
</html>
