<?php

namespace Awy\GoogleApiBundle\Tests;

use Awy\GoogleApiBundle\Client\YoutubeClient;
use Symfony\Component\DependencyInjection\ContainerInterface;

class YoutubeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * @var YoutubeClient
     */
    private $youtube;

    protected function setUp()
    {
        $kernel = new \AppKernel('test', true);
        $kernel->boot();

        $this->container = $kernel->getContainer();
        $this->youtube = $this->container->get('awy.google.youtube');
    }

    public function testServiceIsDefinedInContainer()
    {
        $this->assertInstanceOf('Awy\GoogleApiBundle\Client\YoutubeClient', $this->youtube);
    }
}
