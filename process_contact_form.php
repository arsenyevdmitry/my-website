<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $to = "arsenyevdm1@gmail.com"; // Замените на вашу почту
    
    $subject = "Сообщение с вашего сайта от $name";
    
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Ваше сообщение успешно отправлено.";
    } else {
        echo "Произошла ошибка при отправке сообщения.";
    }
} else {
    // Если запрос не POST, выполните соответствующие действия
    echo "Недопустимый запрос.";
}
