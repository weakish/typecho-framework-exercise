<?php

namespace Hello\Service;

use TE\Mvc\Service\Db\AbstractTable;

class JobQueue extends AbstractTable
{
  public function init()
  {
    $this->setTable('jobs');
    $this->setPrimaryKey('id');
  }

  public function getById($id)
  {
    return $this->findBy('id', $id);
  }

  public function idExist($id)
  {
    if ($this->getById($id)) {
      return true;
    } else {
      return false;
    }
  }
}
