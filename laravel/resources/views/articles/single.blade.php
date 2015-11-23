@extends("app")
@section("content")
    <h1>{{ $article->title }}</h1>
    </hr>
    <div class="backToArticles" style="float: right; clear: right;">
        <a href="{{ url("/articles") }}"><span class="backArrow"> << </span>Back To articles</a>
    </div>
    <article>
        <span class="publishedTime">{{ $article->published }}</span>
        <div class="articleBody">{{ $article->body }}</div>
    </article>
@stop