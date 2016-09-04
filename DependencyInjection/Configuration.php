<?php

namespace Valiknet\TogglBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package Valiknet\TogglBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('valiknet_toggl');

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.
        $rootNode
            ->children()
                ->scalarNode('username')->isRequired()->end()
                ->scalarNode('password')->isRequired()->end()
                ->scalarNode('api_token')->isRequired()->end()
                ->booleanNode('debug')->defaultFalse()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
