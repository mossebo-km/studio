import Alerty from '../Alerty'

let Core = {
    translate(identif, data = {}) {
        return _.get(window.mossebo.translates, identif)
    },

    getLang() {
        return 'ru'
    },

    getFancyboxConfig() {
        return {
            toolbar: false,
            infobar: false,
            arrows: false,
            buttons: ['close'],
            protect: false,

            touch: false,
            hash: false,

            lang: this.getLang(),
            loop: true,

            autoFocus: true,

            i18n: {
                [this.getLang()]: this.translate('fancybox')
            },

            mobile : {
                clickContent : "close",
                clickSlide : "close"
            }
        }
    },

    showMessage(message, params = {}) {
        if (message) {
            new Alerty({
                message: message,
                ... params
            })
        }
    },
}

export default Core

