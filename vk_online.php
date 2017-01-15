<?php
$access_token = '';
$Online =
curl('https://api.vk.com/method/account.setOnline?&access_token='.$access_token)
;
function curl( $url ) {
	$ch = curl_init( $url );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
	$response = curl_exec( $ch );
	return $response;
}
?>
