@extends('layouts\master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="trending-wrapper">
                <h4>My Order: </h4>
                @foreach ($orders as $item )
                <div class="row searched-item cart-list-divider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="detail/{{$item->id}}">
                            <div class="">
                                <h2>Name: {{$item->name}}</h2>
                                <h5>Status Pengiriman: {{$item->status}}</h5>
                                <h5>Alamat: {{$item->address}}</h5>
                                <h5>Status Pembayaran: {{$item->payment_status}}</h5>
                                <h5>Metode Pembayaran: {{$item->payment_method}}</h5>
                            </div>
                        </a>
                    </div>
                </div>
                  @endforeach
            </div>
    </div>
</div>
@endsection
