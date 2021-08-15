<?php

namespace TrackerNetwork\Authorization;

class TokenAuthorization extends AbstractAuthorization implements AuthorizationInterface
{
  /**
   * @var string
   */
  protected $token;

  /**
   * @param string $token
   */
  public function __construct(string $token)
  {
    $this->token = $token;
  }


  public function get()
  {
    return $this->token;
  }
}
