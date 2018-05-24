<?php
include ('line-bot-api/php/line-bot.php');
$channelSecret = 'daba90d1c2110f388185b2d87f961155';
$access_token  = 'bnfys5xIi8aqqCUKcwTWpX8nWYUlz5j/IKEJddzOHgjPSKYa0NwviBDB+E8yYw2SbnZwE4aoUSJThq3fr85yHlDPzkTARx+qiwdUg88fA7oST76DCrwn+3KGo0VKQKQrp44wckOAusRanNAivA3yEQdB04t89/1O/w1cDnyilFU=';
$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
