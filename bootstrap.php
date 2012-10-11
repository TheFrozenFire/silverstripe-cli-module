<?php
include(__DIR__."/../framework/core/Core.php");

global $databaseConfig;
$_SESSION = null;

require_once(__DIR__."/../framework/model/DB.php");
DB::connect($databaseConfig);
