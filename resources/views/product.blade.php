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

@foreach ($products as $product)
    <li>{{$product->product_id}} || {{$product->product_name}} Bath || {{$product->description}} Unit</li>
@endforeach