@extends('layouts\master')
@section("content")
<div class="custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="trending-wrapper">
                <h4>We Found this: </h4>
                @foreach ($products as $item )
                <div class="searched-item">
                  <a href="detail/{{$item['id']}}">
                  <img class="trending-image" src="{{$item['gallery']}}">
                  <div class="">
                      <h2>{{$item['name']}}</h2>
                      <h5>{{$item['description']}}</h5>
                  </div>
              </a>
                  @endforeach
            </div>
    </div>
</div>
@endsection
