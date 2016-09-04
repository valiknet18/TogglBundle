<?php

namespace Valiknet\TogglBundle\Models;

/**
 * Class Tag
 * @package Valiknet\TogglBundle\Models
 */
class Tag extends AbstractModel
{
    /**
     * @var int|null
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @var integer $wid
     */
    protected $wid;

    /**
     * @param string $name The name of the client
     * @param integer $workspaceId workspace ID, where the client will be used
     * @param integer $id
     * @return mixed
     */
    public function __construct($name, $workspaceId, $id = null)
    {
        $this->name = $name;
        $this->wid = $workspaceId;
        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getWid()
    {
        return $this->wid;
    }

    /**
     * @param int $wid
     */
    public function setWid($wid)
    {
        $this->wid = $wid;
    }
}
