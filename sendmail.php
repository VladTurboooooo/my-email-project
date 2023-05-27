<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'm.rudenkov.115@gmail.com';
    $subject = 'Новое сообщение от ' . $name;
    $body = $message;
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Сообщение успешно отправлено";
    } else {
        echo "Ошибка при отправке сообщения";
    }
}
?>
