<?php namespace LuisMayta\Web;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'LuisMayta\Web\Components\Midata' => 'Midata',
        ];
    }

    public function registerSettings()
    {
    }
}
