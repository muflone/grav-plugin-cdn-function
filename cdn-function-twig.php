<?php
namespace Grav\Plugin;
use Grav\Common\Grav;
use Grav\Common\Utils;
use Grav\Common\Twig\TwigExtension;

class CDN_Function_TwigExtension extends \Twig_Extension
{
    public function __construct()
    {
        $this->grav = Grav::instance();
        $this->config = $this->grav['config'];
    }

    /**
     * Returns extension name.
     *
     * @return string
     */
    public function getName()
    {
        return 'CDN_Function_TwigExtension';
    }

    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('cdn', [$this, 'cdn']),
        ];
    }

    public function cdn($url)
    {
        $prefix = !Utils::startsWith($url, '/') ? '/' : '';
        return $this->config->get('plugins.cdn-function.pullzone') . $prefix . $url;
    }
}
