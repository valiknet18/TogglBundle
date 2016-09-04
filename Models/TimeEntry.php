<?php

namespace Valiknet\TogglBundle\Models;

/**
 * Class TimeEntry
 * @package Valiknet\TogglBundle\Models
 */
class TimeEntry extends AbstractModel
{
    /**
     * @var int|null
     */
    protected $id = null;

    /**
     * @var string $description TimeEntryDescription
     */
    protected $description;

    /**
     * @var integer $wid Workspace ID
     */
    protected $wid;

    /**
     * @var integer $pid Project ID
     */
    protected $pid;

    /**
     * @var integer $tid Task ID
     */
    protected $tid;

    /**
     * @var boolean $billable (boolean, not required, default false, available for pro workspaces);
     */
    protected $billable;

    /**
     * @var string $created_with The name of your client app (string, required)
     */
    protected $created_with;

    /**
     * @var array $tags A list of tag names
     */
    protected $tags = array();

    /**
     * @var integer $duration Duration of time entry
     */
    protected $duration;

    /**
     * @var boolean $duronly Should Toggl show the start and stop time of this time entry?
     */
    protected $duronly;

    /**
     * @var string $start Start of time entry (string, required, ISO 8601 date and time)
     */
    protected $start;

    /**
     * @param string $description
     * @param integer $wid
     * @param integer $pid
     * @param integer $tid
     * @param boolean $billable
     * @param string $created_with
     * @param array $tags
     * @param string $duration
     * @param boolean $duronly
     * @param string $start
     * @param integer|null $id
     */
    public function __construct($description, $wid, $pid, $tid, $billable, $created_with, $tags, $duration, $duronly, $start, $id = null)
    {
        $this->description = $description;
        $this->wid = $wid;
        $this->pid = $pid;
        $this->tid = $tid;
        $this->billable = $billable;
        $this->created_with = $created_with;
        $this->tags = $tags;
        $this->duration = $duration;
        $this->duronly = $duronly;
        $this->start = $start;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * @param int $tid
     */
    public function setTid($tid)
    {
        $this->tid = $tid;
    }

    /**
     * @return boolean
     */
    public function isBillable()
    {
        return $this->billable;
    }

    /**
     * @param boolean $billable
     */
    public function setBillable($billable)
    {
        $this->billable = $billable;
    }

    /**
     * @return string
     */
    public function getCreatedWith()
    {
        return $this->created_with;
    }

    /**
     * @param string $created_with
     */
    public function setCreatedWith($created_with)
    {
        $this->created_with = $created_with;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return boolean
     */
    public function isDuronly()
    {
        return $this->duronly;
    }

    /**
     * @param boolean $duronly
     */
    public function setDuronly($duronly)
    {
        $this->duronly = $duronly;
    }

    /**
     * @return string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param string $start
     */
    public function setStart($start)
    {
        $this->start = $start;
    }
}
