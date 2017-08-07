@extends('layouts/main')

@section('content')
<div class="row content-container" >
    <div class="col-md-8 col-md-offset-2">
    <h2>Cart Items</h2>

        @if(count($cart_items) == 0 )
            <div class="well">
                <h3>There are currently no items in your cart.</h3>
            </div>
        @else
            @foreach($cart_items as $key => $item)
                <div class="well">
                    <div class="col-md-4">
                        <img src="{{URL::to('/')}}/img/products/{{$item}}/thumb.jpg" alt="{{$item}} thumbnail" />
                    </div>
                    <div class="col-md-8">
                        <p>{{App\Product::getName($item)}}</p>
                        <a href="{{URL::to('/cart/destroy/')}}/{{$key}}" class="btn btn-danger">REMOVE FROM CART</a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@stop