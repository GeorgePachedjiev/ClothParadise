<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Данни от формата
    $product = $_POST['product'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // Имейл адрес на получателя (СМЕНИ го с твоя)
    $to = "thegegata@gmail.com";
    $subject = "Нова поръчка от ClothParadise";

    // Съобщение
    $message = "
    Име на купувача: $name\n
    Адрес: $address\n
    Телефон: $phone\n
    Продукт: $product
    ";

    // Хедъри
    $headers = "From: no-reply@clothparadise.com";

    // Изпращане
    if (mail($to, $subject, $message, $headers)) {
        echo "Поръчката беше изпратена успешно!";
    } else {
        echo "Възникна грешка при изпращането на поръчката.";
    }
}
?>
