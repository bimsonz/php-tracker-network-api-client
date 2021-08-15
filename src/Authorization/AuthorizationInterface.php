<?php

namespace TrackerNetwork\Authorization;

interface AuthorizationInterface
{
  public function get();

  public function __toString();
}
