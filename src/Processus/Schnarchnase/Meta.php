<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 10/26/12
 * Time: 2:58 AM
 * To change this template use File | Settings | File Templates.
 */
namespace Processus\Schnarchnase;
class Meta
{
    /**
     * @var array
     */
    private $rawMeta = array();

    /**
     * @var string
     */
    private $seperator = ":";

    /**
     * @param $seperator
     * @return Meta
     */
    public function setSeperator($seperator)
    {
        $this->seperator = $seperator;

        return $this;
    }

    /**
     * @return string
     */
    public function getSeperator()
    {
        return $this->seperator;
    }

    /**
     * @param $autoIncrement
     * @return Meta
     */
    public function setAutoIncrementValue($autoIncrement)
    {
        $this->rawMeta['autoIncrement'] = $autoIncrement;

        return $this;
    }

    /**
     * @return string
     */
    public function getAutoIncrement()
    {
        return empty($this->rawMeta['autoIncrement']) ? null : $this->rawMeta['autoIncrement'];
    }

    /**
     * @param array $rawMeta
     */
    public function setRawMeta($rawMeta)
    {
        $this->rawMeta = $rawMeta;
    }

    /**
     * @return array
     */
    public function getRawMeta()
    {
        return $this->rawMeta;
    }

    /**
     * @param $action
     * @return Meta
     */
    public function setAction($action)
    {
        $this->rawMeta['action'] = $action;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return empty($this->rawMeta['action']) ? null : $this->rawMeta['action'];
    }

    /**
     * @param $prefix
     * @return Meta
     */
    public function setPrefix($prefix)
    {
        $this->rawMeta['prefix'] = $prefix;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrefix()
    {
        return empty($this->rawMeta['prefix']) ? null : $this->rawMeta['prefix'];
    }

    /**
     * @param $primId
     * @return Meta
     */
    public function setPrimId($primId)
    {
        $this->rawMeta['primId'] = $primId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrimId()
    {
        return empty($this->rawMeta['primId']) ? null : $this->rawMeta['primId'];
    }

    /**
     * @param $type
     * @return Meta
     */
    public function setType($type)
    {
        $this->rawMeta['type'] = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return empty($this->rawMeta['type']) ? null : $this->rawMeta['type'];
    }

    /**
     * @return string
     */
    public function getKey()
    {
        $keyStruct = array($this->getPrefix(), $this->getPrimId(), $this->getType(), $this->getAction(), $this->getAutoIncrement());
        return implode($this->getSeperator(), array_filter($keyStruct, 'strlen'));
    }

}
