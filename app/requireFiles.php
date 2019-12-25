<?php
  require_once 'master/core.php';
  require_once 'master/controller.php';
  require_once 'config/config.php';
  require_once 'helpers/urlHelper.php';

  spl_autoload_register(function ($className) {
      require_once 'master/'. $className . '.php';
  });

?>