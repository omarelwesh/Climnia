<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // عنوان الإيميل الذي تريد استلام الطلبات عليه
    $to = "omarelwesh801@gmail.com";

    // عنوان الرسالة
    $subject = "طلب جديد من موقع كليمنيا";

    // البيانات المرسلة من النموذج
    $name = htmlspecialchars($_POST["name"]);
    $location = htmlspecialchars($_POST["location"]);
    $order = htmlspecialchars($_POST["order"]);

    // نص الرسالة
    $message = "الاسم: $name\n";
    $message .= "العنوان: $location\n\n";
    $message .= "تفاصيل الطلب:\n$order\n";

    // من هو مرسل الرسالة (ضروري لتقبل Gmail الرسالة)
    $headers = "From: omaradel20141234@gmail.com";

    // إرسال الرسالة
    if (mail($to, $subject, $message, $headers)) {
        echo "✅ تم إرسال الطلب بنجاح، سيتم التواصل معك قريبًا.";
    } else {
        echo "❌ حدث خطأ أثناء إرسال الطلب، يرجى المحاولة لاحقًا.";
    }
}
?>