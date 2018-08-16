<!--
  $type->product_type_id
  $type->description

   ** Note $type->product is array.
  $type->products[0]->product_id
  $type->products[0]->product_name
  $type->products[0]->description
  $type->products[0]->product_type_id
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
<div>
    <a class="btn btn-success" href="/addproduct">New Type</a>
</div>
<table class="table table-hover table-bordered" style="width:100%">
    <thead class="thead-light">
    <tr>
        <?php
        if(isset($order) && $order == 'ASC'){
        ?>
        <th scope="col"><a href="/sort/id/DESC">product_type_id</a></th>
        <th scope="col">description</th>
        <?php
        }else{
        ?>
        <th scope="col"><a href="/sort/id/ASC">product_type_id</a></th>
        <th scope="col">description</th>
        <?php
        }
        ?>
    </tr>
    </thead>
</table>
@foreach ($types as $type)
    <td>{{$type->product_type_id}}</td>
    <td>{{$type->description}} Unit</td>
@endforeach
{!! Form::open(['route' => ['producttype.update',$types[0]->product_type_id],'method'=>'PUT'])!!}

{{Form::text('product_type_id')}}
{{Form::text('description')}}
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