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
</head><body>
<div class="container">
    <h1>Category</h1>
    <form class="form-inline form-group mb-2" action="/search">
        Search:&nbsp;
        <input list="search"name="search" placeholder="product_id ">
        <input type="submit" value="search" class="btn btn-success">
    </form>
    <div>
        <a class="btn btn-success" href="/">New Product</a>
    </div>
@foreach ($categories as $category)
    <li>{{$category->product_id}} || {{$category->price}} Bath || {{$category->quantity}} Unit</li>
@endforeach
</body>