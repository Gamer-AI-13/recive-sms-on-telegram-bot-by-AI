<?php


//  token example: 1215714315:AAFcve5c-B2We5VG4oS8W5Rm8LQ6O8T32O0
//  chat_id example: -1001481341430
// https://www.youtube.com/channel/UCYuMRNb_SRZ4FMsZjnHRZUA video


$token = "***************"; // Telegram bot token
$chat_id = "***************"; // Telegram chat ID
$proovl_token = "***************"; // Proovl.com Token

    $id = $_REQUEST['id'];
	$token = $_REQUEST['token'];
	$from = $_REQUEST['from'];
	$to = $_REQUEST['to'];
	$text = $_REQUEST['text'];
	
	
	if ($token == "$proovl_token") {
	
	
	$url = "https://api.telegram.org/bot1215714315:AAFcve5c-B2We5VG4oS8W5Rm8LQ6O8T32O0/sendMessage";

	$postfields = array(
   		'chat_id' => "-1001481341430",
   		'disable_notification' => "True",
   		'parse_mode' => "HTML",
        'text' => "From number<b>$from</b>  To number:<pre>$to</pre>  SMS text:<i>$text</i>",
	);


if (!$curld = curl_init()) {
		exit;
	}

	curl_setopt($curld, CURLOPT_POST, true);
	curl_setopt($curld, CURLOPT_POSTFIELDS, $postfields);
	curl_setopt($curld, CURLOPT_URL,$url);
	curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);

$output = curl_exec($curld);

 curl_close ($curld);
	
	
		echo "Thank you $from for sending $message";
	} else {
		echo "Incorrect token";
		die;
	}



?>
