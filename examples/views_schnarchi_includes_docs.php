<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 10/31/12
 * Time: 6:25 PM
 * To change this template use File | Settings | File Templates.
 */

require __DIR__ . "/../vendor/autoload.php";

echo "Hello Schnarchi" . PHP_EOL;
$startTime = microtime(true);

$schnarchi        = new \Processus\Schnarchnase\Schnarchnase();
$viewData         = $schnarchi->setAdapter(new \Processus\Ruhebett\Memcached\Client())
    ->getView("test", "created", array("limit" => 5, "include_docs" => true), "default");

foreach ($viewData['stack'] as $item) {

    /** @var $meta \Processus\Schnarchnase\Meta */
    $meta = $item['meta'];
    var_dump($meta->getExpiredTime());

    /** @var $data \Processus\Schnarchnase\Data */
    $data = $item['data'];
    var_dump($data->getRawData());
}

$endTime   = microtime(true);
$totalTime = $endTime - $startTime;
echo "Duration: " . $totalTime . PHP_EOL;