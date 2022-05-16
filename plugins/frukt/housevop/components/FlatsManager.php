<?php namespace Frukt\Housevop\Components;

use Cms\Classes\ComponentBase;
use Frukt\Housevop\Models\Flat;

/**
 * FlatsManager Component
 */
class FlatsManager extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Квартиры',
            'description' => 'Показывает квартиры...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['flats'] = Flat::where('is_active', 1)->get();
    }
}
