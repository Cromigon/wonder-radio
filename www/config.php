<?php

ini_set("display_errors", "1");
error_reporting(-1);
require_once dirname(__DIR__)."/hidden.php";

$icecastHost = "YOUR_HOST_HERE";
$icecastPort = 8000;
$icecastMount = "/stream";
$radioTitle = "YOUR_TITLE_HERE";

$trackWait = 4*60; // In minutes
$queueWait = 20; // In minutes
$queueMaxSize = 10;
$suggestWait = 12*60;

$searchResultsPerPage = 20;
$suggesionsPerPage = 20;

$streamUrl = "http://".$icecastHost.":".$icecastPort.$icecastMount;
$icecastpInfoUrl = "http://".$localIcecastHost.":".$localIcecastPort."/info_json.xsl";

session_cache_expire(5*24*60*60);
session_start();

$db = new PDO("mysql:host=".$mysqlHost.";dbname=".$mysqlDatabase, $mysqlUser, $mysqlPassword);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // Display errors, but continue script

$state = isset($_SESSION['state'])?$_SESSION['state']:array("admin" => false);
$_SESSION['state'] = &$state;
