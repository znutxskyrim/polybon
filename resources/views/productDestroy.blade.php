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
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
@include('navbar')
<!--@if (!$products->isEmpty())-->
@foreach ($products as $product)
    <td>{{$product->product_id}}</td>
    <td>{{$product->product_name}} Bath</td>
    <td>{{$product->description}} Unit</td>
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
