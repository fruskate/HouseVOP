<?php namespace Frukt\Housevop\Components;

use Cms\Classes\ComponentBase;
use Frukt\Housevop\Models\Appeal;

/**
 * AppealsManager Component
 */
class AppealsManager extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Форма обратной связи',
            'description' => 'Отображает форму с полем имени и телефона...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onSaveClientData()
    {
        $appeal = new Appeal();
        $appeal->name = post('name');
        $appeal->phone = post('telphone');
        $appeal->save();

        return [
            '#question' => $this->renderPartial($this."::make_answer")
        ];
    }
}
