<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "omarelwesh801@gmail.com";
    $subject = "طلب جديد من موقع كليمنيا";
    
    $name = htmlspecialchars($_POST["name"]);
    $location = htmlspecialchars($_POST["location"]);
    $order = htmlspecialchars($_POST["order"]);
    
    $message = "الاسم: $name\n";
    $message .= "العنوان: $location\n\n";
    $message .= "تفاصيل الطلب:\n$order\n";
    
    $headers = "From: website@clemoneya.com";  // أو أي بريد مخصص للاستضافة
    
    if (mail($to, $subject, $message, $headers)) {
        echo "تم إرسال الطلب بنجاح!";
    } else {
        echo "حدث خطأ أثناء إرسال الطلب.";
    }
}
?>