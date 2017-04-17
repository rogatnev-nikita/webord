<?php
if (isset($_POST["action"])):
    if ($_POST["action"] == "sendform"):
        $e1   = null;
        $name = trim($_POST["name"]);
        $name = strip_tags($name);
        if (mb_strlen($name, "utf-8") <= 0):
            $e1 .= "1";
            print "<div class=\"alert-mess\"><div class='alert-block bg-red b-radius b-shadow'><p>Заполните поле 'Ваше имя'</p><span class='fa fa-times-circle-o' onclick='$(this).parent().hide();'></span></div></div></div>";
        endif;
        
        $email = trim($_POST["email"]);
        $email = strip_tags($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)):
            $e1 .= "1";
            print "<div class=\"alert-mess\"><div class='alert-block bg-red b-radius b-shadow'><p>Неверно заполнено поле 'Ваш email'</p><span class='fa fa-times-circle-o' onclick='$(this).parent().hide();'></span></div></div>";
        endif;
        
        $mess = trim($_POST["mess"]);
        $mess = strip_tags($mess);
        if (mb_strlen($mess, "utf-8") <= 0):
            $e1 .= "1";            
            print "<div class=\"alert-mess\"><div class='alert-block bg-red b-radius b-shadow'><p>Заполните поле 'Cообщение'</p><span class='fa fa-times-circle-o' onclick='$(this).parent().hide();'></span></div></div>";


        endif;
        
        if ($e1 == null):
            $mail  = "info@webord.ru";
            $title = "Contact form from PIXEL";
            $title = iconv("utf-8", "windows-1251", $title);
            $title = convert_cyr_string($title, "w", "k");
            $message = "<html><head></head><body>Имя: $name<br>";
            $message .= "Сообщение: $mess<br>";
            
            $message .= "E-Mail: <a href='mailto:$email'>$email</a>";
            $message .= "</body></html>";
            
            $message = iconv("utf-8", "windows-1251", $message);
            $message = convert_cyr_string($message, "w", "k");
            
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=koi8-r\r\n";
            $headers .= "From: $email\r\n";
            mail($mail, $title, $message, $headers);
            
            echo "<script>$('#contactform').trigger('reset');</script>";
            print "<div class=\"alert-mess\"><div class='alert-block bg-green b-radius b-shadow'><p>Ваше сообщение отправлено! Спасибо!</p><span class='fa fa-times-circle-o' onclick='$(this).parent().hide();'></span></div></div>";
        endif;
    else:
        die;
    endif;
else:
    die;
endif;
?>