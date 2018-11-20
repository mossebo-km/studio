<?php

class AmoForm
{

    protected $envDomain = '';
    protected $envLogin = '';
    protected $envHash = '';
    protected $statusId = '';
    protected $responsibleUserId = '';
    protected $tags = '';
    protected $mailTo = 'vlad.starkovsky@gmail.com';

    protected $fields = [
        'name' => 'Имя не введено',
        'phone' => 'error_phone_number',
        'email' => 'error_email',
        'page_url' => 'Ссылка не передана',

        'form_name' => 'Неизвестная форма',
        'form_type' => 'Тип формы не известен',
        'form_varsion' => 'Версия не известна',

        'utm_source' => '',
        'utm_medium' => '',
        'utm_campaign' => '',
        'utm_content' => '',
        'utm_term' => ''
    ];

    protected $data = null;

    public function __construct($data)
    {
        $this->setData($data);
    }

    protected function setData($data = [])
    {
        $result = [];

        foreach ($this->fields as $key => $defaultValue) {
            if (empty($data[$key])) {
                $result[$key] = $defaultValue;
            }
            else {
                $result[$key] = sanitize_textarea_field($data[$key]);
            }
        }

        $this->data = $result;
    }

    public function send()
    {
        $this->sendMail();
//        $this->sendToAmo();
    }

    protected function sendMail()
    {
        $message = ' ' . "\r\n" .
            'Имя: '          . $this->data['name'] . "\r\n" .
            'Телефон: '      . $this->data['phone'] . "\r\n" .
            'E-mail: '       . $this->data['email'] . "\r\n" .
            'Страница: '     . $this->data['page_url'] . "\r\n\r\n\r\n" .
            'Ресурс: '       . $this->data['utm_source'] . "\r\n" .
            'Метка: '        . $this->data['utm_medium'] . "\r\n" .
            'Компания: '     . $this->data['utm_campaign'] . "\r\n" .
            'Значение: '     . $this->data['utm_content'] . "\r\n" .
            'Тег компании: ' . $this->data['utm_term'];

        mail(
            $this->mailTo,
            'Заявка с сайта ' . date("d.m.Y H:i"),
            $message
        );
    }

    protected function sendToAmo()
    {
        require_once __DIR__ . '/amocrm.phar';

        $amo = new \AmoCRM\Client(
            $this->envDomain,
            $this->envLogin,
            $this->envHash
        );

        // Добавление и обновление сделок
        // Метод позволяет добавлять сделки по одному или пакетно,
        // а также обновлять данные по уже существующим сделкам.
        $lead = $amo->lead;
        //$lead->debug(true); // Режим отладки
        $lead['name'] = 'Заявка с сайта ' . $this->data['name'];
        $lead['status_id'] = $this->statusId;
        $lead['responsible_user_id'] = $this->responsibleUserId;
        $lead['tags'] = ['eus.spb.ru', $this->data['utm_source']];

        $lead->addCustomField(402305, $this->data[ 'utm_source' ] . ' ' . $this->data[ 'utm_medium' ] . ' ' . $this->data[ 'utm_campaign' ] . ' ' . $this->data[ 'utm_content' ] . ' ' . $this->data[ 'utm_term' ]);
        $lead->addCustomField(402315, $_SERVER['REMOTE_ADDR']);
        $lead->addCustomField(402311, $this->data['page_url']);

        $lead_id = $lead->apiAdd();
        //print_r($lead_id);

        // Добавление и обновление контактов
        // Метод позволяет добавлять контакты по одному или пакетно,
        // а также обновлять данные по уже существующим контактам.
        $contact = $amo->contact;
        //$contact->debug(true); // Режим отладки
        $contact['name'] = $this->data['name'];
        $contact['responsible_user_id'] = $this->responsibleUserId;
        $contact->addCustomField(178893, [
            [$this->data['phone'], 'WORK'],
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
    }
}
