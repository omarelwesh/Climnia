<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "omarelwesh801@gmail.com";
    $subject = "طلب شراء جديد من موقع كليمنيا";

    $name = htmlspecialchars($_POST["fullname"]);
    $lat = htmlspecialchars($_POST["latitude"]);
    $lng = htmlspecialchars($_POST["longitude"]);
    $orderDetails = htmlspecialchars($_POST["orderDetails"]);
    $totalPrice = htmlspecialchars($_POST["totalPrice"]);
    $deliveryCost = htmlspecialchars($_POST["deliveryCost"]);
    $finalTotal = htmlspecialchars($_POST["finalTotal"]);

    $mapLink = "https://www.google.com/maps?q=$lat,$lng";

    $message = "
    الاسم: $name\n
    موقع التوصيل: $mapLink\n
    تفاصيل الطلب:\n$orderDetails\n
    السعر بدون توصيل: $totalPrice\n
    تكلفة التوصيل: $deliveryCost دينار\n
    السعر الإجمالي: $finalTotal
    ";

    $headers = "From: info@climoneya.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    if (mail($to, $subject, $message, $headers)) {
        echo "تم إرسال طلبك بنجاح! سيتم التواصل معك قريبًا.";
    } else {
        echo "حدث خطأ أثناء إرسال الطلب. حاول مجددًا.";
    }
} else {
    echo "طلب غير صالح.";
}
?>
