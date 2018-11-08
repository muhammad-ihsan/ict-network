<?php namespace Web\Admin\Components;

use Cms\Classes\ComponentBase;

use Ict\Location\Models\Location;

class AdminLocation extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'AdminLocation Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getAll()
    {
        return Location::orderBy('name', 'asc')->get();
    }
}
