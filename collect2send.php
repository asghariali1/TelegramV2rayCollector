<?php

function create_url()
{
    $data = json_decode(file_get_contents("https://raw.githubusercontent.com/asghariali1/TelegramV2rayCollector/main/sub/mix_base64"), true);
    $url = "https://raw.githubusercontent.com/asghariali1/TelegramV2rayCollector/main/sub/mix_base64";
    foreach ($data as $key => $value) {
        if ($key === "worker") {
            $url = "https://" . $value;
        } elseif ($key === "sub") {
            if ($value !== "") {
                $url .= "/sub/" . $value;
            } else {
                $url .= "/sub";
            }
        } else {
            if ($value !== "") {
                if (strpos($url, "?") !== false) {
                    $url .= "&" . $key . "=" . $value;
                } else {
                    $url .= "?" . $key . "=" . $value;
                }
            }
        }
    }
    return $url;
}

function save_sub()
{
    $url = create_url();
    echo $url;
    file_put_contents('mix.txt', file_get_contents($url));
}

save_sub();
?>
