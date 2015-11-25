@extends("app")
@section("content")
    <h1>Articles</h1>
    </hr>
    @foreach($articles as $article)
        <article style="border-bottom: 1px solid black;
                        margin: 10px 0;
                        padding: 5px;">
            <a href="{{ url("/articles", $article->id) }}"><h3>{{ $article->title }}</h3></a>
            <span class="publishedTime">{{ $article->published->diffForHumans() }}</span>
            <div class="articleBody">{{ $article->body }}</div>
        </article>
    @endforeach
@stop