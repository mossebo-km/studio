<?php
    $translates = json_encode([
        'errors' => [
            'technical' => __('Техническая ошибка! Попробуйте позднее.', 'mossebo')
        ]
    ], JSON_UNESCAPED_UNICODE);
?>


<script>
    window.translates = <?php echo $translates ?>
</script>
