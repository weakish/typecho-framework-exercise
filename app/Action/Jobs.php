<?php

namespace Hello\Action;

use TE\Mvc\Action\AbstractAction;
use Hello\Data\JobList;

class Jobs extends AbstractAction
{
  private $jobQueue;
  public $id;
  public $job;

  public function execute()
  {
    $id = $this->request->get('id');
    $jobTime = $this->request->get('time');
    $user = $this->request->get('user');
    if ($this->jobQueue->idExist($id)) {
      return array('json', ['Error:' => 'Job already exist!']);
    } else {  
      $this->jobQueue->add(['id' => $id, 'time' => $jobTime, 'user' => $user]);
      $job = $this->jobQueue->getById($id);
      return array('json', $job); 
    }
  }
}
