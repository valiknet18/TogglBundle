<?php

namespace Valiknet\TogglBundle\Api;

use Valiknet\TogglBundle\Models\Task;

/**
 * Class TaskApi
 * @package Valiknet\TogglBundle\Api
 */
class TaskApi extends AbstractApi
{
    /**
     * @param Task $task
     * @return mixed
     */
    public function createTask(Task $task)
    {
        return $this->getTogglClient()->createTask(array(
            'task' => $task,
        ));
    }

    /**
     * @param integer $id
     * @return mixed
     */
    public function getTask($id)
    {
        return $this->getTogglClient()->getTask(array(
            'id' => $id
        ));
    }

    /**
     * @param Task $task
     * @param integer $id
     * @return mixed
     */
    public function updateTask(Task $task, $id)
    {
        return $this->getTogglClient()->updateTask(array(
            'id' => $id,
            'task' => $task,
        ));
    }

    /**
     * @param integer $id
     * @return mixed
     */
    public function deleteTask($id)
    {
        return $this->getTogglClient()->deleteTask(array(
            'id' => $id,
        ));
    }
}
