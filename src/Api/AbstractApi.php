<?php

namespace TrackerNetwork\Api;

abstract class AbstractApi implements ApiInterface
{
  abstract public function version();

  abstract public function name();

  public function __toString()
  {
    return sprintf('%s/%s', $this->version(), $this->name());
  }
}
