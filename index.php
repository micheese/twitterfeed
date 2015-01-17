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
$statues = $connection->get("search/tweets", array("q" => "athlemtl" , 'count' => 10));

foreach($statues->statuses as $status){
    var_dump($status->text);
}

?>

<!DOCTYPE html>
<html>
    <head lang="en">
        <link rel="stylesheet" type="text/css" href="resources/css/animate.css">
        <meta charset="UTF-8">
        <title>Twitter Feed</title>
    </head>
    <body>
        <div class="tlt">
            <ul class="texts">
                <?php foreach($statues->statuses as $status) : ?>
                    <li data-out-effect="fadeOut" data-out-shuffle="true"> <?php print $status->text ?> </li>
                <?php endforeach ?>
            </ul>
        </div>

    </body>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="resources/js/jquery.lettering.js"></script>
    <script src="resources/js/jquery.textillate.js"></script>
    <script src="resources/js/main.js"></script>
</html>


