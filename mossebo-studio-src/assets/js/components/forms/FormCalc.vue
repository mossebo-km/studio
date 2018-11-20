<template>
    <div class="form-calc block-ui">
        <div class="form-calc__content">
            <div class="form-calc__title">
                {{ FormTitle }}
            </div>
            <div class="form-calc__form">
                <form :action="FormAction" class="form js-fs">
                    <input type="hidden" name="_ajax_nonce" :value="FormHiddenAjaxNonce">
                    <input type="hidden" name="action" :value="FormHiddenNameAction">
                    <input type="hidden" name="page_url" :value="FormHiddenPageUrl">

                    <transition name="fade">
                    <div class="form-calc-step" v-show="FormStep1">
                        <div class="form-calc-step__description">
                            Укажите площадь помещения:
                        </div>
                        <div class="form-group mt-16">
                            <input
                                class="form-input form-input--large"
                                type="number"
                                name="area"
                                :placeholder="FormInputArea"
                                v-model="FormInputAreaValue"
                                min="1"
                                max="9999"
                                required
                            >
                        </div>
                        <div class="button button-dark mt-32" @click="toStep2">
                            Далее
                        </div>
                        <div class="form-calc-step__by_step">
                            Шаг 1 из 3
                        </div>
                    </div>
                    </transition>

                    <transition name="fade">
                    <div class="form-calc-step" v-show="FormStep2">
                        <div class="form-calc-step__description">
                            Укажите тип помещения:
                        </div>
                        <div class="form-group mt-16">
                            <select class="form-select"
                                    name="hometype"
                            >
                                <option>Новостройка</option>
                                <option>Вторичное жилье</option>
                                <option>Загородный дом</option>
                            </select>
                        </div>
                        <div class="button button-dark mt-32"  @click="toStep3">
                            Далее
                        </div>
                        <div class="form-calc-step__by_step">
                            Шаг 2 из 3
                        </div>
                    </div>
                    </transition>

                    <transition name="fade">
                    <div class="form-calc-step" v-show="FormStep3">

                        <div class="form-calc-step__description">
                            Введите Ваш номер телефона:
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
                    </div>
                    </transition>

                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "FormCalc",
        props: {
            FormAction: String,
            FormHiddenAjaxNonce: String,
            FormHiddenNameAction: String,
            FormHiddenPageUrl: String,
            FormTitle: String,

            FormInputArea: String,
            FormInputPhone: String,
            FormButtonText: String,

            PrivacyPolicy: {
                type: Boolean,
                default: false
            },
            PrivacyPolicyText: String,
            PrivacyPolicyLink: String,
            PrivacyPolicyLinkText: String
        },
        data() {
            return {
                FormInputAreaValue: Number,
                FormStep1: true,
                FormStep2: false,
                FormStep3: false,
            }
        },
        methods: {
            toStep2() {
                if(this.FormInputAreaValue > 10) {
                    this.FormStep1 = false;
                    this.FormStep2 = true;
                    this.FormStep3 = false;
                }
                else {
                    console.log('1 step fail')
                }
            },
            toStep3() {
                this.FormStep1 = false;
                this.FormStep2 = false;
                this.FormStep3 = true;
                $('.form-calc__form').css({ "min-height": "238px"});
            }
        }
    }
</script>
