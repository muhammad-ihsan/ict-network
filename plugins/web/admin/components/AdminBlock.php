<?php namespace Web\Admin\Components;

use Flash;
use Redirect;
use Validator;

use Cms\Classes\ComponentBase;

use Ict\Network\Models\Block;

class AdminBlock extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'AdminBlock Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onSave()
    {
        $rules = [
            'computer'   => 'required',
            'switch'     => 'required',
            'name'       => 'required',
            'started_at' => 'date',
        ];
        $messages = [];
        $attributeNames = [
            'computer'   => 'ip komputer',
            'switch'     => 'ip switch',
            'name'       => 'nama pengguna',
            'started_at' => 'tanggal',
        ];

        $validator = Validator::make(post(), $rules, $messages, $attributeNames);
        if ($validator->fails()) {
            Flash::error($validator->messages()->first());
            return;
        }

        $block              = new Block;
        $block->location_id = post('location_id');
        $block->status_id   = post('status_id');
        $block->computer    = post('computer');
        $block->switch      = post('switch');
        $block->name        = post('name');
        $block->reason      = post('reason');
        $block->started_at  = post('started_at') ? post('started_at') : now();
        $block->save();
    }
}
