@inject('helper', \App\Helpers\Helper::class)
<tr>
    <th scope="row">{{$order->id}}</th>
    <td class="text-center"><img src="{{$order->product->picture}}" alt="" width="150px"></td>
    <td>{{$order->product->name}}</td>
    <td>Rp {{number_format($order->product->price)}}</td>
    <td>{{$order->quantity}}</td>
    <td>

        <span class="badge bg-{{$helper->statusColor($order->status)}}">{{ucfirst($order->status)}}</span>
    </td>
    <td>
        @if($order->status != 'dibayar' && $order->status != 'selesai')
        <a class="btn btn-success btn-sm" href="/my-account/order/update/{{$order->id}}/selesai">Selesai</a>
        @else
        No Action
        @endif
    </td>
</tr>