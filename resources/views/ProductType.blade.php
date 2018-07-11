<!--
  $type->product_type_id
  $type->description

   ** Note $type->product is array.
  $type->product[0]->product_id
  $type->product[0]->product_name
  $type->product[0]->description
  $type->product[0]->product_type_id
-->

@foreach ($types as $type)
    <li>{{$type->product_type_id}} || {{$type->description}} Unit</li>
@endforeach