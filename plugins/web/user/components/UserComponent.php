<?php namespace Web\User\Components;

use Hash;
use Flash;
use Redirect;
use Validator;
use Session;

use Cms\Classes\ComponentBase;

use Ict\User\Models\User;

class UserComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'UserComponent Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onLogin()
    {
       $rules           = [
            'email'    => 'required|email',
            'password' => 'required',
        ];
        $messages       = [];
        $attributeNames = [
            'email'    => 'email',
            'password' => 'password',
        ];

        $validator = Validator::make(post(), $rules, $messages, $attributeNames);
        if ($validator->fails()) {
            Flash::error($validator->messages()->first());
            return;
        }

        $user = User::whereEmail(post('email'))->first();
        if($user) {
            if(Hash::check(post('password'), $user->password)) {
                Session::set('userLogin', $user);
                Flash::success('Selamat datang '.$user->email);
                return Redirect::to('/admin/dashboard');
            }

            Flash::error('Password tidak sesuai');
            return;
        }

        Flash::error('Pengguna tidak ditemukan');
        return;
    }

    public function onLogout()
    {
        $user = Session::get('userLogin');
        if($user) {
            Session::forget('userLogin');
            Flash::success('Berhasil keluar');
            return Redirect::to('/');
        }
    }
}
