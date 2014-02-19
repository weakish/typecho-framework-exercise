<?php

return array(
  'ending' => array('Hello\Service\Ending'),
  'jobQueue' => array('Hello\Service\JobQueue'),
  'serviceDb' => array('TE\Db\Connector',
    array(
      'PdoMysql',
      array(
        'mysql:dbname=test;host=127.0.0.1;port=3306;',
        'mysql',
        '',
      ),
    ),
  ),
);
