<?php

namespace Awy\GoogleApiBundle\Client;

class YoutubeClient extends GoogleClient
{
    /**
     * @var \Google_Service_YouTube
     */
    protected $service;

    public function __construct($oauthClientId, $oauthClientSecret, $oAuthConfig = array())
    {
        parent::__construct($oauthClientId, $oauthClientSecret, $oAuthConfig);

        $this->service = new \Google_Service_YouTube($this->client);
    }

    public function getService()
    {
        return $this->service;
    }
}
