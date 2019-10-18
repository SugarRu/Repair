<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$nameName = $_POST['username'];
$userPhone = $_POST['userphone'];
$text = $_POST['text'];
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "Форма успешно отправлена";
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";                                          
    $mail->SMTPAuth   = true; // в почте необходимо авторизоваться 

    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера GMAIL
    $mail->Username   = 'YOURLOGIN'; // Логин на почте
    $mail->Password   = 'YOURPASSWORD'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('youremail@gmail.com', 'YOUR NAME'); // Адрес самой почты и имя отправителя
    
    // Получатель письма
    $mail->addAddress('youremail@yandex.ru');  
    $mail->addAddress('youremail@gmail.com'); // Ещё один, если нужен

    // Прикрипление файлов к письму
if (!empty($_FILES['myfile']['name'][0])) {
    for ($ct = 0; $ct < count($_FILES['myfile']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['myfile']['name'][$ct]));
        $filename = $_FILES['myfile']['name'][$ct];
        if (move_uploaded_file($_FILES['myfile']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Неудалось прикрепить файл ' . $uploadfile;
        }
    }   
}
        // -----------------------
        // Само письмо
        // -----------------------
        $mail->isHTML(true);
    
        $mail->Subject = 'Заголовок письма';
        $mail->Body    = "<b>Имя:</b> $userName <br>
        <b>Телефон:</b> $userPhone<br><br>
        <b>Сообщение:</b><br>$text";

// Проверяем отравленность сообщения
if ($mail->send()) {
  echo "Форма успешно отправлена";  // header('Location: thanks.php');  // или --- echo "$msg";
} else {
echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
}
} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}