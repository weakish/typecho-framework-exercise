<?php

namespace Hello\Action;

use TE\Mvc\Action\AbstractAction;
use TE\Mvc\Server\Http\Request;

/**
 * Index
 *
 * @use AbstractAction
 */


class Name extends AbstractAction
{
  public $msg;
  public $user_name;
  public $req;
  
  public function execute()
  {
//    $req = $this->request;
//    $req = var_export($req, true);
//    preg_match("#'name' => '(\w+)'#", $req, $matches);
//    $req = $matches[1];
//    $req = var_export($this->request, true);
//    $req = AbstractAction::getRequest();
    $myReq = new Request();
    $this->req = ltrim($myReq->getPathInfo(), '/');
    return array('content', $this->req);
  }
}
