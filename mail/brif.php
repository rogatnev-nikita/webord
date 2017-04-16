<?php
session_start();

/* 
 * Setting
 */

$login = 'rogatnevnikita@yandex.ru';
$password = 'Qwer1234';
$mailo = 'info@webord.ru';

$session_id = $_SESSION['guid'];

$dir_tz = '../uploads/' . $session_id . '/tz';
$dir_design = '../uploads/' . $session_id . '/design';

/* Yandex SMTP */
define('SMTP_HOST','smtp.yandex.ru');
define('SMTP_USERNAME',$login);
define('SMTP_PASSWORD',$password);
define('SMTP_FROM',$login);
define('SMTP_FROMNAME','Почтовый робот');

if (is_dir($dir_tz)) {
	if ($dh_tz = opendir($dir_tz)) {
		while (($file_tz = readdir($dh_tz)) !== false) {
			if ( $file_tz != '.' && $file_tz != '..') {
				$out_file_tz[] =  $file_tz;
			}
		}
		closedir($dh_tz);
	}
}
if (is_dir($dir_design)) {
	if ($dh_design = opendir($dir_design)) {
		while (($file_design = readdir($dh_design)) !== false) {
			if ( $file_design != '.' && $file_design != '..') {
				$out_file_design[] =  $file_design;
			}
		}
		closedir($dh_design);
	}
}

$radio_tz = $_REQUEST['radio_tz'];
$radio_design = $_REQUEST['radio_design'];

$type_group = $_REQUEST['type_group'];

if (!$type_group):
	
	$body = "<div class=\"alert-mess\"><div class='alert-block alert-block bg-red b-radius b-shadow'><p>Выберите Что вы хотите сделать</p><span class='fa fa-times-circle-o' onclick='$(this).parent().hide();'></span></div></div>";

	die(json_encode(array(
		'status' => 0,
		'body' => $body
	)));	
	
endif;

$cost_group = $_REQUEST['cost_group'];

if (!$cost_group):
	
	$body = "<div class=\"alert-mess\"><div class='alert-block alert-block bg-red b-radius b-shadow'><p>Выберите Стоимость</p><span class='fa fa-times-circle-o' onclick='$(this).parent().hide();'></span></div></div>";

	die(json_encode(array(
		'status' => 0,
		'body' => $body
	)));	
	
endif;

$date_group = $_REQUEST['date_group'];

if (!$date_group):
	
	$body = "<div class=\"alert-mess\"><div class='alert-block alert-block bg-red b-radius b-shadow'><p>Выберите Срок исполнения</p><span class='fa fa-times-circle-o' onclick='$(this).parent().hide();'></span></div></div>";

	die(json_encode(array(
		'status' => 0,
		'body' => $body
	)));	
	
endif;

if ((!$_REQUEST['good_project_1']) && (!$_REQUEST['good_project_2']) && (!$_REQUEST['good_project_3']) && (!$_REQUEST['good_project_4']) && (!$_REQUEST['good_project_5'])):
	
	$body = "<div class=\"alert-mess\"><div class='alert-block alert-block bg-red b-radius b-shadow'><p>Укажите примеры сайтов, которые нравятся</p><span class='fa fa-times-circle-o' onclick='$(this).parent().hide();'></span></div></div>";

	die(json_encode(array(
		'status' => 0,
		'body' => $body
	)));
	
endif;

if ((!$_REQUEST['bad_project_1']) && (!$_REQUEST['bad_project_2']) && (!$_REQUEST['bad_project_3']) && (!$_REQUEST['bad_project_4']) && (!$_REQUEST['bad_project_5'])):
	
	$body = "<div class=\"alert-mess\"><div class='alert-block alert-block bg-red b-radius b-shadow'><p>Укажите примеры сайтов, которые не нравятся</p><span class='fa fa-times-circle-o' onclick='$(this).parent().hide();'></span></div></div>";

	die(json_encode(array(
		'status' => 0,
		'body' => $body
	)));
	
endif;

if ((!$_REQUEST['same_project_1']) && (!$_REQUEST['same_project_2']) && (!$_REQUEST['same_project_3']) && (!$_REQUEST['same_project_4']) && (!$_REQUEST['same_project_5'])):
	
	$body = "<div class=\"alert-mess\"><div class='alert-block alert-block bg-red b-radius b-shadow'><p>Укажите аналогичные сайты</p><span class='fa fa-times-circle-o' onclick='$(this).parent().hide();'></span></div></div>";

	die(json_encode(array(
		'status' => 0,
		'body' => $body
	)));
	
