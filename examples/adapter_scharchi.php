<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 10/26/12
 * Time: 2:56 AM
 * To change this template use File | Settings | File Templates.
 */

require __DIR__ . "/../vendor/autoload.php";

echo "Hello Schnarchi" . PHP_EOL;
$startTime = microtime(true);

$data = new \Processus\Schnarchnase\Data();
$data->addAttribute("firstname", "Francis")
    ->addAttribute("lastname", "Varga");

$meta = new \Processus\Schnarchnase\Meta();
$meta->setPrefix("appname")
    ->setType("user")
    ->setAutoIncrementValue(true)
    ->setExpiredTime(0)
    ->setAction("sleep");

$adapter = new \Processus\Ruhebett\Couchbase\Client();
$adapter->setHost("127.0.0.1")
    ->setPort(8091);
$adapter->setUsername("Administrator")
    ->setPassword("Administrator")
    ->initClient();

$endTime   = microtime(true);
$totalTime = $endTime - $startTime;
echo "Duration: " . $totalTime . PHP_EOL;