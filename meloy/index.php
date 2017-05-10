<?php

use tea\AngularActionView;
use tea\Tea;

//设置常量
define("TEA_ROOT", __DIR__);
define("TEA_PUBLIC", __DIR__);
define("TEA_URL_BASE", preg_replace("{/([^/]+\\.php|\\?).*$}", "", $_SERVER["REQUEST_URI"] ?? ""));
define("TEA_URL_DISPATCHER", "index.php");
define("TEA_ENABLE_ACTION_PARAM", true);
define("TEA_ENV", "dev");

//包含框架
require "TeaPHP/tea.php";
require "functions.php";

//启用应用
Tea::shared()
	->actionView(AngularActionView::class)
	->start();

?>