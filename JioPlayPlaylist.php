Replace URL http:/localhost or IP Address/ From Generated JioPlayPlaylist.php File With URL http://'.$ipadd.'/ Then Copy And Paste Jio TV Channels In Two Parts In Generate.php File 
<?php

echo '' . PHP_EOL;

header("Content-Type: application/vnd.apple.mpegurl");
$json = json_decode(file_get_contents('data/channels.json'), true);
$LANG_MAP = array(
    6 => "English",
    1 => "Hindi",
    2 => "Marathi",
    3 => "Punjabi",
    4 => "Urdu",
    5 => "Bengali",
    7 => "Malayalam",
    8 => "Tamil",
    9 => "Gujarati",
    10 => "Odia",
    11 => "Telugu",
    12 => "Bhojpuri",
    13 => "Kannada",
    14 => "Assamese",
    15 => "Nepali",
    16 => "French"
);
$GENRE_MAP = array(
    8 => "Sports",
    5 => "Entertainment",
    6 => "Movies",
    12 => "News",
    13 => "Music",
    7 => "Kids",
    9 => "Lifestyle",
    10 => "Infotainment",
    15 => "Devotional",
    16 => "Business",
    17 => "Educational",
    18 => "Shopping",
    19 => "JioDarshan"
);
foreach ($json['result'] as $channel) {
    $target = $channel['logoUrl'];
    $targetnew = trim($target, ".png");
    printf("#EXTINF:-1 tvg-id=\"%u\" group-title=\"%s\" tvg-language=\"%s\" tvg-logo=\"http://jiotv.catchup.cdn.jio.com/dare_images/images/%s\",%s" . PHP_EOL, $channel['channel_id'], $GENRE_MAP[$channel['channelCategoryId']], $LANG_MAP[$channel['channelLanguageId']], $channel['logoUrl'], $channel['channel_name']);    
    printf("http://%s/autoq.php?c=%s" . PHP_EOL . PHP_EOL, $_SERVER['HTTP_HOST'], $targetnew);    
}
