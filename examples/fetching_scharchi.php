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

$data = new \Processus\Schnarchnase\Data();
$data->addAttribute("firstname", "Francis")
    ->addAttribute("lastname", "Varga");

$meta = new \Processus\Schnarchnase\Meta();
$meta->setPrefix("appname")
    ->setType("user")
    ->setAutoIncrementValue(true)
    ->setAction("sleep");

$client = new \Processus\Ruhebett\Couchbase\Client();
$stubenhocker = new \Processus\Schnarchnase\Schnarchnase();
$stubenhocker->setMeta($meta)
    ->setData($data)
    ->setAdapter($client)
    ->store();

echo "Key:      " . $meta->getKey() . PHP_EOL;
echo "Value:    " . $data->toJson(). PHP_EOL;