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
    ->setAutoIncrement(true)
    ->setAction("sleep");

$stubenhocker = new \Processus\Schnarchnase\Stubenhocker();
$stubenhocker->setMeta($meta)
    ->setData($data)
    ->setAdapter(new \Processus\Couchbase\Client())
    ->store();