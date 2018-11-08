<?php namespace Web\Admin\Components;

use Cms\Classes\ComponentBase;

use Ict\Network\Models\Status;

class AdminStatus extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'AdminStatus Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getAll()
    {
        return Status::orderBy('name')->get();
    }
}
