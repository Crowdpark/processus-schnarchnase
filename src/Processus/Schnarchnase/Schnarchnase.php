<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 10/15/12
 * Time: 7:24 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Processus\Schnarchnase;
class Schnarchnase
{

    /**
     * @var \Processus\Ruhebett\Interfaces\NoSQLInterface
     */
    private $adapter;

    /**
     * @var Data
     */
    private $data;

    /**
     * @var Meta
     */
    private $meta;

    /**
     * @param \Processus\Ruhebett\Interfaces\NoSQLInterface
     * @return Schnarchnase
     */
    public function setAdapter(\Processus\Ruhebett\Interfaces\NoSQLInterface $adapter)
    {
        $this->adapter = $adapter;

        return $this;
    }

    /**
     * @return \Processus\Ruhebett\Interfaces\NoSQLInterface
     */
    public function getAdapter()
    {
        return $this->adapter;
    }

    /**
     * @param $data
     * @return Schnarchnase
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return \Processus\Schnarchnase\Data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param $meta
     * @return Stubenhocker
     */
    public function setMeta($meta)
    {
        $this->meta = $meta;

        return $this;
    }

    /**
     * @return \Processus\Schnarchnase\Meta
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * @param Meta $meta
     * @param Data $data
     * @return mixed
     */
    public function store(Meta $meta = null, Data $data = null)
    {
        if ($meta) $this->setMeta($meta);
        if ($data) $this->setData($data);

        return $this->getAdapter()->insert($meta->getKey(), $data->getRawData());
    }

    /**
     * @param Meta $meta
     * @return Data
     */
    public function fetch(Meta $meta = null)
    {
        if ($meta) $this->setMeta($meta);

        $data = new Data();
        $data->setRawData($this->getAdapter()->fetch($meta->getKey()));

        return $data;
    }

    /**
     * @param Meta $meta
     * @return mixed
     */
    public function delete(Meta $meta = null)
    {
        if ($meta) $this->setMeta($meta);

        return $this->getAdapter()->delete($meta->getKey());
    }

}
