<?php

namespace App\Http\Controllers;

use App\Traits\ApiRequester;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use ApiRequester;
    public function index()
    {
        $products = $this->request('GET', 'product', []);
        foreach ($products->product->data as $data) {
            $user = $this->request('GET', 'user/detail/' . $data->user_id, []);
            $data->store = $user->user->name;
        }
        return view('welcome', ['products' => $products]);
    }

    public function search(Request $request)
    {
        $query = [
            'search' => $request->q,
            'search_column' => $request->col ?? 'name',
            'order_by' => 'date',
            'order' => 'desc'
        ];
        $products = $this->request('GET', 'product', $query);
        foreach ($products->product->data as $data) {
            $user = $this->request('GET', 'user/detail/' . $data->user_id, []);
            $data->store = $user->user->name;
        }
        return view('pages.filter', ['products' => $products->product->data]);
    }
}
