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

$meta = new \Processus\Schnarchnase\Meta();
$meta->setPrefix("appname")
    ->setType("user")
    ->setAutoIncrementValue(6)
    ->setAction("sleep");

$adapter = new \Processus\Ruhebett\Couchbase\Client();
$adapter->setHost("127.0.0.1")
    ->setPort(8091);
$adapter->setUsername("Administrator")
    ->setPassword("Administrator")
    ->initClient();

$stubenhocker = new \Processus\Schnarchnase\Schnarchnase();
$data         = $stubenhocker->setAdapter($adapter)
                             ->fetch($meta);

echo "Key:      " . $meta->getKey() . PHP_EOL;
echo "Value:    " . $data->toJson() . PHP_EOL;

$endTime   = microtime(true);
$totalTime = $endTime - $startTime;
echo "Duration: " . $totalTime . PHP_EOL;