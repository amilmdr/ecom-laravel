@extends('master')
@section('content')
<div class=" custom-product">
<div class="col-sm-10">
<div class="trending-wrapper">
  <h4>Result For Products<h4>
    <a href="ordernow" class="btn btn-sucess">Order Now</a>
    @foreach($products as $item)
  <div class=" row search-item cart-list-devider">
    <div class="col-sm-2">
    <a href="detail/{{$item->id}}">
      <img class ="trending-image" src="{{$item->gallery}}">
</a>
    </div>
    <div class="col-sm-2">
  <div class="">
    <h2>{{$item->name}}</h2>
    <h5>{{$item->description}}</h5>
  </div>
</div>
<div class="col-sm-2">
<a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove From  Cart</a>
</div>
    </div>
@endforeach
  </div>

</div>
</div>
    @endsection