endif;

$services_group = $_REQUEST['services_group'];
if (!$services_group):
	
	$body = "<div class=\"alert-mess\"><div class='alert-block alert-block bg-red b-radius b-shadow'><p>Выберите Функциональность</p><span class='fa fa-times-circle-o' onclick='$(this).parent().hide();'></span></div></div>";

	die(json_encode(array(
		'status' => 0,
		'body' => $body
	)));	
	
endif;

$platforms_group = $_REQUEST['platforms_group'];
if (!$platforms_group):
	
	$body = "<div class=\"alert-mess\"><div class='alert-block alert-block bg-red b-radius b-shadow'><p>Выберите Систему управления содержимым</p><span class='fa fa-times-circle-o' onclick='$(this).parent().hide();'></span></div></div>";

	die(json_encode(array(
		'status' => 0,
		'body' => $body
	)));	
	
endif;

$other_group = $_REQUEST['other_group'];
if (!$other_group):
	
	$body = "<div class=\"alert-mess\"><div class='alert-block alert-block bg-red b-radius b-shadow'><p>Выберите Дополнительные услуги</p><span class='fa fa-times-circle-o' onclick='$(this).parent().hide();'></span></div></div>";

	die(json_encode(array(
		'status' => 0,
		'body' => $body
	)));
	
endif;

$name = trim($_REQUEST["name"]);
$name = strip_tags($name);
if (mb_strlen($name, "utf-8") <= 0):
	
	$body = "<div class=\"alert-mess\"><div class='alert-block alert-block bg-red b-radius b-shadow'><p>Заполните поле Ваше имя</p><span class='fa fa-times-circle-o' onclick='$(this).parent().hide();'></span></div></div>";

	die(json_encode(array(
		'status' => 0,
		'body' => $body
	)));
	
endif;

$mail = trim($_REQUEST["mail"]);
$mail = strip_tags($mail);
if (!filter_var($mail, FILTER_VALIDATE_EMAIL)):

	$body = "<div class=\"alert-mess\"><div class='alert-block alert-block bg-red b-radius b-shadow'><p>Неверно заполнено поле Ваш email</p><span class='fa fa-times-circle-o' onclick='$(this).parent().hide();'></span></div></div>";

	die(json_encode(array(
		'status' => 0,
		'body' => $body
	)));

endif;

$company = trim($_REQUEST["company"]);
$company = strip_tags($company);
if (mb_strlen($company, "utf-8") <= 0):

	$body = "<div class=\"alert-mess\"><div class='alert-block alert-block bg-red b-radius b-shadow'><p>Заполните поле Компания</p><span class='fa fa-times-circle-o' onclick='$(this).parent().hide();'></span></div></div>";

	die(json_encode(array(
		'status' => 0,
		'body' => $body
	)));
	
endif;

$position = trim($_REQUEST["position"]);
$position = strip_tags($position);
if (mb_strlen($position, "utf-8") <= 0):

	$body = "<div class=\"alert-mess\"><div class='alert-block alert-block bg-red b-radius b-shadow'><p>Заполните поле Должность</p><span class='fa fa-times-circle-o' onclick='$(this).parent().hide();'></span></div></div>";

	die(json_encode(array(
		'status' => 0,
		'body' => $body
	)));
	
endif;


$tel = trim($_REQUEST["tel"]);
$tel = strip_tags($tel);
if (mb_strlen($tel, "utf-8") <= 0):

	$body = "<div class=\"alert-mess\"><div class='alert-block alert-block bg-red b-radius b-shadow'><p>Заполните поле Телефон</p><span class='fa fa-times-circle-o' onclick='$(this).parent().hide();'></span></div></div>";

	die(json_encode(array(
		'status' => 0,
		'body' => $body
	)));
	
endif;

$skype = trim($_REQUEST["skype"]);
$skype = strip_tags($skype);
if (mb_strlen($skype, "utf-8") <= 0):

	$body = "<div class=\"alert-mess\"><div class='alert-block alert-block bg-red b-radius b-shadow'><p>Заполните поле Skype</p><span class='fa fa-times-circle-o' onclick='$(this).parent().hide();'></span></div></div>";

	die(json_encode(array(
		'status' => 0,
		'body' => $body
	)));
	
endif;

