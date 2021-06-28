<?php

namespace App\Http\Controllers;

use App\Traits\ApiRequester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AccountController extends Controller
{
    use ApiRequester;
    public function viewEdit()
    {
        $user = $this->request('GET', 'user/detail/' . Cookie::get('user_id'), []);
        return view('pages.my-account.setting', ['user' => $user->user]);
    }
    public function updateUser(Request $request)
    {
        $this->request('PUT', 'user/update', [
            'id' => $request->cookie('user_id'),
            'name' => $request->name,
            'address' => $request->address,
            'notelp' => $request->notelp,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
        ]);
        $user = $this->request('GET', 'user/detail/' . Cookie::get('user_id'), []);
        return view('pages.my-account.setting', ['user' => $user->user]);
    }
}
