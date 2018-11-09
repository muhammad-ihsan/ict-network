<?php namespace Web\User\Components;

use Flash;
use Session;
use Redirect;

use Cms\Classes\ComponentBase;

use Ict\User\Models\User;

class IsUser extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'IsUser Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $user = Session::get('userLogin');
        if(!$user) {
            Flash::error('Terjadi kesalahan');
            return Redirect::to('/login');
        }

        $user = User::find($user->id)->first();
        $this->page['userLogin'] = $user;
    }
}
