@extends('layouts.default')

@section('content')
<div class="container mt-3">
    <h3>Sales</h3>
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Pic</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Quantity</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $order)
            @include('components.account.sales-list-row', ['order' => $order])
            @endforeach
        </tbody>
    </table>
</div>
<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kirim Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Resi:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a class="btn btn-primary" href="#" id="submit-btn">Kirim</a>
            </div>
        </div>
    </div>
</div>

<script>
    var exampleModal = document.getElementById('exampleModal')
    exampleModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget
        var recipient = button.getAttribute('data-bs-product')
        var submitButton = exampleModal.querySelector('#submit-btn')

        submitButton.href = '/my-account/order/update/' + recipient + '/dikirim'
    })
</script>
@endsection