@extends('layouts/main')

@section('content')
<div class="container-fluid">
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
                        <img src="{{URL::to('/')}}/img/products/{{$item}}/thumb.jpg" alt="{{$item}} thumbnail" />
                        <h3>{{$item}}</h3>
                        <a href="#" class="btn btn-danger cart-destroy" title="{{$key}} ">REMOVE FROM CART</a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@stop