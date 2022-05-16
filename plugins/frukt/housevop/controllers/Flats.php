<?php namespace Frukt\Housevop\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Flats extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'admin' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Frukt.Housevop', 'main-menu-item', 'side-menu-item2');
    }
}
