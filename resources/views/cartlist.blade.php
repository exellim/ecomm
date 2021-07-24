@extends('layouts\master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="trending-wrapper">
                <h4>Item(s) in your cart: </h4>
                @foreach ($products as $item )
                <div class="row searched-item cart-list-divider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="detail/{{$item->id}}">
                            <div class="">
                                <h2>{{$item->name}}</h2>
                                <h5>{{$item->description}}</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-warning">Remove From cart</button>
                    </div>
                </div>
                  @endforeach
            </div>
    </div>
</div>
@endsection
