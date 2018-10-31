<?php

//return json_encode([
//    'status' => 'success',
//    'redirect' => '/thanks'
//], JSON_UNESCAPED_UNICODE);

require_once ($_SERVER['DOCUMENT_ROOT'] . '/wp-includes/class-wp-ajax-response.php');

$response = new WP_Ajax_Response([
    'status' => 'success',
    'redirect' => '/thanks'
]);

$response->send();
exit;

require_once './includes/amocrm.phar';

$envDomain = '';
$envLogin = '';
$envHash = '';

$data = array(

        // input's
        'name' => isset( $_POST[ 'name' ] ) ? $_POST[ 'name' ] : 'Имя не введено',
        'phone' => isset( $_POST[ 'phone' ] ) ? $_POST[ 'phone' ] : 'error_phone_number',
        'email' => isset( $_POST[ 'email' ] ) ? $_POST[ 'email' ] : 'error_email',
        // url
        'page_url' => isset( $_POST[ 'page_url' ] ) ? $_POST[ 'page_url' ] : 'Ссылка не передана',
        // Название формы
        'form_name' => isset( $_POST[ 'form_name' ] ) ? $_POST[ 'form_name' ] : 'Неизвестная форма',
        // Тип формы
        'form_type' => isset( $_POST[ 'form_type' ] ) ? $_POST[ 'form_type' ] : 'Тип формы не известен',
        // Вариант формы
        'form_varsion' => isset( $_POST[ 'form_varsion' ] ) ? $_POST[ 'form_varsion' ] : 'Версия не известна',
        // utm
        'utm_source' => isset( $_COOKIE[ 'utm_source' ] ) ? $_COOKIE[ 'utm_source' ] : '',
        'utm_medium' => isset( $_COOKIE[ 'utm_medium' ] ) ? $_COOKIE[ 'utm_medium' ] : '',
        'utm_campaign' => isset( $_COOKIE[ 'utm_campaign' ] ) ? $_COOKIE[ 'utm_campaign' ] : '',
        'utm_content' => isset( $_COOKIE[ 'utm_content' ] ) ? $_COOKIE[ 'utm_content' ] : '',
        'utm_term' => isset( $_COOKIE[ 'utm_term' ] ) ? $_COOKIE[ 'utm_term' ] : ''
);

if($_POST[ 'name' ] && $_POST[ 'phone' ]) {

    try {

        $amo = new \AmoCRM\Client($envDomain, $envLogin, $envHash);

        // Добавление и обновление сделок
        // Метод позволяет добавлять сделки по одному или пакетно,
        // а также обновлять данные по уже существующим сделкам.
        $lead = $amo->lead;
        //$lead->debug(true); // Режим отладки
        $lead['name'] = 'Заявка с сайта ' . $data['name'];
        $lead['status_id'] = 19742383;
        $lead['responsible_user_id'] = 2410540;
        $lead['tags'] = ['eus.spb.ru', $data['utm_source']];

        $lead->addCustomField(402305, $data[ 'utm_source' ] . ' ' . $data[ 'utm_medium' ] . ' ' . $data[ 'utm_campaign' ] . ' ' . $data[ 'utm_content' ] . ' ' . $data[ 'utm_term' ]);
        $lead->addCustomField(402315, $_SERVER['REMOTE_ADDR']);
        $lead->addCustomField(402311, $data['page_url']);

        $lead_id = $lead->apiAdd();
        //print_r($lead_id);

        // Добавление и обновление контактов
        // Метод позволяет добавлять контакты по одному или пакетно,
        // а также обновлять данные по уже существующим контактам.
        $contact = $amo->contact;
        //$contact->debug(true); // Режим отладки
        $contact['name'] = $data['name'];
        $contact['responsible_user_id'] = 2410540;
        $contact->addCustomField(178893, [
            [$data['phone'], 'WORK'],
        ]);
        $contact_id = $contact->apiAdd();
        //print_r($contact_id);

        // Установка связи между сущностями
        // Метод позволяет устанавливать связи между сущностями
        $link = $amo->links;
        $link['from'] = 'leads';
        $link['from_id'] = $lead_id;
        $link['to'] = 'contacts';
        $link['to_id'] = $contact_id;
        $link_id = $link->apiLink();


        $message = ' ' . "\n\n\n" .
            'Имя: ' . $data[ 'name' ] . "\n" .
            'Телефон: ' . $data[ 'phone' ] . "\n" .
            'Страница: ' . $data[ 'page_url' ] . "\n\n\n" .
            'Ресурс: ' . $data[ 'utm_source' ] . "\n" .
            'Метка: ' . $data[ 'utm_medium' ] . "\n" .
            'Компания: ' . $data[ 'utm_campaign' ] . "\n" .
            'Значение: ' . $data[ 'utm_content' ] . "\n" .
            'Тег компании: ' . $data[ 'utm_term' ];

        $to = 'pribytkova.92@bk.ru';

        mail($to, 'Заявка с сайта' . date("d.m.Y H:i"), $message);

    } catch (\AmoCRM\Exception $e) {
        printf('Error (%d): %s', $e->getCode(), $e->getMessage());
    }

}
