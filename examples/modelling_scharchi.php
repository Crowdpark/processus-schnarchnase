<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 10/26/12
 * Time: 2:56 AM
 * To change this template use File | Settings | File Templates.
 */

require __DIR__ . "/../vendor/autoload.php";

echo "Hallo du Schnarchnase! :)" . PHP_EOL;
$startTime = microtime(true);

$data = new \Processus\Schnarchnase\Data();
$data->addAttribute("lastname", "Varga")
    ->addAttribute("email", "fv@varga-multimedia.com")
    ->addAttribute("blog", "http://varga-multimedia.com")
    ->addAttribute("linkedIn", "http://de.linkedin.com/in/francisvarga/en")
    ->addAttribute("company", "Crowdpark");

$cbClient = new \Processus\Ruhebett\Couchbase\Client();
$cbClient->setHost("127.0.0.1")
    ->setPort("8091")
    ->initClient();

$incKey   = "scharchi::sleep:incid";
$incValue = 1;

$incValue = $cbClient->increment($incKey);

$meta = new \Processus\Schnarchnase\Meta();
$meta->setPrefix("schnarchi")
    ->setAutoIncrementValue($incValue)
    ->setAction("sleep");

echo "Key:      " . $meta->getKey() . PHP_EOL;
echo "Value:    " . $data->toJson() . PHP_EOL;

$endTime   = microtime(true);
$totalTime = $endTime - $startTime;
echo "Duration: " . $totalTime . PHP_EOL;