<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

if(isset($_POST['Send1'])) {
    $email=$_POST['email'];
    $title = "Подписка";
    $body = "
<h2>Подписка</h2>
<b>Почта:</b> $email
";
$title1="Запрос на подпсику";
$body1="<h2>Добрый день, $email</h2>
<b>Вы подписались на рассылку от Best Tour Plan</b>";
$l1="Location: index.html";
$mail1 = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail1->isSMTP();   
    $mail1->CharSet = "UTF-8";
    $mail1->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail1->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail1->Host       = 'mail.web-elizabeth.ru'; // SMTP сервера вашей почты
    $mail1->Username   = 'bakelal@web-elizabeth.ru'; // Логин на почте
    $mail1->Password   = 'L24792479b'; // Пароль на почте
    $mail1->SMTPAutoTLS = false;
    $mail1->SMTPSecure = false;
    $mail1->Port       = 25;
    $mail1->setFrom('bakelal@web-elizabeth.ru', 'Бакулина Елизавета'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail1->addAddress($email);  
    //$mail->addAddress('bakelal@mail.ru'); // Ещё один, если нужен

// Отправка сообщения
$mail1->isHTML(true);
$mail1->Subject = $title1;
$mail1->Body = $body1;    

// Проверяем отравленность сообщения
if ($mail1->send()) {$result1 = "success";} 
else {$result1 = "error";}

} catch (Exception $e) {
    $result1= "error";
    $status1 = "Сообщение не было отправлено. Причина ошибки: {$mail1->ErrorInfo}";
}
} elseif(isset($_POST['Send2'])) {
    echo 'Нажата была кнопка с именем button2';
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $title = "Новое обращение";
    $body = "
<h2>Новое письмо</h2>
<b>Имя:</b> $name<br>
<b>Телефон:</b> $phone<br><br>
<b>Сообщение:</b><br>$message
";
$l1="Location: thankyou.html";
}elseif(isset($_POST['Send-modal'])) {
    $name = $_POST['name_modal'];
    $email=$_POST['email_modal'];
    $phone = $_POST['phone_modal'];
    $message = $_POST['message_modal'];
    $title = "Бронирование";
    $body = "
<h2>Новое бронирование</h2>
<b>Имя:</b> $name<br>
<b>Почта:</b> $email<br>
<b>Телефон:</b> $phone<br><br>
<b>Сообщение:</b><br>$message
";
$l1="Location: thankyou.html";
$title1="Бронирование";
$body1="<h2>Добрый день, $name</h2>
<b>Вы забронировали в Best Tour Plan отель.</b><br>
<b>Менеджер перезвонит на указанный номер:</b> $phone<br>
";
$mail1 = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail1->isSMTP();   
    $mail1->CharSet = "UTF-8";
    $mail1->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail1->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail1->Host       = 'mail.web-elizabeth.ru'; // SMTP сервера вашей почты
    $mail1->Username   = 'bakelal@web-elizabeth.ru'; // Логин на почте
    $mail1->Password   = 'L24792479b'; // Пароль на почте
    $mail1->SMTPAutoTLS = false;
    $mail1->SMTPSecure = false;
    $mail1->Port       = 25;
    $mail1->setFrom('bakelal@web-elizabeth.ru', 'Бакулина Елизавета'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail1->addAddress($email);  
    //$mail->addAddress('bakelal@mail.ru'); // Ещё один, если нужен

// Отправка сообщения
$mail1->isHTML(true);
$mail1->Subject = $title1;
$mail1->Body = $body1;    

// Проверяем отравленность сообщения
if ($mail1->send()) {$result1 = "success";} 
else {$result1 = "error";}

} catch (Exception $e) {
    $result1= "error";
    $status1 = "Сообщение не было отправлено. Причина ошибки: {$mail1->ErrorInfo}";
}
$l1="Location: thankyou.html";
}
// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'mail.web-elizabeth.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'bakelal@web-elizabeth.ru'; // Логин на почте
    $mail->Password   = 'L24792479b'; // Пароль на почте
    $mail->SMTPAutoTLS = false;
    $mail->SMTPSecure = false;
    $mail->Port       = 25;
    $mail->setFrom('bakelal@web-elizabeth.ru', 'Бакулина Елизавета'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('bakelale@yandex.ru');  
    //$mail->addAddress('bakelal@mail.ru'); // Ещё один, если нужен

// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
header($l1);