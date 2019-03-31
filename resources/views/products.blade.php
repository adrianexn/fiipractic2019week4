<h1>Products</h1>

@if($cart != null)
<div style="border: 1px solid red;">
    <a href="/cart/empty">Empty cart</a>
    @foreach($cart as $key => $product)
<p>{{$product}} <a href="/cart/remove/{{$key}}">x</a></p>
    @endforeach
</div>
@endif


@foreach($products as $product)
<div><a href="/cart/add/{{$product->id}}">{{$product->name}}</a></div>
@endforeach
