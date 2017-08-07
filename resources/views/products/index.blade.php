@extends('layouts/main')

@section('content')
    <div class="row content-container" >
        <div class="col-md-8 col-md-offset-2">
            <h2>Products</h2>
            @foreach($products as $product)
                <div class="well">
                    <div class="col-md-4">
                        <a href="{{ route('products.show', $product->sku) }}"><img src="{{URL::to('/')}}/img/products/{{$product->sku}}/thumb.jpg" alt="{{$product->sku}} thumbnail" /></a>
                    </div>
                    <div class="col-md-8">
                        <p><a href="{{ route('products.show', $product->sku) }}">{{$product->name}}</a></p>
                        <a href="#" class="btn btn-info cart-add" title="{{$product->sku}}">ADD TO CART</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop