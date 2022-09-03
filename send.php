<?php

    $login = $_POST['login'];
    $message = $_POST['message'];

    $login = htmlspecialchars($login)
    $message = htmlspecialchars($message)

    $login = trim($login)
    $message = trim($message)

    if (mail("dmaslyanikov@list.ru",
    "Поступило письмо от Best Program",
    "Имя: ".$login."\n".
    "Сообщение: ".$message."\n".
    )
    ) {
        echo ('Отзыв был передан✔')
    }
    else {
        echo ('Произошла ошибка!')
    }

?>