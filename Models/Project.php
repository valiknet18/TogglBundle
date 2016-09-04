<?php

namespace Valiknet\TogglBundle\Models;

class Project extends AbstractModel
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
     * @var integer $wid Workspace ID
     */
    protected $wid;

    /**
     * @var integer $cid Client ID
     */
    protected $cid;

    /**
     * @var boolean $active
     */
    protected $active;

    /**
     * @var boolean $is_private
     */
    protected $is_private;

    /**
     * @var string $template
     */
    protected $template;

    /**
     * @var integer $template_id
     */
    protected $template_id;

    /**
     * @var boolean $billable
     */
    protected $billable;

    /**
     * @param $name
     * @param $workspaceId
     * @param $clientId
     * @param $active
     * @param $is_private
     * @param $template
     * @param $template_id
     * @param $billable
     * @param null $id
     */
    public function __construct($name, $workspaceId, $clientId, $active, $is_private, $template, $template_id, $billable, $id = null)
    {
        $this->name = $name;
        $this->wid = $workspaceId;
        $this->cid = $clientId;
        $this->active = $active;
        $this->is_private = $is_private;
        $this->template = $template;
        $this->template_id = $template_id;
        $this->billable = $billable;
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
     * @return int
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * @param int $cid
     */
    public function setCid($cid)
    {
        $this->cid = $cid;
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

    /**
     * @return boolean
     */
    public function isIsPrivate()
    {
        return $this->is_private;
    }

    /**
     * @param boolean $is_private
     */
    public function setIsPrivate($is_private)
    {
        $this->is_private = $is_private;
    }

    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param string $template
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    }

    /**
     * @return int
     */
    public function getTemplateId()
    {
        return $this->template_id;
    }

    /**
     * @param int $template_id
     */
    public function setTemplateId($template_id)
    {
        $this->template_id = $template_id;
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
}
