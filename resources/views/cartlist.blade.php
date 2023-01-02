@extends('master')
@section("content")
<div class="custom-product">
     
     <div class="col-sm-10">
     <div class="trending-wrapper">
<h3 class="">Result for Products</h3>
<a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
@foreach($products as $item)
    <div class="row searched-item cart-list-divider">
      <div class="col-sm-3">
      <a href="detail/{{$item->id}}">
      <img class="trending-image" src="{{$item->gallery}}">
    </a>
    </div>

      <div class="col-sm-4">
        <div class="">
    <h3>{{$item->name}}</h3>
    <h4>{{$item->description}}</h4>
    </div>
  </div>

      <div class="col-sm-3">
<a href="/removecart/{{$item->cart_id}}">
  <button class="btn btn-warning">
        Remove From Cart</button></a>
      

    </div>
    </div>
    @endforeach
  </div>
  <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>

</div>
</div>
@endsection 