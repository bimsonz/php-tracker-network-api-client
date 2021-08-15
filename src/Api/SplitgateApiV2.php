<?php

namespace TrackerNetwork\Api;

class SplitgateApiV2 extends AbstractApi implements ApiInterface
{

  public function version()
  {
    return 'v2';
  }

  public function name()
  {
    return 'splitgate';
  }
}
