<!--
  $category->product_id
  $category->quantity
  $category->price

  $category->product->product_id
  $category->product->product_name
  $category->product->description
  $category->product->product_type_id

  $category->product->type->product_type_id
  $category->product->type->description
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
        @foreach ($types as $type)
            <option value="{{$type->product_type_id}}"></option>
            <option value="{{$type->description}}"></option>
        @endforeach
    </datalist>
    <input type="submit" value="search" class="btn btn-success">
</form>
<table class="table table-hover table-bordered" style="width:100%">
    <thead class="thead-light">
    <tr>
        <?php
        if(isset($order) && $order == 'ASC'){
        ?>
            <th scope="col"><a href="/sort/id/DESC">product_type_id</a></th>
            <th scope="col"><a href="/sort/price/DESC">price</a></th>
            <th scope="col"><a href="/sort/quan/DESC">quantity</a></th>
        <th scope="col">description</th>
        <?php
        }else{
        ?>
            <th scope="col"><a href="/sort/id/ASC">product_type_id</a></th>
            <th scope="col"><a href="/sort/price/ASC">price</a></th>
            <th scope="col"><a href="/sort/quan/ASC">quantity</a></th>
            <th scope="col">description</th>
        <?php
        }
        ?>
    </tr>
    </thead>
</table>
@foreach ($categories as $category)
    <td>{{$category->product_id}} </td>
    <td>{{$category->price}} Bath </td>
    <td>{{$category->quantity}} Unit</td>
@endforeach
</body>