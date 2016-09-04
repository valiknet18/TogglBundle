<?php

namespace Valiknet\TogglBundle\Api;

use Valiknet\TogglBundle\Models\Project;
use Valiknet\TogglBundle\Models\ProjectUser;

class ProjectApi extends AbstractApi
{
    /**
     * @param Project $project
     * @return mixed
     */
    public function createProject(Project $project)
    {
        return $this->getTogglClient()->createProject(array(
            'project' => $project,
        ));
    }

    /**
     * @param integer $id
     * @return mixed
     */
    public function getProject($id)
    {
        return $this->getTogglClient()->getProject(array(
            'id' => $id,
        ));
    }

    /**
     * @param $id
     * @param $active
     * @return mixed
     */
    public function getProjects($id, $active)
    {
        return $this->getTogglClient()->getProjects(array(
            'id' => $id,
            'active' => $active,
        ));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getProjectTasks($id)
    {
        return $this->getTogglClient()->getProjectTasks(array(
            'id' => $id,
        ));
    }

    /**
     * @param $id
     * @param Project $project
     * @return mixed
     */
    public function updateProject($id, Project $project)
    {
        return $this->getTogglClient()->updateProject(array(
            'id' => $id,
            'project' => $project,
        ));
    }

    /**
     * @param $id Project ID
     * @return mixed
     */
    public function deleteProject($id)
    {
        return $this->getTogglClient()->deleteProject(array(
            'id' => $id,
        ));
    }

    /**
     * @param $id Project ID
     * @return mixed
     */
    public function getProjectUsers($id)
    {
        return $this->getTogglClient()->getProjectUsers(array(
            'id' => $id,
        ));
    }

    /**
     * @param ProjectUser $projectUser
     * @return mixed
     */
    public function createProjectUser(ProjectUser $projectUser)
    {
        return $this->getTogglClient()->createProjectUser(array(
            'project_user' => $projectUser,
        ));
    }

    /**
     * @param integer $id
     * @param ProjectUser $projectUser
     * @return mixed
     */
    public function updateProjectUser($id, ProjectUser $projectUser)
    {
        return $this->getTogglClient()->updateProjectUser(array(
            'id' => $id,
            'project_user' => $projectUser,
        ));
    }

    /**
     * @param integer $id
     * @return mixed
     */
    public function deleteProjectUser($id)
    {
        return $this->getTogglClient()->deleteProjectUser(array(
            'id' => $id,
        ));
    }
}
