<?php namespace Web\Admin\Components;

use Flash;
use Redirect;
use Validator;

use Cms\Classes\ComponentBase;

use Ict\Network\Models\Block;
use Ict\Network\Models\BlockPort;

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

    public function getAll()
    {
        return Block::orderBy('created_at', 'desc')->get();
    }

    public function onSave()
    {
        $rules = [
            'computer'   => 'required',
            'switch'     => 'required',
            'user'       => 'required',
            'started_at' => 'date',
        ];
        $messages = [];
        $attributeNames = [
            'computer'   => 'ip komputer',
            'switch'     => 'ip switch',
            'user'       => 'nama pengguna',
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
        $block->name        = post('user');
        $block->reason      = post('reason');
        $block->started_at  = post('started_at') ? post('started_at') : date('Y-m-d H:i:s');
        $block->save();

        if(post('port')) {
            for ($i=0; $i < count(post('port')) ; $i++) {
                $blockPort           = new BlockPort;
                $blockPort->block_id = $block->id;
                $blockPort->port_id  = post('port')[$i];
                $blockPort->save();
            }
        }

        Flash::success('Block berhasil disimpan');
        return Redirect::refresh();
    }
}
