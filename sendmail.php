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
        echo "<script>";
        echo "var modal = document.getElementById('myModal');";
        echo "var span = document.getElementsByClassName('close')[0];";
        echo "modal.style.display = 'block';";
        echo "span.onclick = function() {";
        echo "  modal.style.display = 'none';";
        echo "}";
        echo "window.onclick = function(event) {";
        echo "  if (event.target == modal) {";
        echo "    modal.style.display = 'none';";
        echo "  }";
        echo "}";
        echo "</script>";
    } else {
        echo "Ошибка при отправке сообщения";
    }
}
?>