<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['name'])) {$phone = $_POST['name'];}
if (isset($_POST['phone'])) {$name = $_POST['phone'];}
 
/* Сюда впишите свою эл. почту */
$myaddres  = "daniil.shest@gmail.com"; // кому отправляем
 
/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: Заказ обратного звонка!\nТелефон: $phone\nИмя: $name";
 
/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заказ'; //сабж
$email='Заказ обратного звонка'; // от кого
$send = mail ($myaddres,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
 
ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <title>Бухгалтерские услуги ProУчёт</title>
    <meta name="description"
        content="ProУчёт - профессиональные услуги в области бухгалтерского и налогового учёта, кадрового администрирования и консультирования">
    <meta name="robots" content="index,follow">
    <meta name="keywords"
        content="бухгалтерские услуги, услуги бухгалтера, услуги в области бухгалтерского и налогового учёта, бухгалтерское сопровождение, ведение кадрового делопроизводства, proучет" />
    <link rel="shortcut icon" href="/img/logo.svg" type="image/svg">
    <script type="text/javascript">
    setTimeout('location.replace("/")', 3000);
    /*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
    </script> 
</head>
<body>
<div class="thanks">
        <div class="container">
            <div class="thanks__body">
                <img src="img/thanks/thanks.svg" alt="Thanks" class="thanks__img">
                <h1 class="thanks__title">Спасибо! Ваша заявка успешно отправлена.</h1>
            </div>
        </div>
    </div>
</body>
</html>