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
$data->addAttribute("lastname", "Varga")
    ->addAttribute("email", "fv@varga-multimedia.com")
    ->addAttribute("blog", "http://varga-multimedia.com")
    ->addAttribute("linkedIn", "http://de.linkedin.com/in/francisvarga/en")
    ->addAttribute("company", "Crowdpark");

$meta = new \Processus\Schnarchnase\Meta();
$meta->setPrefix("schnarchi")
    ->setSeperator("::")
    ->setAutoIncrementValue(true)
    ->setAction("sleep");

echo "Key:      " . $meta->getKey() . PHP_EOL;
echo "Value:    " . $data->toJson() . PHP_EOL;

$client = new \Processus\Ruhebett\Couchbase\Client();

$schnarcher = new \Processus\Schnarchnase\Schnarchnase();
$schnarcher->setMeta($meta->setType("user"))
    ->setData($data->addAttribute("firstname", "Francis"))
    ->setAdapter($client->setHost("couchbase-rupert"))
    ->store();

$endTime   = microtime(true);
$totalTime = $endTime - $startTime;
echo "Duration: " . $totalTime . PHP_EOL;