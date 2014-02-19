<?php

namespace Hello\Action;

use TE\Mvc\Action\AbstractAction;

/**
 * Hi
 *
 * @use AbstractAction
 */

class Hi extends AbstractAction
{
  public function execute()
  {
    $name = $this->request->getArray('name');
    $this->name = $name[0];
    $this->msg = 'Hi!';
    return array('template', 'hi.php');
  }
}
