<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 2015-01-17
 * Time: 1:13 PM
 */

require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

$connection = new TwitterOAuth('1DDT8L2qt34XRzPy3vR7nxad3', 'N8tB9tVvlLKEOIHjoxkkNgyTi6zwiPBue2FOfJf1EepftQw05U', '220770919-sejeOEtBMqyrK3S6Z7SzdxNnEXAvHkbHaXcUEqdx', 'IQaTx7CL8lre4tPYpaF0VMlBmzdZBMbtJtdy8lhvVoW5F');
$statues = updateStatus($connection);

function updateStatus($connection){
    $tweet_to_display = array();
    $statues = $connection->get("statuses/user_timeline", array("screen_name" => "athlemtl" , 'count' => 10));


    foreach($statues as $status){
        $tweet_to_display[] = array(
            'text' => $status->text,
            'picture_url' => $status->user->profile_image_url);
    }

    header('Content-Type: application/json');
    print json_encode($tweet_to_display);
    exit();
}




