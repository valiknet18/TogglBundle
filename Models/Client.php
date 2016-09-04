<?php

namespace Valiknet\TogglBundle\Models;

class Client extends AbstractModel
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
     * @var string|null $notes
     */
    protected $notes;

    /**
     * @var float|null $hrate
     */
    protected $hrate;

    /**
     * @var string|null $cur
     */
    protected $cur;

    /**
     * @param string $name The name of the client
     * @param integer $workspaceId workspace ID, where the client will be used
     * @param string|null $notes Notes for the client
     * @param float|null $hourRate The hourly rate for (Only for pro workspace)
     * @param string|null $currency The name of the client's currency (Only for pro workspace)
     * @param integer $id
     * @return mixed
     */
    public function __construct($name, $workspaceId, $notes = null, $hourRate = null, $currency = null, $id = null)
    {
        $this->name = $name;
        $this->wid = $workspaceId;
        $this->notes = $notes;
        $this->hrate = $hourRate;
        $this->cur = $currency;
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

    /**
     * @return null|string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param null|string $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * @return float|null
     */
    public function getHrate()
    {
        return $this->hrate;
    }

    /**
     * @param float|null $hrate
     */
    public function setHrate($hrate)
    {
        $this->hrate = $hrate;
    }

    /**
     * @return null|string
     */
    public function getCur()
    {
        return $this->cur;
    }

    /**
     * @param null|string $cur
     */
    public function setCur($cur)
    {
        $this->cur = $cur;
    }
}
