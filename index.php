<?php
require_once "route.php";
require_once "./class/database.php";
$moduleName =
  strpos(@$_REQUEST["url"], "/") ? str_split(@$_REQUEST["url"], strpos(@$_REQUEST["url"], "/"))[0] : @$_REQUEST['url'];

$url = [
  "home" => "./module/home.php",
  "create" => "./module/artikel/create.php",
  "update" => "./module/artikel/update.php",
  "delete" => "./module/artikel/delete.php",
];

$routes = new Route($url);

include_once './template/header.php';
include_once './template/navbar.php';
?>


<div class="p-5 max-w-[1000px] m-auto">
  <?php $routes->load($moduleName); ?>
</div>


<?php include_once './template/footer.php'; ?>