<div class="container">
    <div class="franchise-plan">
        <div class="franchise-plan__content">
            <div class="franchise-plan__left">
                <h2 class="title-h2">
                    <?php _e('Получите план прибыли и инвестиций', 'mossebo'); ?>
                </h2>

                <div class="franchise-plan__text h-sub">
                    <?php _e('На основе фактических финансовых показателей студий Mossebo за последние несколько лет.', 'mossebo'); ?>
                </div>

                <img
                    class="franchise-plan__image"
                    src="<?= THEME_DIR ?>/assets/images/franchise/plan.png"
                    alt="<?php _e('Получите план прибыли и инвестиций', 'mossebo'); ?>"
                >
            </div>

            <div class="franchise-plan__right">
                <?php get_template_part( 'franshising/franchise-form' ) ?>
            </div>
        </div>
    </div>
</div>
