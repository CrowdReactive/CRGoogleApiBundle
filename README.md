# AwyGoogleApiBundle
A Symfony bundle to easily use the Google API (v3.0)

This bundle is not ready for use yet.

    parameters:
        google_client_id: hello
        google_client_secret: world
    
    services:
        awy.google.youtube:
            class: Awy\GoogleApiBundle\Client\YoutubeClient
            arguments: ["%google_client_id%", "%google_client_secret%"]
