<?php

namespace TrackerNetwork\Api;

interface ApiInterface
{
  public function version();

  public function name();

  public function __toString();
}
