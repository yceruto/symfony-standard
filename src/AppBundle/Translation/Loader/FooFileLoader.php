<?php

namespace AppBundle\Translation\Loader;

use Symfony\Component\Translation\Loader\YamlFileLoader;

class FooFileLoader extends YamlFileLoader
{
    /**
     * {@inheritdoc}
     */
    public function load($resource, $locale, $domain = 'messages')
    {
        // ignoring $domain var and pass 'messages' instead
        return parent::load($resource, $locale, 'messages');
    }
}
