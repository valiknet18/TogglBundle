<?php

namespace Valiknet\TogglBundle\Models;

class ProjectUser extends AbstractModel
{
    /**
     * @var int|null
     */
    protected $id = null;

    /**
     * @var string $pid
     */
    protected $pid;

    /**
     * @var integer $uid
     */
    protected $uid;

    /**
     * @var integer $wid
     */
    protected $wid;

    /**
     * @var boolean $manager
     */
    protected $manager;

    /**
     * @var float|null $rate
     */
    protected $rate;

    /**
     * @var string $fullname
     */
    protected $fullname;

    /**
     * @param integer $pid Project ID
     * @param integer $uid User ID
     * @param integer $wid Workspace ID
     * @param boolean $manager Admin rights for this project (boolean, default false)
     * @param float|null $rate hourly rate for the project user (float, not-required, only for pro workspaces) in the currency of the project's client or in workspace default currency.
     * @param string $fullname Fullname: full name of the user, who is added to the project
     * @param integer|null $id
     */
    public function __construct($pid, $uid, $wid, $manager, $rate, $fullname, $id = null)
    {
        $this->pid = $pid;
        $this->uid = $uid;
        $this->wid = $wid;
        $this->manager = $manager;
        $this->rate = $rate;
        $this->fullname = $fullname;
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
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @param string $pid
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
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
     * @return boolean
     */
    public function isManager()
    {
        return $this->manager;
    }

    /**
     * @param boolean $manager
     */
    public function setManager($manager)
    {
        $this->manager = $manager;
    }

    /**
     * @return float|null
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param float|null $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * @return string
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * @param string $fullname
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
    }
}