$done_body = "
	<b>Имя</b></b>: ".$name."<br />
	<b>Компания</b>: ".$company."<br />
	<b>Должность</b>: ".$position."<br />
	<b>E-mail</b>: ".$mail."<br />
	<b>Телефон</b>: ".$tel."<br />
	<b>Skype</b>: ".$skype."<br />
	<b>Комментарий</b>: ".strip_tags($_REQUEST['mess_order'])."<br />
	<b>Как</b>: ".implode(', ', $_REQUEST['how_group'])."<br />
	<b>Тип сайта</b>: ".$type_group."<br />
	<b>Стоимость</b>: ".$cost_group."<br />
	<b>Срок выполнения</b>: ".$date_group."<br />
	<b>Функциональность</b>: ".implode(', ', $services_group)."<br />
	<b>CMS</b>: ".$platforms_group."<br />
	<b>Дополнительные услуги</b>: ".implode(', ', $other_group)."<br />	
	<b>Техническое задание</b>: ".($radio_tz=='да'? 'Да. Прикреплено' : 'Нет')."<br />
	<b>Понадобится дизайн</b>: ".($radio_design=='да'? 'Да' : 'Нет. Прикреплено')."<br />
	<b>Примеры (нравятся): </b> ".$_REQUEST['good_project_1']." ".$_REQUEST['good_project_2']." ".$_REQUEST['good_project_3']." ".$_REQUEST['good_project_4']." ".$_REQUEST['good_project_5']."<br />
	<b>Примеры (не нравятся): </b> ".$_REQUEST['bad_project_1']." ".$_REQUEST['bad_project_2']." ".$_REQUEST['bad_project_3']." ".$_REQUEST['bad_project_4']." ".$_REQUEST['bad_project_5']."<br />
	<b>Примеры (аналогичные): </b> ".$_REQUEST['same_project_1']." ".$_REQUEST['same_project_2']." ".$_REQUEST['same_project_3']." ".$_REQUEST['same_project_4']." ".$_REQUEST['same_project_5']."<br />
";

require 'class.phpmailer.php';

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->CharSet = 'utf-8';
$mail->Host = SMTP_HOST; 
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;		
$mail->Username = SMTP_USERNAME;
$mail->Password = SMTP_PASSWORD;
$mail->From = SMTP_FROM;
$mail->FromName = SMTP_FROMNAME;
$mail->AddAddress($mailo);
$mail->IsHTML(true);
$mail->Subject = 'Заявка с сайта Webarts';
$mail->Body = $done_body;

if ($radio_tz == 'да') {
	if ($out_file_tz) {
		foreach($out_file_tz as $file_tz) {
			$mail->AddAttachment($dir_tz . '/' . $file_tz);
		}
	}
}

if ($radio_design == 'нет') {
	if ($out_file_design) {
		foreach($out_file_design as $file_design) {
			$mail->AddAttachment($dir_design . '/' . $file_design);
		}
	}
}

if ($mail->Send()) {
	$body = "<div class=\"alert-mess\"><div class='alert-block alert-block bg-green b-radius b-shadow'><p>Заяка успешно отправлена</p><span class='fa fa-times-circle-o' onclick='$(this).parent().hide();'></span></div></div>";

	die(json_encode(array(
		'status' => 1,
		'body' => $body
	)));
} else {
	
	$body = "<div class=\"alert-mess\"><div class='alert-block alert-block bg-red b-radius b-shadow'><p>Произошлка ошибка. Обратитесь к системному администратору</p><span class='fa fa-times-circle-o' onclick='$(this).parent().hide();'></span></div></div>";

	die(json_encode(array(
		'status' => 0,
		'body' => $body
	)));
}

if ($out_file_tz) {
	foreach($out_file_tz as $file_tz) {
		unlink($dir_tz . '/' . $file_tz);
	}
}
if ($out_file_design) {
	foreach($out_file_design as $file_design) {
		unlink($dir_design . '/' . $file_design);
	}
}

die;

