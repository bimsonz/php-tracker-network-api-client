<?php

namespace TrackerNetwork\Resource;

use Psr\Http\Message\UriInterface;

interface ResourceInterface
{
  public function method(): string;

  public function uri(): UriInterface;

  public function body(): ?string;
}
