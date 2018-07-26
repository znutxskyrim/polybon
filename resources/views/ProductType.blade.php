<!--
  $type->product_type_id
  $type->description

   ** Note $type->product is array.
  $type->products[0]->product_id
  $type->products[0]->product_name
  $type->products[0]->description
  $type->products[0]->product_type_id
-->

@foreach ($types as $type)
    <li>{{$type->product_type_id}} || {{$type->description}} Unit</li>
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
