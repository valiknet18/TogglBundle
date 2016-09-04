<?php

namespace Valiknet\TogglBundle;

class TogglClient
{
    /**
     * @var null
     */
    private $client;

    /**
     * @param $username
     * @param $password
     * @param $apiKey
     * @param bool|false $debug
     */
    public function __construct($username, $password, $apiKey, $debug = false)
    {
        $parameters = array(
            'api_key' => $apiKey,
            'username' => $username,
            'password' => $password,
        );

        $this->client = \AJT\Toggl\TogglClient::factory($parameters);
    }

    public function getClient()
    {
        return $this->client;
    }
}
