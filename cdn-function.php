<?php
namespace Grav\Plugin;
use Grav\Common\Plugin;

class CDNFunctionPlugin extends Plugin
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
            'onTwigExtensions' => ['onTwigExtensions', 0],
        ];
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {
            return;
        }
    }

    public function onTwigExtensions()
    {
        require_once(__DIR__ . '/cdn-function-twig.php');
        $this->grav['twig']->twig->addExtension(new CDN_Function_TwigExtension());
    }
}
?>
