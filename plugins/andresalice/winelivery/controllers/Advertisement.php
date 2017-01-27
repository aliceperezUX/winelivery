<?php namespace Andresalice\Winelivery\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Advertisement extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'all' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Andresalice.Winelivery', 'content', 'advertisements');
    }
}