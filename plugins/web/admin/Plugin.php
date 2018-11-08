<?php namespace Web\Admin;

use Backend;
use System\Classes\PluginBase;

/**
 * Admin Plugin Information File
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
            'name'        => 'Admin',
            'description' => 'No description provided yet...',
            'author'      => 'Web',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        // return []; // Remove this line to activate

        return [
            'Web\Admin\Components\AdminLocation'       => 'AdminLocation',
            'Web\Admin\Components\AdminLocationDetail' => 'AdminLocationDetail',
            'Web\Admin\Components\AdminPort'           => 'AdminPort',
            'Web\Admin\Components\AdminPortDetail'     => 'AdminPortDetail',
            'Web\Admin\Components\AdminStatus'         => 'AdminStatus',
            'Web\Admin\Components\AdminStatusDetail'   => 'AdminStatusDetail',
            'Web\Admin\Components\AdminBlock'          => 'AdminBlock',
            'Web\Admin\Components\AdminBlockDetail'    => 'AdminBlockDetail',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'web.admin.some_permission' => [
                'tab' => 'Admin',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'admin' => [
                'label'       => 'Admin',
                'url'         => Backend::url('web/admin/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['web.admin.*'],
                'order'       => 500,
            ],
        ];
    }
}
