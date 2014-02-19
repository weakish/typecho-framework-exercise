<?php

namespace Hello\Action;

use TE\Mvc\Action\AbstractAction;
use Hello\Service\Ending;

/**
 * Hello
 *
 * @use AbstractAction
 */

class helloWorld extends AbstractAction
{
  
  private  $ending;
  public function execute()
  {
    return array('content', 'Hello, world.' . $this->ending->endWord());
  }
}
