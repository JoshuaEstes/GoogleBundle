<?php

namespace JoshuaEstes\Bundle\GoogleBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode    = $treeBuilder->root('joshuaestes_google');

        $rootNode
            ->children()
                ->scalarNode('developer_key')
                    ->isRequired()
                    ->defaultNull()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
