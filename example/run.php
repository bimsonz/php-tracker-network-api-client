<?php
require __DIR__ . '/../vendor/autoload.php';

use TrackerNetwork\Api\SplitgateApiV2;
use TrackerNetwork\Authorization\TokenAuthorization;
use TrackerNetwork\Client;
use TrackerNetwork\Resource\Profile\XboxLiveProfile;

$client = new Client(
  new TokenAuthorization('d6f37faf-86a8-4d36-8416-efd36327bff6')
);

$response = $client->request(new SplitgateApiV2(), new XboxLiveProfile('HE IS ZEE'));

echo $response->getBody()->getContents();
