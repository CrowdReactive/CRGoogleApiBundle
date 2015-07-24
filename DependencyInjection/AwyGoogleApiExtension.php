<?php

namespace Awy\GoogleApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader;

class AwyGoogleApiExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $processor = new Processor();
        $configuration = new Configuration();
        $config = $processor->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        $container->setParameter('awy_google_client_id',     $config['google_client_id']);
        $container->setParameter('awy_google_client_secret', $config['google_client_secret']);

        $config['client_id'] = $config['google_client_id'];
        $config['client_secret'] = $config['google_client_secret'];
        $config['openid.realm'] = $config['openid_realm'];

        unset($config['google_client_id']);
        unset($config['google_client_secret']);
        unset($config['openid_realm']);

        $container->setParameter('awy_oauth_config', $config);

    }

    public function getAlias()
    {
        return 'awy_google_api';
    }
}