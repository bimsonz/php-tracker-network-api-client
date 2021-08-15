<?php

namespace TrackerNetwork\Resource\Profile;

use TrackerNetwork\Resource\ResourceInterface;
use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\UriInterface;

class XboxLiveProfile implements ResourceInterface
{
  /**
   * @var string
   */
  protected $userIdentifier;

  /**
   * @param string $userIdentifier
   */
  public function __construct(string $userIdentifier)
  {
    $this->userIdentifier = $userIdentifier;
  }

  public function method(): string
  {
    return 'GET';
  }

  public function uri(): UriInterface
  {
    return new Uri('profile/xbl/'.rawurlencode($this->userIdentifier));
  }

  public function body(): ?string
  {
    return null;
  }


}
