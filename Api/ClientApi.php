<?php

namespace Valiknet\TogglBundle\Api;

use Valiknet\TogglBundle\Models\Client;

class ClientApi extends AbstractApi
{
    /**
     * @param Client $client
     * @return mixed
     */
    public function createClient(Client $client)
    {
        return $this->getTogglClient()->createClient(array(
            'client' => $client,
        ));
    }

    /**
     * @param integer $id Client ID
     * @return \AJT\Toggl\TogglClient|null
     */
    public function getClient($id)
    {
        return $this->getTogglClient()->getClient(array(
            'id' => $id
        ));
    }

    /**
     * @param Client $client
     * @param $id Client ID
     * @return mixed
     */
    public function updateClient(Client $client, $id)
    {
        return $this->getTogglClient()->updateClient(array(
            'id' => $id,
            'client' => $client,
        ));
    }

    /**
     * @param $id Client ID
     * @return mixed
     */
    public function deleteClient($id)
    {
        return $this->getTogglClient()->deleteClient(array(
            'id' => $id,
        ));
    }

    /**
     * @return mixed
     */
    public function getClients()
    {
        return $this->getTogglClient()->getClients();
    }

    /**
     * @param integer $id
     * @param boolean $active
     * @return mixed
     */
    public function getClientProjects($id, $active = true)
    {
        return $this->getTogglClient()->getClientProjects(array(
            'id' => $id,
            'active' => $active,
        ));
    }
}
