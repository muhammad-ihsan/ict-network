<?php namespace Web\Base;

use Backend;
use System\Classes\PluginBase;

/**
 * Base Plugin Information File
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
            'name'        => 'Base',
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
            'Web\Base\Components\BaseBlock'       => 'BaseBlock',
            'Web\Base\Components\BaseBlockDetail' => 'BaseBlockDetail',
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
            'web.base.some_permission' => [
                'tab' => 'Base',
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
            'base' => [
                'label'       => 'Base',
                'url'         => Backend::url('web/base/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['web.base.*'],
                'order'       => 500,
            ],
        ];
    }
}
