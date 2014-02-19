<?php

namespace Hello\Action;

use TE\Mvc\Action\AbstractAction;

/**
 * Hello
 *
 * @use AbstractAction
 */

class Hello extends AbstractAction
{
  public function execute()
  {
    return array('content', 'Hello World!');
  }
}
