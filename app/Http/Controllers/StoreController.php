<?php

namespace App\Http\Controllers;

use App\Traits\ApiRequester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class StoreController extends Controller
{
    use ApiRequester;
    public function listSales()
    {
        $transactions = $this->request('GET', 'transaction/' . Cookie::get('user_id') . '/seller', []);

        foreach ($transactions->transaction->data as $order) {
            $order->product = $this->request('GET', 'product/detail/' . $order->product_id, [])->product;
            $order->user = $this->request('GET', 'user/detail/' . $order->user_id, [])->user;
        }

        return view('pages.store.sales.list', [
            'transactions' => $transactions->transaction->data
        ]);
    }

    public function listProducts()
    {
        $products = $this->request('GET', 'product', ['userid' => Cookie::get('user_id')]);

        return view('pages.store.my-product.list', [
            'products' => $products->product->data
        ]);
    }

    public function addProduct(Request $request)
    {
        $confirm = $this->request('POST', 'product/store', [
            'name' => $request->name,
            'price' => $request->price,
            'picture' => $request->picture,
            'description' => $request->description,
            'stock' => $request->stock,
            'category' => $request->category,
            'userid' => Cookie::get('user_id'),
            'date' => date("Y-m-d H:i:s")
        ]);

        if (!$confirm->product) return back();
        return redirect('/my-store/products');
    }

    public function deleteProduct($id)
    {
        $confirm = $this->request("DELETE", 'product/delete/' . $id, []);

        if (!$confirm->product) return back();
        return back();
    }

    public function viewEdit($id)
    {
        $product = $this->request('GET', 'product/detail/' . $id, []);

        return view('pages.store.my-product.edit', ['product' => $product->product]);
    }

    public function updateProduct(Request $request)
    {
        $this->request('POST', 'product/update', [
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'picture' => $request->picture,
            'description' => $request->description,
            'stock' => $request->stock,
            'category' => $request->category,
            'userid' => Cookie::get('user_id'),
            'date' => date("Y-m-d H:i:s")
        ]);
        return back();
    }
}
