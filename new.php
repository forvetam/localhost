<?php

$url = "https://official-joke-api.appspot.com/jokes/programming/random";
//$json = json_decode(file_get_contents($url));
//$setup = $json->setup;
//$punchline = $json->punchline;
$data = 0;

echo substr(substr(file_get_contents($url), 1), 0, strlen ($str)-1);
?>