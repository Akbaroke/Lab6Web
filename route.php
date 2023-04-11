<?php
class Route
{
  private $config = [];
  public function __construct($config)
  {
    $this->config = $config;
  }

  public function load($moduleName)
  {
    if (array_key_exists($moduleName, $this->config)) {
      require($this->config[$moduleName]);
    } else if ($moduleName == "") {
      require($this->config["home"]);
    } else {
      include_once "./module/artikel/error.php";
    }
  }
}
