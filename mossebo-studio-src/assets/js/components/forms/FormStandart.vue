<template>
    <div>
        <div class="accent-form">
            <div class="accent-form__content">
                <div class="accent-form__title">
                    {{ FormTitle }}
                </div>

                <div class="accent-form__under-title"
                     v-if="FormSubtitle"
                >
                    {{ FormSubtitle }}
                </div>
                <div class="accent-form__form">
                    <form class="form js-fs" :action="FormAction">
                        <div class="form-group mt-16">
                            <input
                                class="form-input"
                                type="text"
                                name="name"
                                placeholder="Ваше имя"
                                required
                            >
                        </div>

                        <div class="form-group mt-16">
                            <input
                                class="form-input"
                                type="tel"
                                name="phone"
                                placeholder="Номер телефона"
                                required
                            >
                        </div>


                        <div class="form-group mt-16"
                             v-if="FormEmail"
                        >
                            <input
                                class="form-input"
                                type="email"
                                name="email"
                                placeholder="E-mail"
                            >
                        </div>

                        <div class="form-submit mt-32">
                            <button type="submit" class="button button-loading button-dark">
                                        <span class="button-loading__content">
                                            Отправить заявку
                                        </span>

                                <svg class="button-loading__loader">
                                    <use xlink:href="/wp-content/themes/mossebo/assets/images/icons.svg#symbol-spinner"></use>
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
    </div>
</template>

<script>
    export default {
        name: "FormStandart",
        props: [
            'FormAction',
            'FormTitle',
            'FormSubtitle',
            'FormEmail'
        ]
    }
</script>
