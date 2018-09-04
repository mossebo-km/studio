<?php

$e_mail = "giromen@yandex.ru";

$time = date("Y-m-d H:i:s");

$send_mail_subject = "Заявка с сайта giro-men.ru $time";


$send_form_name=$_POST["name"];
$send_phone=$_POST["tel"];
$send_form_mail=$_POST["email"];
$send_form_text=$_POST["text"];
$send_form=$_POST["form_name"];


$send_mail_text = "
Имя: $send_form_name
Телефон: $send_phone
E-mail: $send_form_mail
Сфера деятельности: $send_form_text
Заполнена форма: $send_form
";
if(!$send_phone) {
    echo '<meta http-equiv="refresh" content="0;URL=/">';
}
else {
    mail("$e_mail", "$send_mail_subject", "$send_mail_text");
    echo '<meta http-equiv="refresh" content="0;URL=/spasibo-chto-zakazali-zvonok/">';
}
?>