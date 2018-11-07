<div class="interior-design-form-bottom">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-5">

                <form-standart class="form-standart"
                               form-action="<?php echo admin_url('admin-ajax.php'); ?>"
                               form-hidden-ajax-nonce="<?php echo wp_create_nonce( 'DESIGN_INTERIOR_nonce' ); ?>"
                               form-hidden-name-action="DESIGN_INTERIOR"
                               form-hidden-page-url="<?= currentUrl() ?>"
                               form-title="Получите бесплатную консультацию:"
                               form-input-name="<?php _e('Ваше имя', 'mossebo') ?>"
                               form-input-phone="<?php _e('Ваш телефон', 'mossebo') ?>"
                               form-input-email="<?php _e('Ваш E-mail', 'mossebo') ?>"
                               :form-email="false"
                               form-button-text="Отправить заявку"
                               :privacy-policy="true"
                               privacy-policy-text="<?php _e('Согласен на обработку персональных данных и принимаю', 'mossebo') ?>"
                               privacy-policy-link="/privacy-policy"
                               privacy-policy-link-text="политику конфиденциальности"
                >
                </form-standart>
            </div>
            <div class="col-7">
                <img src="<?php echo THEME_DIR . '/assets/images/interior-design/form__bottom.png'; ?>" alt="" class="interior-design-form-bottom__decor-image">
            </div>
        </div>
    </div>
</div>
