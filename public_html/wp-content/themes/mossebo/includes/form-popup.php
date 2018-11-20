
<div class="d-none">
    <!-- Modal Callback -->
    <div id="popup-call" class="popup animated zoomIn block-ui">
        <form-standart class="form-standart"
                       form-action="<?php echo admin_url('admin-ajax.php'); ?>"
                       form-hidden-ajax-nonce="<?php echo wp_create_nonce( 'DESIGN_INTERIOR_nonce' ); ?>"
                       form-hidden-name-action="DESIGN_INTERIOR"
                       form-hidden-page-url="<?= currentUrl() ?>"
                       form-title="Заказать обратный звонок"
                       form-subtitle="Вас бесплатно проконсультирует дизайнер интерьера Mossebo"
                       form-input-name="<?php _e('Ваше имя', 'mossebo') ?>"
                       form-input-phone="<?php _e('Ваш телефон', 'mossebo') ?>"
                       form-input-email="<?php _e('Ваш E-mail', 'mossebo') ?>"
                       :form-email="false"
                       form-button-text="Заказать звонок"
                       :privacy-policy="true"
                       privacy-policy-text="<?php _e('Согласен на обработку персональных данных и принимаю', 'mossebo') ?>"
                       privacy-policy-link="/privacy-policy"
                       privacy-policy-link-text="политику конфиденциальности"
        >
        </form-standart>
    </div>

    <!-- Modal msg-back -->
    <div id="popup-feedback" class="popup animated zoomIn block-ui">
        <form-standart class="form-standart"
                       form-action="<?php echo admin_url('admin-ajax.php'); ?>"
                       form-hidden-ajax-nonce="<?php echo wp_create_nonce( 'DESIGN_INTERIOR_nonce' ); ?>"
                       form-hidden-name-action="DESIGN_INTERIOR"
                       form-hidden-page-url="<?= currentUrl() ?>"
                       form-title="Напишите нам"
                       form-subtitle="Заполните короткую форму и мы свяжемся с Вами в ближайшее время!"
                       form-input-name="<?php _e('Ваше имя', 'mossebo') ?>"
                       form-input-phone="<?php _e('Ваш телефон', 'mossebo') ?>"
                       form-input-email="<?php _e('Ваш E-mail', 'mossebo') ?>"
                       :form-email="true"
                       form-button-text="Отправить"
                       :privacy-policy="true"
                       privacy-policy-text="<?php _e('Согласен на обработку персональных данных и принимаю', 'mossebo') ?>"
                       privacy-policy-link="/privacy-policy"
                       privacy-policy-link-text="политику конфиденциальности"
        >
        </form-standart>
    </div>
</div>
