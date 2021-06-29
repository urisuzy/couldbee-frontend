<?php

namespace App\Http\Controllers;

use App\Traits\ApiRequester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProductController extends Controller
{
    use ApiRequester;
    public function product($id)
    {
        $product = $this->request('GET', 'product/detail/' . $id, []);
        $user = $this->request('GET', 'user/detail/' . $product->product->user_id, []);

        if (!empty(Cookie::get('user_id'))) {
            $userAuth = $this->request('GET', 'user/detail/' . Cookie::get('user_id'), []);
        }
        return view('product', ['product' => $product->product, 'user' => $user->user, 'userAuth' => $userAuth->user ?? []]);
    }
}
