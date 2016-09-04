<?php

namespace Valiknet\TogglBundle\Api;

use Valiknet\TogglBundle\TogglClient;

abstract class AbstractApi
{
    /**
     * @var TogglClient $client
     */
    private $client;

    /**
     * @return TogglClient
     */
    public function getTogglClient()
    {
        return $this->client;
    }

    /**
     * @param TogglClient $client
     */
    public function setTogglClient(TogglClient $client)
    {
        $this->client = $client->getClient();
    }
}
