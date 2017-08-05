@extends('layouts/main')

@section('content')
<div class="container-fluid">
    <div class="row content-container" >
        <div class="col-md-8 col-md-offset-2">
            <h2>{{$product->name}}</h2>

            <p>{{$product->description}}</p>

            <img src="{{URL::to('/')}}/img/products/{{$product->sku}}/main1.jpg" alt="{{$product->sku}} image" width="500"/>

            @if(count($product->details) )
                <ul>
                    @foreach($product->details as $detail)
                        <li>{{$detail->description}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
@stop