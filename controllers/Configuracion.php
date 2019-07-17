<?php namespace LuisMayta\Web\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Configuracion extends Controller
{
    public $implement = [        'Backend\Behaviors\FormController'    ];
    
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('LuisMayta.Web', 'main-menu-item');
    }
    public function index()
    {
        $this->create('frontend');
        $this->pageTitle = 'Configuracion del sitio';
    }
}
