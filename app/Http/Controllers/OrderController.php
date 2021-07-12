<?php

namespace App\Http\Controllers;

use App\Traits\ApiRequester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class OrderController extends Controller
{
    use ApiRequester;
    public function buy($id)
    {
        $product = $this->request('GET', 'product/detail/' . $id, []);
        $user = $this->request('GET', 'user/detail/' . Cookie::get('user_id'), []);
        $balance = $this->request('GET', 'balance/detail/' . Cookie::get('user_id'), []);
        $ongkir = 27000;

        return view('pages.order.buy', [
            'product' => $product->product,
            'user' => $user->user,
            'balance' => $balance->balance,
            'ongkir' => $ongkir,
            'buyable' => $balance->balance->balance - ($product->product->price + $ongkir) > 0 ? true : false
        ]);
    }


    public function confirmation(Request $request)
    {
        $balance = $this->request('GET', 'balance/detail/' . $request->cookie('user_id'), []);
        $product = $this->request('GET', 'product/detail/' . $request->product_id, []);

        if (!empty($balance->balance) && !empty($product->product) && $balance->balance->balance > $product->product->price + 27000) {
            $decrease = $this->request('POST', 'balance/decrease', ['user_id' => $request->user_id, 'total' => $product->product->price + 27000]);
            if ($decrease->balance) {
                $confirm = $this->request('POST', 'transaction/tambah', [
                    'quantity' => $request->quantity,
                    'user_id' => $request->user_id,
                    'seller_id' => $request->seller_id,
                    'total_price' => $request->total_price,
                    'product_id' => $request->product_id,
                    'date' => $request->date,
                    'status' => $request->status
                ]);
                $this->request('POST', 'mutation/store', [
                    'user_id' => $request->user_id,
                    'status_balance' => -$product->product->price + 27000,
                    'remain_balance' => Cookie::get('balance') - $request->total_price,
                    'detail_mutation' => 'Pengurangan balance digunakan untuk membeli sebuah produk',
                    'date' => date("Y-m-d H:i:s")
                ]);
            }
        } else {
            return back();
        }
        Cookie::queue(Cookie::make('balance', $request->cookie('balance') - $request->total_price, 525600));
        return view('pages.order.success-buy');
    }

    public function listOrders(Request $request)
    {
        $transactions = $this->request('GET', 'transaction/' . Cookie::get('user_id') . '/buyer', []);

        foreach ($transactions->transaction->data as $order) {
            $order->product = $this->request('GET', 'product/detail/' . $order->product_id, [])->product;
        }

        return view('pages.my-account.my-orders.list', [
            'transactions' => $transactions->transaction->data
        ]);
    }

    public function updateOrder($id, $status)
    {
        $this->request('POST', 'transaction/update', ['id' => $id, 'status' => $status]);
        $tran = $this->request('GET', 'transaction/detail/' . $id, []);
        if ($status == 'selesai') {
            $this->request('POST', 'balance/increase', ['user_id' => $tran->transaction->seller_id, 'total' => $tran->transaction->total_price]);
        }

        return back();
    }
}
