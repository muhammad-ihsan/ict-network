<?php namespace Ict\Network;

use Backend;
use System\Classes\PluginBase;

/**
 * Network Plugin Information File
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
            'name'        => 'Network',
            'description' => 'No description provided yet...',
            'author'      => 'Ict',
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
        return []; // Remove this line to activate

        return [
            'Ict\Network\Components\MyComponent' => 'myComponent',
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
            'ict.network.some_permission' => [
                'tab' => 'Network',
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
            'network' => [
                'label'       => 'Network',
                'url'         => Backend::url('ict/network/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['ict.network.*'],
                'order'       => 500,
            ],
        ];
    }
}
