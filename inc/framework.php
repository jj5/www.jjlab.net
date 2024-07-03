<?php

function get_resource_version() {

  static $version = JJLAB_CODE . '-' . JJLAB_VERSION_MAJOR . '.' . JJLAB_VERSION_MINOR . '.' . JJLAB_VERSION_PATCH;

  return $version;

}

require_once __DIR__ . '/../src/code/5-module/510-app/inc/framework.php';
