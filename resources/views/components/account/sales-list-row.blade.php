@inject('helper', \App\Helpers\Helper::class)
<tr>
    <th scope="row">{{$order->id}}</th>
    <td class="text-center"><img src="{{$order->product->picture}}" alt="" width="150px"></td>
    <td>
        <b>{{$order->product->name}}</b>
        <p class="mt-2">
            Nama: {{$order->user->name}}
            <br>
            Alamat: {{$order->user->address}}
        </p>
    </td>
    <td>Rp {{number_format($order->product->price)}}</td>
    <td>{{$order->quantity}}</td>
    <td>

        <span class="badge bg-{{$helper->statusColor($order->status)}}">{{ucfirst($order->status)}}</span>
    </td>
    <td>
        @if($order->status == 'dibayar')
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-product="{{$order->id}}">Kirim</button>
        @else
        No Action
        @endif
    </td>
</tr>