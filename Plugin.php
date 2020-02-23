<?php
namespace Kanboard\Plugin\WeKanboard;
use Kanboard\Core\Plugin\Base;
class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on('template:layout:css', array('template' => 'plugins/WeKanboard/WeKanboard.css'));
    }

    public function getPluginName()
    {
        return 'WeKanboard';
    }

    public function getPluginDescription()
    {
        return t('Yet another theme for Kanboard. Strongly inspired by the style of Wekan. Supports the Customizer plugin.');
    }

    public function getPluginAuthor()
    {
        return 'Benno Waldhauer';
    }

    public function getPluginVersion()
    {
        return '1.0.2';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/bw-hro/WeKanboard';
    }

    public function getCompatibleVersion()
    {
        return '>=1.2.11';
    }
}
