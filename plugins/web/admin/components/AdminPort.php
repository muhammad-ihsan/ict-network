<?php namespace Web\Admin\Components;

use Cms\Classes\ComponentBase;

use Ict\Network\Models\Port;

class AdminPort extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'AdminPort Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getAll()
    {
        return Port::orderBy('name', 'asc')->get();
    }
}
