<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Traits\ApiRequester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    use ApiRequester;
    public function login(Request $request)
    {
        $login = $this->request('POST', 'auth/login', ['email' => $request->email, 'password' => $request->password]);

        if (isset($login->user) && $login->user) {
            $user = $this->request('GET', 'user/detail/' . $login->user->id, []);
            $balance = $this->request('GET', 'balance/detail/' . $login->user->id, []);

            return redirect('/')->withCookies([
                cookie('user_id', $login->user->id, 525600),
                cookie('email', $login->user->email, 525600),
                cookie('name', explode(' ', trim($user->user->name))[0], 525600),
                cookie('balance', $balance->balance->balance, 525600),
            ]);
        }

        return back()->withErrors(['error' => 'email atau kata sandi salah!']);
    }

    public function logout()
    {
        Cookie::queue(Cookie::forget('user_id'));
        Cookie::queue(Cookie::forget('email'));
        Cookie::queue(Cookie::forget('name'));
        Cookie::queue(Cookie::forget('balance'));

        return redirect('/');
    }

    public function register(RegisterRequest $request)
    {
        //try {
        $form = $request->all();
        unset($form['_token']);
        $form['birthday'] = date("Y-m-d H:i:s", strtotime($form['birthday']));
        $register = $this->request('POST', 'auth/register', $form);

        if ($register->user) {
            $balance = $this->request('POST', 'balance/decrease', ['user_id' => $register->user, 'total' => 0]);
            $user = $this->request('GET', 'user/detail/' . $register->user, []);
            $balance = $this->request('GET', 'balance/detail/' . $register->user, []);

            return redirect('/')->withCookies([
                cookie('user_id', $user->user->id, 525600),
                cookie('email', $user->user->email, 525600),
                cookie('name', explode(' ', trim($user->user->name))[0], 525600),
                cookie('balance', $balance->balance->balance, 525600),
            ]);
        }
        //} catch (\Exception $e) {
        //    return back()->withErrors(['email sudah ada, silahkan login!']);
        //}
    }
}
