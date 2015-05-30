<?php namespace Bedard\BadPermissions;

use Backend;
use System\Classes\PluginBase;

/**
 * BadPermissions Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Bad Permissions',
            'description' => 'No description provided yet...',
            'author'      => 'Scott Bedard',
            'icon'        => 'icon-ban'
        ];
    }

    /**
     * Register plugin navigation
     *
     * @return  array
     */
    public function registerNavigation()
    {
        return [
            'badpermissions' => [
                'label'       => 'Bad Permissions',
                'url'         => Backend::url('bedard/badpermissions/posts'),
                'icon'        => 'icon-ban',
                'permissions' => ['bedard.badpermissions.*'],
                'order'       => 100,

                'sideMenu' => [
                    'posts' => [
                        'label'         => 'Posts',
                        'icon'          => 'icon-file-o',
                        'url'           => Backend::url('bedard/badpermissions/posts'),
                        'permissions'   => ['bedard.badpermissions.access_posts'],
                    ],
                    'categories' => [
                        'label'         => 'Categories',
                        'icon'          => 'icon-folder-o',
                        'url'           => Backend::url('bedard/badpermissions/categories'),
                        'permissions'   => ['bedard.badpermissions.access_categories'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Register user permissions
     *
     * @return  array
     */
    public function registerPermissions()
    {
        return [
            'bedard.badpermissions.access_posts' => [
                'tab'   => 'Bad Permissions',
                'label' => 'Access posts (this is where the bug is, block this)',
            ],
            'bedard.badpermissions.access_categories' => [
                'tab'   => 'Bad Permissions',
                'label' => 'Access categories',
            ],
        ];
    }
}
