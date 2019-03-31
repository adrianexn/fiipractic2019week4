<h1>{{$user->name}}</h1>
Posts:<br/>
@foreach($user->posts as $post)
<a href="/post/{{$post->id}}">{{$post->title}}</a><br/>
@endforeach
<br/><br/>
Orders:<br/>
@foreach($user->orders as $order)
<a href="/order/{{$order->id}}">Order #{{$order->id}}</a>
<div style="border: 1px solid #ccc;">
    @foreach($order->products as $product)
    <p>- {{$product->name}}</p>
    @endforeach
</div>
<br/>
@endforeach
