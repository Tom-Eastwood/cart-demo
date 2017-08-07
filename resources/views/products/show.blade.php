@extends('layouts/main')

@section('content')
<div class="row content-container" >
    <div class="col-md-8 col-md-offset-2">
        <div class="well">
            <div class="col-md-6">
                <img src="{{URL::to('/')}}/img/products/{{$product->sku}}/main1.jpg" alt="{{$product->sku}} image" width="500"/>
            </div>
            <div class="col-md-6">
                <h2>{{$product->name}}</h2>

                <p>{{$product->description}}</p>

                @if(count($product->details) )
                    <ul>
                        @foreach($product->details as $detail)
                            <li>{{$detail->description}}</li>
                        @endforeach
                    </ul>
                @endif

                <a href="#" class="btn btn-info cart-add" title="{{$product->sku}}">ADD TO CART</a>
            </div>
        </div>
    </div>
</div>
@stop