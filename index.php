<?php
/**
* @author Beta
* @brief Libera la bestia, carga todo lo necesario y lo ejecuta en su momento.
* @copyright Evilnapsis 2016
**/
session_start();
include "core/autoload.php";

define("ROOT",dirname(__FILE__));

$lb = new Lb();
$lb->loadModule("index");

?>