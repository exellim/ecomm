@extends('layouts\master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Return</a>
            <h2>{{$product['name']}}</h2>
            <h3>Price: Rp. {{$product['price']}}</h3>
            <h4>Category: {{$product['category']}}</h4>
            <h4>Details:</h4>
            <br>
            <p>{{$product['description']}}</p>
            <br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="btn btn-primary">Add to Cart</button>
                <br><br>
                <button class="btn btn-success">Buy Now!</button>
            </form>
        </div>
    </div>
</div>
@endsection
