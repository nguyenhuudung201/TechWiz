@extends('admins.layouts.app')
@section('content')
<div class="container-xl px-4 mt-n10">
    <div class="row">
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">List Order</div>
                <div class="card-body">

<h2 class="mb-4">Orders</h2>
    <h4 class="text-dange">Total Orders:
        {{ $countorders }}
    </h4>
    <table class="table">
        <tr>

            <th>Id</th>
            <th>Customer Id</th>
            <th>Bill</th>
            <th>Status</th>
            <th>Date</th>
        </tr>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->customer_id }}</td>
                <td>${{ $order->bill }}</td>
                <td>
                    <div class="badge bg-warning rounded-pill">{{ $order->status }}</div>

                </td>
                <td>{{ $order->created_at }}</td>
            </tr>
        @endforeach
    </table>

</div>
</div>
</div>
</div>
</div>

@endsection
