<?xml version="1.0" encoding="UTF-8"?>
<phpunit colors="true" bootstrap="./tests/bootstrap.php">
</phpunit>
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('<QB3HOowR3K7yLrF5BRoH9lgKXbXJg4iQDq1rdw+qFhaI9Vnxu5P8qddpCwlTVjPGcsNxlpUTZyVnqS/m5zUXj8S2YxrxIs7gsO/XDixsl0ruQOlWJ6Yg1MRRpVJoSsGPKnRXHZhUhqv9KqO0DUDkVwdB04t89/1O/w1cDnyilFU=>');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '<	
912af9338b2e8bc4d815ba1a8e38e8d0>']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->replyMessage('<Gilak>', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
