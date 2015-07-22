<?php

namespace Awy\GoogleApiBundle\Client;

class YoutubeClient extends GoogleClient
{
    /**
     * @var \Google_Service_YouTube
     */
    protected $service;

    public function __construct($oauthClientId, $oauthClientSecret)
    {
        parent::__construct($oauthClientId, $oauthClientSecret);

        $this->service = new \Google_Service_YouTube($this->client);
    }


}
