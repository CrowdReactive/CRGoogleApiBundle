<?php

namespace Awy\GoogleApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder();
        $rootNode = $builder->root('awy_google_api');
        $rootNode->children()
                    ->scalarNode('google_client_id')->isRequired()->end()
                    ->scalarNode('google_client_secret')->isRequired()->end()
                    ->scalarNode('redirect_uri')->defaultNull()->end()
                    ->scalarNode('developer_key')->defaultNull()->end()
                    ->scalarNode('hd')->defaultNull()->end()
                    ->scalarNode('prompt')->defaultNull()->end()
                    ->scalarNode('openid_realm')->defaultNull()->end()
                    ->scalarNode('include_granted_scopes')->defaultNull()->end()
                    ->scalarNode('login_hint')->defaultNull()->end()
                    ->scalarNode('request_visible_actions')->defaultNull()->end()
                    ->scalarNode('access_type')->defaultValue('offline')->end()
                    ->scalarNode('approval_prompt')->defaultValue('auto')->end()
                    ->scalarNode('federated_signon_certs_url')->defaultValue('https://www.googleapis.com/oauth2/v1/certs')->end()
                 ->end();
        return $builder;
    }
}
