@extends('layouts/main')

@section('content')
<div class="container-fluid">
    <div class="row content-container" >
        <div class="col-md-8 col-md-offset-2">
        <h2>Products</h2>

            @foreach($products as $product)
                <div class="well">
                    <img src="{{URL::to('/')}}/img/products/{{$product->sku}}/thumb.jpg" alt="{{$product->sku}} thumbnail" />
                    <h3>{{$product->name}}</h3>
                    <a href="" class="btn btn-info">ADD TO CART</a>
                    <a href="{{ route('products.show', $product->sku) }}" class="btn btn-success">VIEW</a>

                </div>
            @endforeach
        </div>
    </div>
</div>
@stop