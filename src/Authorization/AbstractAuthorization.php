<?php

namespace TrackerNetwork\Authorization;

abstract class AbstractAuthorization implements AuthorizationInterface
{
  abstract public function get();

  public function __toString()
  {
    return $this->get();
  }
}
