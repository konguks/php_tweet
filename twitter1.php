<?php
require_once 'twitteroauth\autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;

define('CONSUMER_KEY', 'zrSHDcHAS8mm6RofzbG1qemZI');
define('CONSUMER_SECRET', 'tsKT2Y3XYnCzf0SEhb7wANyDXrJVsDnmZtgSRWXcmJTUdGk91b');
define('ACCESS_TOKEN', '714419437-9fXtejidHn8AzlggLet8AFkDjjJ1mVoYuYDUa9WQ');
define('ACCESS_TOKEN_SECRET', 'LEcNKVMsJkgKs2z7WenI7mAKPrsFqIEpX4yEQBBXJbnmK');
 
try {
	$toa = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
	 

	 
	$query = array(
		"q" => "#IamFan",
		"count" => 100
		);
	 
	$results = $toa->get('search/tweets', $query);		
	 
	foreach ($results->statuses as $result) {
	  echo $result->user->screen_name . ": " . $result->text . "\n";
	}
	echo 'done....';
	
} 
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}

?>
