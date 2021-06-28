<tr>
    <th scope="row">#{{$mutation->id}}</th>
    <td>{{$mutation->detail_mutation}}</td>
    <td>Rp {{number_format($mutation->status_balance)}}</td>
    <td>Rp {{number_format($mutation->remain_balance)}}</td>
    <td>{{$mutation->date}}</td>
</tr>