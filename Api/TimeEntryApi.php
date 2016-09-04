<?php

namespace Valiknet\TogglBundle\Api;

use Valiknet\TogglBundle\Models\Client;
use Valiknet\TogglBundle\Models\TimeEntry;

/**
 * Class TimeEntryApi
 * @package Valiknet\TogglBundle\Api
 */
class TimeEntryApi extends AbstractApi
{
    /**
     * @param TimeEntry $timeEntry
     * @return mixed
     */
    public function createTimeEntry(TimeEntry $timeEntry)
    {
        return $this->getTogglClient()->createTimeEntry(array(
            'timeEntry' => $timeEntry,
        ));
    }

    /**
     * @param TimeEntry $timeEntry
     * @return mixed
     */
    public function startTimeEntry(TimeEntry $timeEntry)
    {
        return $this->getTogglClient()->startTimeEntry(array(
            'timeEntry' => $timeEntry,
        ));
    }

    /**
     * @param integer $id
     * @return mixed
     */
    public function stopTimeEntry($id)
    {
        return $this->getTogglClient()->stopTimeEntry(array(
            'id' => $id,
        ));
    }

    /**
     * @param integer $id
     * @return mixed
     */
    public function getTimeEntry($id)
    {
        return $this->getTogglClient()->getTimeEntry(array(
            'id' => $id,
        ));
    }

    /**
     * @return mixed
     */
    public function getCurrentTimeEntry()
    {
        return $this->getTogglClient()->getCurrentTimeEntry();
    }

    /**
     * @param TimeEntry $timeEntry
     * @param $id
     * @return mixed
     */
    public function updateTimeEntry(TimeEntry $timeEntry, $id)
    {
        return $this->getTogglClient()->updateTimeEntry(array(
            'id' => $id,
            'timeEntry' => $timeEntry,
        ));
    }

    /**
     * @param integer $id
     * @return mixed
     */
    public function deleteTimeEntry($id)
    {
        return $this->getTogglClient()->deleteTimeEntry(array(
            'id' => $id,
        ));
    }
}
