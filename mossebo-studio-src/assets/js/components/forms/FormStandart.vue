<template>
    <div class="accent-form block-ui">
        <div class="accent-form__content">
            <div class="accent-form__title">
                {{ FormTitle }}
            </div>

            <div class="accent-form__under-title" v-if="FormSubtitle">
                {{ FormSubtitle }}
            </div>

            <div class="accent-form__form">
                <form class="form js-fs" :action="FormAction">
                    <input type="hidden" name="_ajax_nonce" :value="FormHiddenAjaxNonce">
                    <input type="hidden" name="action" :value="FormHiddenNameAction">
                    <input type="hidden" name="page_url" :value="FormHiddenPageUrl">

                    <div class="form-group mt-16">
                        <input
                            class="form-input form-input--large"
                            type="text"
                            name="name"
                            :placeholder="FormInputName"
                            required
                        >
                    </div>

                    <div class="form-group mt-16">
                        <input
                            class="form-input form-input--large"
                            type="tel"
                            name="phone"
                            :placeholder="FormInputPhone"
                            required
                        >
                    </div>

                    <div class="form-group mt-16" v-if="FormEmail">
                        <input
                            class="form-input form-input--large"
                            type="email"
                            name="email"
                            :placeholder="FormInputEmail"
                            required
                        >
                    </div>

                    <div class="form-submit mt-32">
                        <button type="submit" class="button button-loading button-dark">
                        <span class="button-loading__content">
                            {{ FormButtonText }}
                        </span>

                            <svg class="button-loading__loader">
                                <use xlink:href="/wp-content/themes/mossebo/assets/images/icons.svg#symbol-spinner"></use>
                            </svg>
                        </button>
                    </div>

                    <div class="accent-form__policy" v-if="PrivacyPolicy">
                        <label class="form-checkbox form-checkbox--dark mt-32">
                            <input
                                type="checkbox"
                                class="form-checkbox__input"
                                required
                                checked
                            >

                            <span class="form-checkbox__checkmark"></span>

                            <span class="form-checkbox__value">
                            {{ PrivacyPolicyText }}
                                <a class="link link--inverse"
                                   :href="PrivacyPolicyLink"
                                   target="_blank">
                                    {{ PrivacyPolicyLinkText }}
                                </a>
                            </span>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "FormStandart",
        props: {
            FormAction: String,
            FormHiddenAjaxNonce: String,
            FormHiddenNameAction: String,
            FormHiddenPageUrl: String,
            FormTitle: String,
            FormSubtitle: String,
            FormInputName: String,
            FormInputPhone: String,
            FormInputEmail: String,
            FormEmail: {
                type: Boolean,
                default: false
            },
            FormButtonText: String,
            PrivacyPolicy: {
                type: Boolean,
                default: false
            },
            PrivacyPolicyText: String,
            PrivacyPolicyLink: String,
            PrivacyPolicyLinkText: String,
        }
    }
</script>
