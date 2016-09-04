<?php

namespace Valiknet\TogglBundle\Models;

/**
 * Class Tag
 * @package Valiknet\TogglBundle\Models
 */
class Task extends AbstractModel
{
    /**
     * @var int|null
     */
    protected $id = null;

    /**
     * @var string $name Task name
     */
    protected $name;

    /**
     * @var integer $pid Project ID
     */
    protected $pid;

    /**
     * @var integer $wid Workspace ID
     */
    protected $wid;

    /**
     * @var integer $uid User ID, to whom the task is assigned to
     */
    protected $uid;

    /**
     * @var integer $estimated_seconds Estimated duration of task in seconds
     */
    protected $estimated_seconds;

    /**
     * @var boolean $active Whether the task is done or not (boolean, by default true)
     */
    protected $active;

    /**
     * @param $name
     * @param $projectId
     * @param $workspaceId
     * @param $estimated_seconds
     * @param null $userId
     * @param bool|true $active
     * @param null $id
     */
    public function __construct($name, $projectId, $workspaceId, $estimated_seconds, $userId = null, $active = true, $id = null)
    {
        $this->name = $name;
        $this->pid = $projectId;
        $this->wid = $workspaceId;
        $this->uid = $userId;
        $this->estimated_seconds = $estimated_seconds;
        $this->active = $active;
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
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @param int $pid
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
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

    /**
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param int $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    /**
     * @return int
     */
    public function getEstimatedSeconds()
    {
        return $this->estimated_seconds;
    }

    /**
     * @param int $estimated_seconds
     */
    public function setEstimatedSeconds($estimated_seconds)
    {
        $this->estimated_seconds = $estimated_seconds;
    }

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }
}
