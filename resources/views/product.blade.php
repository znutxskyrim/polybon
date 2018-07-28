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
<form class="form-inline form-group mb-2" action="/search">
    Search:&nbsp;
    <input list="search"name="search" placeholder="name or surname">
    <datalist id="search">
        @foreach ($products as $product)
            <option value="{{$product->product_id}}"></option>
            <option value="{{$product->product_name}}"></option>
        @endforeach
    </datalist>
    <input type="submit" value="search" class="btn btn-success">
</form>
<div>
    <a class="btn btn-success" href="/addproduct">New product</a>
</div>
<table class="table table-hover table-bordered" style="width:100%">
    <thead class="thead-light">
    <tr>
        <?php
        if(isset($order) && $order == 'ASC'){
        ?>
        <th scope="col"><a href="/sort/id/DESC">product_id</a></th>
        <th scope="col"><a href="/sort/name/DESC">product_name</a></th>
        <th scope="col">description</th>
        <?php
        }else{
        ?>
        <th scope="col"><a href="/sort/id/ASC">product_id</a></th>
        <th scope="col"><a href="/sort/name/ASC">product_name</a></th>
        <th scope="col">description</th>
        <?php
        }
        ?>
    </tr>
    </thead>
@foreach ($products as $product)
        <td>{{$product->product_id}} </td>
        <td>{{$product->product_name}} Bath</td>
        <td> {{$product->description}} Unit</td>
@endforeach
</table>
{!! Form::open(['route' => 'product.store'])!!}

{{Form::text('product_id')}}
{{Form::text('product_name')}}
{{Form::text('description')}}
{{Form::text('product_type_id', 'TNI-123')}}
{{Form::submit('Click me !')}}
{!! Form::close() !!}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>