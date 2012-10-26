<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 10/26/12
 * Time: 3:00 AM
 * To change this template use File | Settings | File Templates.
 */
namespace Processus\Schnarchnase;
class Data
{
    /**
     * @var array
     */
    private $rawData = array();

    /**
     * @param array $rawData
     */
    public function setRawData($rawData)
    {
        $this->rawData = $rawData;
    }

    /**
     * @return array
     */
    public function getRawData()
    {
        return $this->rawData;
    }

    /**
     * @param $key
     * @param $value
     * @return Data
     */
    public function addAttribute($key, $value)
    {
        $this->rawData[$key] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function toJson()
    {
        return json_encode($this->rawData, JSON_PRETTY_PRINT);
    }

}
