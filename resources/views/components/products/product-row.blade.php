@inject('helper', \App\Helpers\Helper::class)
<tr>
    <td class="text-center"><img src="{{$product->picture}}" alt="" width="150px"></td>
    <td>
        <b><a href="/product/{{$product->id}}" class="text-decoration-none">{{$product->name}}</a></b>
        <p class="mt-2">
            <i class="fas fa-money-bill"></i> Rp {{number_format($product->price)}}<br>
            <i class="fas fa-list"></i> {{$product->category}}<br>
            Description: <br>
            {{$product->description}}
        </p>
    </td>
    <td>{{number_format($product->stock)}}</td>
    <td>
        <a class="btn btn-info btn-sm mb-1" href="/my-store/product/{{$product->id}}/edit">Edit</a>
        <a class="btn btn-danger btn-sm mb-1" href="/my-store/product/{{$product->id}}/delete">Delete</a>
    </td>
</tr>