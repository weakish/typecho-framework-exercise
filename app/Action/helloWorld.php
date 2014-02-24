<?php

namespace Hello\Action;

use TE\Mvc\Action\AbstractAction;

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
