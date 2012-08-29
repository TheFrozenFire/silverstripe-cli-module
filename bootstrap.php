<?php
include(__DIR__."/../framework/core/Core.php");

global $databaseConfig;
$_SESSION = null;

require_once("core/model/DB.php");
DB::connect($databaseConfig);
