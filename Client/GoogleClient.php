<?php

namespace Awy\GoogleApiBundle\Client;

abstract class GoogleClient
{
    /**
     * @var \Google_Client
     */
    protected $client;

    /*
     * @var \Google_Service_YouTube_SearchListResponse
     */
    protected $results;

    /**
     * @var string JSON encoded token
     */
    protected $token;

    public function __construct($oauthClientId, $oauthClientSecret)
    {
        $this->client = new \Google_Client();
        $this->client->setClientId($oauthClientId);
        $this->client->setClientSecret($oauthClientSecret);
    }

    /**
     * @return \Google_Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param string $accessToken The token
     */
    public function setAccessToken($accessToken)
    {
        $token = array(
            'access_token' => $accessToken,
        );

        $this->token = json_encode($token);
        $this->client->setAccessToken($this->token);
    }
}
