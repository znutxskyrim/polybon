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