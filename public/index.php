<?php
use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};

//$url = getenv('JAWS-DB_DATABASE_URL');
/*$dbparts = parse_url($url);

$hostname = $dbparts['l6glqt8gsx37y4hs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com'];
$username = $dbparts['tbuhalr2fne75dzk'];
$password = $dbparts['v15fhziyxusv3k9s'];
$database = ltrim($dbparts['config'],'/');*/




//Get Heroku ClearDB connection information
/*$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"], 1);
$active_group = 'default';
$query_builder = TRUE;*/

// Connect to DB
//$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);


/*$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["us-cdbr-east-06.cleardb.net"];
$username = $url["b03340f8d8ae8c"];
$password = $url["c5396ecd"];
$db = substr($url["heroku_0a61a7eab41901f"], 1);

$conn = new mysqli($server, $username, $password, $db);*/


