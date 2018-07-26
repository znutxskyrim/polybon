<!--
  $product->product_id
  $product->product_name
  $product->description
  $product->product_type_id

  $product->category->product_id
  $product->category->quantity
  $product->category->price

  $product->type->product_type_id
  $product->type->description
-->
@if (!$products->isEmpty())
@foreach ($products as $product)
    <li>{{$product->product_id}} || {{$product->product_name}} Bath || {{$product->description}} Unit</li>
@endforeach
{!! Form::open(['route' => ['product.destroy',$products[0]->product_id],'method'=>'delete'])!!}

{{Form::text('product_id')}}
{{Form::text('product_name')}}
{{Form::text('description')}}
{{Form::text('product_type_id', 'TNI-123')}}
{{Form::submit('Click me !')}}
{!! Form::close() !!}

@else
    hello
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
