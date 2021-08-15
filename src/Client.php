<?php

namespace TrackerNetwork;

use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\ResponseInterface;
use TrackerNetwork\Api\ApiInterface;
use TrackerNetwork\Authorization\AuthorizationInterface;
use TrackerNetwork\Resource\ResourceInterface;
use GuzzleHttp\Client as GuzzleClient;

class Client
{
  /**
   * @var AuthorizationInterface
   */
  protected $authorization;

  /**
   * @param AuthorizationInterface $authorization
   */
  public function __construct(AuthorizationInterface $authorization)
  {
    $this->authorization = $authorization;
  }

  public function request(ApiInterface $api, ResourceInterface $resource): ResponseInterface {
    $client = new GuzzleClient([
      'base_uri' => new Uri('https://public-api.tracker.gg')
    ]);

    $options = [
      'headers' => [
        'TRN-Api-Key' => (string) $this->authorization,
        'Content-Type' => 'application/json',
      ]
    ];

    if (!is_null($resource->body())) {
      $options = array_merge($options, ['body' => $resource->body()]);
    }

    $path = sprintf(
      '%s/%s',
      $api, $resource->uri()
    );

    return $client->request(
      $resource->method(),
      $path,
      $options
    );
  }

}
