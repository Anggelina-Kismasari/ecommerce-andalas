@extends('layout.home')

@section('title', 'Orders')

@section('content')
<!-- Page Title -->
<section class="page-title text-center bg-light">
    <div class="container relative clearfix">
        <div class="title-holder">
            <div class="title-text">
                <h1 class="uppercase">Shopping Cart</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="active">
                        Orders
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Orders -->
<section class="section-wrap checkout pb-70">
    <div class="container relative">
        <div class="row">
            <div class="ecommerce col-xs-12">

                <h2 style="margin-bottom: 20px;">My Orders</h2>
                <table class="shop_table cart table">
                    <thead>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Grand Total</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($orders as $index => $order)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$order->created_at}}</td>
                                <td>Rp. {{number_format($order->grand_total)}}</td>
                                <td>{{$order->status}}</td>
                                <td>
                                    <form action="/pesanan_selesai/{{$order->id}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success">SELESAI</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <h2 style="margin-top: 100px; margin-bottom: 20px;">My Payments</h2>
                <table class="shop_table cart table">
                    <thead>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nominal Transfer</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @foreach ($payments as $index => $payment)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$payment->created_at}}</td>
                                <td>Rp. {{number_format($payment->jumlah)}}</td>
                                <td>{{$payment->status}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div> <!-- end ecommerce -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end checkout -->
@endsection