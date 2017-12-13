<?php

$devolver = [];
$tweets = 5;
include_once('twitteroauth/twitteroauth.php');

$twitter_customer_key           = 'JdmrAiQk2mx8v3tvhDEA';
$twitter_customer_secret        = 'uQ7imQSv6hirqQr9Nt5mksCdUCVAfk5srF0Mk3vo';
$twitter_access_token           = '17587879-mftRUoqaPQj2OLZdu2Y08qY9vHRJfM7hE2yo87Y3d';
$twitter_access_token_secret    = 'jFQyQ64PAEnyBVCWYPgJdVEGr3X0RpoCldgkyLUW5A';

$cuentas = $_GET["cuentas"];
$cuentas = explode("-", $cuentas);

$connection = new TwitterOAuth($twitter_customer_key, $twitter_customer_secret, $twitter_access_token, $twitter_access_token_secret);

for($b=0;$b<count($cuentas);$b++){
    $my_tweets[$b] = $connection->get('statuses/user_timeline', array('screen_name' => $cuentas[$b], 'count' => $tweets));
    for($i=0;$i<$tweets;$i++){
        if(isset($my_tweets[$b]->errors))
        {           
            array_push($devolver,'Error :'. $my_tweets[$b]->errors[1]->code. ' - '. $my_tweets[$b]->errors[1]->message);
        }else{
            array_push($devolver,"<div class='cabeceratw'><img src='".$my_tweets[$b][$i]->user->profile_image_url."'><span>".$my_tweets[$b][$i]->user->screen_name."</span></div>".makeClickableLinks($my_tweets[$b][$i]->text)) ;
        }
    }
}



//function to convert text url into links.
function makeClickableLinks($s) {
  return preg_replace('@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@', '<a target="blank" rel="nofollow" href="$1" target="_blank">$1</a>', $s);
}

echo json_encode( $devolver);

?>