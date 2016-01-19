@extends("app")
@section("content")
    <h1>Article</h1>
    <div class="body">
    @foreach($articles as $article)
        <h2><a href="{{url('articles',$article->id)}}">{{$article->title}}</a></h2>
        <article>
        <p>{{$article->content}}</p>
        </article>
    @endforeach
    </div>
@stop