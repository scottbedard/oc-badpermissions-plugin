<?php namespace Bedard\BadPermissions\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Posts Back-end Controller
 */
class Posts extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = ['bedard.badpermission.access_posts'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Bedard.BadPermissions', 'badpermissions', 'posts');
    }
}
