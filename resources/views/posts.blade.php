<h1>Posts</h1>

@foreach($posts as $post)
<div>
    <h2>{{$post->title}}</h2>
    <p>{{$post->body}}</p>
    <p>{{$post->user->name}} ({{$post->user->email}})</p>
    <p>{{$post->created_at}}</p>
</div>
@endforeach