/*
if (isset($_REQUEST["action"])):
    if ($_REQUEST["action"] == "sendorderform"):
        $e1   = null;
        
        $AllowedExtensions = ["pdf","doc","docx","gif","jpeg","jpg","png","rtf","txt"];
        $files = [];
        $server_file = [];
        foreach($_FILES as $name => $file) {
            $file_name = $file["name"];
            $file_temp = $file["tmp_name"];
            foreach($file_name as $key) {
                $path_parts = pathinfo($key);
                $extension = strtolower($path_parts["extension"]);
                if(!in_array($extension, $AllowedExtensions)) { die("Extension not allowed"); }
                $server_file[] = "uploads/{$path_parts["basename"]}";
            }
            for($i = 0; $i<count($file_temp); $i++) { move_uploaded_file($file_temp[$i], $server_file[$i]); }
        }
        
        
        parse_str($_REQUEST['msgorder'], $msgorder);
        

        $other_group = $msgorder['how_group'];
        $services_group = $msgorder['services_group'];
        $other_group = $msgorder['other_group'];
        
        
        $type_group = $_REQUEST['type_group'];
        $cost_group = $_REQUEST['cost_group'];
        $date_group = $_REQUEST['date_group'];

        $radio_tz = trim($_REQUEST["radio_tz"]);
        $radio_design = trim($_REQUEST["radio_design"]);

        $good_project_1 = trim($_REQUEST["good_project_1"]);
        $good_project_2 = trim($_REQUEST["good_project_2"]);
        $good_project_3 = trim($_REQUEST["good_project_3"]);
        $good_project_4 = trim($_REQUEST["good_project_4"]);
        $good_project_5 = trim($_REQUEST["good_project_5"]);

        $bad_project_1 = trim($_REQUEST["bad_project_1"]);
        $bad_project_2 = trim($_REQUEST["bad_project_2"]);
        $bad_project_3 = trim($_REQUEST["bad_project_3"]);
        $bad_project_4 = trim($_REQUEST["bad_project_4"]);
        $bad_project_5 = trim($_REQUEST["bad_project_5"]);

        $same_project_1 = trim($_REQUEST["same_project_1"]);
        $same_project_2 = trim($_REQUEST["same_project_2"]);
        $same_project_3 = trim($_REQUEST["same_project_3"]);
        $same_project_4 = trim($_REQUEST["same_project_4"]);
        $same_project_5 = trim($_REQUEST["same_project_5"]);

        $platforms_group = $_REQUEST['platforms_group'];
        
        $name = trim($_REQUEST["name"]);
        $company = trim($_REQUEST["company"]);
        $position = trim($_REQUEST["position"]);
        $mail = trim($_REQUEST["mail"]);
        $tel = trim($_REQUEST["tel"]);
        $skype = trim($_REQUEST["skype"]);
        $mess_order = trim($_REQUEST["mess_order"]);
        
        if ($e1 == null):
        
            $email  = "info@webord.ru";
            $title = "Order form from PIXEL";
            $headers = "From: $mail";
            $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
            $semi_rand = md5(time());
            $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
            
        
            $message = "Как: $how_group\n Тип сайта: $type_group\n Стоимость: $cost_group\n Срок выполнения: $date_group\n Техническое задание: $radio_tz\n Дизайн: $radio_design\n Нравится: $good_project_1, $good_project_2, $good_project_3, $good_project_4, $good_project_5\n Не нравится: $bad_project_1, $bad_project_2, $bad_project_3, $bad_project_4, $bad_project_5\n Аналогичные: $same_project_1, $same_project_2, $same_project_3, $same_project_4, $same_project_5\n Функциональность: $services_group, \n Система управления содержимым: $platforms_group\n Дополнительные услуги: $other_group, \n ФИО: $name\n Компания: $company\n Должность: $position\n E-mail: $mail\n Телефон: $tel\n Скайп: $skype\n Напишите всё, что считаете нужным: $mess_order\n\n";


            $message .= "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n"
               . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . 
                 "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 
            $message .= "--{$mime_boundary}\n";

            for($x=0;$x<count($files);$x++){
            $file = fopen($files[$x],"rb");
            $data = fread($file,filesize($files[$x]));
            fclose($file);
            $data = chunk_split(base64_encode($data));
            $message .= "Content-Type: {\"application/octet-stream\"};\n" .  

                        " name=\"$files[$x]\"\n" . 
            "Content-Disposition: attachment;\n" . " filename=\"$files[$x]\"\n" . 
            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
            $message .= "--{$mime_boundary}\n";
    }

            
  
            mail($email, $title, $message, $headers);

            echo "<script>$('#order_form').trigger('reset');</script>";
            print "<span class='no_error'>Ваше сообщение отправлено! Спасибо!</span>";
        endif;
    else:
        die;
    endif;
else:
    die;
endif;
*/