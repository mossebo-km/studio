<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="banner-take-catalog block-ui">

                <div class="row align-items-center">
                    <div class="col-md-6">
                        <form-standart class="form-standart"
                                       form-action="<?php echo admin_url('admin-ajax.php'); ?>"
                                       form-hidden-ajax-nonce="<?php echo wp_create_nonce( 'DESIGN_INTERIOR_nonce' ); ?>"
                                       form-hidden-name-action="DESIGN_INTERIOR"
                                       form-hidden-page-url="<?= currentUrl() ?>"
                                       form-title="Получите каталог стилей и консультацию дизайнера интерьера:"
                                       form-input-name="<?php _e('Ваше имя', 'mossebo') ?>"
                                       form-input-phone="<?php _e('Ваш телефон', 'mossebo') ?>"
                                       :form-email="false"
                                       form-button-text="Получить каталог"
                                       :privacy-policy="true"
                                       privacy-policy-text="<?php _e('Согласен на обработку персональных данных и принимаю', 'mossebo') ?>"
                                       privacy-policy-link="/privacy-policy"
                                       privacy-policy-link-text="политику конфиденциальности"
                        >
                        </form-standart>
                    </div>
                    <div class="col-md-6">
                        <img src="<?= THEME_DIR ?>/assets/images/banners/take-catalog/form-image.png"
                             class="banner-take-catalog__image"
                             alt=""
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
