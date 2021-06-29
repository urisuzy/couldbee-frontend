<?php

namespace App\Http\Controllers;

use App\Traits\ApiRequester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class BalanceController extends Controller
{
    use ApiRequester;
    public function index()
    {
        $mutation = $this->request('GET', 'mutations/' . Cookie::get('user_id'), []);
        return view('pages.my-account.balance', ['mutation' => $mutation->mutation->data]);
    }

    public function deposit(Request $request)
    {
        $this->request('POST', 'balance/increase', ['user_id' => Cookie::get('user_id'), 'total' => $request->total_price]);

        $this->request('POST', 'mutation/store', [
            'user_id' => $request->cookie('user_id'),
            'status_balance' => +$request->total_price,
            'remain_balance' => Cookie::get('balance') + $request->total_price,
            'detail_mutation' => 'Penambahan balance dari deposit',
            'date' => date("Y-m-d H:i:s")
        ]);

        Cookie::queue(Cookie::make('balance', $request->cookie('balance') + $request->total_price, 525600));
        return back()->withCookie('balance', $request->cookie('balance') + $request->total_price, 525600);
    }
}
