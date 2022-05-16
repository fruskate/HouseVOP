<?php namespace Frukt\Housevop;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Frukt\Housevop\Components\AppealsManager' => 'appealsManager',
            'Frukt\Housevop\Components\FlatsManager' => 'flatsManager'
        ];
    }

    public function registerSettings()
    {
    }
}
