<?php

namespace Haffoudhi\Silex; 

use Silex\Application;
use Silex\ServiceProviderInterface;

/**
 * SimpleHtmlDomService Provider.
 *
 * @author Haffoudhi Med Tayeb <haffoudhimedtaieb@gmail.com>
 */
class SimpleHtmlDomServiceProvider implements ServiceProviderInterface
{
    /**
     * @{inheritDoc}
     */
    public function register(Application $app)
    {
        $app['simpleHtmlDom.class']  = 'Haffoudhi\SimpleHtmlDom\Simple';

        $app['simpleHtmlDom'] = $app->share(function() use ($app) {

            $simpleHtmlDome = new $app['simpleHtmlDom.class'];

            return $simpleHtmlDome;
        });

    }

    /**
     * @{inheritDoc}
     */
    public function boot(Application $app)
    {
    }
}
