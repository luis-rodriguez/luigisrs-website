<?php
	function getTweets($user, $count) {
    $datas = file_get_contents('https://twitter.com/'.$user);

    preg_match_all('/<p class="js-tweet-text tweet-text">(.*?)<\/p>/', $datas, $matchetweets);
    $matchetweets[1] = preg_replace('/<s>(.?)<\/s>/', '$1', $matchetweets[1]);
    $matchetweets[1] = preg_replace('/(class|dir|rel|data-expanded-url|data-pre-embedded|data-query-source)="(.*?)"/', '', $matchetweets[1]);

    for ($i = 1; $i <= $count; $i++) {
        echo $matchetweets[1][$i];
    }
};

?>