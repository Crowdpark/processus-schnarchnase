<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 10/15/12
 * Time: 7:24 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Processus\Schnarchnase;
class Stubenhocker
{

    /**
     * @var \Processus\Interfaces\NoSQLInterface
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
     * @param \Processus\Interfaces\NoSQLInterface $adapter
     * @return Stubenhocker
     */
    public function setAdapter(\Processus\Interfaces\NoSQLInterface $adapter)
    {
        $this->adapter = $adapter;

        return $this;
    }

    /**
     * @return \Processus\Interfaces\NoSQLInterface
     */
    public function getAdapter()
    {
        return $this->adapter;
    }

    /**
     * @param $data
     * @return Stubenhocker
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

    public function store()
    {

    }

    public function fetch(Meta $meta = null)
    {
        
    }

    public function delete()
    {

    }

}
