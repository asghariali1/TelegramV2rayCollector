<?php

function save_sub()
{
    $url = 'https://raw.githubusercontent.com/asghariali1/TelegramV2rayCollector/main/sub/mix_base64 ';
    echo $url;
    file_put_contents('mix.txt', file_get_contents($url));
}

save_sub();
?>
