<?php

class MosseboServicesRequest
{
    protected $baseUrl = 'https://mossebo-services.test/api/v1';
    protected $key = '7 belosnezhek i 1 gnom';

    protected $ch = null;

    public function __construct()
    {
        $this->key = md5($this->key);
    }

    protected function init($action)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->makeUrl($action));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        $this->ch = @$ch;
    }

    public function setData($data = null)
    {
        if (is_null($this->ch)) return;

        if (is_array($data)) {
            curl_setopt($this->ch, CURLOPT_POSTFIELDS, http_build_query($data));
        }
    }

    public function post($action, $data)
    {
        $this->init($action);

        curl_setopt($this->ch, CURLOPT_POST, 1);
        $this->setData($data);

        return $this;
    }

    public function put($action, $data)
    {
        $this->init($action);

        curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, "PUT");
        $this->setData($data);

        return $this;
    }

    public function send()
    {
        $output = curl_exec($this->ch);

//        if ($output === false) {
//            var_dump(curl_error($this->ch), curl_errno($this->ch));
//            wp_die();
//        }

        curl_close($this->ch);

        return $output;
    }

    protected function makeUrl($action)
    {
        $url = join('/', [
            $this->baseUrl,
            trim(strtolower($action), '/')
        ]);

        $url .= '?key=' . $this->key;

        return $url;
    }
}
