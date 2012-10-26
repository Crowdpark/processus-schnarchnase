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

$incKey   = "scharchi::sleep:incid";
$incValue = 1;
$cbClient = new \Processus\Ruhebett\Couchbase\Client();
$cbClient->setHost("192.168.42.18")
    ->setPort("8091")
    ->initClient();

if ($cbClient->getMemDCli()->get($incKey) == null) {
    $cbClient->getMemDCli()->set($incKey, 1, 0);
} else {
    $incValue = $cbClient->getMemDCli()->increment($incKey, 1);
}
var_dump($incValue);

$meta = new \Processus\Schnarchnase\Meta();
$meta->setPrefix("schnarchi")
    ->setSeperator("::")
    ->setAutoIncrementValue($incValue)
    ->setAction("sleep");

echo "Key:      " . $meta->getKey() . PHP_EOL;
echo "Value:    " . $data->toJson() . PHP_EOL;

$endTime   = microtime(true);
$totalTime = $endTime - $startTime;
echo "Duration: " . $totalTime . PHP_EOL;