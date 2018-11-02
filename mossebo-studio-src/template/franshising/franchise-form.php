<div class="accent-form block-ui">
    <div class="accent-form__content">
        <div class="accent-form__title">
            Узнайте подробнее
        </div>

        <div class="accent-form__under-title">
            Начните свой бизнес под брендом Mossebo
        </div>

        <div class="accent-form__form">
            <form class="form js-fs" action="<?php echo admin_url('admin-ajax.php'); ?>">
                <input type="hidden" name="_ajax_nonce" value="<?php echo wp_create_nonce( 'FRANCHISE_FORM_nonce' ); ?>">
                <input type="hidden" name="action" value="FRANCHISE_FORM">
                <input type="hidden" name="page_url" value="<?= currentUrl() ?>">

                <div class="form-group mt-16">
                    <input
                        class="form-input form-input--large"
                        type="text"
                        name="name"
                        placeholder="Ваше имя"
                        required
                    >
                </div>

                <div class="form-group mt-16">
                    <input
                        class="form-input form-input--large"
                        type="tel"
                        name="phone"
                        placeholder="Номер телефона"
                        required
                    >
                </div>

                <div class="form-group mt-16">
                    <input
                        class="form-input form-input--large"
                        type="email"
                        name="email"
                        placeholder="E-mail"
                        required
                    >
                </div>

                <div class="form-submit mt-32">
                    <button type="submit" class="button button-loading button-dark">
                        <span class="button-loading__content">
                            Отправить заявку
                        </span>

                        <svg class="button-loading__loader">
                            <use xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#symbol-spinner"></use>
                        </svg>
                    </button>
                </div>

                <div class="accent-form__policy">
                    <label class="form-checkbox form-checkbox--dark mt-32">
                        <input
                            type="checkbox"
                            class="form-checkbox__input"
                            required
                            checked
                        >

                        <span class="form-checkbox__checkmark"></span>

                        <span class="form-checkbox__value">
                            Согласен на обработку персональных данных и принимаю <a class="link link--inverse" href="/privacy-policy" target="_blank">политику конфиденциальности</a>
                        </span>
                    </label>
                </div>
            </form>
        </div>
    </div>
</div>
