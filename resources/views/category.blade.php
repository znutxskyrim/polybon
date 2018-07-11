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

@foreach ($categories as $category)
    <li>{{$category->product_id}} || {{$category->price}} Bath || {{$category->quantity}} Unit</li>
@endforeach