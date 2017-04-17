<?php

session_start();

function ruToTranslit($str) {
	$tr = array(
		"А"=>"A","Б"=>"B","В"=>"V","Г"=>"G",
		"Д"=>"D","Е"=>"E","Ж"=>"J","З"=>"Z","И"=>"I",
		"Й"=>"Y","К"=>"K","Л"=>"L","М"=>"M","Н"=>"N",
		"О"=>"O","П"=>"P","Р"=>"R","С"=>"S","Т"=>"T",
		"У"=>"U","Ф"=>"F","Х"=>"H","Ц"=>"TS","Ч"=>"CH",
		"Ш"=>"SH","Щ"=>"SCH","Ъ"=>"","Ы"=>"YI","Ь"=>"",
		"Э"=>"E","Ю"=>"YU","Я"=>"YA","а"=>"a","б"=>"b",
		"в"=>"v","г"=>"g","д"=>"d","е"=>"e","ж"=>"j",
		"з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
		"м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
		"с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
		"ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"y",
		"ы"=>"yi","ь"=>"","э"=>"e","ю"=>"yu","я"=>"ya",
		"ё"=>"e","Ё"=>"E",
		" "=>"_","&#039;"=>""
	);
	
	$out = str_replace('  ',' ',$str);
	$out = str_replace("'","",$out);
	$out = trim($out);
	$out = strtr($out,$tr);
	$out = trim($out);
	$out = strtolower($out);
	
	$out = preg_replace ("/[^a-z_0-9-.]/si", "", $out);
	
	return $out;
}	



$session_id = $_SESSION['guid'];

if (!$session_id) {
	echo '{"status":"error"}';
	exit;
}

$act = ($_REQUEST['act']=='tz'? 'tz' : 'design');

if ($_REQUEST['mode'] == 'delete') {
	
	if (file_exists('uploads/'.$session_id.'/'.$act.'/' . ruToTranslit($_REQUEST['name']))) {
		unlink('uploads/'.$session_id.'/'.$act.'/' . ruToTranslit($_REQUEST['name']));
	}
	
	die;	
}

header('Content-type: application/json');

$allowed = array('png', 'jpg', 'gif', 'zip', 'doc', 'docx', 'rtf', 'txt', 'pdf', 'jpeg');

foreach($_FILES['upl']['name'] as $key=>$name) {

	if($_FILES['upl']['error'][$key] == 0) {
		
		if (!is_dir('uploads/' . $session_id)) {
			mkdir('uploads/' . $session_id, 0777);
		}
		
		if (!is_dir('uploads/' . $session_id .'/' . $act)) {
			mkdir('uploads/' . $session_id . '/' . $act, 0777);
		}		
		
		$extension = pathinfo($_FILES['upl']['name'][$key], PATHINFO_EXTENSION);
		$file_name = ruToTranslit($_FILES['upl']['name'][$key]);

		if(!in_array(strtolower($extension), $allowed)){
			echo '{"status":"error"}';
			exit;
		}

		if(move_uploaded_file($_FILES['upl']['tmp_name'][$key], 'uploads/'.$session_id.'/'.$act.'/'.$file_name)){
			die(json_encode(array(
				'status' => 'success',
				'file_name' => $file_name
			)));
			exit;
		}
	}

}