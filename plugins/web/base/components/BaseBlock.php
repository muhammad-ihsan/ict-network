<?php namespace Web\Base\Components;

use Cms\Classes\ComponentBase;

use Ict\Network\Models\Block;

class BaseBlock extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'BaseBlock Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['blocks'] = Block::orderBy('created_at', 'desc')->get();
    }
}
